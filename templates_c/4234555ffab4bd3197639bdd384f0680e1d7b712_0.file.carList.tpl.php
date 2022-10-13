<?php
/* Smarty version 4.2.1, created on 2022-10-13 19:49:29
  from 'C:\xampp\htdocs\TPE_WEB_2\templates\carList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63484fa99b4412_47304903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4234555ffab4bd3197639bdd384f0680e1d7b712' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB_2\\templates\\carList.tpl',
      1 => 1665683363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_cars.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63484fa99b4412_47304903 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:form_cars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table">

  <thead>
    <tr>
      <th scope="col">Nombre del auto</th>
      <th scope="col">Fecha de lanzamiento</th>
      <th scope="col">Color</th>
      <th scope="col">Prioridad</th>
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
       <td><?php echo $_smarty_tpl->tpl_vars['car']->value->prioridad;?>
</td>
       <td> <a href='borrarauto/<?php echo $_smarty_tpl->tpl_vars['car']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a></td>  
       <td> <a href='auto/<?php echo $_smarty_tpl->tpl_vars['car']->value->id;?>
' type='button' class="btn btn-warning">Editar</a></td>  
     </tr>
   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
  
</table>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
