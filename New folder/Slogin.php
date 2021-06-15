<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="icon" href="images/llogo.png">
</head>

<body>
<?php
	include "connection.php";
	if(isset($_POST['submit'])){
		$user=$_POST['email'];
		$password=sha1($_POST['password']);
		$password=crypt($user,$password);
		$query="select * from login where User_ID='$user' and Password='$password'";
		$res=mysqli_query($con,$query);
		if(mysqli_num_rows($res) > 0){
			$row=mysqli_fetch_array($res);
			$name=$row['Name'];
			session_start();
			$_SESSION['user_id']=$user;
			
			header('location:indexafterlogin.php');
		}
		else{
			echo '<script>alert("Invalid user/password"); window.location="index.php";</script>';
		}
	}
	else{
		header('location:index.php');
	}
?>
</body>
</html>
