<?php
session_start();
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
        $categorias = $this->modelcat->getAll();
        //Actualizo la vista
        $this->view->showHome($libros, $categorias);
    }

    //Muestra los resultados de la barra de busqueda
    function showSearch(){
        $pattern = $_POST["pattern"];
        $results = $this->model->getResults($pattern); 
        $this->view->showResults($results);
    }

    // Inserta un libro con los datos enviados. SOLO ADMIN
    function insert_libro() {
        $categorias = $this->modelcat->getAll();
        if ((empty($_POST["titulo"]) || empty($_POST["autor"]) || empty($_POST["precio"]) || empty($_POST["Sel_cat"]))) {
            $libros = $this->model->getAll();
            $message = "Faltan datos obligatorios.";
            $this->view->showMenuAdmin($libros, $categorias, $message);
        }
        else{
            $titulo = $_POST["titulo"];
            $autor = $_POST["autor"];
            $precio = $_POST["precio"];
            $id_cat = $_POST["Sel_cat"];
            
            // inserto la tarea en la DB
            $id = $this->model->insert($titulo, $autor,  $precio, $id_cat);
            // redirigimos al listado
            $libros = $this->model->getAll();
            $message = "¡Libro insertado con exito!";
            $this->view->showMenuAdmin($libros, $categorias, $message);
        }
    }

    // Filtro la categoria seleccionada
    function filtrar_categoria($id_categoria) {
        $libros = $this->model->getCategoria($id_categoria);
        $categorias = $this->modelcat->getAll();
        $this->view->showHome($libros, $categorias);
    }

    //Elimino el libro con la ID seleccionada. SOLO ADMIN
    function eliminar_libro($id) {
        $libros = $this->model->remove($id);
        $categorias = $this->modelcat->getAll();
        $message = "¡Libro eliminado con exito!";
        $this->view->showMenuAdmin($libros, $categorias, $message);
    }

    //Ver el detalle de un libro(item) en particular
    function ver_libro($id)     {
        $libro = $this->model->getLibro($id);
        $this->view->showItem($libro);  
    }

    //Modificar los datos de un libro(item) en particular. SOLO ADMIN
    function modif_libro($id) {
        $libro = $this->model->getLibro($id);
        $categorias = $this->modelcat->getAll();
        $this->view->showItemModify($libro, $categorias);
    }

    //Actualiza la base de datos del ID enviado. SOLO ADMIN
    function modif_final() {
        $libro = array("id"=>$_POST["id"], "titulo"=>$_POST["titulo"], "autor"=>$_POST["autor"], "precio"=>$_POST["precio"], 
                       "categoria"=>$_POST["Sel_cat"]);
        $libros = $this->model->updateLibro($libro);
        $categorias = $this->modelcat->getAll();
        $message = "¡Libro modificado con exito!";
        $this->view->showMenuAdmin($libros, $categorias, $message);
    }

    function modifCategoria($id){
        $categoria = $this->modelcat->getCategoria($id);
        $this->view->showCategoryModify($categoria);
    }

    function categoryModifFinal(){
        $categoria = array("ide"=>$_POST["id"], "nombre"=>$_POST["name"]);
        $this->modelcat->updateCategory($categoria);

        $libros = $this->model->getAll();
        $categorias = $this->modelcat->getAll();
        $message = "¡Categoria modificado con exito!";
        $this->view->showMenuAdmin($libros, $categorias, $message);
    }

    // Inserta un libro con los datos enviados. SOLO ADMIN
    function insertar_categoria() {
        $libros = $this->model->getAll();

        //revisa que la el post no este vacio (el que este vacio solo seria posible si el usuario abriera
        //la url insertar_categoria fuera de la forma)
        if (empty($_POST["categoria"])) {
            $message = "Faltan datos obligatorios.";
            $categorias = $this->modelcat->getAll();
            $this->view->showMenuAdmin($libros, $categorias, $message);
        }
        else {
            $categoria = $_POST["categoria"];
        
            // inserto la tarea en la DB
            $this->modelcat->insert($categoria);
    
            // redirigimos al listado
            $categorias = $this->modelcat->getAll();
            $message = "¡Categoria insertada con exito!";
            $this->view->showMenuAdmin($libros, $categorias, $message);
        }
    }

    //Elimino la categoria con la IDE seleccionada. SOLO ADMIN
    function EliminarCategoria($id) {
        $result = $this->modelcat->removeCategory($id);
        $libros = $this->model->getAll();
        $categorias = $this->modelcat->getAll();

        if ($result){
            $message = "¡Categoria eliminada con exito!";
            $this->view->showMenuAdmin($libros, $categorias, $message);
        }
        else {
            $message = "No se puede eliminar una categoria en uso.";
            $this->view->showMenuAdmin($libros, $categorias, $message);
        }
    }
}  
