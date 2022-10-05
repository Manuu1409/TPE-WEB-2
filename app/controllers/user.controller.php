<?php

require_once './app/models/user.model.php';
require_once './app/models/user.view.model.php';

class UserController {
    private $model;
    private $view;


function __construct(){
    $this->model = new UserModel();
    $this->view = new UserView();
  }

}