<?php
	include "connection.php";
	include "PHPMailerAutoload.php";
	session_start();
	$email=$_SESSION['email'];
	$check=$_SESSION['check'];
	if($check == 3){
		$query="select * from admin where User='$email'";
		$res=mysqli_query($con,$query);
		if(mysqli_num_rows($res)>0){
			$row=mysqli_fetch_array($res);
			$email=$row['Email'];
		}
	}
	try{
			$mail=new PHPMailer;
			$mail->isSMTP();
			$mail->Host='smtp.gmail.com';
			$mail->SMTPAuth=true;
			$mail->Username='peertutoringady@gmail.com';
			$mail->Password='YashDeepakAshish';
			$mail->Port=587;
			$mail->SMTPSecure='tls';
		
			$mail->setFrom('peertutoringady@gmail.com','PeerTutorial@noReply');
			$mail->addAddress($email);
			$mail->isHTML(true);
			$mail->Subject='Email Verification';
			$mail->Body='<p>This email is send for verification to reset password.</p><br>
					<a href="http://localhost:8080/oneschool-master/Password.php?email='.$email.'&check='.$check.'">Click here</a>
					
		';
		
			if(!$mail->send()){
				echo $mail->ErrorInfo;
			}
			else{
				session_destroy();
				echo '<script>alert("Verification mail send to your email."); window.location="forget.php" </script>';
			}
		
		}
	catch(\Exception $e){
		echo $e->getMessage();
	}
?>