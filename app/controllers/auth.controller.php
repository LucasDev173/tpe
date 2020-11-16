<?php

include_once 'app/view/auth.view.php';
include_once 'app/models/user.model.php';
include_once 'app/view/books.view.php';
include_once 'app/models/books.model.php';
include_once 'app/models/category.model.php';
include_once 'app/models/user.model.php';
include_once 'app/helpers/auth.helper.php';

class AuthController {

    private $view;
    private $model;
    private $booksView;
    private $booksModel;
    private $categoryModel;
    private $usarModel;
    private $authHelper;
    
    function __construct(){
        //el modelo y la view de los libros ahora tienen el nombre
        //de booksView y booksModel, adapte el resto del control 
        //para que funcionara bien con estos cambios
        $this->view = new AuthView();
        $this->model = new UserModel();
        $this->booksView = new BooksView();
        $this->booksModel = new BooksModel();
        $this->categoryModel = new CategoryModel();
        $this->userModel = new UserModel();
        $this->authHelper = new AuthHelper();
    }

    function showMenuAdmin(){
        $libros = $this->booksModel->getAll();
        $categorias = $this->categoryModel->getAll();
        $usuarios = $this->userModel->getAll();
        $this->booksView->showMenuAdmin($libros, $categorias, $usuarios);
    }

    function eliminar_libro($id) {
        $libros = $this->booksModel->remove($id);
        $this->booksView->showMenuAdmin($libros);
    }
    
    function showLogin(){
        $this->view->showLogin();
    }

    function showRegister(){
        $this->view->showRegister();
    }

    function verifyRegister(){
        $username = $_POST['username'];
        $password = $_POST['password'];

        //usa el nombre dado por el usuario y lo busca en la base de datos
        //si el usuario ya existe, detiene la operacion y da un error
        $usernameCheck = $this->model->getByUsername($username);
        if (empty($usernameCheck)){
            //hashea la contraseña con bcrypt
            $password = password_hash($password, PASSWORD_DEFAULT);
            $this->model->registerNewUser($username, $password);
            //loggea al usuario con el mismo post
            $this->loginUser();
        }
        else{
            $this->view->showRegister("¡Error! Su nombre ya se encuentra en uso. Elija otro nombre.");
        }
    }

    function loginUser(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $user = $this->model->getByUsername($username);
        
        if ($user && password_verify($password, $user->pass)) {
            //se inicia la sesion
            $this->authHelper->login($user);
            if($user->isadmin == 1){
                header("Location: " . BASE_URL . "menuAdmin"); 
            }
            else{
                header("Location: " . BASE_URL . "home"); 
            }
        } else {
            $this->view->showLogin("¡Error! Nombre o contraseña invalida.");
        }
    }

    function logoutUser(){
        $this->authHelper->logout();
    }
}
