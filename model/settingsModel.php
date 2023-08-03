<?php
class settingsModel extends dashboardModel {
  public $db;

  public function changePassword($password, $newpassword){
    if($password == $newpassword){
      $query = "UPDATE users SET password = '" . $newpassword . "' WHERE id = '" . $_SESSION['userId'] . "'";
      $stmt = $this->db->prepare($query)->execute();
      return True;
    } else {
      return False;
    }

  }

  public function deleteAccount($id){
    $query = "DELETE FROM users WHERE id = '" . $id . "'";
    $stmt = $this->db->prepare($query)->execute();
    return $stmt;
  }

  public function checkPassword($password){
    $query = "SELECT password FROM users WHERE id = '" . $_SESSION['userId'] . "'";
    $stmt = $this->db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if($result['password'] == $password){
        return True;
    } else {
        return False;
    }
}

}