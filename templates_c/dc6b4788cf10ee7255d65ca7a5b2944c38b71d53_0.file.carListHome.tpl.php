<?php
/* Smarty version 4.2.1, created on 2022-10-11 21:38:16
  from 'C:\xampp\htdocs\TPE_WEB_2\templates\carListHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6345c628890cc7_03702868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc6b4788cf10ee7255d65ca7a5b2944c38b71d53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB_2\\templates\\carListHome.tpl',
      1 => 1665517095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6345c628890cc7_03702868 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table">

  <thead>
    <tr>
      <th scope="col">Nombre del auto</th>
      <th scope="col">Fecha de lanzamiento</th>
      <th scope="col">Color</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cars']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>

    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['car']->value->nombre;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['car']->value->fecha;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['car']->value->color;?>
</td>
    </tr>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
  
</table>

<p class="mt-3"><b>Mostrando <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 autos</b></p>
<?php }
}
