<?php
class taskModel extends dashboardModel{
  public $db;

  public function addTask($taskName, $listId){
    $query = "INSERT INTO `tasks` (`task`, `list_id`, `status`) VALUES ('".$taskName."', '".$listId."', 0)";
    $stmt = $this->db->query($query);
    return $stmt;
  }

  public function getTasks($listId){
    $query = "SELECT * FROM `tasks` WHERE `list_id` = '".$listId."'";
    $stmt = $this->db->query($query);
    return $stmt;
  }

  public function deleteTask($taskId){
    $query = "DELETE FROM `tasks` WHERE `id` = '".$taskId."'";
    $stmt = $this->db->prepare($query)->execute();
    return $stmt;  
  }

  public function editTask($newTask, $taskId){
    $query = "UPDATE `tasks` SET `task` = '".$newTask."' WHERE `id` = '".$taskId."'";
    $stmt = $this->db->prepare($query)->execute();
    return $stmt;
  }
}
