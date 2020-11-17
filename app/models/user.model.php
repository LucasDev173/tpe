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

    public function getById($id){
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE id = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
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

    public function remove ($id){
        $query = $this->db->prepare('DELETE FROM usuarios WHERE id = ?');
        $results = $query->execute([$id]);
    }

    public function giveAdmin($id){
        $query = $this->db->prepare('UPDATE usuarios SET isadmin = 1 WHERE id = ?');
        $results = $query->execute([$id]);
    }

    public function removeAdmin($id){
        $query = $this->db->prepare('UPDATE usuarios SET isadmin = 0 WHERE id = ?');
        $results = $query->execute([$id]);
    }
}