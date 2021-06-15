<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Generate Password</title>
</head>

<body>
<form action="" method="post">
<input type="text" name="user" placeholder="Enter user name">
<input type="text" name="pass" placeholder="Enter password">
<input type="text" name="email" placeholder="Enter email">
<input type="submit" name="submit" value="Generate">
</form>
<?php
	if(isset($_POST['submit'])){
		$user=$_POST['user'];
		$email=$_POST['email'];
		$password=sha1($_POST['pass']);
		$password=crypt($email,$password);
?>
UserID : <?=$user ?><br>
Password : <?=$password ?><br>
Email : <?=$email ?>

<?php
	}
?>
</body>
</html>
