<?php

require_once './app/controllers/carinfo.controller.php';
require_once './app/controllers/user.controller.php';
require_once './app/controllers/action.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'tablaAutos'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}


$params = explode('/', $action);

// instancio los controllers
$CarController = new CarController();
$userController = new UserController();
$actionController = new actionController();

switch ($params[0]) {
    case 'login':
        $userController->showFormLogin();  // muestra el form login
    break;
    case 'validate':
        $userController->validateUser();
    break;
    case 'logout':
        $userController->logout();
    break;
    case 'inicio':
        $CarController->showCategoryList();   //aca va las categorias en el home
    break;
    case 'lista':
        $CarController->Sortbyid($params[1]);  // al hacer click en categorias me muestra la lista de autos
    break;
    case 'tablaAutos':
        $CarController->showCars();   //aca me muestra la tabla 
    break;
    case 'agregarcategoria':
        $actionController->addCategory();   // me añade una categoria
    break;
    case 'tablaCategoria':
        $CarController->showFormCategory();   //me muestra el form categoria
    break;
    case 'agregarauto':
        $actionController->addCar();
    case 'editarcategoria':
        $actionController->editCategory($params[1]);   //accion que edita categoria
    break;
    case 'categoria':
        $CarController->editFormCategory($params[1]);   // me lleva el form de categoria para editar
    break;
    case 'editarauto':
        $actionController->editCar($params[1]);   //accion edita auto
    break;
    case 'auto':
        $CarController->editFormCar($params[1]);   // me lleva al form auto
    break;
       // case 'borrarcategoria':
          //  $id = $params[1];
          //  $CarController->deleteCategorybyid($id);   
          //  break;
    case 'borrarauto':
        $id = $params[1];  // obtengo el parametro de la acción
        $actionController->deleteCar($id);   //me borra el auto
        break;
        default:
        echo('404 Page not found');
    break;
}