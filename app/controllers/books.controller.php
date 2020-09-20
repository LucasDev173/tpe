<?php

include_once 'app/view/books.view.php';

class BookController {

    private $view;

    function __construct(){
        $this->view = new BooksView();
    }
    
    function showHome(){
        $this->view->showHome();
    }
}
