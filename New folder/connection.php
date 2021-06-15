<?php
$host="localhost";
$dbuser="root";
$dbpassword="";
$dbname="project";
$con=mysqli_connect($host,$dbuser,$dbpassword,$dbname);
if(mysqli_connect_errno()){
	die("connection failed".mysqli_connect_error());
}
/*
else{
	echo '<script>alert("Welcome")</script>';
}*/
?>