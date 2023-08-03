<?php

class taskController {
  public $model;

  public function addTaskAction(){
    if(isset($_POST['TaskSubmit'])){
      $taskName = $_POST['newTask'];
      $listId = $_GET['id'];
      $addTask = $this->model->addTask($taskName, $listId);
      if($addTask){
        header('Location: /todoList/?id='.$listId);
      }else {
        echo '<script>alert("Something went wrong")</script>';
      }
    }else{
      echo '<script>alert("Something went wrong")</script>';
    }
  }

  public function deleteTaskAction(){
    if (isset($_GET['TaskId'])) {
      $taskId = $_GET['TaskId'];
      $listId = $_GET['id'];
      $deleteTask = $this->model->deleteTask($taskId);
      if ($deleteTask) {
        header('Location: /todoList/?id=' . $listId . '');
      } else {
        echo '<script>alert("Could not delete the task")</script>';
      }
    } else {
      echo '<script>alert("Something went wrong")</script>';
    }
  }

  public function editTaskViewAction(){
    $listName = $this->model->getList();
    $listId = $_GET['id'];
    $listTitle = $this->model->getListName($listId);
    $editMode = true;
    $taskToEditId = $_GET['TaskId'];
    $tasks = $this->model->getTasks($listId);
    require_once('view/todoListView.php');
  }

  public function editTaskAction()
  {
    if (isset($_POST['TaskSubmit'])) {
      $newTask = $_POST['newTask'];
      $taskId = $_GET['TaskId'];
      $listId = $_GET['id'];
      $editTask = $this->model->editTask($newTask, $taskId);
      if ($editTask) {
        header('Location: /todoList/?id=' . $listId . '');
      } else {
        echo '<script>alert("Could not edit the task")</script>';
      }
    } else {
      echo '<script>alert("Something went wrong")</script>';
    }
  }
}