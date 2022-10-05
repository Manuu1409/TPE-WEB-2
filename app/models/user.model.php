<?php

Class UserModel {
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_ford;charset=utf8', 'root', '');
    }
 
    public function insertNewUser($email, $password){
        $query = $this->db->prepare("INSERT INTO usuario(email, contraseña VALUES(?, ?)");
        $query->execute([$email, $password]);
    }
}