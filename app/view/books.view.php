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
                    CATEGORIA: $libro->id_categoria
                </li>";
        }
        echo "</ul>";
        echo "</div>";
        include 'templates/footer.php';
    }

    function showSearch(){
        include 'templates/header.php';
        include 'templates/navbar.php';
        include 'templates/search.php';
        include 'templates/footer.php';
    }

    function ShowError($mensaje) {
        echo "<H1>" . $mensaje . "</H1>>";
    }
}