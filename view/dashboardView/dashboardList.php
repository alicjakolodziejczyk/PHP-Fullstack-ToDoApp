<?php foreach ($listName as $list) { 
        echo '<li><a href="/todoList/?id='.$list['id'].'">'.$list['list_name'].'</a></li>';
       } ?>