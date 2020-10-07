<?php

require_once('libs\smarty\smarty.class.php');

class BooksView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('title', "Libreria");
    }

    function showHome($libros){
        $this->smarty->assign('libros', $libros);
        $this->smarty->display('templates/booksList.tpl');
    }

    function showMenuAdmin($libros){
        $this->smarty->assign('libros', $libros);
        $this->smarty->display('templates/options.tpl');
    }

    function showResults($results){
        $this->smarty->assign('results', $results);
        $this->smarty->display('templates/searchResults.tpl');
    }

    function ShowError($mensaje) {
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('templates/showError.tpl');
    }

    function ShowItem($libro) {
        $this->smarty->assign('libro', $libro);
        $this->smarty->display('templates/bookDetail.tpl');
    }

    function ShowItemModify($libro) {
        $smarty = new Smarty();
        $smarty->assign('libro', $libro);
        $smarty->display('templates/bookModify.tpl');
    }
}