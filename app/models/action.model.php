<?php

class actionModel {

    private $db;

    public function __construct() {
      $this->db = new PDO('mysql:host=localhost;'.'dbname=db_ford;charset=utf8', 'root', '');

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

    // <-------------------------------------------------------------------------------------------------------> //

    public function insertCar($name, $date, $colour, $priority, $category) {
      $query = $this->db->prepare("INSERT INTO `autos` (`id`, `nombre`, `fecha`, `color`, `prioridad`, `id_categoria_fk`) VALUES (?, ? , ?, ?, ?, ?);");
      $query->execute([NULL, $name, $date, $colour, $priority, $category]);

      return $this->db->lastInsertId();

    }

    public function editCar($id, $name, $date, $colour, $priority) {
      $query = $this->db->prepare("UPDATE `autos` SET `nombre` = ?, `fecha` = ?, `color` = ?, `prioridad` = ? WHERE `autos`.`id` = ?;");
      $query->execute([$name, $date, $colour, $priority, $id]);

    }

    public function deleteCarById($id) {
      $query = $this->db->prepare('DELETE FROM autos WHERE id = ?');
      $query->execute([$id]);

    }

}