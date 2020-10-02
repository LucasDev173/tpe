<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-02 02:19:29
  from 'C:\xampp\htdocs\practicas\tpe\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f767211d012f4_62861101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d01f825a1fce0d58135dd28c974d615a25aa6b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\practicas\\tpe\\templates\\main.tpl',
      1 => 1601594606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f767211d012f4_62861101 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
  <div class="row">
    <div class="mt-5 col">
      <h1>Acerca de nosotros</h1>
      <p class="lead mb-0">Somos una empresa 
      independiente concentrada en brindarte los mejores libros a los mejores precios.</p> 
      <p class="lead mb-0">Fundada en 2020 por Lucas Guerrero y Matias Shedden, LM Bookstore se enorgullese
      en su excelente calidad, atencion al cliente y ofertas.</p>
      <p class="lead">Contando con una impresionante variedad de generos, el catalogo nuestro catalogo
      ofrece historias para el gusta de cualquier lector.</p>
    </div>
    <div class="mt-4 col-3 d-none d-lg-block">
      <img src="img/rsz_bookart.png" alt="logo" class="img-fluid">
    </div>
  </div>
  <form action="filtrar" method="post">
    <label for="select">Seleccione categoria</label>
      <select name="select">
            <option value="1">policial</option>
            <option value="2">suspenso</option>
            <option value="3">fantasia</option>
        </select>
      <button type="submit">Filtrar</button>
  </form>
    <h2 class="mt-3">Catalogo:</h2>
  
  
</div>


<?php }
}
