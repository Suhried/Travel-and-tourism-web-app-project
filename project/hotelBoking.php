<?php


//require_once 'session.php';

require_once 'controllers/hotel-booking_controller.php';
?>

<!DOCTYPE html>
<html>
<head>
   <script src = 'js/hotelBoking.js'></script>
<link rel="stylesheet" href="styles/hotelBoking.css">
</head>
<body>
 <div class="container">

<ul>
  <li><a  href="home.php">Home</a></li>
  <li><a  href="dashboard.php">Dashboard</a></li>
  <li><a style="float:right" href="logout.php">Log out</a></li>
  <li><a style="float:right" href="profile1.php">Profile</a></li>
  <li><a href="aboutus.php">About us</a></li>
  <li><a href="requestatour.php">Want to request a tour?</a></li>
</ul>

    <form action="" onsubmit="return validate()" method="post">
        
            <p class="p3" ><b>HOTEL BOOKING<b></p>


        <div id="form">
            <h3><p class="p4" ><b>Booking details</b></p></h3>

            <div id="input">
            
            <h7>Which city you want to visit  </h7>
                
            <select id="city" name="city">
                  <option selected disabled>select city</option>
                  <?php
                  $city = array("dhaka","bangkok","singapore","kualalampur","kolkata");
                  for ($i=0;$i<count($city);$i++){
                  echo "<option>$city[$i]</option>";
                  
                }
                  ?>
            </select> 
            <span id="err_city"><?php echo $err_city;?></span>

            
            </select>
            <div id="input4">
                    <h7>check in      </h7>
                    <select id="checkin" name="Day">
        <option selected disabled>Day</option>
        <?php
                   for($i=1;$i<=31;$i++){echo "<option>$i</option>";}
        ?>
      </select>

      <select id="checkin" name="Month">
        <option  selected disabled>Month</option>
                <?php $month=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sept","Oct","Nov","Dec");
                for($i=0;$i<count($month);$i++)
                  {echo "<option>$month[$i]</oprion>";}
                ?>
      </select>

      <select id="checkin" name="Year">
        <option selected disabled>Year</option>
        <?php
                   for($i=2020;$i<=2021;$i++){echo "<option>$i</option>";}
        ?>
      </select>
      <span id="err_checkin"><?php echo $err_checkin;?></span>
    </div></br>

             <div id="input4">
                    <h7>check out   </h7>
                    <select id="checkout" name="Day">
        <option selected disabled>Day</option>
        <?php
                   for($i=1;$i<=31;$i++){echo "<option>$i</option>";}
        ?>
      </select>

      <select id="checkout" name="Month">
        <option selected disabled>Month</option>
                <?php $month=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sept","Oct","Nov","Dec");
                for($i=0;$i<count($month);$i++)
                  {echo "<option>$month[$i]</oprion>";}
                ?>
      </select>

      <select id="checkout" name="Year">
        <option selected disabled>Year</option>
        <?php
                   for($i=2020;$i<=2021;$i++){echo "<option>$i</option>";}
        ?>
      </select>
      <span id="err_checkout"><?php echo $err_checkout;?></span>
      
   
             </div>
        </div>

                <div id="input5">
                    <h3><p class="p4" ><b>Personal details</b></p></h3>
                </div>

                <div id="input6">
                    <input type="text" id="full_name" name="full_name" placeholder="Your Name" value ="<?php echo $full_name;?>"> <span id="err_full_name"><?php echo $err_full_name;?></span></br>

                    <input type="text" id="phone" name="phone" placeholder="Your mobile no." value ="<?php echo $phone;?>"><span id="err_phone"><?php echo $err_phone;?></span></br>

                    <input type="text" id="email" name="email" placeholder="Your Email" value ="<?php echo $email;?>"><span id="err_email"><?php echo $err_email;?></span></br>

                  <div id="input3">
                    <span id="input-group" class="text-primary">Gender</span> 
                    <input type="radio" name="gender" checked >Male
                    <input type="radio" name="r" >Female
                </div>
                <div id="input3">
                    <span id="input-group" class="text-primary">marital status</span> 
                    <input type="radio" name="marry" checked>Single
                    <input type="radio" name="marry" >Married
                </div>
                </div>
                <button type="submit" class="button button1">Search</button>
                
            </div>

        </form>

    </div>
</body>



</html>

