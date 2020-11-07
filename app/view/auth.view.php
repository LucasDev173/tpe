<?php

require_once('libs\smarty\Smarty.class.php');

class AuthView {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('title', "Libreria");
    }

    function showLogin($error = null){
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl');
    }

    function showRegister($error = null){
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/register.tpl');
    }
}