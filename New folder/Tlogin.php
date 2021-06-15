<?php
include "connection.php";
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$password=sha1($_POST['password']);
	$password=crypt($email,$password);
	$query="select * from teacherlogin where Email='$email' and Password='$password'";
	$res=mysqli_query($con,$query);
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_array($res);
		session_start();
		$_SESSION['email']=$email;
		header('location:teachersprofile.php');
	}
	else{
		echo '<script>alert("Invalid email/password");</script>';
	}
}

?>