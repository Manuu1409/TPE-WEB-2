<?php
/* Smarty version 4.2.1, created on 2022-10-11 01:24:40
  from 'C:\xampp\htdocs\TPE_WEB_2\templates\form_category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344a9b8377181_53217731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d7668315a6734dbf9ee67f3e8a3fa84ad879066' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB_2\\templates\\form_category.tpl',
      1 => 1665444279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6344a9b8377181_53217731 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form action="editar/<?php echo $_smarty_tpl->tpl_vars['categoria']->value;?>
" method="POST">
    <div class="row">
        <div class="col-3">
            <div class="form-group">
                <label>Cambiar nombre categoria</label>
                <input name="name" type="text" class="form-control">
            </div>
            <div>
                <label>Cambiar descripcion</label>
                <input name="description" type="text" class="form-control">
            </div>
        </div>

        <button type="submit" class="btn btn-success">Enviar</button>
</form><?php }
}
