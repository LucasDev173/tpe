{include 'templates/header.tpl'}
{include 'templates/navbar.tpl'}
<div class="container text-center">
  <form method="POST" action="verify">
        <h1 class="h3 mt-5 mb-3 font-weight-normal">Iniciar sesion</h1>
        
        <label for="username" class="sr-only">Nombre</label>
        <input id="username" name="username" type="text" class="col-sm-6" placeholder="Nombre" required>

        <label for="password" class="sr-only">Contrase&ntilde;a</label>
        <input id="password" name="password" type="password" class="col-sm-6 mt-2" placeholder="Contrase&ntilde;a" required>
        
        <button class="btn btn-lg btn-primary mt-3 col-sm-6" type="submit">Sign in</button>
  </form>
</div>
{include 'templates/footer.tpl'}  