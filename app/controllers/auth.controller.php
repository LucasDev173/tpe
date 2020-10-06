<?php

include_once 'app/view/books.view.php';
include_once 'app/models/books.model.php';

class AuthController {

    private $view;
    private $model;

    function __construct(){
        $this->view = new BooksView();
        $this->model = new BooksModel();
    }

    function showMenuAdmin(){
        $libros = $this->model->getAll();
        $this->view->showMenuAdmin($libros);
    }

    
}