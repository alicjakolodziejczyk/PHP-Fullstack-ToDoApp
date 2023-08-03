 <?php
echo '
<div class="item">
    <form action="/todoList/?option=addTask&id='.$listId.'" method="post">
      <input type="text" name="newTask" placeholder="New task" autocomplete="off">
      <button type="submit" name="TaskSubmit">+</button>
    </form>
</div>
</div>';

include dirname(__DIR__) .'/dashboardView/dashboardEnd.php';