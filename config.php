<?php
$con = mysqli_connect("localhost:3307","root","") or die("Error: Can't connect to server");
$db = mysqli_select_db($con,"website") or die("Error: Can't connect to database");
?>