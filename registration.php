<!DOCTYPE html>
<html>

<head>
	<title>Registration</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="Registration,page">
	<meta name="description" content="Registration">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/registration.css?v=<?php echo time(); ?>" />
	<link rel="icon" href="img-vid/logo1.jpg" type="image/icon type"/>
	<script src="reg.js"></script>
</head>

<body>

	<nav>
		<img src="img-vid/logo1.jpg" alt="" width="8%">
		<ul>
			<li><a href="home main.php"> Home </a></li>
			<li><a href="about.php"> About us </a></li>
			<li><a href="contact us.php"> Contact us </a></li>
		</ul>
	</nav>

<div align="center">
<div id="body">
<form class="back" onsubmit="return validation()" method="post" name="regist" action="register_handler.php">
<fieldset class="data" >
		<legend><h2>Be Part of A&S Teams</h2></legend>
		<label>First Name <span>*</span></label>
		<input class="lab" type="text" name="firstName" placeholder="Enter First Name" size="30"   />
		<br><br>

		<label>Last Name <span>*</span></label>
		<input class="lab" type="text" name="lastName" placeholder="Enter Last Name" size="30" />
		<br><br>
		<label>User Name <span>*</span></label>
		<input class="lab" type="text" name="userName" placeholder="Enter User Name" size="30"  />
		<br><br>

		<label>Email <span>*</span></label>
		<input class="lab" type="text" name="email" placeholder="Enter Email" size="30"  />
		<br><br>

		<label>Password <span>*</span></label>
		<input class="lab" type="password" name="password" placeholder="Enter Password" size="30"  />
		<br><br>

		<label>Age</label>
		<input class="lab" type="text" name="age" placeholder="Enter Age" size="30" />
		<br><br>


		<label>Mobile</label>
		<input class="lab" type="text" name="mobile" placeholder="Enter Mobile" size="30"  />
		<br><br>

		<label>Join our team as</label> <br>
		<div class="ali">
			<input class="check" type="radio" name="dept" value="CS"/> Become a Model
			<input class="check" type="radio" name="dept" value="IS"/> Become a Customer
		</div>
		<br>


</fieldset>
	<div id="button">
		<input type="submit" value="Register"/>
		<input type="reset" value="Clear" onclick="clear2();" />
		<input type="button" value="Help" />
		</div>

</form>
</div>
</div>

<div id="footer">© A&S copyrites are reserved</div>

</body>

</html>
