<?php

//require_once 'session.php';

require_once 'controllers/tour_package_controller.php';

 $products = getAllProducts();
?>


<!DOCTYPE html>
<html>
<head>

 <link rel="stylesheet" href="styles/hotelBoking.css">

<link rel="stylesheet" href="styles/tour_package_styles.css">
<link rel="stylesheet" href="styles/dashboard_styles.css">

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

<h4 align="center">Search our travel pachages<h4>

<div align="center" id="">
  <input  style="position: center;max-width:500px;" id="search_text" type="text" onkeyup="suggest(this)" placeholder="Search by the location..">
  <p id="suggestion">

  </p>  
</div>

<table align="center" id="customers">
  <tr>
    <th>Package No.</th>
    <th>Location</th>
    <th>Category</th>
    <th>Price</th>
    <th>Description</th>
    

  </tr>
 <?php 
        foreach($products as $row):?>
        <tbody>
            <td><?php echo $row["sl"];?></td>
            <td><?php echo $row["place_name"];?></td>
            <td><?php echo $row["category"];?></td>
            <td><?php echo $row["price"];?></td>
            <td><?php echo $row["description"];?></td> 
            <td><a href="tour_package_booking.php" class="btn btn-danger">request</a></td>
        </tbody>
        <?php endforeach;?>
</table>

</body>
<script>
   function suggest(control){
    var key = control.value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){ 
        document.getElementById("suggestion").innerHTML = this.responseText;
        
      }
    };
    xhttp.open("GET","search_package.php?key="+key,true);
    xhttp.send();
   }

</script>
</html>
