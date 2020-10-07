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
}