{include 'templates/header.tpl'}
{include 'templates/navbar.tpl'}
    <div class='container mb-3'>
        <div class="row">
            <div class="col-4">
                <img class='mt-5 rounded mx-auto d-block img-thumbnail' src="img/portada-generica.png" width="300" height="150">
            </div>
            <div class="mt-3 col">
                <ul class='list-group mt-5'>
                    <li class='list-group-item'>
                        TITULO: {$libro->titulo} <br> 
                        AUTOR: {$libro->autor} <br>  
                        PRECIO: {$libro->precio} <br>  
                        CATEGORIA: {$libro->nombre} {* <br>
                        COMENTARIO: {$libro->texto} <br>
                        PUNTAJE: {$libro->puntos} *}
                    </li>
                </ul>
            </div>
        </div>
         <a class="btn btn-dark mt-5" href="{BASE_URL}home">Volver al catalogo</a>
    </div>
{include 'templates/footer.tpl'}