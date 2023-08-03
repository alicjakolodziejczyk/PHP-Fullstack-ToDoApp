<?php
class authController extends dashboardController{

  public $model;

  public function checkUserAccess(){
    if(!isset($_SESSION['userLogInStatus'])){
      return False;
    }
    else{
      return True;
    }
  }

  public function loginAction(){
    if(isset($_POST['LoginSubmit'])){
      $email = $_POST['email'];
      $password = $_POST['password'];

      $checkUserLogin = $this->model->CheckUserLogin($email, md5($password));
      if($checkUserLogin){
        $_SESSION['userLogInStatus'] = 1;
        $_SESSION['userId'] = $this->model->getUserId($email);
        $_SESSION['username'] = $this->model->getName($_SESSION['userId']);
        header('Location: /dashboard');
        exit;
      }else{
        echo '<script>alert("Wrong email or password, try again")</script>';
      }
    }
    if(!isset($_SESSION['userLogInStatus'])){
      require_once('view/loginView.php');
    }else{
      header('Location: /dashboard');
    }
  }

  public function logoutAction(){
    unset($_SESSION['userLogInStatus']);
    unset($_SESSION['userId']);
    unset($_SESSION['username']);
    return header('Location: /login');
  }

  public function registerAction(){
    $errmsg = '';
    if(isset($_POST['RegisterSubmit'])){
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      if($this->model->userExistence($email)){
        $errmsg = 'This email is already taken';
      }else{
        include_once 'model/validateModel.php';
        $validationModel = new validateModel();
        $errmsg = $validationModel->validate($email, $password, $username);
        if($errmsg == ''){
          $userReg = $this->model->UserRegister($username, $email, md5($password));
          $_SESSION['userLogInStatus'] = 1;
          $_SESSION['userId'] = $this->model->getUserId($email);
          $_SESSION['username'] = $this->model->getName($_SESSION['userId']);
        }else{
          include 'view/registerView.php';
        }
      }
      
      
    }
    if(!isset($_SESSION['userLogInStatus'])){
      require_once('view/registerView.php');
    }else{
      header('Location: /dashboard');
    }
  }
}