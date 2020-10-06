<?php

include_once 'app/view/books.view.php';
include_once 'app/models/books.model.php';

class BookController {

    private $view;
    private $model;

    function __construct(){
        $this->view = new BooksView();
        $this->model = new BooksModel();
    }
    
    function showHome(){
        //Tomo todos los libros de la DB
        $libros = $this->model->getAll();
        //Actualizo la vista
        $this->view->showHome($libros);
    }

    //Muestra los resultados de la barra de busqueda
    function showSearch(){
        $pattern = $_POST["pattern"];
        $results = $this->model->getResults($pattern); 
        $this->view->showResults($results);
    }

    // Inserta un libro con los datos enviados
    function insert_libro() {
        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $precio = $_POST["precio"];
        $id_cat = $_POST["id_categoria"];

        if ((empty($titulo) || empty($autor) || empty($precio) || empty($id_cat))) {
            $this->view->showError('Faltan datos');
            die();
        }
        // inserto la tarea en la DB
        $id = $this->model->insert($titulo, $autor,  $precio, $id_cat);
        // redirigimos al listado
        header("Location: " . BASE_URL); 
    }

    // Filtro la categoria seleccionada
    function filtrar_categoria($id_categoria) {
        $libros = $this->model->getCategoria($id_categoria);
        $this->view->showHome($libros);
    }

    //Elimino el libro con la ID seleccionada
    function eliminar_libro($id) {
        $libros = $this->model->remove($id);
        $this->view->showMenuAdmin($libros);
    }

    //Ver el detalle de un libro(item) en particular
    function ver_libro($id)     {
        $libro = $this->model->getLibro($id);
        $this->view->showItem($libro);  
    }
}  
