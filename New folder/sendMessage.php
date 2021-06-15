<?php
include "PHPMailerAutoload.php";
if(isset($_POST['submit'])){
	$first=$_POST['first'];
	$last=$_POST['last'];
	$subject=$_POST['subject'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	
	
	try{
		$mail=new PHPMailer;
		$mail->isSMTP();
		$mail->Host='smtp.gmail.com';
		$mail->SMTPAuth=true;
		$mail->Username='peertutoringady@gmail.com';
		$mail->Password='YashDeepakAshish';
		$mail->Port=587;
		$mail->SMTPSecure='tls';
		
		$mail->setFrom($email,$first);
		$mail->addAddress('peertutoringady@gmail.com');
		$mail->isHTML(true);
		$mail->Subject=$subject;
		$mail->Body='<p>This mail is send by '.$first.' '.$last.' ('.$email.').And the Message is: </p><br><h2>'.$message.'</h2>';
		
		if(!$mail->send()){
			echo $mail->ErrorInfo;
		}
		else{
			header('location:indexafterlogin.php');
		}
	}
	catch(\Exception $e){
		echo $e->getMessage();
	}

}
?>