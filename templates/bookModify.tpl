{include 'templates/header.tpl'}
{include 'templates/navbar.tpl'}

    <div class='container mb-3'>
        <div class="row">
            <div class="col-4">
                <img class='mt-5 rounded mx-auto d-block img-thumbnail' src="img/portada-generica.png" width="300" height="150">
                <div class="mt-3 row">
                    <form action="modif" method="POST">
                        <input type="text" name="titulo" value="{$libro->titulo}">
                        <input type="text" name="autor" value="{$libro->autor}">
                        <input type="text" name="precio" value="{$libro->precio}">
                        <input type="text" name="categoria" value="{$libro->nombre}">
                        <button class='btn btn-success btn-sm' type="submit">Modificar</button>
                        {* <a class='btn btn-success btn-sm' href="{BASE_URL}modif/{$libro->id}">modificar valores</a> *}
                    </form>
                </div>
            </div>
    </div>
    <a class="btn btn-dark mt-5" href="{BASE_URL}MenuAdmin">Volver al catalogo</a>
</div>

{include 'templates/footer.tpl'}



