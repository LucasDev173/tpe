<?php

require_once('libs\smarty\Smarty.class.php');

class AuthView {

    private $smarty;

    function showLogin(){
        $this->smarty = new Smarty();
        $this->smarty->display('templates/login.tpl');
    }
}