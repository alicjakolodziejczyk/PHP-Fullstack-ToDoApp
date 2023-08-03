<?php
include 'dashboardView/dashboardStart.php';
include 'dashboardView/dashboardList.php';
include 'dashboardView/dashboardSettings.php';
echo '<object data="../public/img/no-lists.svg" class="no-lists"></object>
<a href="/newList/" class="no-lists-link">Click here to create a new List</a>';
include 'dashboardView/dashboardEnd.php';