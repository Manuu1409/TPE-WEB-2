<?php

require_once './app/controllers/carinfo.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'inicio'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}


$params = explode('/', $action);

// instancio el unico controller que existe por ahora
$CarController = new CarController();


switch ($params[0]) {
    case 'inicio':
        $CarController->showHome();
        break;
    case 'registro':
        $CarController->showRegister();
        break;
    case 'tabla':
        $CarController->showCars();
        break;
    case 'add':
        $CarController->addCar();
        break;
    case 'delete':
            // obtengo el parametro de la acción
        $id = $params[1];
        $CarController->deleteCar($id);
        break;
        default:
        echo('404 Page not found');
        break;
}