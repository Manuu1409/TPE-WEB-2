<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">

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
              <a type="button" class="btn btn-secondary" href="tablaAutos">Tabla autos</a>
              <a type="button" class="btn btn-secondary"  href="tablaCategoria">Tabla categoria</a>
              {if (!isset($smarty.session.IS_LOGGED))}  {* si no esta logueado *}.
              <a type="button" class="btn btn-success" href="login">Log in</a>
              {else}
                <a type="button" class="btn btn-danger" href="logout">Logout</a>
                
              {/if}
                <ul class="navbar-nav">
                  
                </ul>
              </div>
            </div>
          </nav>
    </header>

