<?php

class BooksView{

    function showHome($libros){
        include 'templates/header.php';
        include 'templates/navbar.php';
        include 'templates/main.php';

        echo "<div class='container mb-3'>";
        echo "<ul class='list-group mt-5'>";
        foreach($libros as $libro) {
            echo "<li class='list-group-item'>
                    TITULO: $libro->titulo <br> 
                    AUTOR: $libro->autor <br>  
                    PRECIO: $libro->precio <br>  
                    CATEGORIA: $libro->nombre
                </li>";
        }
        echo "</ul>";
        echo "</div>";
        include 'templates/footer.php';
    }

    function showOptions(){
        include 'templates/header.php';
        include 'templates/navbar.php';
        include 'templates/options.php';
        include 'templates/footer.php';
    }

    function showResults($results){
        include 'templates/header.php';
        include 'templates/navbar.php';
        if (empty($results)) {
            echo ' <p class="lead m-5">No se encontro ningun resultado.</p> ';
            include 'templates/footer.php';
        }
        else {
            echo "<div class='container mb-3'>";
            echo "<ul class='list-group mt-5'>";
            foreach($results as $result) {
                echo "<li class='list-group-item'>
                        TITULO: $result->titulo <br> 
                        AUTOR: $result->autor <br>  
                        PRECIO: $result->precio <br>  
                        CATEGORIA: $result->nombre
                    </li>";
            }
            echo "</ul>";
            echo "<a class='btn btn-danger btn-sm' href='eliminar/".$results[0]->id."'>ELIMINAR</a>";
            echo "</div>";
            include 'templates/footer.php';
        }
    }

    function ShowError($mensaje) {
        echo "<H1>" . $mensaje . "</H1>>";
    }
}