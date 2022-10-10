<?php

  /*class tableModel {

    private $db;

    public function __construct() {
      $this->db = new PDO('mysql:host=localhost;'.'dbname=db_ford;charset=utf8', 'root', '');

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