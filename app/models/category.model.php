<?php

class CategoryModel {

    private $db;

    function __construct() {
         // 1. Abro la conexión
        $this->db = $this->connect();
    }

    /**
     * Abre conexión a la base de datos;
     */
    private function connect() {
        $db = new PDO('mysql:host=localhost;'.'dbname=db_libreria;charset=utf8', 'root', '');
        return $db;
    }

    /**
     * Devuelve todas las categorias de la base de datos.
     */
    function getAll() {

        // 2. Envio consulta (2 pasos: prepare y execute. Consulto a la tabla "categoria")
        $query = $this->db->prepare('SELECT * FROM categoria');
        $query->execute();

        // 3. Obtengo la respuesta con un fetchAll (porque son muchos)
        $categorias = $query->fetchAll(PDO::FETCH_OBJ); // arreglo de categorias

        return $categorias;
    }

}