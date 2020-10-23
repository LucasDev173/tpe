<?php

require_once 'libs/Router.php';
require_once 'app/api/api.libro.controller.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('Libro', 'GET', 'ApiLibroController', 'ObtenerLibros');
$router->addRoute('Libro/:ID', 'GET', 'ApiLibroController', 'obtenerLibro');
/* 
$router->addRoute('Libro', 'POST', 'ApiTaskController', 'crearLibro');
*/

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
