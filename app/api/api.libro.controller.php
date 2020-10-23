<?php

require_once 'app/models/books.model.php';
require_once 'app/api/api.view.php';

class ApiLibroController {

    private $model;
    private $view;

    function __construct() {
        $this->model = new BooksModel();
        $this->view = new ApiView();
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
}