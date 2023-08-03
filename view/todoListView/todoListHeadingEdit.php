<?php
echo '
<div class="box" id="heading">

  
<form class="item" action="/todoList/?option=editName&id='.$listId.'" method="post">
<input type="text" name="newTitle" autocomplete="off" value="'.$listTitle.'">
<button type="submit" name="NameSubmit">&#10004;</button>
</form>
</div>';