  <?php

  class CarsModel {

    private $db;

    public function __construct() {
    $this->db = new PDO('mysql:host=localhost;'.'dbname=db_ford;charset=utf8', 'root', '');
  }

  public function getCars () {

    $query = $this->db->prepare('SELECT * FROM autos'); //Agarro la tabla autos
    $query->execute();

    $cars = $query->fetchAll(PDO::FETCH_OBJ); // Obtengo los datos de autos como un arreglo

    return $cars;   

  }

  public function getCategories(){

    $query = $this->db->prepare("SELECT * FROM categorias");
    $query->execute();

    $categories = $query->fetchAll(PDO::FETCH_OBJ);

    return $categories;

  }

  public function Sortbyid ($id) {
    $query = $this->db->prepare("SELECT a.* FROM autos a INNER JOIN categorias b ON a.id_categoria_fk	 = b.id WHERE b.id = ?;"); //where filtra
    $query->execute([$id]);
    $products = $query->fetchAll(PDO::FETCH_OBJ);

    return $products;

  }

  public function insertCategory($name, $description) {
    $query = $this->db->prepare("INSERT INTO `categorias` (`id`, `nombre`, `descripcion`) VALUES (?, ?, ?);");
    $query->execute([NULL, $name, $description]);

    return $this->db->lastInsertId();

  }

  public function editCategory($id, $name, $description) {
    $query = $this->db->prepare("UPDATE `categorias` SET `nombre` = ?, `descripcion` = ? WHERE `categorias`.`id` = ?;");
    $query->execute([$name, $description, $id]);

  }

  
  
  public function insertCar($name, $date, $colour, $priority, $category) {
    $query = $this->db->prepare("INSERT INTO `autos` (`id`, `nombre`, `fecha`, `color`, `prioridad`, `id_categoria_fk`) VALUES (?, ? , ?, ?, ?, ?);");
    $query->execute([NULL, $name, $date, $colour, $priority, $category]);

    return $this->db->lastInsertId();
  }

  public function editCar($id, $name, $date, $colour, $priority) {
    $query = $this->db->prepare("UPDATE `autos` SET `nombre` = ?, `fecha` = ?, `color` = ?, `prioridad` = ? WHERE `autos`.`id` = ?;");
    $query->execute([$name, $date, $colour, $priority, $id]);

  }

 // function deleteCategoryByid($id) {
   // $query = $this->db->prepare('DELETE FROM categorias WHERE id = ?');
   // $query->execute([$id]);
 // }

  function deleteCarById($id) {
    $query = $this->db->prepare('DELETE FROM autos WHERE id = ?');
    $query->execute([$id]);
  }
  
 }