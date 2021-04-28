<?php 
require_once 'controllers/registation_controller.php';
?>

<html>
  <head>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<link rel="stylesheet" href="styles/mystyle.css">
	</head>
<body>
<div class="center-login">
	<h1 class="text text-center">Registation</h1>
	<form action="" onsubmit="return validate()" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Agency Name</h4> 
			<input type="text"  id="uname" name="name" placeholder="Angency Name" value="<?php echo $name?>" class="form-control">
			<span id="err_uname"><?php echo $err_name;?></span>
		</div>

		<div class="form-group">
			<h4 class="text">Address</h4> 
			<input type="text" id="sname" name="address" placeholder="Enter Address" value="<?php echo $address?>" class="form-control">
			<span id="err_sname"><?php echo $err_address;?></span>
		</div>

		<div class="form-group">
			<h4 class="text">Email</h4> 
			<input type="text" id="ename" name ="email" onfocusout ="checkValidEmail(this)" value ="<?php echo $email?>" class="form-control">
			<span id="err_email"><?php echo $err_email;?></span>
		</div>

        <div class="form-group">
			<h4 class="text">License</h4> 
			<input type="text"  id="license" placeholder="Licese Number" name="l_number" value="<?php echo $l_number?>" class="form-control">
			<span id= "err_license"><?php echo $err_l_number;?></span>
		</div>


		  <div class="form-group">
			<h4 class="text">Join Date:</h4> 
			<select id="zdate" name="Day">
				<option selected disabled>Day</option>
				<?php
                   for($i=1;$i<=31;$i++){echo "<option>$i</option>";}
				?>
			</select>

			<select id="zdate" name="Month">
				<option selected disabled>Month</option>
                <?php $month=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sept","Oct","Nov","Dec");
                for($i=0;$i<count($month);$i++)
                	{echo "<option>$month[$i]</oprion>";}
                ?>
			</select>

			<select id="zdate" name="Year">
				<option selected disabled>Year</option>
				<?php
                   for($i=1990;$i<=2021;$i++){echo "<option>$i</option>";}
				?>
			</select>
			<span id="err_zdate"><?php echo $err_join_date;?></span>
		</div>

		<div class="form-group">
			<h4 class="text">Phone Number</h4> 
			<input type="text"  id="pl" placeholder="Phone Number" name="phone_number" value="<?php echo $phone_number?>" class="form-control">
			<span id= "err_pl"><?php echo $err_phone_number;?></span>
		</div>

		<div class="form-group">
			<h4 class="text"> Password </h4> 
			<input type="text" id="pass" placeholder="Create a Password" name="password" value="<?php echo $password?>" class="form-control">
			<span id="err_pass"><?php echo $err_password;?></span>
		</div>
		<br>
		<br>
		<div class="form-group text-center">
			<input type="submit" class="btn btn-success" value="Submit" class="form-control">
		</div>
	</div>
 </form>
	<script>
		function get(id){
			return document.getElementById(id);

		}
		function validate(){
			refresh();
			var hasError=false;


	if (get("uname").value == ""){
			get("err_uname").innerHTML=" * Angency Required";
		
		get("err_uname").style.color=" orange";
         hasError=true;
	}

		if (get("sname").value== ""){
			get("err_sname").innerHTML=" *Address Required";
		
		get("err_sname").style.color=" orange";
         hasError=true;
	}
    
    if (get("ename").value == ""){
			get("err_email").innerHTML=" *Email Required";
		
		get("err_email").style.color=" orange";
         hasError=true;
	}
    
    if (get("license").value == ""){
			get("err_license").innerHTML=" *License Required";
		
		get("err_license").style.color=" orange";
         hasError=true;
	}

	if (get("zdate").options.selectedIndex == 0){
			get("err_zdate").innerHTML=" *Date Required";
		
		get("err_zdate").style.color=" orange";
         hasError=true;
	}

if (get("pl").value == ""){
			get("err_pl").innerHTML=" *Phone Number Required";
		
		get("err_pl").style.color=" orange";
         hasError=true;
	}
	if (get("pass").value == ""){
			get("err_pass").innerHTML=" *Password Required";
		
		get("err_pass").style.color=" orange";
         hasError=true;
	}


		return !hasError;
}
function refresh(){

	   get("err_uname").innerHTML= "";
		get("err_sname").innerHTML="";
		get("err_email").innerHTML="";
		get("err_license").innerHTML="";
	   get("err_zdate").innerHTML="";
	   get("err_pl").innerHTML= "";
		get("err_pass").innerHTML="";

}


	function checkValidEmail(email){
		var email=email.value;
		var xhttp=new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState==4 && this.status==200){
				var rs=this.responseText;
				if(rs=="\r\n\r\n\r\n\r\ntrue"){
					document.getElementById("err_email").innerHTML = "vaild email";
				}
				else document.getElementById("err_email").innerHTML = "Not a valid email";
			}
		};
		xhttp.open("GET","cheakemail.php?email="+email,true);
		xhttp.send();
	}
</script>
</body>
</html>