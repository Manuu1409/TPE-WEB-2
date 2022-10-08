<?php

require_once './app/controllers/carinfo.controller.php';
require_once './app/controllers/carShow.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'tabla'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}


$params = explode('/', $action);

// instancio el unico controller que existe por ahora
$CarController = new CarController();


switch ($params[0]) {
    case 'inicio':
        $CarController->showCarCategory();   //aca va las categorias en el homes
        break;
    case 'lista':
        $CarController->showCarList();  // al hacer click en categorias me muestra la lista , todavia no hecho
        break;
    case 'registro':
        $CarController->showRegister();   //esto es el registro
        break;
    case 'tabla':
        $CarController->showCars();   //aca me muestra la tabla para poner o borrar autos
        break;
    case 'add':
        $CarController->addCar();   // me añade un auto
        break;
    case 'delete':
            // obtengo el parametro de la acción
        $id = $params[1];
        $CarController->deleteCar($id);   //me borra el auto
        break;
        default:
        echo('404 Page not found');
        break;
}