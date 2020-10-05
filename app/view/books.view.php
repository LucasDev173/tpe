<?php

require_once('libs\smarty\Smarty.class.php');

class BooksView{

    function showHome($libros){
        $smarty = new Smarty();
        $smarty->assign('libros', $libros);
        $smarty->display('templates/booksList.tpl');
    }

    function showMenuAdmin($libros){
        $smarty = new Smarty();
        $smarty->assign('libros', $libros);
        $smarty->display('templates/options.tpl');
    }

    function showResults($results){
        $smarty = new Smarty();
        $smarty->assign('results', $results);
        $smarty->display('templates/searchResults.tpl');
    }

    function ShowError($mensaje) {
        $smarty = new Smarty();
        $smarty->assign('mensaje', $mensaje);
        $smarty->display('templates/showError.tpl');
    }

    function ShowItem($libro) {
        $smarty = new Smarty();
        $smarty->assign('libro', $libro);
        $smarty->display('templates/bookDetail.tpl');
    }
}