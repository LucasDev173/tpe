<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#">LM BookStore</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample04">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home">Home</a>
      </li>
    </ul>
    <!--empieza la forma-->
    <form class="form-inline my-2 my-lg-0" action="buscar" method="POST">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search" 
      name="pattern" required>
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">🔍</button>
    </form>
    <!--termina la forma-->
    <a href="login" class="btn btn-outline-light ml-2">Iniciar sesion</a>
  </div>
</nav>