  <?php

  class CarsModel {

    private $db;

    public function __construct() {
      $this->db = new PDO('mysql:host=localhost;'.'dbname=db_ford;charset=utf8', 'root', '');
  }


  function getCars () {

  // Me conecto a la base de datos , abrir conexion

  $db = new PDO('mysql:host=localhost;'.'dbname=db_ford;charset=utf8' , 'root', '');


  //Agarro la tabla car_information

  $query = $db->prepare('SELECT * FROM autos');
  $query->execute();

  // Obtengo los datos de car_information como un arreglo

  $cars = $query->fetchAll(PDO::FETCH_OBJ);

  return $cars;   

    }

    public function insertCar($name, $date, $colour, $priority) {
      $query = $this->db->prepare("INSERT INTO autos (nombre, fecha, color, prioridad ) VALUES (?, ? ,?, ?)");
      $query->execute([$name, $date, $colour, $priority]);

      return $this->db->lastInsertId();
  }

  function deleteCarById($id) {
    $query = $this->db->prepare('DELETE FROM autos WHERE id = ?');
    $query->execute([$id]);
  }

  }