{include 'templates/header.tpl'}
{include 'templates/navbar.tpl'}

    <div class='container mb-3'>
        <div class="row">
            <div class="col-4">
                <div class="mt-3 row">
                    <form action="categoryModif" method="POST">
                        <input type="text" name="id" value="{$categoria->ide}" readonly>
                        <input type="text" name="name" value="{$categoria->nombre}">
                        <button class='btn btn-success btn-sm' type="submit">Modificar</button>
                        {* <a class='btn btn-success btn-sm' href="{BASE_URL}modif/{$libro->id}">modificar valores</a> *}
                    </form>
                </div>
            </div>
    </div>
    <a class="btn btn-dark mt-5" href="{BASE_URL}menuAdmin#contenedor_cat">Volver al catalogo</a>
</div>

{include 'templates/footer.tpl'}