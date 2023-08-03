<?php
    include 'dashboardView/dashboardStart.php';
    include 'dashboardView/dashboardList.php';
    include 'dashboardView/dashboardSettings.php';
    echo '<div class="settings">
      <a href="/changePasswordView">Change Password</a>
      <a href="/deleteAccount">Delete Account</a>
    </div>';
    include 'dashboardView/dashboardEnd.php';
?>
  