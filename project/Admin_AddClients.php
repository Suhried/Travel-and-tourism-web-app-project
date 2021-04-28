<?php 
/*session_start();
  if(!isset($_SESSION["loggedin"]))
{
    header("Location: registration.php");
}*/
include 'Admin_Client_Header.php';
require_once 'controllers/Admin_ClientController.php';
require_once 'models/db_config.php';
?>
<html>
<head>
    <script src = 'js/Admin_ClientFromJS.js'></script>
</head>
<body>
<div class="center">
	<h3 class="text">Client Registraion</h3>
	<form action="" onsubmit="return validate()" method="post" class="form-horizontal form-material">
		
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="text" id="name" placeholder="Client Name" name="client_Name" value ="<?php echo $client_Name;?>" class="form-control">
            <span id="err_name"><?php echo $err_client_Name;?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Address:</h4> 
			<input type="text" id="address" placeholder="House No,Road,City,Country" name="client_Address" value="<?php echo $client_Address?>" class= "form-control">
			<span id="err_address"><?php echo $err_client_Address;?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Email:</h4> 
			<input type="text" id="email" placeholder="Enter a Valid Email" name="client_Email" onfocusout="checkEmail(this)" value="<?php echo $client_Email?>" class="form-control">
			<span id="err_email"><?php echo $err_client_Email;?></span>
		</div>
		

	    <div class="form-group">
			<h4 class="text">Join Date:</h4> 
			<select id="joindate" name="Day">
				<option selected disabled>Day</option>
				<?php
                   for($i=1;$i<=31;$i++){echo "<option>$i</option>";}
				?>
			</select>

			<select id="joindate" name="Month">
				<option selected disabled>Month</option>
                <?php $month=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sept","Oct","Nov","Dec");
                for($i=0;$i<count($month);$i++)
                	{echo "<option>$month[$i]</oprion>";}
                ?>
			</select>

			<select id="joindate" name="Year">
				<option selected disabled >Year</option>
				<?php
                   for($i=1990;$i<=2021;$i++){echo "<option>$i</option>";}
				?>
			</select>
			<span id="err_joindate"><?php echo $err_client_joinDate;?></span>
		</div>

        <div class="form-group">
			<h4 class="text">Client Type:</h4> 
			<input type="text" id="type" placeholder="Travellers/Agency/HOwner" name="client_type" value="<?php echo $client_type?>" class="form-control">
			<span id="err_type"><?php echo $err_client_type;?></span>
		</div>

		<div class="form-group">
			<h4 class="text">Phone No:</h4> 
			<input type="text" id="phone" placeholder="Phone Number" name="client_Phone" value="<?php echo $client_Phone?>" class="form-control">
			<span id="err_phone"><?php echo $err_client_Phone;?></span>

		<div class="form-group">
			<h4 class="text">Password:</h4> 
			<input type="text" id="password" placeholder="Create a Temp Password" name="client_Password" value="<?php echo $client_Password?>" class="form-control">
			<span id="err_password"><?php echo $err_client_Password;?></span>
		</div>

		<div class="form-group text-center">
			<input type="submit" class="btn btn-success" value="Create Account" class="form-control">
		</div>

	</form>
 </div>
 <script>
     function checkEmail(client_Email){
        var email=client_Email.value;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange=function(){
            if(this.readyState==4 && this.status==200){
              var rs=this.responseText;
              if(rs=="true"){
               document.getElementById("err_email").innerHTML="";
              }
              else document.getElementById("err_email").innerHTML="Already Exist";
            }
        };
        xhttp.open("GET","controllers/Admin_CheckEmailValidation.php?client_Email="+email,true);
        xhttp.send();
     }
 </script>>
</body>
</html>


<?php include 'Admin_Home_Footer.php';?>
