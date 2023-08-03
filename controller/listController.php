<?php

class listController{
  public $model;

  public function newListAction() {
    $this->model->newList();
    $list = $this->model->getList();
    $last = end($list);
    header('Location: /todoList/?id='.$last['id'].'');
  }

  public function todoListAction() {
    $listName = $this->model->getList();
    $listId = $_GET['id'] ?? $listName[0]['id'];
    $listTitle = $this->model->getListName($listId);
    $editMode = false;
    $taskToEditId = -1;
    $tasks = $this->model->getTasks($listId);
    require_once('view/todoListView.php');
  }

  public function deleteListAction(){
    $listId = $_GET['id'];
    $deleteList = $this->model->deleteList($listId);
    if($deleteList){
      echo '<script>alert("Success")</script>';
      header('Location: /dashboard');
    }
    else{
      echo '<script>alert("Could not delete the list")</script>';
      $this->todoListAction();
    }
  }

  public function editNameViewAction(){
    $listName = $this->model->getList();
    $listId = $_GET['id'];
    $listTitle = $this->model->getListName($listId);
    $editMode = true;
    $taskToEditId = -1;
    $tasks = $this->model->getTasks($listId);
    require_once('view/todoListView.php');
  }

  public function editNameAction(){
    if(isset($_POST['NameSubmit'])){
      $newTitle = $_POST['newTitle'];
      $listId = $_GET['id'];
      $changeTitle = $this->model->changeTitle($newTitle,$listId);
      if($changeTitle){
        header('Location: /todoList/?id='.$_GET['id'].'');
      }
      else{
        echo '<script>alert("Could not change the title")</script>';
        $this->editNameViewAction();
      }
    }
    else {
      echo '<script>alert("post")</script>';
    }
  }

}