<?php

require_once 'controllers/registration_controller.php';

?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styles/registerStyle.css">
  </head>
  <body>
<form action="" class="login-box" method = "post">
  <h1>Login</h1>
  
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="email" placeholder="Email"> <div class="alert">
        <?php echo $err_email;?>
     </div>
  </div>


  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" placeholder="Password"> <div class="alert">
        <?php echo $err_pass;?>
     </div>
  </div>


  </div>


  <input type="submit" name="login" class="btn" value="login">
  <h2><a href="preregistration.php">Not a Member? Click Here</a></h2>
</form>
  </body>
</html>
