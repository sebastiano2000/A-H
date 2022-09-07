<?php
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$userName = $_POST["userName"];
$email = $_POST["email"];
$password = $_POST["password"];
$passworHashed = password_hash($password, PASSWORD_DEFAULT);
$age = $_POST["age"];
$mobile = $_POST["mobile"];
$dept = $_POST["dept"];

include "config.php";

$insert = "INSERT INTO users(firstName,lastName,userName,email,password,age,mobile,dept) 
values(?,?,?,?,?,?,?,?)";

$stmt = mysqli_prepare($con, $insert);
mysqli_stmt_bind_param($stmt, "ssssssss", $firstName, $lastName, $userName, $email, $passworHashed, $age, $mobile, $dept);

$result = mysqli_stmt_execute($stmt);

if($result){
	header('Location: log in.php');
}
else{
	echo "Error:" .mysqli_stmt_error($stmt);
}

?>