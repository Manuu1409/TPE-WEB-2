<?php

require_once './app/models/action.model.php';

class actionController {
    private $model;
    private $authHelper;

    public function __construct() {
        $this->model = new actionModel();
        $this->authHelper = new AuthHelper();
    }

    public function addCategory () {
      $this->authHelper->checkLoggedIn();  // para no modificarlo desde el link
        
      $name = $_POST['name'];  
      $description = $_POST['description'];

      $this->model->insertCategory($name, $description);

      header("Location: " . BASE_URL);
     

    }

    public function editCategory ($id) {
      $this->authHelper->checkLoggedIn();   //

      $name = $_POST['name'];   // validar entrada de datos
      $description = $_POST['description'];

      $this->model->editCategory($id, $name, $description);
   
      header("Location: " . BASE_URL);

    }

    public function deleteCategorybyid($id) {
      $this->authHelper->checkLoggedIn();
      
      $this->model->deleteCategoryById($id);

      header("Location: " . BASE_URL); 

    }

    // <-------------------------------------------------------------------------------------------------------> //

    public function addCar() {       //Se queda aca 
      $this->authHelper->checkLoggedIn();
         
      $name = $_POST['name'];   // validar entrada de datos
      $date = $_POST['date'];
      $colour = $_POST['colour'];
      $priority = $_POST['priority'];
      $category = $_POST['categoria'];
    
      $this->model->insertCar($name, $date, $colour, $priority, $category);
    
      header("Location: " . BASE_URL); 

    }

    public function editCar ($id) {
      $this->authHelper->checkLoggedIn();

      $name = $_POST['name'];   
      $date = $_POST['date'];
      $colour = $_POST['colour'];
      $priority = $_POST['priority'];

      $this->model->editCar($id, $name, $date, $colour, $priority);

      header("Location: " . BASE_URL);

    }

    public function deleteCar($id) {    //Se queda aca
      $this->authHelper->checkLoggedIn();
      $this->model->deleteCarById($id);

      header("Location: " . BASE_URL);

    }

}