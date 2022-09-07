<!DOCTYPE html>
<html>

<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="keywords" content="Login,page">
	<meta name="description" content="Login">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/log in.css?v=<?php echo time(); ?>" />
	<link rel="icon" href="img-vid/logo1.jpg" type="image/icon type"/>
	<script src="login.js"></script>
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

<div align="center" >
<div id="body">
	<form id="form" onsubmit="return validation()" method="post" name="loginForm" action="login_handler.php"/>
	<fieldset id="data">
	<legend>Please enter your data</legend>
	<br>
	
	<label class="l">Username</label>
	<input type="text" name="userName" placeholder="Enter User Name" size="30"/>
	<br><br>
	<label class="l">Password</label>
	<input type="password" name="password" placeholder="Enter your password" size="30"/>
	<br>

	</fieldset>
	<div class="formout">
	<a href="registration.php">Not a member yet?</a>
	<br>
	<input type="submit" value="Login"/>
	<input type="reset" value="Clear" onclick="clear2();">
	</div>
	</form>


	</div>
</div>

<div id="footer">© A&S copyrites are reserved</div>
</body>

</html>
