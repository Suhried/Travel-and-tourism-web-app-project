<?php

$full_name="";
$err_full_name="";
$phone="";
$err_phone="";
$hasDigit="";
$email="";
$err_email="";


    function validateEmail($email)
    {
        $pos_at = strpos($email,"@");
        $pos_dot = strpos($email, ".",$pos_at+1);
        if($pos_at < $pos_dot)
        {
            return true;
        }
        return false;

    }

    if($_SERVER["REQUEST_METHOD"]=="POST")
  {


    if(empty($_POST["email"]))
    {

    $err_email=" * email required";

    }
    elseif(!validateEmail($_POST["email"]))
    {
    $err_email= " * not a valid email";
    }


  }

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["full_name"])){
    $err_full_name=" * name required";
  }

    if(empty($_POST["phone"]))
    {
    $err_phone=" * phone number required";
    }


}

?>

<!DOCTYPE html>
<html>
<head>
<style>

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  width: 100%;
  margin-top: auto;
  
  

}

li a {
  float: left;
}


li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}


.active {
  background-color: #4CAF50;
}

#form{
    background-color: #e06d2a;
    height:500px;
    width:500px;
    margin:left;
    padding:20px;
    opacity: 0.7;
}
#form h3{
    border-bottom: 2px solid #3399ff;
    width:210px;
    padding: 5px;
}

#input #input-group{
    width:300px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input2 #input-group{
    width:195px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}

#input4 #input-group{
    width:300px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input4 #input-group1{
    width:615px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input5 h3{
    border-bottom: 2px solid #3399ff;
    width:220px;
    padding: 5px;
}
#input6 #input-group{
    width:300px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input6 #input-group1{
    width:615px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
.p3 {
  font-size: 25px;
  margin-left: 10px;
  font-family: "Copperplate", "Papyrus", fantasy;
}

.p4 {
  font-family: "Lucida Console", "Courier New", monospace;
}

.button1 {
  background-color: white; 
  color: black; 
  width: 100px;
  height: 40px;
  margin-left: 100px;
  margin-top: 12px;
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

</style>
</head>
<body>
 <div class="container">

    <ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="">Discover</a></li>
  <li><a style="float:right" href="#login">Log in</a></li>
  <li><a href="#about">About us</a></li>
</ul>

    <form action="" method="post">
        
            <p class="p3" ><b>We have large number of volunteer <br>to stay at their home<b></p>


        <div id="form">
            <h3><p class="p4" ><b>Booking details</b></p></h3>

            <div id="input">
            
            <h7>Which city you want to visit  </h7>
                
            <select name="city">
                  <option selected disabled>select city</option>
                  <?php
                  $city = array("dhaka","bangkok","singapore","kualalampur","kolkata");
                  for ($i=0;$i<count($city);$i++){
                  echo "<option>$city[$i]</option>";
                }
                  ?>
            </select>   

            
            </select>
            <div id="input4">
                    <h7>check in      </h7>
                    <input type="Date" id="input-group"
             </div></br>

             <div id="input4">
                    <h7>check out   </h7>
                    <input type="Date" id="input-group"
             </div>
        </div>

        

                <div id="input5">
                    <h3><p class="p4" ><b>Personal details</b></p></h3>
                </div>

                <div id="input6">
                    <input type="text" id="input-group" name="full_name"placeholder="Full Name"><?php echo $err_full_name;?></br>
                    <input type="text" id="input-group" name="phone" placeholder="Phone Number"><?php echo $err_phone;?></br>
                    <input type="text" id="input-group" name="email" placeholder="Email"><?php echo $err_email;?></br>

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
                <button type="submit" class="button button1">Submit</button>
                
            </div>

        </form>

    </div>
</body>
</html>

