<?php
/*
require_once './app/models/table.model.php';
//require_once './app/views/table.view.php';


class tableController {
    private $model;
   // private $view;

    public function __construct() {
        $this->model = new tableModel();
      //  $this->view = new CarsView();

    }
 

    public function addCar() {       //Se queda aca 
         
        $name = $_POST['name'];   // validar entrada de datos
        $date = $_POST['date'];
        $colour = $_POST['colour'];
        $priority = $_POST['priority'];
        $category = $_POST['categoria'];
        
         $this->model->insertCar($name, $date, $colour, $priority, $category);
        
        header("Location: " . BASE_URL); 
    }

    public function editCategory ($id) {
      $name = $_POST['name'];   // validar entrada de datos
      $description = $_POST['description'];

     $this->model->editCategory($id, $name, $description);
     
     header("Location: " . BASE_URL);

  }


    public function deleteCar($id) {    //Se queda aca
        $this->model->deleteCarById($id);
        header("Location: " . BASE_URL);
    }

    
}