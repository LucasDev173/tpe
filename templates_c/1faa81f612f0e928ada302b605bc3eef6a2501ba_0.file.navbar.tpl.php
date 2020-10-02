<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-02 02:19:29
  from 'C:\xampp\htdocs\practicas\tpe\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f767211c8bff8_49099244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1faa81f612f0e928ada302b605bc3eef6a2501ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\practicas\\tpe\\templates\\navbar.tpl',
      1 => 1601594609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f767211c8bff8_49099244 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#">LM BookStore</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample04">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="options">Acciones en BD</a>
      </li>
    </ul>
    <!--empieza la forma-->
    <form class="form-inline my-2 my-lg-0" action="buscar" method="POST">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search" 
      name="pattern" required>
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">🔍</button>
    </form>
    <!--termina la forma-->
    <button type="button" class="btn btn-outline-light ml-2">Iniciar sesion</button>
  </div>
</nav><?php }
}
