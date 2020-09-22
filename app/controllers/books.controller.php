<?php

include_once 'app/view/books.view.php';
include_once 'app/models/books.model.php';

class BookController {

    private $view;
    private $model;

    function __construct(){
        $this->view = new BooksView();
        $this->model = new BooksModel();
    }
    
    function showHome(){
        //Tomo todos los libros de la DB
        $libros = $this->model->getAll();
        
        //Actualizo la vista
        $this->view->showHome($libros);
    }
}
