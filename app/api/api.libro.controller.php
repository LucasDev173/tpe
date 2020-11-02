<?php

require_once 'app/models/books.model.php';
require_once 'app/api/api.view.php';
require_once 'app/models/commentary.model.php';

class ApiLibroController {

    private $model;
    private $view;
    private $c_model;

    function __construct() {
        $this->model = new BooksModel();
        $this->view = new ApiView();
        $this->c_model = new CommentaryModel;
        $this->data = file_get_contents("php://input");
    }

    public function ObtenerLibros($params = null) {
        $parametros = [];

        if (isset($_GET['sort'])) {
            $parametros['sort'] = $_GET['sort'];
        }

        if (isset($_GET['order'])) {
            $parametros['order'] = $_GET['order'];
        }

        $books = $this->model->getAll($parametros);
        $this->view->response($books, 200);
    }

    public function ObtenerLibro($params = null) {
        $idLibro = $params[':ID'];
        $book = $this->model->getLibro($idLibro);
        if ($book)
            $this->view->response($book, 200);
        else
            $this->view->response("No existe el libro con ID: $idLibro", 404);
    }

    public function ObtenerComentarios($params = null) {
        $comentarios = $this->c_model->ObtenerComentarios();
        $this->view->response($comentarios, 200);
    }
}