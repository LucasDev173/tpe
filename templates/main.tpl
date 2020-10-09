<div class="container">
  <div class="row">
    <div class="mt-5 col">
      <h1>Acerca de Nosotros</h1>
      <p class="lead mb-0">Somos una empresa 
      independiente enfocada en brindarte los mejores titulos a los mejores precios.</p> 
      <p class="lead mb-0">Fundada en 2020 por Lucas Guerrero y Matias Shedden, LM Bookstore se enorgullese
      de su excelente calidad, atencion al cliente y ofertas.</p>
      <p class="lead">Contando con una impresionante variedad de generos, nuestro catalogo
      ofrece lo mejor para el lector contemporaneo.</p>
    </div>
    <div class="mt-4 col-3 d-none d-lg-block">
      <img src="img/rsz_bookart.png" alt="logo" class="img-fluid">
    </div>
  </div>
  <div>
    <h2 class="mt-3">Catalogo:</h2>
    <div class="row">
      <div class="col-4">
        <form class="form-inline my-2 my-lg-0" action="buscar" method="POST">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search" 
          name="pattern" required>
          <button class="btn btn-dark my-2 my-sm-0" type="submit">🔍</button>
        </form>
      </div>
      <div class="col-4">
        <form action="filtrar" method="post">
          <label for="select">Filtrar por genero:</label>
            <select name="Sel_cat">
              {foreach from = $categorias item = categoria}
                  <option value={$categoria->ide}>{$categoria->nombre}</option>
              {/foreach}
            </select>
            <button class="btn btn-dark" type="submit">Filtrar</button>
        </form>
      </div>
      <a class="btn btn-dark" href="{BASE_URL}home#contenedor">Catalogo completo</a>
    </div>
  </div>
</div>


