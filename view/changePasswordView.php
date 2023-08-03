<?php
include 'dashboardView/dashboardStart.php';
include 'dashboardView/dashboardList.php';
include 'dashboardView/dashboardSettings.php';

echo '    <div class="settings">
    <a href="/changePasswordView">Change Password</a>

    <form action="/changePassword" method="post">
      <div class="form-floating mb-2 auth-imput">
        <input type="password" class="form-control" name="current-passwd" id="floatingInput" placeholder="Current password" required>
        <label for="floatingInput">Current password</label>
      </div>
      <div class="form-floating mb-2 auth-imput">
        <input type="password" class="form-control" name="new-passwd" id="floatingPassword1" placeholder="New Password" required>
        <label for="floatingPassword1">New Password</label>
      </div>
      <div class="form-floating mb-2 auth-imput">
        <input type="password" class="form-control" name="check-new-passwd" id="floatingPassword2" placeholder="New Password" required>
        <label for="floatingPassword2">New Password</label>
      </div>
      <button class="color-btn" type="submit" name="PasswordSubmit">Change password</button>
    </form>
    <a href="/deleteAccount">Delete Account</a>
  </div>';

include 'dashboardView/dashboardEnd.php';