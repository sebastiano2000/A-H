<?php
$userName = $_POST["userName"];
$password = $_POST["password"];

include "config.php";

$login = "SELECT userName,password FROM users WHERE userName=?";
$stmt = mysqli_prepare($con,$login);
mysqli_stmt_bind_param($stmt,"s",$userName);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);

$count = mysqli_stmt_num_rows($stmt);

if($count == 1){
	mysqli_stmt_bind_result($stmt,$rowUserName,$rowPassword);
	mysqli_stmt_fetch($stmt);
	if(password_verify($password,$rowPassword)) {
		session_start();
		$_SESSION["loggedUser"] = $userName;
		header('Location: classic.php');
	}
}
echo "Invalid Username and Password"
?>