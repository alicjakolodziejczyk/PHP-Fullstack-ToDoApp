<?php


class homeController extends authController{
  public $model;
  public function homeAction(){
    
    if($this->checkUserAccess()){
      header('Location: /dashboard');
    }
    include('view/homeView.php');
  }
}