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

    if (get("date").options.selectedIndex == 0){
        get("err_date").innerHTML=" * Date Required";
		get("err_date").style.color=" red";
        hasError=true;
    }
    
    if(get("service").value == ""){
      get("err_service").innerHTML = "* package no. required";
      get("service").style.border="1px solid red";
      get("err_service").style.color=" red";
      hasError = true;
    }

    return !hasError; 

  }

  function refresh(){
    get("err_full_name").innerHTML = "";
    get("err_email").innerHTML = "";
    get("err_service").innerHTML = "";
  }

