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

        // La consulta hace un JOIN de 'LIBRO' y 'CATEGORIA' y LEFT JOIN de 'COMENTARIO')
        $query = $this->db->prepare('SELECT * FROM libro JOIN categoria on libro.id_categoria = categoria.ide 
                                     LEFT JOIN comentario ON libro.id = comentario.id_libro');
        $query->execute();

        // 3. Obtengo la respuesta con un fetchAll (porque son muchos)
        $libros = $query->fetchAll(PDO::FETCH_OBJ); // arreglo de libros

        return $libros;
    }

    /**
     * Inserta el libro en la base de datos.
     */
    function insert($titulo, $autor, $precio, $id_cat) {
        
        // 2. Enviar la consulta (2 sub-pasos: prepare y execute)
        $query = $this->db->prepare('INSERT INTO libro (titulo, autor, precio, id_categoria) VALUES (?,?,?,?)');
        $query->execute([$titulo, $autor, $precio, $id_cat]);

        // 3. Obtengo y devuelo el ID de la tarea nueva
        return $this->db->lastInsertId();
    }
    
    /*
     * Remueve un item de la BD por su $id
     */
    function remove($id) {  
  
        $query = $this->db->prepare('DELETE FROM libro WHERE id = ?');
        $query->execute([$id]);
        $libros = $this->getAll(); // arreglo de libros
        return $libros;
    }

    /*
     * Devuelve todos los libros de la base de datos con la categoria solicitada
     */
    function getCategoria($id_categoria) {
        
        // 2. Envio consulta (2 pasos: prepare y execute. Consulto a las dos tablas para obtener categoria con INNER JOIN)
        $query = $this->db->prepare('SELECT * FROM libro INNER JOIN categoria ON libro.id_categoria = categoria.ide 
                                    WHERE id_categoria = ?');
        $query->execute([$id_categoria]);
        
        // 3. Obtengo la respuesta con un fetchAll (porque son muchos)
        $libros = $query->fetchAll(PDO::FETCH_OBJ); // arreglo de libros
        
        return $libros;
    }

    /*
     * Devuelve el libro seleccionado por ID de la base de datos
     */
    function getLibro($id) {
        
        // 2. Envio consulta (2 pasos: prepare y execute. Consulto a las dos tablas para obtener categoria con INNER JOIN)
        $query = $this->db->prepare('SELECT * FROM libro JOIN categoria on libro.id_categoria = categoria.ide 
                                     LEFT JOIN comentario ON libro.id = comentario.id_libro WHERE id = ?');
        $query->execute([$id]);
        // 3. Obtengo la respuesta con un fetch (porque es uno solo)
        $libro = $query->fetch(PDO::FETCH_OBJ); // El libro seleccionado
        return $libro;
    }

    function ExisteLibro($id) {
        $query = $this->db->prepare('SELECT * FROM libro WHERE id = ?');
        $existe = $query->execute([$id]);
        if ($existe)
            return true;
        else  
            return false;
    }   

    /*
     * Busca en libros x `id`, `titulo`, `autor`, `precio`, `id_categoria` 
     * convierte a los resultados en minuscula para comparar en la base de datos
     */
    function getResults($pattern){
        $pattern = strtolower($pattern);
        $query = $this->db->prepare(
            "SELECT * FROM libro INNER JOIN categoria ON libro.id_categoria = categoria.ide
            WHERE
                LOWER(libro.titulo) LIKE '%$pattern%' OR
                LOWER(libro.autor) LIKE '%$pattern%' OR
                LOWER(libro.id_categoria) LIKE '%$pattern%'"
        );
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $results;
    }

    /*
     * Actualizo el libro seleccionado por ID de la base de datos NO ANDA
     */
    function updateLibro($libro) {
        $id = $libro["id"];
        $titulo = $libro["titulo"];
        $autor = $libro["autor"];
        $precio = $libro["precio"];
        $categoria = $libro["categoria"];
        $query = $this->db->prepare('UPDATE libro JOIN categoria SET titulo = ?, autor = ?, precio = ?, id_categoria = ? WHERE id = ?');
        $query->execute([$titulo, $autor, $precio, $categoria, $id]);
        $libros = $this->getAll(); // arreglo de libros
        return $libros;
    } 
}