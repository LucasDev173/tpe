<?php

require_once('libs\smarty\Smarty.class.php');

class AuthView {

    private $smarty;

    function showLogin($error = null){
        $this->smarty = new Smarty();
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl');
    }
}