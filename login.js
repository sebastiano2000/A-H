var formLabels = document.getElementsByTagName("label");
	function validation(){
	var valid = true;

	var userName=document.loginForm.userName.value;
	if(userName==""){
		formLabels[0].innerHTML="User Name: [required]";
		formLabels[0].style="color: red";
		valid = false;
	}
	else {
		formLabels[0].innerHTML="User Name:";
		formLabels[0].style="color: white";
		valid =(valid) ? true : false;
	}
	
	var password =document.loginForm.password.value;
	if(password == ""){
		formLabels[1].innerHTML="Password: [required]";
		formLabels[1].style="color: red";
		valid = false;
	}
	else if(password.length < 8){
		formLabels[1].innerHTML="Password: [Length at least 8]";
		formLabels[1].style="color: red";
		valid = false;
	}
	else {
		formLabels[1].innerHTML="Password:";
		formLabels[1].style="color: white";
		valid =(valid) ? true : false;
	}

	return valid;

	}
		
function clear2(){
	var clearall = new Array();
	clearall[0] = "Username:";
	clearall[1] = "Password:";
			
	for(var i=0 ; i <2 ; i++){
		formLabels[i].innerHTML = clearall[i];
		formLabels[i].style = "color: white";
	}
}