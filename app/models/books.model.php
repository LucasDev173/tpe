<?php

class BookModel {

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
     * Devuelve todos los libros de la base de datos.
     */
    function getAll() {

        // 2. Enviar la consulta (2 sub-pasos: prepare y execute)
        $query = $this->db->prepare('SELECT * FROM libro');
        $query->execute();

        // 3. Obtengo la respuesta con un fetchAll (porque son muchos)
        $tasks = $query->fetchAll(PDO::FETCH_OBJ); // arreglo de libros

        return $tasks;
    }

    /**
     * Inserta el libro en la base de datos
     */
    function insert($titulo, $autor, $precio, $id_categoria) {

        // 2. Enviar la consulta (2 sub-pasos: prepare y execute)
        $query = $this->db->prepare('INSERT INTO libro (titulo, autor, precio, id_categoria) VALUES (?,?,?,?)');
        $query->execute([$titulo, $autor, $precio, $id_categoria]);

        // 3. Obtengo y devuelo el ID de la tarea nueva
        return $this->db->lastInsertId();
    }
 
    function remove($id) {  
  
        $query = $this->db->prepare('DELETE FROM libro WHERE id = ?');
        $query->execute([$id]);
  }
}