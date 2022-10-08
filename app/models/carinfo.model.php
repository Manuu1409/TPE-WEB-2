  <?php

  class CarsModel {

    private $db;

    public function __construct() {
      $this->db = new PDO('mysql:host=localhost;'.'dbname=db_ford;charset=utf8', 'root', '');
  }


  function getCars () {

  //Agarro la tabla autos

  $query = $this->db->prepare('SELECT * FROM autos');
  $query->execute();

  // Obtengo los datos de autos como un arreglo

  $cars = $query->fetchAll(PDO::FETCH_OBJ);

  return $cars;   

    }

    function getCategories(){

      $query = $this->db->prepare("SELECT * FROM categorias");
      $query->execute();

      $categories = $query->fetchAll(PDO::FETCH_OBJ);

      return $categories;

  }
  

    public function insertCar($name, $date, $colour, $priority, $category) {
      $query = $this->db->prepare("INSERT INTO `autos` (`id`, `nombre`, `fecha`, `color`, `prioridad`, `id_categoria_fk`) VALUES (?, ? , ?, ?, ?, ?);");
      $query->execute([NULL, $name, $date, $colour, $priority, $category]);

      return $this->db->lastInsertId();
  }

  function deleteCarById($id) {
    $query = $this->db->prepare('DELETE FROM autos WHERE id = ?');
    $query->execute([$id]);
  }

  }