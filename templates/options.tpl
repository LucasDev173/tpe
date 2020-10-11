{include 'templates/header.tpl'}
{include 'templates/navbar.tpl'}

{* titulo *}
<div class='container mb-3'>
    <h2>Menu del Administrador</h2>
</div>

{* Aca empieza la funcion Insertar libros *}
<div class='container mb-3'>
    <form name="enviar" action="insertar" method="POST">
        <input type="text" name="titulo" placeholder="titulo">
        <input type="text" name="autor" placeholder="autor">
        <input type="text" name="precio" placeholder="precio">
        <select name="Sel_cat">
            {foreach from = $categorias item = categoria}
                <option value={$categoria->ide}>{$categoria->nombre}</option>
            {/foreach}
        <select>
        <button class='btn btn-success btn-sm' type="submit">Insertar libro</button>
    </form>
</div>

{* Aca empieza la funcion Insertar Categorias *}
<div class='container mb-3'>
    <form action="insertar_categoria" method="POST">
        <input type="text" name="categoria" placeholder="categoria">
        <button class='btn btn-success btn-sm' type="submit">Insertar categoria</button>
    </form>
</div>

<div class='container mb-3'>
    <h3>Libros:</h3>
</div>

{* Aca empieza el listado de libros *}
<div id="contenedor" class='container mb-3'>
    <ul class='list-group mt-5'>
        {foreach from=$libros item=libro}
            <li class='list-group-item'>
                ID: {$libro->id} <br>
                TITULO: {$libro->titulo} <br> 
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

<div class='container mb-3'>
    <h3>Categorias:</h3>
</div>

{*Comienzo del listado de categorias*}
<div id="contenedor" class='container mb-3'>
    <ul class='list-group mt-5'>
        {foreach from=$categorias item=categoria}
            <li class='list-group-item'>
                ID: {$categoria->ide} <br>
                NOMBRE: {$categoria->nombre} <br> 
                <a class="btn btn-secondary" href="{BASE_URL}modificarCategoria/{$categoria->ide}">Modificar</a>
                {*<div>
                    <a class="btn btn-danger" href="{BASE_URL}eliminar/{$libro->id}">Eliminar</a>
                </div>*}
            </li>
        {/foreach}
    </ul>
</div>

{include 'templates/footer.tpl'}