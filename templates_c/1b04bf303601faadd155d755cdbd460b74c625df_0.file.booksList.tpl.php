<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-02 02:19:29
  from 'C:\xampp\htdocs\practicas\tpe\templates\booksList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f767211ba19f6_45685170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b04bf303601faadd155d755cdbd460b74c625df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\practicas\\tpe\\templates\\booksList.tpl',
      1 => 1601597950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/navbar.tpl' => 1,
    'file:templates/main.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f767211ba19f6_45685170 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class='container mb-3'>
<ul class='list-group mt-5'>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
    <li class='list-group-item'>
            TITULO: <?php echo $_smarty_tpl->tpl_vars['libro']->value->titulo;?>
 <br> 
            AUTOR: <?php echo $_smarty_tpl->tpl_vars['libro']->value->autor;?>
 <br>  
            PRECIO: <?php echo $_smarty_tpl->tpl_vars['libro']->value->precio;?>
 <br>  
            CATEGORIA: <?php echo $_smarty_tpl->tpl_vars['libro']->value->nombre;?>

    </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
