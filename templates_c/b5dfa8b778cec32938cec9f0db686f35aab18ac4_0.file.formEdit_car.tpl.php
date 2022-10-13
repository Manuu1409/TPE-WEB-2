<?php
/* Smarty version 4.2.1, created on 2022-10-13 23:10:14
  from 'C:\xampp\htdocs\TPE_WEB_2\templates\formEdit_car.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63487eb6bc48f5_15348909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5dfa8b778cec32938cec9f0db686f35aab18ac4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB_2\\templates\\formEdit_car.tpl',
      1 => 1665681401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_63487eb6bc48f5_15348909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Editar auto</h1>

<form action="editarauto/<?php echo $_smarty_tpl->tpl_vars['auto']->value;?>
" method="POST" class="my-4">
    <div class="row">

        <div class="col-3">
            <div class="form-group">
                <label>Nombre del auto</label>
                <input name="name" type="text" class="form-control">
            </div>

        <div class="col-3">
            <div class="form-group">
                <label>Fecha de lanzamiento</label>
                <input name="date" type="number" class="form-control">
            </div>
        </div>
        
        <div class="col-3">
            <div class="form-group">
                <label>Color</label>
                <input name="colour" type="text" class="form-control">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>Prioridad</label>
                <select name="priority" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

        </div>
    <button type="submit" class="btn btn-success">Enviar</button>
</form><?php }
}
