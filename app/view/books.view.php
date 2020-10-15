<?php

require_once('libs\smarty\smarty.class.php');

class BooksView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('title', "Libreria");
    }

    function showHome($libros, $categorias){
        $this->smarty->assign('libros', $libros);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates/booksList.tpl');
    }

    function showMenuAdmin($libros, $categorias, $message = null){
        $this->smarty->assign('message', $message);
        $this->smarty->assign('libros', $libros);
        $this->smarty->assign('categorias', $categorias);
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
        $this->smarty->assign('libro', $libro);
        $this->smarty->display('templates/bookModify.tpl');
    }

    function showCategoryModify($categoria){
        $this->smarty->assign('categoria', $categoria);
        $this->smarty->display('templates/categoryModify.tpl');
    }
}