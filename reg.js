var formLabels = document.getElementsByTagName("label");
	function validation(){
	var valid = true;

	var firstName = document.regist.firstName.value;
	if(firstName==""){
		formLabels[0].innerHTML="First Name: [required]";
		formLabels[0].style="color: red";
		valid=false;
	}
	else if(!isNaN(firstName)){
		formLabels[0].innerHTML="First Name: [Wrong input]";
		formLabels[0].style="color: red";
		valid=false;
	}
	else {
		formLabels[0].innerHTML="First Name:";
		formLabels[0].style="color: white";
		valid=(valid) ? true : false;
	}
	/////
	var lastName =document.regist.lastName.value;
	if(lastName==""){
		formLabels[1].innerHTML="Last Name: [required]";
		formLabels[1].style="color: red";
		valid = false;
	}
	else if(!isNaN(lastName)){
		formLabels[1].innerHTML="Last Name: [wrong input]";
		formLabels[1].style="color: red";
		valid = false;
	}
	else {
		formLabels[1].innerHTML="Last Name:";
		formLabels[1].style="color: white";
		valid =(valid) ? true : false;
	}
	//////
	var userName=document.regist.userName.value;
	if(userName==""){
		formLabels[2].innerHTML="User Name: [required]";
		formLabels[2].style="color: red";
		valid = false;
	}
	else {
		formLabels[2].innerHTML="User Name:";
		formLabels[2].style="color: white";
		valid =(valid) ? true : false;
	}
	/////////
	var email = document.regist.email.value;
	var verify=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(email==""){
		formLabels[3].innerHTML="Email: [required]";
		formLabels[3].style="color: red";
		valid = false;
	}
	else if(!verify.test(email)){
		formLabels[3].innerHTML="Email: [Not vaild mail]";
		formLabels[3].style="color: red";
		valid = false;
	}
	else {
		formLabels[3].innerHTML="Email:";
		formLabels[3].style="color: white";
		valid =(valid) ? true : false;
	}
	//////////
	var password =document.regist.password.value;
	if(password == ""){
		formLabels[4].innerHTML="Password: [required]";
		formLabels[4].style="color: red";
		valid = false;
	}
	else if(password.length < 8){
		formLabels[4].innerHTML="Password: [Length at least 8]";
		formLabels[4].style="color: red";
		valid = false;
	}
	else {
		formLabels[4].innerHTML="Password:";
		formLabels[4].style="color: white";
		valid =(valid) ? true : false;
	}
	/////////
	var age = document.regist.age.value;
	if(age < 0 || age > 100){
		formLabels[5].innerHTML="Age: [Age must be between 0-100]";
		formLabels[5].style="color: red";
		valid = false;
	}
	else if(isNaN(age)){
		formLabels[5].innerHTML="Age: [put a number]";
		formLabels[5].style="color: red";
		valid = false;
	}
	else {
		formLabels[5].innerHTML="Age:";
		formLabels[5].style="color: white";
		valid = (valid) ? true : false;
	}
	////////
	var mobile = document.regist.mobile.value;
	if(isNaN(mobile)){
		formLabels[6].innerHTML="Mobile: [wrong data]";
		formLabels[6].style="color: red";
		valid = false;
	}
	else {
		formLabels[6].innerHTML="Mobile:";
		formLabels[6].style="color: white";
		valid =(valid) ? true : false;
	}

	return valid;

	}
	function clear2(){
	var clearall = new Array();
	clearall[0] = "First Name: *";
	clearall[1] = "Last Name: *";
	clearall[2] = "User Name *";
	clearall[3] = "Email: *";
	clearall[4] = "Password: *";
	clearall[5] = "Age:";
	clearall[6] = "Mobile:";
	for(var i=0 ; i <7 ; i++){
		formLabels[i].innerHTML = clearall[i];
		formLabels[i].style = "color: white";
	}
}
