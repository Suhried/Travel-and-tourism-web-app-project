<?php
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$gender="";
	$err_gender="";
	$about="";
	$err_about="";
	$profession="";
	$err_profession="";
	$bio="";
	$err_bio="";
	$i=0;

	 error_reporting(E_ALL & E_STRICT); ini_set('display_errors', '1');
	 ini_set('log_errors', '0'); ini_set('error_log', './');
	 if(isset($_POST["submit"]))
	 {
		 if(empty($_POST["uname"]))
		 {
			 $err_uname="[Username Required]";
		 }
		 elseif(strlen($_POST["uname"])<6)
		 {
			 $err_uname="[Username must be 6 charachters long]";
		 }
		 elseif(strpos($_POST["uname"]," "))
		 {
			 $err_uname="[Username should not contain white space]";
		 }
		 else
		 {
			 $uname=$_POST["uname"];
		 }
		 if(empty($_POST["pass"]))
		 {
			 $err_pass="[Password Required]";
		 }
		 elseif(strpos($_POST["pass"]," "))
		 {
			 $err_pass="[Password should not contain white space]";
		 }
		 else
		 {
			 $pass=$_POST["pass"];
		 }
		 if(!isset($_POST["gender"]))
		 {
			 $err_gender="[Please select a gender]";
		 }
		 else
		 {
			 $gender=$_POST["gender"];
		 }
		 if(!isset($_POST["about"]))
		 {
			 $err_about="[At least one option must be selected]";
		 }
		 elseif(count($_POST["about"])<2)
		 {
			 $err_about="[At least 2 options need to be selected]";
		 }
		 else
		 {
			
			 $about=$_POST["about"];
		 }
		 if(!isset($_POST["profession"]))
		 {
			 $err_profession="[This field can not be skipped]";
		 }
		 else
		 {
			 $profession=$_POST["profession"];
		 }
		 if(empty($_POST["bio"]))
		 {
			 $err_bio="[Bio Required]";
		 }
		 else
		 {
			 $bio=$_POST["bio"];
		 
         }
         if(isset($_POST["submit"]))
         {
            echo "Username: ".$_POST["uname"]."<br>";
            echo "Password: ".$_POST["pass"]."<br>";
            echo "Gender: ".$_POST["gender"]."<br>";
            echo "Profession: ".$_POST["profession"]."<br>";
            echo "Bio: ".$_POST["bio"]."<br>";
            echo "Date: ".$_POST["date"]."<br>";
            echo "E-Mail: ".$_POST["email"]."<br>";
            $var = $_POST["Hobbies"];
            echo "Hobbies: ";
            count($var);
            for($i=0;$i<count($var);$i++)
            {
                echo $var[$i].", ";
            }
         }
	 }
		?>
<html>
<fieldset>
	<legend>
		<h1>Club Member Resgistration</h1>
	</legend>

	<body>
		
		<form action="" method="post">
			<table>
				<tr>
					<td><span><b>Name</b></span></td>
					<td>:<input type="text" name="uname" value="<?php echo $uname;?>">
					<span><?php echo $err_uname;?></span></td>

				</tr>
				<tr>
					<td><span><b>Username</b></span></td>
					<td>:<input type="text" name="uname" value="<?php echo $uname;?>">
					<span><?php echo $err_uname;?></span></td>

				</tr>
				<tr>
					<td><span><b>Password</b></span></td>
					<td>:<input type="password" name="pass" value="<?php echo $pass;?>">
					<span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Confirm Password</b></span></td>
					<td>:<input type="password" name="pass" value="<?php echo $pass;?>">
					<span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Email</b></span></td>
					<td>:<input type="email" name="email" value="<?php echo $email;?>">
					<span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Phone</b></span></td>
					<td>:<input type="tel" name="phone_no" size="4"> - <input type="tel" name="phone_no" size= 9></td>
				</tr>
				<tr>
					<td><span><b>Address</b></span></td>
					<td>:<input type="street" name="street"></br></td>
				</tr>
				<tr>
					<td><span><b></b></span></td>
					<td><input type="city" name="city" size="4"> - <input type="state" name="state" size= 9></td>
				</tr>
				<tr>
					<td><span><b></b></span></td>
					<td><input type="zip" name="zip">
				</tr>
				<tr>
				<td><span><b>Birth Date</b></span></td>
				
				<td>
				<select name="day">
					<option disabled selected>Day</option>
					<?php
						for($i=1;$i<=31;$i++)
						{
							echo "<option>$i</option>";
						}
					?>
					</select>
					<select name="month">
					<option disabled selected>Month</option>
					<?php
						$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
						for($j=0;$j<count($mon);$j++)
						{
							echo "<option>$mon[$j]</option>";
						}
					?>
				</select>
				<select name="year">
					<option disabled selected>Year</option>
					<?php
						for($k=1900;$k<=2021;$k++)
						{
							echo "<option>$k</option>";
						}
					?>
				</select>
				</td>
				</tr>

				<tr>
					<td><span><b>Gender</b></span></td>
					<td>:<input type="radio" name="gender" value="Male"><span>Male</span>
					    <input type="radio" name="gender" value="Female"><span>Female</span>
						<span><?php echo "&nbsp ".$err_gender;?></span></td>
				</tr>
				<tr>
					<td><span><b>Where did you</br> hear about us?</b></span></td>
					<td><input type="checkbox" name="about[]" value="friend"><span>A Friend or Colleague</br></span>
					    <input type="checkbox" name="about[]" value="Google"><span>Google</br></span>
						<input type="checkbox" name="about[]" value="Blog_Post"><span>Blog Post</br></span>
						<input type="checkbox" name="about[]" value="News_Article"><span>News Article</br></span>
						<span><?php echo "&nbsp  ".$err_about;?></span></td>
				</tr>
				
				<tr>
	 				<td><span><b>Bio</b></span></td>
					 <td>:<textarea name="bio" value="<?php echo $bio;?>"></textarea>
					 <span><?php echo "&nbsp".$err_bio;?></span></td>
				</tr>
				
			</table>
			<br>
			<input type="submit" name="submit" value="register" >
		</form>
	</body>


	</fieldset>
</html>