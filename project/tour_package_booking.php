<?php
//require_once 'session.php';
require_once "controllers/tour_package_booking_controller.php"

?>



<!DOCTYPE html>
<html>
<head>
   <script src = 'js/tour_package_booking.js'></script>
	<link rel="stylesheet" href="styles/hotelBoking.css">
	<link rel="stylesheet" href="styles/profile.css">

</head>
<body>
	<div class="list">
<ul>
  <li><a  href="home.php">Home</a></li>
  <li><a href="dashboard.php">Dashboard</a></li>
  <li><a style="float:right" href="logout.php">Log out</a></li>
  <li><a style="float:right" href="profile1.php">Profile</a></li>
  <li><a href="aboutus.php">About us</a></li>
  <li><a href="requestatour.php">Want to request a tour?</a></li>
</ul>
</div>

<h3> To request a booking please Fill up the form</h3>


<div class="container">
  <form action="" onsubmit="return validate()" method="post">
    <label for="fname">Name</label>
    <input type="text" id="full_name" name="full_name" placeholder="Your Name" value ="<?php echo $full_name;?>"> <span id="err_full_name"><?php echo $err_full_name;?></span></br>

    <label for="lname">Email</label>
    <input type="text" id="email" name="email" placeholder="Your Email" value ="<?php echo $email;?>"><span id="err_email"><?php echo $err_email;?></span></br>


                  <div id="input4">
                    <h7>Expected date of travel</h7>
                    <select id="date" style="width: 20%;" name="Day">
        <option selected disabled>Day</option>
        <?php
                   for($i=1;$i<=31;$i++){echo "<option>$i</option>";}
        ?>
      </select>

      <select id="date" style="width: 20%;" name="Month">
        <option selected disabled>Month</option>
                <?php $month=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sept","Oct","Nov","Dec");
                for($i=0;$i<count($month);$i++)
                  {echo "<option>$month[$i]</oprion>";}
                ?>
      </select>

      <select id="date" style="width: 20%;" name="Year">
        <option selected disabled>Year</option>
        <?php
                   for($i=2021;$i<=2022;$i++){echo "<option>$i</option>";}
        ?>
      </select>
      <span id="err_date"><?php echo $err_date;?></span>

</div>
    <label for="service">Package NO. (e.g. package no. 6)</label>
    <input type="text" id="service" name="service" placeholder="Type your Package NO." value ="<?php echo $service;?>"><span id="err_service"><?php echo $err_service;?></span></br>
    
    <input type="submit" value="request">
  </form>
</div>
</body>

</html>


