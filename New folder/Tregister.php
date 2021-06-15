<?php
include "connection.php";
include "PHPMailerAutoload.php";
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$mobile=$_POST['contact'];
	$college=$_POST['college'];
	$subject=$_POST['subject'];
	$state=$_POST['state'];
	$user=$_POST['email'];
	$password=sha1($_POST['password']);
	$password=crypt($user,$password);
	$about=$_POST['about'];
	$query="select * from teacherlogin where Email='$user'";
		$res=mysqli_query($con,$query);
		if(mysqli_num_rows($res)>0){
			echo '<script>alert("Email already registered."); window.location="signuptutor.php";</script>';
		}
		else{
			$query="insert into teacherlogin (Name,Mobile_No,College,Subject,State,Email,Password,About,Booked,College_ID,Img,Resume) values('$name','$mobile','$college','$subject','$state','$user','$password','$about',0,'','','')";
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
					$mail->addAddress($user);
					$mail->addBCC($contact.'@sms.clicksend.com');
					$mail->isHTML(true);
					$mail->Subject='Registered';
					$mail->Body='<p>You have Successfully Registered in PeerTutoring site as Tutor, </p><br>
					<b>User ID : '.$user.'</b><br>
					<b>Password : '.$_POST['password'].'</b>';
		
					if(!$mail->send()){
						echo $mail->ErrorInfo;
					}
					else{
						
					}
					echo '<script>alert("Successfully Registered"); window.location="signuptutor.php"</script>';
				}
				catch(\Exception $e){
					echo $e->getMessage();
				}
	
	}	
		}
	
}


?>