<?php

include_once 'app/view/books.view.php';
include_once 'app/models/books.model.php';
include_once 'app/models/category.model.php';

class BookController {

    private $view;
    private $model;
    private $modelcat;

    function __construct(){
        $this->view = new BooksView();
        $this->model = new BooksModel();
        $this->modelcat = new CategoryModel();
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

    // Inserta un libro con los datos enviados. SOLO ADMIN
    function insert_libro() {
        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $precio = $_POST["precio"];
        $id_cat = $_POST["Sel_cat"];

        if ((empty($titulo) || empty($autor) || empty($precio) || empty($id_cat))) {
            $this->view->showError('Faltan datos');
            die();
        }
        // inserto la tarea en la DB
        $id = $this->model->insert($titulo, $autor,  $precio, $id_cat);
        // redirigimos al listado
        header("Location: " . BASE_URL . "menuAdmin"); 
    }

    // Filtro la categoria seleccionada
    function filtrar_categoria($id_categoria) {
        $libros = $this->model->getCategoria($id_categoria);
        $this->view->showHome($libros);
    }

    //Elimino el libro con la ID seleccionada. SOLO ADMIN
    function eliminar_libro($id) {
        $libros = $this->model->remove($id);
        $categorias = $this->modelcat->getAll();
        $this->view->showMenuAdmin($libros, $categorias);
    }

    //Ver el detalle de un libro(item) en particular
    function ver_libro($id)     {
        $libro = $this->model->getLibro($id);
        $this->view->showItem($libro);  
    }

    //Modificar los datos de un libro(item) en particular. SOLO ADMIN
    function modif_libro($id) {
        $libro = $this->model->getLibro($id);
        $this->view->showItemModify($libro);
    }

    //Actualiza la base de datos del ID enviado. SOLO ADMIN
    function modif_final() {
        $libro = array("id"=>$_POST["id"], "titulo"=>$_POST["titulo"], "autor"=>$_POST["autor"], "precio"=>$_POST["precio"], 
                       "categoria"=>$_POST["categoria"]);
        $libros = $this->model->updateLibro($libro);
        $categorias = $this->modelcat->getAll();
        $this->view->showMenuAdmin($libros, $categorias);
    }
}  
