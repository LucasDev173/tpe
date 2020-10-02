<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-02 02:30:24
  from 'C:\xampp\htdocs\practicas\tpe\templates\searchResults.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7674a09b9730_70190780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b8fe7ab885fe9ad0a4820d8a1a8bbf20c681c78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\practicas\\tpe\\templates\\searchResults.tpl',
      1 => 1601598608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/navbar.tpl' => 1,
    'file:templates/footer.tpl' => 2,
  ),
),false)) {
function content_5f7674a09b9730_70190780 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if (!$_smarty_tpl->tpl_vars['results']->value) {?>
    <p class="lead m-5">No se encontro ningun resultado.</p>
    <?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <div class='container mb-3'>
    <ul class='list-group mt-5'>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'result');
$_smarty_tpl->tpl_vars['result']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->do_else = false;
?>
            <li class='list-group-item'>
                TITULO: <?php echo $_smarty_tpl->tpl_vars['result']->value->titulo;?>
 <br> 
                AUTOR: <?php echo $_smarty_tpl->tpl_vars['result']->value->autor;?>
 <br>  
                PRECIO: <?php echo $_smarty_tpl->tpl_vars['result']->value->precio;?>
 <br>  
                CATEGORIA: <?php echo $_smarty_tpl->tpl_vars['result']->value->nombre;?>

            </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    </div>
<?php }
$_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
