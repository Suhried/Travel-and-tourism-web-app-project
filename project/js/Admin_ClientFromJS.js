function get(id)
{
	return document.getElementById(id);
}

function checkNameValidity(name){
	hasError=false;

    if(name.value.length<6){
        get("err_name").innerHTML= "*Name Must Be Greater Than 6";
		name.style.border="1px solid red";
		hasError=true;
    }
    else if(name.value.indexOf(" ")>-1){
    	get("err_name").innerHTML= "*No Space Allowed";
		name.style.border="1px solid red";
		hasError=true;
  }
}



function validate()
{
	refresh();
	var hasError= false;

	if(get("name").value == ""){
		get("err_name").innerHTML= "*Name Required";
		get("name").style.border="1px solid red";
		hasError=true;
    }

     var name=get("name");
     checkNameValidity(name);

    if(get("address").value == ""){
		get("err_address").innerHTML="*Address Required";
		get("address").style.border="1px solid red";
		hasError=true;
	}

	if (get("email").value == "") {
		get("err_email").innerHTML="*Email Needed";
		get("email").style.border="1px solid red";
		hasError=true;
	}

    if (get("joindate").options.selectedIndex == 0) {
		get("err_joindate").innerHTML="*Date Needed";
		get("joindate").style.border="1px solid red";
		hasError=true;
	}
     
    if (get("type").value == "") {
		get("err_type").innerHTML="*Type Needed";
		get("type").style.border="1px solid red";
		hasError=true;
	}
	if (get("phone").value == ""){
		get("err_phone").innerHTML="*Phone Needed";
		get("phone").style.border="1px solid red";
		hasError=true;
	}
	if (get("password").value == "") {
		get("err_password").innerHTML="*Password Needed";
		get("password").style.border="1px solid red";
		hasError=true;
	}


	return !hasError;
}

function refresh(){
	get("err_name").innerHTML= "";
	get("err_address").innerHTML= "";
	get("err_email").innerHTML= "";
	get("err_joindate").innerHTML= "";
	get("err_type").innerHTML= "";
	get("err_phone").innerHTML= "";
	get("err_password").innerHTML= "";
}