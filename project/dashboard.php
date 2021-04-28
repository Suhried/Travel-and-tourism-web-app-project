<?php

require_once 'models/db_config.php';
$query= "select * from t_activity where status='pending'";
$result= get($query);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles/hotelBoking.css">
<link rel="stylesheet" href="styles/dashboard_styles.css">
</head>
<body>

  <div class="list">
<ul>
  <li><a  href="home.php">Home</a></li>
  <li><a class="active" href="dashboard.php">Dashboard</a></li>
  <li><a style="float:right" href="logout.php">Log out</a></li>
  <li><a style="float:right" href="profile1.php">Profile</a></li>
  <li><a href="aboutus.php">About us</a></li>
  <li><a href="requestatour.php">Want to request a tour?</a></li>
</ul>
</div>

<table align="center" id="customers">
  <tr>
    
    <th>Name</th>
    <th>Service Type</th>
    <th>Email</th>
    <th>Date</th>
    <th>Status</th>

  </tr>
 <?php 
        foreach($result as $row):?>
        <tbody>
            
            <td><?php echo $row["name"];?></td>
            <td><?php echo $row["service"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["date"];?></td>
            <td><?php echo $row["status"]?></td>
            <td><a href="controllers/dashboard_delete_controller.php?id=<?php echo $row['sl'];?>" class="btn btn-danger">Cancel</a></td>
        </tbody>
        <?php endforeach;?>
</table>

</body>
</html>
