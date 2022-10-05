<?php
/* Smarty version 4.2.1, created on 2022-10-05 19:17:15
  from 'C:\xampp\htdocs\TPE_WEB_2\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633dbc1bdbf4a6_58622863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbe28f00174a5409a213d377a9961f000ef0acc5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB_2\\templates\\register.tpl',
      1 => 1664990233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_633dbc1bdbf4a6_58622863 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form><?php }
}
