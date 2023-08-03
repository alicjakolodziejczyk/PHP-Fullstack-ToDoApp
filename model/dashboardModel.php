<?php

class dashboardModel{
  public $db;

  public function getList(){
    $query = "SELECT `id`, `list_name` FROM `lists` WHERE `user_id` = '" . $_SESSION['userId'] . "'";
    $stmt = $this->db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getListName($id){
    $query = "SELECT `list_name` FROM `lists` WHERE `id` = ?";
    $stmt = $this->db->prepare($query);
    $stmt->execute([$id]);
    $listName = $stmt->fetch();
    return $listName['list_name'];
  }
}