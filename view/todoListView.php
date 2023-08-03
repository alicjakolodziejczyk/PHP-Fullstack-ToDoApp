<?php
include 'todoListView/todoListStart.php';
if($editMode){
  include 'todoListView/todoListHeadingEdit.php';
}else {
  include 'todoListView/todoListHeading.php';
}
include 'todoListView/todoListTasks.php';
include 'todoListView/todoListEnd.php';