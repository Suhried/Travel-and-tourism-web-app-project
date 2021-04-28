<?php

require_once "controllers/requestatour_controller.php"
?>

<!DOCTYPE html>
<html>
<head>
   <script src = 'js/requestatour.js'></script>
  <link rel="stylesheet" href="styles/hotelBoking.css">
<link rel="stylesheet" href="styles/requestatour.css">
</head>
<div>

<ul>
  <li><a  href="home.php">Home</a></li>
  <li><a  href="dashboard.php">Dashboard</a></li>
  <li><a style="float:right" href="logout.php">Log out</a></li>
  <li><a style="float:right" href="profile1.php">Profile</a></li>
  <li><a href="aboutus.php">About us</a></li>
  <li><a class="active" href="requestatour.php">Want to request a tour?</a></li>
</ul>
</div>
<body>
  

<h2>You can request a tour to our travel agencies.</h2>
<p>please submit the form below to send a request to our agencies.</p>

<div class="container">
  <form action="" onsubmit="return validate()" method="post">
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
     <input type="text" id="full_name" name="full_name" placeholder="Your Name" value ="<?php echo $full_name;?>"> <span id="err_full_name"><?php echo $err_full_name;?></span></br>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Email</label>
    </div>
    <div class="col-75">
      <input type="text" id="email" name="email" placeholder="Your Email" value ="<?php echo $email;?>"><span id="err_email"><?php echo $err_email;?></span></br>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="country">Country (you want to go)</label>
    </div>
    <div class="col-75">
      <select id="country" name="country">
        <option value="where do you wan to go?">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Please type the detail description (e.g. time,date,location,itenerary)</label>
    </div>
    <div class="col-75">
      <input type="text" id="des" name="des" placeholder="" style="height:200px" value ="<?php echo $des;?>"><span id="err_des"><?php echo $err_des;?></span></br>
    <div id="input3">
    </div>
  </div>
  <div class="row">
    <input type="submit"  value="send to the travel agency">
  </div>
  </form>
</div>

</body>


</html>
