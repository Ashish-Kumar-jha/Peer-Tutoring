<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="icon" href="images/llogo.png">
</head>

<body>

<?php
	include "PHPMailerAutoload.php";
	try{
		$mail=new PHPMailer;
		//$mail->SMTPDebug=4;
		$mail->isSMTP();
		$mail->Host='smtp.gmail.com';
		$mail->SMTPAuth=true;
		$mail->Username='vijaypop12@gmail.com';
		$mail->Password='kakarot123@';
		$mail->Port=587;
		$mail->SMTPSecure='tls';
		
		$mail->setFrom('vijay@gmail.com','PeerTutorial@noReply');
		$mail->addAddress($_POST['email']);
		$mail->addReplyTo('vijaypop12@gmail.com');
		$mail->isHTML(true);
		$mail->Subject='Form Submission';
		$mail->Body='<h1>'.$_POST['mag'].'</h1>';
		
		if(!$mail->send()){
			/*echo '<script> alert("Mail not send"); window.location="index.php"; </script>';*/
			echo "msg not send sent";
			echo $mail->ErrorInfo;
		}
		else{
			/*echo '<script> alert("Mail hs been successfully sent"); window.location="index.php"; </script>';*/
			echo "msg sent";
		}
	}
	catch(\Exception $e){
		echo $e->getMessage();
	}
	
?>
</body>
</html>
