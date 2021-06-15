<?php
include "PHPMailerAutoload.php";

if(isset($_POST['submit'])){
	$message=$_POST['message'];
	$email=$_POST['email'];
	
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
			$mail->addAddress('peertutoringady@gmail.com');
			$mail->isHTML(true);
			$mail->Subject='Complain';
			$mail->Body='<p>This complain is submit by <b>'.$email.'</b><br>Complain : '.$message.'</p>';
		
			if(!$mail->send()){
				echo $mail->ErrorInfo;
			}
			else{
				header('location:booking.php');
			}
		
		}
		catch(\Exception $e){
			echo $e->getMessage();
		}
}
?>