<?php

include_once 'app/view/auth.view.php';
include_once 'app/models/user.model.php';
include_once 'app/view/books.view.php';
include_once 'app/models/books.model.php';
include_once 'app/models/category.model.php';
include_once 'app/helpers/auth.helper.php';

class AuthController {

    private $view;
    private $model;
    private $booksView;
    private $booksModel;
    private $categoryModel;
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
        $this->authHelper = new AuthHelper();
    }

    function showMenuAdmin(){
        $libros = $this->booksModel->getAll();
        $categorias = $this->categoryModel->getAll();
        $this->booksView->showMenuAdmin($libros, $categorias);
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

        $usernameCheck = $this->model->getByUsername($username);

        if (empty($usernameCheck)){
            $password = password_hash($password, PASSWORD_DEFAULT);
            $this->model->registerNewUser($username, $password);
            $user = $this->model->getByUsername($username);
            $this->authHelper->login($user);
            header("Location: " . BASE_URL . "home");
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
            if($user->admin == 1){
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
