<?php

require_once './libs/smarty-master/libs/Smarty.class.php';

class CarsView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();  //inicio smarty

    }

    function showCategory ($categorias) {   //esto es el home
        $this->smarty->assign('count',count($categorias));
        $this->smarty->assign('categorias', $categorias);   
 
        $this->smarty->display('carCategory.tpl');  
 
    }
 
    function showEditFormCategory ($id) {    // form para editar categoria
        $this->smarty->assign('categoria', $id);
 
        $this->smarty->display('formEdit_category.tpl');
 
    }
 
    function showFormCategory () {   //form para agregar categoria
        $this->smarty->display('form_Category.tpl');
    }

    // <-------------------------------------------------------------------------------------------------------> //

    function showCars($cars, $categorias) {    //me lleva a la tabla auto
        
       $this->smarty->assign('cars', $cars);   //variables al smarty
       $this->smarty->assign('categorias', $categorias);    // esto es el select para seleccionar categoria del auto
        
       $this->smarty->display('carList.tpl');  //muestro el template

    }

    function showEditFormCar ($id) {   // form para editar auto
       $this->smarty->assign('auto', $id);

       $this->smarty->display('formEdit_car.tpl');

    }

    function showCarsList($cars) {     //  muestro la lista de autos dependiendo la categoria 
        
        $this->smarty->assign('count',count($cars));
        $this->smarty->assign('cars', $cars);   

        $this->smarty->display('carListHome.tpl');  

    }

}


    