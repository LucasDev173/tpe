{include 'templates/header.tpl'}
{include 'templates/navbar.tpl'}
{include 'templates/main.tpl'}
<div class='container mb-3'>
<ul class='list-group mt-5'>
{foreach from=$libros item=libro}
    <li class='list-group-item'>
            {*Comente las secciones que no vamos a mostrar, en caso de que las necesitamos
            en alguna otra cosa.*}

            {*ID: {$libro->id} <br>*}
            TITULO: {$libro->titulo} <br> 
            {*AUTOR: {$libro->autor} <br>*} 
            {*AUTOR: {$libro->autor} <br>*}
            PRECIO: {$libro->precio} {*<br>*} 
            {*CATEGORIA: {$libro->nombre}*}
            <div>
                <a class='btn btn-success btn-sm' href="ver/{$libro->id}">DETALLE</a>
            </div>
    </li>
{/foreach}
</ul>
</div>
{include 'templates/footer.tpl'}