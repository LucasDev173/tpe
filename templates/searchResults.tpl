{include 'templates/header.tpl'}
{include 'templates/navbar.tpl'}
{if !$results}
<div class='container'>
    <p class="lead m-5">No se encontro ningun resultado.</p>
</div>
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
    </div>
{/if}
<div class='container'>
    <a class="btn btn-dark" href="{BASE_URL}busquedaAdv">Volver</a>
</div>

{include 'templates/footer.tpl'}