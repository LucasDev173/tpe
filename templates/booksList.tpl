{include 'templates/header.tpl'}
{include 'templates/navbar.tpl'}
{include 'templates/main.tpl'}
<div id="contenedor" class='container mb-3'>
<ul class='list-group mt-5'>
{foreach from=$libros item=libro}
    <li class='list-group-item'>
            TITULO: {$libro->titulo} <br> 
            AUTOR: {$libro->autor} <br>  
            PRECIO: {$libro->precio} <br>  
            CATEGORIA: {$libro->nombre}
            <div>
                <a class='btn btn-success btn-sm' href="ver/{$libro->id}">DETALLE</a>
            </div>
    </li>
{/foreach}
</ul>
</div>
{include 'templates/footer.tpl'}