<?php
class dashboardController {
  public $model;
  

  public function dashboardAction() {
    $listName = $this->model->getList();
    if($listName == null) {
      include('view/dashboardView.php');
    } else {
      header('Location: /todoList/?id='.$listName[0]['id'].'');
    }
    
  }
}