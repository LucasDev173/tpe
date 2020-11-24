{include 'templates/header.tpl'}
{include 'templates/navbar.tpl'}
{if !$results}
    <p class="lead m-5">No se encontro ningun resultado.</p>
{else}
    <div class='container mb-3'>
    <ul class='list-group mt-5'>
    {foreach from=$results item=result}
            <li class='list-group-item'>
                TITULO: {$result->titulo} <br> 
                PRECIO: <span class="badge badge-primary badge-pill">${$result->precio}</span>
            </li>
    {/foreach}
    </ul>
        <a class="btn btn-dark mt-3" href="{BASE_URL}busquedaAdv">Volver</a>
    </div>
{/if}
{include 'templates/footer.tpl'}