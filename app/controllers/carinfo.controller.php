<?php

require_once './app/models/carinfo.model.php';
require_once './app/views/carinfo.view.php';
require_once './app/helpers/auth.helper.php';

class CarController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new CarsModel();
        $this->view = new CarsView();

        // barrera de seguridad
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();
    }
    

    public function showRegister() {
        $this->view->showUserRegister();
  
    }

    public function Sortbyid ($id) {
        $products = $this->model->Sortbyid($id);   // traigo los autos ordenados y los ordeno
        $this->view->showCarsList($products);
        
    }

    public function showCarCategory() {
        $categoria = $this->model->getCategories();
        $this->view->showCategory($categoria);

    }

    public function editFormCategory ($id) {
        $this->view->showEditFormCategory($id);

    }

    public function editCategory ($id) {
        $name = $_POST['name'];   // validar entrada de datos
        $description = $_POST['description'];

       $this->model->editCategory($id, $name, $description);
       
       header("Location: " . BASE_URL);

    }

   // public function deleteCategorybyid ($id) {
      //  $this->model->deleteCategoryByid($id);
       // header("Location: " . BASE_URL);


   // }

    public function showCars() {
        $autos = $this->model->getCars();
        $categorias = $this->model->getCategories();
        $this->view->showCars($autos, $categorias);   
        
    }


    public function showCarList() {
        $autos = $this->model->getCars();
        $this->view->showCarsList($autos);
       
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

    
    public function deleteCar($id) {    //Se queda aca
        $this->model->deleteCarById($id);
        header("Location: " . BASE_URL);
    }

    public function editCar ($id) {
        $name = $_POST['name'];   
        $date = $_POST['date'];
        $colour = $_POST['colour'];
        $priority = $_POST['priority'];

        $this->model->editCar($id, $name, $date, $colour, $priority);

        header("Location: " . BASE_URL);

    }

    public function editFormCar ($id) {
        $this->view->showEditFormCar($id);

    }

    
}