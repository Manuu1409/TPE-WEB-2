<?php
/* Smarty version 4.2.1, created on 2022-10-12 21:16:13
  from 'C:\xampp\htdocs\TPE_WEB_2\templates\form_Category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6347127da495d7_28226555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba1873323e724ffaf20df552d4b92bfc20378fda' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB_2\\templates\\form_Category.tpl',
      1 => 1665602172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6347127da495d7_28226555 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Agregar categoria </h1>

<form action="agregarcategoria" method="POST">
    <div class="row">
        <div class="col-3">
            <div class="form-group">
                <label> Nombre categoria</label>
                <input name="name" type="text" class="form-control">
            </div>
            <div>
                <label>Descripcion</label>
                <input name="description" type="text" class="form-control">
            </div>
        </div>
    </div>
        <button type="submit" class="btn btn-success">Enviar</button>
</form><?php }
}
