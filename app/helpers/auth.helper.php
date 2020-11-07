<?php

class AuthHelper {
    function checkLogged(){
        if (!isset($_SESSION['ID_USER'])){
            header("Location: " . BASE_URL . "login");
        }
    }
    
    function login($user) {
        session_start();
        $_SESSION['ID_USER'] = $user->id;
        $_SESSION['NAME_USER'] = $user->username;
    }
    function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . 'home');
    }    
}