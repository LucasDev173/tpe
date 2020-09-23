<?php

class BooksModel {

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

        // 2. Envio consulta (2 pasos: prepare y execute. Consulto a las dos tablas para obtener categoria con JOIN)
        $query = $this->db->prepare('SELECT * FROM libro JOIN categoria ON libro.id_categoria = categoria.id');
        $query->execute();

        // 3. Obtengo la respuesta con un fetchAll (porque son muchos)
        $libros = $query->fetchAll(PDO::FETCH_OBJ); // arreglo de libros

        return $libros;
    }

    /**
     * Inserta el libro en la base de datos. FALTA CATEGORIA
     */
    function insert($titulo, $autor, $precio, $id_cat) {
        
        // 2. Enviar la consulta (2 sub-pasos: prepare y execute)
        $query = $this->db->prepare('INSERT INTO libro (titulo, autor, precio, id_categoria) VALUES (?,?,?,?)');
        $query->execute([$titulo, $autor, $precio, $id_cat]);

        // 3. Obtengo y devuelo el ID de la tarea nueva
        return $this->db->lastInsertId();
    }
 
    function remove($id) {  
  
        $query = $this->db->prepare('DELETE FROM libro WHERE id = ?');
        $query->execute([$id]);
  }
}