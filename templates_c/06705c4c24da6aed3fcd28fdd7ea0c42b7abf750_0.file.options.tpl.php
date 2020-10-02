<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-02 02:31:11
  from 'C:\xampp\htdocs\practicas\tpe\templates\options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7674cfc5ff51_02955170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06705c4c24da6aed3fcd28fdd7ea0c42b7abf750' => 
    array (
      0 => 'C:\\xampp\\htdocs\\practicas\\tpe\\templates\\options.tpl',
      1 => 1601598670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/navbar.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f7674cfc5ff51_02955170 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    <p>Menu de opciones</p>
    <form name="enviar" action="insertar" method="POST">
        
        
        <input type="text" name="titulo" placeholder="titulo">
        <input type="text" name="autor" placeholder="autor">
        <input type="text" name="precio" placeholder="precio">
        <input type="number" name="id_categoria" placeholder="categoria">
        
        <button type="submit" name="enviar">Insertar</button>
    </form>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
