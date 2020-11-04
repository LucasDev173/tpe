<?php


class CommentaryModel {

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

   public function ObtenerComentarios() {
       $query = $this->db->prepare('SELECT * FROM comentario');
       $query->execute();

       $comentarios = $query->fetchAll(PDO::FETCH_OBJ); // arreglo de comentarios
        return $comentarios;
    }

    public function obtenerComentario($id_libro) {
        $query = $this->db->prepare('SELECT * FROM comentario WHERE id_libro = ?');
        $query->execute([$id_libro]);
        
        $comentarios = $query->fetchAll(PDO::FETCH_OBJ); // arreglo de comentarios
        return $comentarios;
     }

    public function BorrarComentario($id) {
        $query = $this->db->prepare('DELETE FROM comentario WHERE idc = ?');
        $resultado = $query->execute(array($id));
        return $resultado;
    }
}