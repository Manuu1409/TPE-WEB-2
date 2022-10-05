<?php
/* Smarty version 4.2.1, created on 2022-10-05 17:59:57
  from 'C:\xampp\htdocs\TPE_WEB_2\templates\form_cars.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633da9fd353a67_67030160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2b42146c97af17680a2618037afae9551796e61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB_2\\templates\\form_cars.tpl',
      1 => 1664985592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633da9fd353a67_67030160 (Smarty_Internal_Template $_smarty_tpl) {
?> 
        
<!-- formulario de alta de tarea -->
<form action="add" method="POST" class="my-4">
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
</form>

<?php }
}
