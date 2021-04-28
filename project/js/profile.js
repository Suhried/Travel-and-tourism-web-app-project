
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
		if(get("mobile").value == ""){
			get("err_mobile").innerHTML = "* mobile required";
			get("mobile").style.border="1px solid red";
			get("err_mobile").style.color=" red";
			hasError = true;
		}
		if(get("des").value == ""){
			get("err_des").innerHTML = "* Address required";
			get("des").style.border="1px solid red";
			get("err_des").style.color=" red";
			hasError = true;
		}

		return !hasError; 

	}

	function refresh(){
		get("err_full_name").innerHTML = "";
		get("err_email").innerHTML = "";
		get("err_mobile").innerHTML = "";
		get("err_des").innerHTML = "";
	}
