<?php



require_once "controllers/signupcontroller.php";
$type=$_GET["id"];


?>

<!DOCTYPE html>
<html>
<head>

   <script src = 'js/signup.js'></script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles/signup_styles.css">

</head>
<body >

<form action="" onsubmit="return validate()" method="post">
  <div class="container">
    <h1>Register as our client</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label></br>
    <input type="text" id="email" name="email" onfocusout="checkemail(this)" placeholder="Your Email" value ="<?php echo $email;?>"><span id="err_email"><?php echo $err_email;?></span></br>

    <label for="password"><b>Password</b></label></br>
    <input type="password" id="password" name="password" placeholder="Password" value ="<?php echo $pass;?>"> <span id="err_pass"><?php echo $err_pass;?></span></br>

    <label for="cpassword"><b>Repeat Password</b></label></br>
    <input type="password" id="cpassword" name="cpassword" placeholder="Repeat Password" value ="<?php echo $cpassword;?>"> <span id="c_err_pass"><?php echo $err_pass;?></span></br>

    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn" value="register">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="registration.php">Sign in</a>.</p>
  </div>

</form>

</body>
</html>