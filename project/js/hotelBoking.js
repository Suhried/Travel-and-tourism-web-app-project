
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

    if (get("city").options.selectedIndex == 0){
        get("err_city").innerHTML=" * Date Required";
        get("city").style.border="1px solid red";
        get("err_city").style.color=" red";
        hasError=true;
    }

    if (get("checkin").options.selectedIndex == 0){
        get("err_checkin").innerHTML=" * Check-in Date Required";
        get("checkin").style.border="1px solid red";
        get("err_checkin").style.color=" red";
        hasError=true;
    }

    if (get("checkout").options.selectedIndex == 0){
        get("err_checkout").innerHTML=" * Check-out Date Required";
        get("checkout").style.border="1px solid red";
        get("err_checkout").style.color=" red";
        hasError=true;
    }

    if(get("phone").value == ""){
      get("err_phone").innerHTML = "* email required";
      get("phone").style.border="1px solid red";
      get("err_phone").style.color=" red";
      hasError = true;
    }
   
    return !hasError; 

  }

  function refresh(){
    get("err_full_name").innerHTML = "";
    get("err_email").innerHTML = "";
    get("err_phone").innerHTML = "";
    get("err_checkout").innerHTML = "";
    get("err_checkin").innerHTML = "";
    get("err_city").innerHTML = "";
  }

