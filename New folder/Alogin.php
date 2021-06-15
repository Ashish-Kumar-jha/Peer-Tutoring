<?php

include "connection.php";
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$query="select * from Admin where User='$email'";
	$res=mysqli_query($con,$query);
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_array($res);
		$email=$row['Email'];
		
		$password=sha1($_POST['password']);
		$password=crypt($email,$password);
		$query="select * from Admin where Email='$email' and Password='$password'";
		$res=mysqli_query($con,$query);
		if(mysqli_num_rows($res)>0){
			$row=mysqli_fetch_array($res);
			session_start();
			$_SESSION['admin']=$row['User'];
			header('location:admin.php');
		}
		else{
			echo '<script>alert("Invalid user/password"); window.location="loginadmin.php";</script>';
		}
	}
	else{
		echo '<script>alert("Invalid user/password"); window.location="loginadmin.php";</script>';
	}	
}
?>