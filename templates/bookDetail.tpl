{include 'templates/header.tpl'}
{include 'templates/navbar.tpl'}
    <div id="llevaid" class='container mb-3' data-idlibro="{$libro->id}">
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
                        CATEGORIA: {$libro->nombre}
                    </li>
                </ul>
                {include file="vue/ListaComentarios.vue"}
            </div>
        </div>
    </div>
{include 'templates/footer.tpl'}
<script type="text/javascript" src="JS/commentary.js"></script>