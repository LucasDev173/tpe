{include 'templates/header.tpl'}
{include 'templates/navbar.tpl'}
    <div class="container mr-5 mt-5">
        <div class="row mt-3">
            <div class="col-4">
                <form class="form-inline my-2 my-lg-0" action="buscar" method="GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search" 
                name="pattern" required>
                <button class="btn btn-dark my-2 my-sm-0" type="submit">🔍</button>
                </form>
            </div>
            <div class="col-4">
                <form action="filtrar" method="post">
                <label for="select">Filtrar por genero:</label>
                    <select name="Sel_cat" required>
                    {foreach from = $categorias item = categoria}
                        <option value={$categoria->ide}>{$categoria->nombre}</option>
                    {/foreach}
                    </select>
                    <button class="btn btn-dark" type="submit">Filtrar</button>
                </form>
            </div>
        </div>
    </div>
{include 'templates/footer.tpl'}