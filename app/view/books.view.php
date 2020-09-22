<?php

class BooksView{

    function showHome($libros) {
        include 'templates/header.php';
        include 'templates/navbar.php';
        include 'templates/main.php';
    
>>>>>>> 23624f11ff3a1539fca654ad7e6fa0bbe524f8cb
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

    function showSearch(){
        include 'templates/header.php';
        include 'templates/navbar.php';
        include 'templates/search.php';
        include 'templates/footer.php';
    }
}