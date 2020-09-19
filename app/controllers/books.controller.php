<?php

include_once 'app/view/books.view.php';

class BookController {

    private $view;

    function __construct(){
        $view = new BooksView();
        $view->showHome();
    }
    
}
