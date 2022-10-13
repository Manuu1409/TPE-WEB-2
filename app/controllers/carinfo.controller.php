<?php

require_once './app/models/carinfo.model.php';
require_once './app/views/carinfo.view.php';
//require_once './app/helpers/auth.helper.php';

class CarController {
    private $model;
    private $view;
   // private $authHelper;

    public function __construct() {
        $this->model = new CarsModel();
        $this->view = new CarsView();

        // barrera de seguridad
      //  $authHelper = new AuthHelper();
       // $authHelper->checkLoggedIn();
    }

    public function Sortbyid ($id) {
        $products = $this->model->Sortbyid($id);   // traigo los autos ordenados y los ordeno
        $this->view->showCarsList($products);
        
    }

    public function showCategoryList() {
        $categoria = $this->model->getCategories();
        $this->view->showCategory($categoria);
        
    }

    public function showFormCategory() {
        $this->view->showFormCategory();
        
    } 

    public function editFormCategory ($id) {
        $this->view->showEditFormCategory($id);

    }

   // <-------------------------------------------------------------------------------------------------------> //

    public function showCars() {
        $autos = $this->model->getCars();
        $categorias = $this->model->getCategories();
        $this->view->showCars($autos, $categorias);   
        
    }

    public function showCarList() {
        $autos = $this->model->getCars();
        $this->view->showCarsList($autos);
       
    }

    public function editFormCar ($id) {
        $this->view->showEditFormCar($id);

    }
    
}