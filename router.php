<?php
include_once 'app/controllers/books.controller.php';
include_once 'app/controllers/auth.controller.php';

// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

// parsea la accion Ej: suma/1/2 --> ['suma', 1, 2]
$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home':
        $controller = new BookController();
        $controller->showHome();
        break;
    case 'menuAdmin':
        $controller = new AuthController();
        $controller->showMenuAdmin();
        break;
    case 'login':
        $controller = new AuthController();
        $controller->showLogin();
        break;
    case 'verify':
        $controller = new AuthController();
        $controller->loginUser();
        break;
    case 'insertar':
        $controller = new BookController();
        $controller->insert_libro();
        break;
    case 'filtrar':
        $controller = new BookController();
        $controller->filtrar_categoria($_POST);
        break;
    case 'buscar':
        $controller = new BookController();
        $controller->showSearch();
        break;
    case 'eliminar':
            $controller = new BookController();
            $id = $params[1];
            $controller->eliminar_libro($id);
            break;
    case 'ver':
        $controller = new BookController();
        $id = $params[1];
        $controller->ver_libro($id);
        break;
    case 'modificar':
        $controller = new BookController();
        $id = $params[1];
        $controller->modif_libro($id);
        break;
    case 'modif':
        $controller = new BookController();
        $controller->modif_final();
        break;
    default:
        header("HTTP/1.0 404 Not Found");
        echo('404 Page not found');
        break;
}
