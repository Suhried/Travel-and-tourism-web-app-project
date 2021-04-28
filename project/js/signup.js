
function get(id){
    return document.getElementById(id);
  }
  function validate(){
    refresh();  
    var hasError=false;
    
    if(get("email").value == ""){
      get("err_email").innerHTML = " * email required";
      get("email").style.border="1px solid red";
      get("err_email").style.color=" red";
      hasError = true;
    }
    if(get("password").value == ""){
      get("err_pass").innerHTML = " * password required";
      get("password").style.border="1px solid red";
      get("err_pass").style.color=" red";
      hasError = true;
    }
    if(get("cpassword").value == ""){
      get("c_err_pass").innerHTML = " * password required";
      get("cpassword").style.border="1px solid red";
      get("c_err_pass").style.color=" red";
      hasError = true;
    }

    return !hasError; 

  }

  function refresh(){
    get("err_email").innerHTML = "";
    get("err_pass").innerHTML = "";
    get("err_pass").innerHTML = "";
    
    
  }

	function checkemail(email)
  {
  			//alert(email.value);
		var email = email.value;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){ 
				var rs = this.responseText;
				if(rs == "true"){
					document.getElementById("err_email").innerHTML = " ok";
				}
				else  document.getElementById("err_email").innerHTML = " * This email is already taken";
			
			}
		};
		xhttp.open("GET","checkemail.php?email="+email,true);
		xhttp.send();	
	}
