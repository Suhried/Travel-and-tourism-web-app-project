<?php
//require_once 'session.php';
require_once 'controllers/profile1_controller.php';

$email=$_GET["id"];

$result= getinfo($email);

?>



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles/hotelBoking.css">  
  <link rel="stylesheet" href="styles/profile1.css">
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

<h2 style="text-align:center">User Profile Card</h2>

<div class="card">
  <img src="resources/profile.png" alt="John" style="width:100%">
  <?php
      foreach($result as $row):
  ?>
  <h1><?php echo $row["name"] ?></h1>
  <p><?php echo $row["email"] ?></p>
  <p class="title"><?php echo $row["phone_no"] ?></p>
  <p><?php echo $row["address"] ?></p>
  <?php
      endforeach;
  ?>

  <p><button><a href="profile.php?id=<?php echo $email;?>">Want to UPDATE profile!!</a></button></p>
</div>

</body>
</html>
