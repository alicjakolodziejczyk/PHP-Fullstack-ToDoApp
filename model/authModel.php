<?php

class authModel{
  public $db;
  public function CheckUserLogin($email, $password){
    $query = "SELECT * FROM users WHERE email = '" . $email . "'";
    $stmt = $this->db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if($result && $result['password'] == $password){
      return True;
  } else {
      return False;
  }
  }

  function userExistence($email){
    $query = 'SELECT * FROM `users` WHERE email="' .$email . '"';
    $result = $this->db->prepare($query);
    $result->execute();
    $count = $result->rowCount();
    if($count > 0){
      return true;
    }
    else {
      return false;
    }
  }


  public function UserRegister($username,$email, $password){
    $query = "INSERT INTO users (username, email, password) VALUES ('" . $username . "', '" . $email . "', '" . $password . "')";
    $stmt = $this->db->query($query);
    return $stmt;
  }
  
  public function getUserId($email){
    $query = "SELECT `id` FROM `users` WHERE email = '" . $email . "'";
    $stmt = $this->db->query($query)->fetch(PDO::FETCH_ASSOC);
    return $stmt['id'];
  }

  public function getName(){
    $userId = $_SESSION['userId'];
    $query = "SELECT username FROM users WHERE id = '" . $userId . "'";
    $stmt = $this->db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['username'] ?? 'User';;
  }

  
}