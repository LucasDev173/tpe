{include 'templates/header.tpl'}
{include 'templates/navbar.tpl'}
{if !$results}
    <p class="lead m-5">No se encontro ningun resultado.</p>
    {include 'templates/footer.tpl'}
{else}
    <div class='container mb-3'>
    <ul class='list-group mt-5'>
    {foreach from=$results item=result}
            <li class='list-group-item'>
                TITULO: {$result->titulo} <br> 
                PRECIO: {$result->precio} 
            </li>
    {/foreach}
    </ul>
    </div>
{/if}
{include 'templates/footer.tpl'}