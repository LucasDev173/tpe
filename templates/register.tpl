{include 'templates/header.tpl'}
{include 'templates/navbar.tpl'}
{if $error}
  <div class="alert alert-danger text-center" role="alert">
    ¡Error! Nombre de usuario en uso. Elija otro nombre.
  </div>
{/if}
<div class="container text-center">
  <form method="POST" action="verifyRegis">
    <h1 class="h3 mt-5 mb-3 font-weight-normal">Registro</h1>
    
    <label for="username" class="sr-only">Nombre</label>
    <input id="username" name="username" type="text" class="col-sm-6" placeholder="Nombre" required>

    <label for="password" class="sr-only">Contrase&ntilde;a</label>
    <input id="password" name="password" type="password" class="col-sm-6 mt-2" placeholder="Contrase&ntilde;a" required>
    
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="terms" required>
        <label class="form-check-label" for="terms">Acepto los terminos y condiciones</label>
    </div>
    <button class="btn btn-lg btn-primary mt-3 col-sm-6" type="submit">Registrar</button>
  </form>
</div>
{include 'templates/footer.tpl'}  