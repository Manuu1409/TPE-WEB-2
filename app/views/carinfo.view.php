<?php

require_once './libs/smarty-master/libs/Smarty.class.php';

class CarsView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();  //inicio smarty

    }

    function showCars($cars, $categorias) {
        
        $this->smarty->assign('cars', $cars); 
        $this->smarty->assign('categorias', $categorias);  //variables al smarty
        
        $this->smarty->display('carList.tpl');  //muestro el template

    }


    function showCarsCategory ($categorias) {   //esto es el home
        $this->smarty->assign('count',count($categorias));
        $this->smarty->assign('categorias', $categorias);   //variables al smarty

        $this->smarty->display('carCategory.tpl');  //muestro el template

     }

     function showEditFormCategory ($id) {
        $this->smarty->assign('categoria', $id);

        $this->smarty->display('formEdit_category.tpl');

     }

     function showEditFormCar ($id) {
      $this->smarty->assign('auto', $id);

      $this->smarty->display('formEdit_car.tpl');
     }

    function showCarsList($cars) {     //esto es la lista del router
        
        $this->smarty->assign('count',count($cars));
        $this->smarty->assign('cars', $cars);   //variables al smarty

        $this->smarty->display('carListHome.tpl');  //muestro el template

     }

     function showUserRegister () {
        $this->smarty->display('register.tpl');

     }
    }


    