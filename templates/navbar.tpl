<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand">LM BookStore</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample04">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home">Home</a>
      </li>
      {if isset($smarty.session.ID_USER) && $smarty.session.ADMIN_USER == 1}
        <li class="nav-item">
          <a class="nav-link" href="menuAdmin">Administar DB</a>
        </li>
      {/if}
    </ul>
    {if isset($smarty.session.ID_USER)}
      <a href="logout" class="btn btn-outline-light ml-2">Cerrar sesion</a>
    {else}
      <a href="login" class="btn btn-outline-light ml-2">Iniciar sesion</a>
    {/if}
  </div>
</nav>