<?php

class settingsController{
  public $model;

  public function changePasswordViewAction(){
    $listName = $this->model->getList();
    include('view/changePasswordView.php');
    exit;
  }
  public function changePasswordAction(){
    if (isset($_POST['PasswordSubmit'])) {
      $currpassword = $_POST['current-passwd'];
      $password = $_POST['new-passwd'];
      $newpassword = $_POST['check-new-passwd'];
      if($this->model->checkPassword(md5($currpassword)) == 1){
        if($this->model->changePassword(md5($password),md5($newpassword)) == 1){
          echo '<script>alert("Password changed successfully")</script>';
          header('Location: /settings');
        } else {
          echo '<script>alert("Error: password do not match")</script>';
          $this->changePasswordViewAction();
        }
      } else {

        echo '<script>alert("Incorrect password")</script>';
        $this->changePasswordViewAction();
      }
    }
  }

  public function deleteAccountAction(){
    $userId = $_SESSION['userId'];
    $deleteAccount = $this->model->deleteAccount($userId);
    if($deleteAccount){
      unset($_SESSION['userLogInStatus']);
      unset($_SESSION['userId']);
      unset($_SESSION['username']);
      header('Location: /');
    } else { 
      
      header('Location: /settings');
      echo '<script>alert("Could not delete account")</script>';
    }
  }
  public function settingsAction(){
    $listName = $this->model->getList();
    include('view/settingsView.php');
  }
}