<?php
echo '<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Sign In to Busy Bee</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="public/css/bootstrap-social.css">
  <link rel="stylesheet" href="public/css/styles.css">
</head>

<body>
  <div class="login">
    <section class="auth-form">
      <div class="img-side">
        <object data="public/img/register.svg"></object>
      </div>
      <div class="form-side">
        <object class="busybee-logo" data="public/img/busybee.svg"></object>
        <div class="welcome-text">
          <h3>Welcome to Busy bee!</h3>
        </div>';
        if($errmsg !== ''){
          echo '<p class="error" style="color: red;">'.$errmsg.'</p>';
        }
echo '<form action="/register" method="post">
        <div class="form-floating mb-2 auth-imput">
            <input type="text" class="form-control" name="username" id="floatingInput" placeholder="Username" required>
            <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating mb-2 auth-imput">
            <input type="email" class="form-control" name="email" id="floatingEmail" placeholder="name@example.com" required>
            <label for="floatingEmail">Email address</label>
          </div>
          <div class="form-floating auth-imput">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
          </div>
          <button class="color-btn" type="submit" name="RegisterSubmit">Sign In</button>
        </form>
        <div class="bottom-container">
          <h6><span> or </span></h6>
          <a class="social-btn" role="button" href="/auth/google">
            <iconify-icon inline icon="flat-color-icons:google" width="24"></iconify-icon><span> Sign in with Google</span>
          </a>
          <a class="social-btn" role="button" href="/auth/facebook">
            <iconify-icon inline icon="logos:facebook" width="24"></iconify-icon> Sign in with Facebook
          </a>
          <div class="redirect">
            Already have an account? <a href="/login">Log In</a>
          </div>
        </div>

      </div>
    </section>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.2/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  </div>
</body>

</html>';
