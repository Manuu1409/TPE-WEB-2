<?php

   /* class CarShowModel {

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
    
          $query = $this->db->prepare("SELECT * FROM categoria");
          $query->execute();
    
          $categories = $query->fetchAll(PDO::FETCH_OBJ);
    
          return $categories;
    
      }
}