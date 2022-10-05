<?php

require_once './app/models/carinfo.model.php';
require_once './app/views/carinfo.view.php';

class CarController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new CarsModel();
        $this->view = new CarsView();
    }

    public function showCars() {
        $autos = $this->model->getCars();
        $this->view->showCars($autos);
    }

    public function showHome() {
        $autos = $this->model->getCars();
        $this->view->showCarsHome($autos);
    }

    public function showRegister() {
        $this->view->showUserRegister();
  
    }

    public function addCar() {
         
        $name = $_POST['name'];   // validar entrada de datos
        $date = $_POST['date'];
        $colour = $_POST['colour'];
        $priority = $_POST['priority'];
        
        $id = $this->model->insertCar($name, $date, $colour, $priority);
        
        header("Location: " . BASE_URL); 
    }


    public function deleteCar($id) {
        $this->model->deleteCarById($id);
        header("Location: " . BASE_URL);
    }

    public function EditCar() {
        $query =  $this->db->prepare("UPDATE autos SET nombre = ?, fecha = ?, color = ?");
    }


   

    
}