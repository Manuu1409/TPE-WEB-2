<?php
/* Smarty version 4.2.1, created on 2022-10-11 22:46:41
  from 'C:\xampp\htdocs\TPE_WEB_2\templates\formEdit_category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6345d631c37418_44003754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49fcc598fa69a9e4f993cb6bea2a7b04034feb37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB_2\\templates\\formEdit_category.tpl',
      1 => 1665521195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6345d631c37418_44003754 (Smarty_Internal_Template $_smarty_tpl) {
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
