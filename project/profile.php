<?php
//require_once 'session.php';
require_once "controllers/profile_controller.php";

$email=$_GET["id"];

$result=getdata($email);

?>



<!DOCTYPE html>
<html>
<head>
	 <script src = 'js/profile.js'></script>
	<link rel="stylesheet" href="styles/hotelBoking.css">  
	<link rel="stylesheet" href="styles/profile.css">

</head>
<body>
	 <div class="list">
<ul>
  <li><a  href="home.php">Home</a></li>
  <li><a  href="dashboard.php">Dashboard</a></li>
  <li><a style="float:right" href="logout.php">Log out</a></li>
  <li><a class="active" style="float:right" href="profile1.php">Profile</a></li>
  <li><a  href="aboutus.php">About us</a></li>
  <li><a href="requestatour.php">Want to request a tour?</a></li>
</ul>
</div>

<h3 align="center"> Profile Form </h3>
<p align="center"> please fill up your personal information </p>

<div class="container">
  <form action="" onsubmit="return validate()" method="post">
    <label for="fname">Name</label>
    <input type="hidden" name="email" value="<?php echo $result["sl"];?>">
    <input type="text" id="full_name" name="full_name" placeholder="Your Name" value ="<?php echo $result["name"];?>"> <span id="err_full_name"><?php echo $err_full_name;?></span></br>

    <label for="lname">Email</label>
    <input  type="hidden" name="email" value="<?php echo $result["sl"];?>">
    <input disabled type="text" id="email" name="email" placeholder="Your Email" value ="<?php echo $result["email"];?>"><span id="err_email"><?php echo $err_email;?></span></br>

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Bangladesh</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="mobile">Mobile number</label>
    <input type="hidden" name="email" value="<?php echo $result["sl"];?>">
    <input type="text" id="mobile" name="mobile" placeholder="Your Mobile No." value ="<?php echo $result["phone_no"];?>" ><span id="err_mobile"><?php echo $err_mobile;?></span></br>

    <label for="des">Address</label>
    <input type="hidden" name="email" value="<?php echo $result["sl"];?>">
    <input type="text" id="des" name="des" placeholder="Your Address" value ="<?php echo $result["address"];?>"><span id="err_des"><?php echo $err_des;?></span></br>
    <div id="input3">
                    <span id="input-group" class="text-primary">Gender</span> 
                    <input type="radio" name="gender" checked >Male
                    <input type="radio" name="r" >Female
                </div></br>
    <input type="submit" name="update" value="Update">
  </form>
</div>
</body>


</html>


