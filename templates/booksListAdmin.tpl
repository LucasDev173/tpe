{*Esta parte muestra la BD de libros con todos los datos. NO USADA POR EL MOMENTO*}
<div id="contenedor" class='container mb-3'>
    <ul class='list-group mt-5'>
        {foreach from=$libros item=libro}
            <li class='list-group-item'>
                ID: {$libro->id} <br>
                TITULO: {$libro->titulo} <br> 
                AUTOR: {$libro->autor} <br>
                AUTOR: {$libro->autor} <br>
                PRECIO: {$libro->precio} <br>
                CATEGORIA: {$libro->nombre}
                <div>
                    <a class="btn btn-secondary" href="{BASE_URL}modificar/{$libro->id}">Modificar</a>
                    <a class="btn btn-danger" href="{BASE_URL}eliminar/{$libro->id}">Eliminar</a>
                </div>
            </li>
        {/foreach}
    </ul>
</div>