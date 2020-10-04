{include 'templates/header.tpl'}
{include 'templates/navbar.tpl'}

<div>
    <p>Menu del Administrador</p>
    <form name="enviar" action="insertar" method="POST">
        <input type="text" name="titulo" placeholder="titulo">
        <input type="text" name="autor" placeholder="autor">
        <input type="text" name="precio" placeholder="precio">
        <input type="number" name="id_categoria" placeholder="categoria">
        
        <button class='btn btn-success btn-sm' type="submit" name="enviar">Insertar</button>
    </form>

</div>
{include 'templates/footer.tpl'}