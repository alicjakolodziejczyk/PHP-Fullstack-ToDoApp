<?php
class validateModel {
  public $db;

  public function validateEmail($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      return true;
    }else{
      return false;
    }
  }

  public function validatePassword($password){
    if(filter_var($password, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/")))){
      return true;
    }else{
      return false;
    }
  }

  public function validateUsername($username){
    if(filter_var($username, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => "/^[a-zA-Z0-9]{3,}$/")))){
      return true;
    }else{
      return false;
    }
  }
  
  public function validate($email, $password, $username){
      if($this->validateUsername($username)){
            if($this->validateEmail($email)){
              if($this->validatePassword($password)){
                return "";
              }else{
                return "Wrong password, try again";
              }
            }else{
              return "Wrong email, try again";
            }
          }else{
            return "Wrong username, try again";
          }
    
  }
  
}