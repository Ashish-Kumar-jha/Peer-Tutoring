<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registeration</title>
<link rel="icon" href="images/llogo.png">
</head>

<body>
<?php
	include "connection.php";
	include "PHPMailerAutoload.php";
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$contact=$_POST['contact'];
		$college=$_POST['college'];
		$branch=$_POST['branch'];
		$state=$_POST['state'];
		$email=$_POST['email'];
		$password=sha1($_POST['password']);
		$password=crypt($email,$password);
		$about=$_POST['about'];
		$query="select * from login where User_ID='$email'";
		$res=mysqli_query($con,$query);
		if(mysqli_num_rows($res)>0){
			echo '<script>alert("Email already registered."); window.location="signup.php";</script>';
		}
		else{
			$query="insert into login (Name,User_ID,Password,College,Branch,Registration_No,State,About,Mobile_No,College_ID,Img) values('$name','$email','$password','$college','$branch','','$state','$about','$contact','','')";
			if(mysqli_query($con,$query)){
				try{
					$mail=new PHPMailer;
					$mail->isSMTP();
					$mail->Host='smtp.gmail.com';
					$mail->SMTPAuth=true;
					$mail->Username='peertutoringady@gmail.com';
					$mail->Password='YashDeepakAshish';
					$mail->Port=587;
					$mail->SMTPSecure='tls';
		
					$mail->setFrom('peertutoringady@gmail.com','PeerTutoring@NoReply');
					$mail->addAddress($email);
					// 
					$mail->addBCC($contact.'@sms.clicksend.com');
					
// 
					$mail->isHTML(true);
					$mail->Subject='Registered';
					$mail->Body='<p>You have Successfully Registered in PeerTutoring site as Student, </p><br>
					<b>User ID : '.$email.'</b><br>
					<b>Password : '.$_POST['password'].'</b>';
		
					if(!$mail->send()){
						echo $mail->ErrorInfo;
					}
					else{
						
					}
					echo '<script>alert("Successfully Registered"); window.location="signup.php"</script>';
				}
				catch(\Exception $e){
					echo $e->getMessage();
				}
				
			}	
		}
	}
	else{
		header('location:signup.php');
	}
?>
</body>
</html>
