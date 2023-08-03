<?php

class listModel extends taskModel{
  public $db;
  
  public function newList() {
    $listName = "New List";
    $userId = $_SESSION["userId"];
    $query = "INSERT INTO `lists` (`user_id`, `list_name`) VALUES (?, ?)";
    $stmt = $this->db->prepare($query);
    $stmt->execute([$userId, $listName]);
    return $stmt;
  }

  public function deleteList($id){
    $query = "DELETE FROM lists WHERE id = '" . $id . "'";
    $stmt = $this->db->prepare($query)->execute();
    return $stmt;
  }

  public function changeTitle($newTitle, $listId){
    $query = "UPDATE lists SET list_name = '" . $newTitle . "' WHERE id = '" . $listId . "'";
    $stmt = $this->db->prepare($query)->execute();
    return $stmt;
  }
}
