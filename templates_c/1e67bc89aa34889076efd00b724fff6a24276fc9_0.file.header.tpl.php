<?php
/* Smarty version 4.2.1, created on 2022-10-13 22:36:52
  from 'C:\xampp\htdocs\TPE_WEB_2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634876e4067849_70697207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e67bc89aa34889076efd00b724fff6a24276fc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB_2\\templates\\header.tpl',
      1 => 1665693406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634876e4067849_70697207 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Ford</title>
</head>
<body>
    <header>
        <nav class="navbar" style="background-color: #e3f2fd;>
            <div class="container-fluid">
              <a class="btn btn-info" aria-current="page" href="inicio">Home</a>
              <a class="nav-link" aria-current="page" href="tablaAutos">Tabla autos</a>
              <a class="btn btn-success" aria-current="page"  href="tablaCategoria">Tabla categoria</a>
              <?php if ((!(isset($_SESSION['IS_LOGGED'])))) {?>  .
              <a class="nav-link" aria-current="page" href="login">Log in</a>
              <?php } else { ?>
                <a class="nav-link" aria-current="page" href="logout">Logout</a>
                
              <?php }?>
              
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  
                </ul>
              </div>
            </div>
          </nav>
    </header>

<?php }
}
