<?php
/*require_once './libs/smarty-master/libs/Smarty.class.php';

class CarShowView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();  //inicio smarty
    }
    
    function showCars($cars, $categorias) {
        
        $this->smarty->assign('count',count($cars));
        $this->smarty->assign('cars', $cars); 
        $this->smarty->assign('count',count($categorias));
        $this->smarty->assign('categorias', $categorias);  //variables al smarty
        

        $this->smarty->display('carList.tpl');  //muestro el template

    }

    function showCarsCategory ($cars) {
        $this->smarty->assign('count',count($cars));
        $this->smarty->assign('cars', $cars);   //variables al smarty


        $this->smarty->display('carCategory.tpl');  //muestro el template
     }
}