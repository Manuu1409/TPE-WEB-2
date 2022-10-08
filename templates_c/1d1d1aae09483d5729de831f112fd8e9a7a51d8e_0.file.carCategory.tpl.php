<?php
/* Smarty version 4.2.1, created on 2022-10-08 19:34:02
  from 'C:\xampp\htdocs\TPE_WEB_2\templates\carCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6341b48a1a4249_01200862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d1d1aae09483d5729de831f112fd8e9a7a51d8e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB_2\\templates\\carCategory.tpl',
      1 => 1665250440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6341b48a1a4249_01200862 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1>Categorias de autos ford </h1>

<table class="table">

  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</td>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
  
</table>

<p class="mt-3"><b>Mostrando <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 Categorias</b></p><?php }
}
