<?php

class UserModel {
    private $db;

    function __construct() {
         // 1. Abro la conexión
        $this->db = $this->connect();
    }
    private function connect() {
        $db = new PDO('mysql:host=localhost;'.'dbname=db_libreria;charset=utf8', 'root', '');
        return $db;
    }

    public function getByUsername($username) {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE username = ?');
        $query->execute([$username]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function registerNewUser($username, $password){
        $query = $this->db->prepare('INSERT INTO usuarios (username, pass) VALUES (?, ?)');
        $query->execute([$username, $password]);
    }

    public function getAll () {
        $query = $this->db->prepare('SELECT * FROM usuarios');
        $query->execute();
        $usuarios = $query->fetchAll(PDO::FETCH_OBJ);
        return $usuarios;
    }
}