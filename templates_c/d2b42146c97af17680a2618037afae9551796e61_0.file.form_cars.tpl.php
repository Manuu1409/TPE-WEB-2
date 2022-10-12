<?php
/* Smarty version 4.2.1, created on 2022-10-12 20:43:31
  from 'C:\xampp\htdocs\TPE_WEB_2\templates\form_cars.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63470ad3bd0a96_06852078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2b42146c97af17680a2618037afae9551796e61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB_2\\templates\\form_cars.tpl',
      1 => 1665600208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63470ad3bd0a96_06852078 (Smarty_Internal_Template $_smarty_tpl) {
?> <h1>Tabla de autos </h1>
        
<!-- formulario de alta de tarea -->
<form action="agregarauto" method="POST" class="my-4">
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

        <div class="col-3">
            <div class="form-group">
                <label>Categoria</label>
                <select name="categoria" class="form-control">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                    <option value=<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
        </div>
    
    <button type="submit" class="btn btn-success">Enviar</button>
</form>

<?php }
}
