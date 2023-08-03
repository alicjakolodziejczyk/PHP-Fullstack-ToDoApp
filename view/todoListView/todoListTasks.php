<?php
 echo'
 <div class="box">';
    foreach ($tasks as $task) {
      if($editMode && $task['id']==$taskToEditId){
        echo '<div class="item">
              <div class="task editTask">
              <input class="todo" type="checkbox" value='.$task['id'].'>
              <form action="/todoList/?option=editTask&id='.$listId.'&TaskId='.$task['id'].'" method="post">
                <input type="text" name="newTask" autocomplete="off" value="'.$task['task'].'">
                <button type="submit" name="TaskSubmit">&#10004;</button>
              </form></div>
            </div>';
      }else{
        echo '<div class="item">
              <div class="task">';
              if ($task['status'] == '1') {
                echo '<input type="checkbox" checked>';
              }
              else {
                echo '<input type="checkbox">';
              }
              echo '
              <p>'.$task['task'].'</p> </div> <div class="options">
              <a href="?option=editTaskView&id='.$listId.'&TaskId='.$task['id'].'"><i class="fa-solid fa-pen"></i></a>
              <a href="?option=deleteTask&id='.$listId.'&TaskId='.$task['id'].'"><i class="fa-solid fa-trash-can"></i></a>
              </div>
            </div>';
      }
      
    }