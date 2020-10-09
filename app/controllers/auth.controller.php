<?php

include_once 'app/view/auth.view.php';
include_once 'app/models/user.model.php';
include_once 'app/view/books.view.php';
include_once 'app/models/books.model.php';
include_once 'app/models/category.model.php';

class AuthController {

    private $view;
    private $model;
    private $booksView;
    private $booksModel;
    private $categoryModel;
    
    function __construct(){
        //el modelo y la view de los libros ahora tienen el nombre
        //de booksView y booksModel, adapte el resto del control 
        //para que funcionara bien con estos cambios
        $this->view = new AuthView();
        $this->model = new UserModel();
        $this->booksView = new BooksView();
        $this->booksModel = new BooksModel();
        $this->categoryModel = new CategoryModel();
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

    function loginUser(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $user = $this->model->getByUsername($username);
        
        if (password_verify($password, $user->password)) {
            $this->showMenuAdmin();
        } else {
            echo "acceso denegado";
        }
    }
}
