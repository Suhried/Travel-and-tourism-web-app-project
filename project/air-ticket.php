<?php

require_once 'controllers/air-ticket_controller.php';

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles/hotelBoking.css">  
<link rel="stylesheet" href="styles/air-ticket.css">
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
 <div class="container">

  

    <form action="" onsubmit="return validate()" method="post">
        
            <p class="p3" ><b>Airlines Booking Form<b></p>

        <div id="form">
            <h3><p class="p4" ><b>Booking details</b></p></h3>

            <div id="input">
            <select id="departure_airport" name="departure_airport">
                <option selected disabled>Departure airport</option>
                  <?php
                  $departure_airport = array("dhaka","khulna","chittagong","coxs bazar","rajshahi","jessore");
                  for ($i=0;$i<count($departure_airport);$i++){
                  echo "<option>$departure_airport[$i]</option>";
                    }
                  ?>
                </select><span id="err_departure_airport"><?php echo $err_departure_airport;?></span>
          

            <select id="arrival_airport" name="arrival_airport">
                  <option selected disabled>Arrival airport</option>
                  <?php
                  $arrival_airport = array("dhaka","khulna","chittagong","coxs bazar","rajshahi","jessore");
                  for ($i=0;$i<count($arrival_airport);$i++){
                  echo "<option>$arrival_airport[$i]</option>";
                }
                  ?>
            </select>
            <span id="err_arrival_airport"><?php echo $err_arrival_airport;?></span>

             </br>
             
            <p class="p5">departure date</p>
                <select id="departure_date" name="Day">
        <option selected disabled>Day</option>
        <?php
                   for($i=1;$i<=31;$i++){echo "<option>$i</option>";}
        ?>
      </select>

      <select id="departure_date" name="Month">
        <option selected disabled>Month</option>
                <?php $month=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sept","Oct","Nov","Dec");
                for($i=0;$i<count($month);$i++)
                  {echo "<option>$month[$i]</oprion>";}
                ?>
      </select>

      <select id="departure_date" name="Year">
        <option selected disabled>Year</option>
        <?php
                   for($i=2020;$i<=2021;$i++){echo "<option>$i</option>";}
        ?>
      </select>
      <span id="err_departure_date"><?php echo $err_departure_date;?></span>
      
    </br>

      
            <select id="preffered_airlines" name="preffered_airlines">
                  <option selected disabled>preffered airlines</option>
                  <?php
                  $preffered_airlines = array("Bangladesh biman","US bangla","novo air","air india","regent","spice jet");
                  for ($i=0;$i<count($preffered_airlines);$i++){
                  echo "<option>$preffered_airlines[$i]</option>";
                }
                  ?>
            </select>
            <span id="err_preffered_airlines"><?php echo $err_preffered_airlines;?></span> 

            <select id="preffered_seating" name="preffered_seating">
                  <option selected disabled>preffered seating</option>
                  <?php
                  $preffered_seating = array("business class","economy class");
                  for ($i=0;$i<count($preffered_seating);$i++){
                  echo "<option>$preffered_seating[$i]</option>";
                }
                  ?>
            </select>
            <span id="err_preffered_seating"><?php echo $err_preffered_seating;?></span>

            <select id="passenger" name="passenger">
                  <option selected disabled>passenger number</option>
                  <?php
                  $passenger = array("1","2","3","4","5","6","7","8","9","10");
                  for ($i=0;$i<count($passenger);$i++){
                  echo "<option>$passenger[$i]</option>";
                }
                  ?>
            </select>
            <span id="err_passenger"><?php echo $err_passenger;?></span>

        </div>
</br>
        
                <div id="input3">
                    <span id="input-group" class="text-primary">Select Your Fare</span> 
                    <input type="radio" name="r" >One Way
                    <input type="radio" name="r" checked>Round Trip
                </div>
</br>
                <div id="input4">
                    <h7>return date   </h7>
                    <select id="return_date" name="Day">
        <option selected disabled>Day</option>
        <?php
                   for($i=1;$i<=31;$i++){echo "<option>$i</option>";}
        ?>
      </select>

      <select id="return_date" name="Month">
        <option selected disabled>Month</option>
                <?php $month=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sept","Oct","Nov","Dec");
                for($i=0;$i<count($month);$i++)
                  {echo "<option>$month[$i]</oprion>";}
                ?>
      </select>

      <select id="return_date" name="Year">
        <option selected disabled>Year</option>
        <?php
                   for($i=1990;$i<=2021;$i++){echo "<option>$i</option>";}
        ?>
      </select><span id="err_return_date"><?php echo $err_return_date;?></span>
      
    
                    
                </div>

                <div id="input5">
                    <h3 ><p class="p4" ><b>Personal details<b></p></h3>
                </div>

                <div id="input6">
                   <input type="text" id="full_name" name="full_name" placeholder="Your Full Name" value ="<?php echo $full_name;?>"> <span id="err_full_name"><?php echo $err_full_name;?></span></br>

                    <input type="text" id="phone" name="phone" placeholder="Your mobile no." value ="<?php echo $phone;?>"><span id="err_phone"><?php echo $err_phone;?></span></br>

                    <input type="text" id="email" name="email" placeholder="Your Email" value ="<?php echo $email;?>"><span id="err_email"><?php echo $err_email;?></span></br>
                </div>
                <button type="submit" class="button button1">Submit</button>
                
            </div>

        </form>

    </div>
</body>
<script>
  function get(id){
    return document.getElementById(id);
  }
  function validate(){
    refresh();  
    var hasError=false;
    var name=get("full_name");
    if(name.value == ""){
      get("err_full_name").innerHTML = "* name required";
      get("full_name").style.border="1px solid red";
      get("err_full_name").style.color=" red";
      hasError = true;
    }
    if(get("email").value == ""){
      get("err_email").innerHTML = "* email required";
      get("email").style.border="1px solid red";
      get("err_email").style.color=" red";
      hasError = true;
    }

    if(get("phone").value == ""){
      get("err_phone").innerHTML = "* email required";
      get("phone").style.border="1px solid red";
      get("err_phone").style.color=" red";
      hasError = true;
    }

    if (get("departure_airport").options.selectedIndex == 0){
        get("err_departure_airport").innerHTML=" * Date Required";
        get("departure_airport").style.border="1px solid red";
        get("err_departure_airport").style.color=" red";
        hasError=true;
    }

    if (get("arrival_airport").options.selectedIndex == 0){
        get("err_arrival_airport").innerHTML=" * Date Required";
        get("arrival_airport").style.border="1px solid red";
        get("err_arrival_airport").style.color=" red";
        hasError=true;
    }

    if (get("departure_date").options.selectedIndex == 0){
        get("err_departure_date").innerHTML=" * Date Required";
        get("departure_date").style.border="1px solid red";
        get("err_departure_date").style.color=" red";
        hasError=true;
    }

    if (get("preffered_airlines").options.selectedIndex == 0){
        get("err_preffered_airline").innerHTML=" * Date Required";
        get("preffered_airline").style.border="1px solid red";
        get("err_preffered_airline").style.color=" red";
        hasError=true;
    }

    if (get("preffered_seating").options.selectedIndex == 0){
        get("err_preffered_seating").innerHTML=" * Date Required";
        get("preffered_seating").style.border="1px solid red";
        get("err_preffered_seating").style.color=" red";
        hasError=true;
    }

    if (get("passenger").options.selectedIndex == 0){
        get("err_passenger").innerHTML=" * Date Required";
        get("passenger").style.border="1px solid red";
        get("err_passenger").style.color=" red";
        hasError=true;
    }

    if (get("return_date").options.selectedIndex == 0){
        get("err_return_date").innerHTML=" * Date Required";
        get("return_date").style.border="1px solid red";
        get("err_return_date").style.color=" red";
        hasError=true;
    }

    return !hasError; 

  }

  function refresh(){
    get("err_full_name").innerHTML = "";
    get("err_email").innerHTML = "";
    get("err_phone").innerHTML = "";
    get("err_departure_airport").innerHTML = "";
    get("err_arrival_airport").innerHTML = "";
    get("err_departure_date").innerHTML = "";
    get("err_preffered_airline").innerHTML = "";
    get("err_preffered_seating").innerHTML = "";
    get("err_passenger").innerHTML = "";
    get("err_return_date").innerHTML = "";
  }


</script>

</html>

