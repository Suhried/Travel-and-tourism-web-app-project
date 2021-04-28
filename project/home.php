<?php

  require_once "db_config.php";
  
$email=$_GET["id"];
?>



<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/home.css">
</head>
<body>
  
<div class="list">
<ul>
  <li><a class="active" href="home.php?id=<?php echo $email;?>">Home</a></li>
  <li><a href="dashboard.php">Dashboard</a></li>
  <li><a style="float:right" href="logout.php" name="logout">Log out</a></li>
  <li><a style="float:right" href="profile1.php?id=<?php echo $email;?>">Profile</a></li>
  <li><a href="aboutus.php">About us</a></li>
  <li><a href="requestatour.php">Want to request a tour?</a></li>
</ul>
</div>
<img src="resources/the-journey.jpg" height="370" />

<form class="example" action="tour_package.php" style="margin:auto;max-width:800px">
  <input type="text" placeholder="Search tour packages.." name="search">
  <button href="tour_package.php"><i class="fa fa-search"></i></button>
</form>



<div class="card-containers">

  <div class="polaroid">
  <img src="resources/plane.png" style="width:100%" >
  <div class="container">
    <p class="p1">Air ticket</p>
    <p><a href="air-ticket.php">Book Now</a></p>
  </div>
  </div>

  <div class="polaroid">
  <img src="resources/hotel1.png" style="width:100%" >
  <div class="container">
    <p class="p1">hotel</p>
    <p><a href="hotelBoking.php">Book Now</a></p>
  </div>
  </div>

    <div class="polaroid">
  <img src="resources/resturents.png"style="width:100%" >
  <div class="container">
    <p class="p1">Resturents </p>
    <p><a href="www.google.com">Book Now</a></p>
  </div>
  </div>

    <div class="polaroid">
  <img src="resources/tourist.png" style="width:100%" >
  <div class="container">
    <p class="p1">Tourist attractions</p>
    <p><a href="www.google.com">Book Now</a></p>
  </div>
  </div>

</div>  

<div class="card-containers2">

  <div class="polaroid2">
  <img src="resources/place.png" style="width:100%" >
  <div class="container2">
    <p class="p1">Add a place</p>
    <p><a href="www.google.com">Add now</a></p>
  </div>
  </div>

  <div class="polaroid2">
  <img src="resources/car.png" style="width:100%" >
  <div class="container2">
    <p class="p1">Rent a car</p>
    <p><a href="carRent.php">Book Now</a></p>
  </div>
  </div>

  <div class="polaroid2">
  <img src="resources/couch.png" style="width:100%" >
  <div class="container2">
    <p class="p1">Couch surfing</p>
    <p><a href="couch-surfing.php">Find a sponsor</a></p>
  </div>
  </div>



</div>

</body>
</html>
