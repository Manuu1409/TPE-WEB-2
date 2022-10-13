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

    $query = $this->db->prepare("SELECT * FROM categorias");  // lo mismo pero en tabla categorias
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
  
}