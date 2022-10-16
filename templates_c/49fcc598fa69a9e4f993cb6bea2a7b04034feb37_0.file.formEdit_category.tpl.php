<?php
/* Smarty version 4.2.1, created on 2022-10-16 20:27:32
  from 'C:\xampp\htdocs\TPE_WEB_2\templates\formEdit_category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c4d14caffb6_66200502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49fcc598fa69a9e4f993cb6bea2a7b04034feb37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB_2\\templates\\formEdit_category.tpl',
      1 => 1665944847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634c4d14caffb6_66200502 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Cambiar categoria </h1>

<form action="editarcategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value;?>
" method="POST">
    <div class="row">
        <div class="col-3">
            <div class="form-group">
                <label> Nombre categoria</label>
                <input name="name" type="text" class="form-control" required>
            </div>
            <div>
                <label>Descripcion</label>
                <input name="description" type="text" class="form-control" required>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Enviar</button>
</form><?php }
}
