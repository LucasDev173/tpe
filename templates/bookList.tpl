{include 'templates/header.tpl'}
{include 'templates/navbar.tpl'}
{if !$libro}
    <p class="lead m-5">No se encontro ningun resultado.</p>
    {include 'templates/footer.tpl'}
{else}
    <div class='container mb-3'>
        <img src="img/portada-generica.png" width="300" height="150">
        <ul class='list-group mt-5'>
            <li class='list-group-item'>
                TITULO: {$libro->titulo} <br> 
                AUTOR: {$libro->autor} <br>  
                PRECIO: {$libro->precio} <br>  
                CATEGORIA: {$libro->nombre}
            </li>
            <a href="{BASE_URL}home">volver</a>
        </ul>
    </div>
{/if}
{include 'templates/footer.tpl'}