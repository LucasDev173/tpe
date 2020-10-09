{include 'templates/header.tpl'}
{include 'templates/navbar.tpl'}

<div class='container mb-3'>
    <p>Menu del Administrador</p>
    <form name="enviar" action="insertar" method="POST">
        <input type="text" name="titulo" placeholder="titulo">
        <input type="text" name="autor" placeholder="autor">
        <input type="text" name="precio" placeholder="precio">
        <select name="Sel_cat">
            {foreach from = $categorias item = categoria}
                <option value={$categoria->ide}>{$categoria->nombre}</option>
            {/foreach}
        <select>

        {* <input type="number" name="id_categoria" placeholder="categoria"> *}

        <button class='btn btn-success btn-sm' type="submit">Insertar libro</button>
    </form>
</div>
{* <div class='container mb-3'>
    <label for= >Desea administrar las Categorias?</label>
    <button class="btn btn-primary">Ir a Categorias</button>
</div> *}
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

{include 'templates/footer.tpl'}