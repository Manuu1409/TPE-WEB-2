
/*require_once './app/models/carShow.model.php';
require_once './app/views/carShow.view.php';

class CarShowController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new CarShowModel();
        $this->view = new CarShowView();
    }

    public function showCars() {
        $autos = $this->model->getCars();
        $categorias = $this->model->getCategories();
        $this->view->showCars($autos, $categorias);   
        
    }

    public function showCarCategory() {
        $autos = $this->model->getCars();
        $this->view->showCarsCategory($autos);

    }

    
  //  public function showRegister() {
      //  $this->view->showUserRegister();
  
   // }
}