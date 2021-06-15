<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="images/llogo.png">
</head>
<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");
include "connection.php";
include "PHPMailerAutoload.php";
$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b><center>Transaction status is success</center></b>" . "<br/>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}

	if (isset($_POST) && count($_POST)>0 ){ 	
		foreach($_POST as $paramName => $paramValue) {
			if($paramName != 'CHECKSUMHASH'){
	?>		
				<center><table width="600">
					<tr>
						<td><?php echo $paramName;?></td>
						<td align="right"><?php echo $paramValue;?></td>
					</tr>
				</table>
				</center>
	<?php
			}	
		}
		
		if ($_POST["STATUS"] == "TXN_SUCCESS"){
			$order=$_POST["ORDERID"];
			$txn=$_POST['TXNID'];
			$amt=$_POST['TXNAMOUNT'];
			$btxn=$_POST['BANKTXNID'];
			$bank=$_POST['BANKNAME'];
			$mode=$_POST['PAYMENTMODE'];
			$date=$_POST['TXNDATE'];
			$query="update transaction set Txn_ID='$txn',TXN_Date='$date', Txn_Amount='$amt',BankTxn_ID='$btxn',Bank_Name='$bank',Mode='$mode' where Order_ID='$order'";
			mysqli_query($con,$query);
	
			$query="select * from transaction where Order_ID='$order'";
			$res=mysqli_query($con,$query);
			$row=mysqli_fetch_array($res);
			$cust=$row['User'];
			$tutor=$row['Tutor'];
			$ask=$row['Ask'];
			$start=$row['Start'];
			$end=$row['End'];
			$mode=$row['TutingMode'];
			
			$query="select * from login where User_ID='$cust'";
			$res=mysqli_query($con,$query);
			$row=mysqli_fetch_array($res);
			$cust_name=$row['Name'];
	
			$query="select * from teacherlogin where Email='$tutor'";
			$res=mysqli_query($con,$query);
			$row=mysqli_fetch_array($res);
			$tutor_name=$row['Name'];
			$book=$row['Booked'];
			$book=$book+1;
			$query="update teacherlogin set Booked='$book' where Email='$tutor'";
			mysqli_query($con,$query);
		
		
			try{
			$mail=new PHPMailer;
		//$mail->SMTPDebug=4;
			$mail->isSMTP();
			$mail->Host='smtp.gmail.com';
			$mail->SMTPAuth=true;
			$mail->Username='peertutoringady@gmail.com';
			$mail->Password='YashDeepakAshish';
			$mail->Port=587;
			$mail->SMTPSecure='tls';
		
			$mail->setFrom('peertutoringady@gmail.com','PeerTutorial@noReply');
			$mail->addAddress($cust);
			//$mail->addReplyTo('vijaypop12@gmail.com');

			$mail->isHTML(true);
			$mail->Subject='Booking Confirmed';
			$mail->Body='<center><h1>Booking Confirmed</h1><br>
					<table width="300">
				<tr>
					<td>OrderID :</td>
					<td align="right">'.$order.'</td>
				</tr>
				<tr>
					<td>Tutor :</td>
					<td align="right">'.$tutor_name.'</td>
				</tr>
				<tr>
					<td>TutorID :</td>
					<td align="right">'.$tutor.'</td>
				</tr>
				<tr>
					<td>Amount :</td>
					<td align="right">'.$amt.'</td>
				</tr>
				<tr>
					<td>Starting Date :</td>
					<td align="right">'.$start.'</td>
				</tr>
				<tr>
					<td>Ending Date :</td>
					<td align="right">'.$end.'</td>
				</tr>
				<tr>
					<td>Mode :</td>
					<td align="right">'.$mode.'</td>
				</tr>
			</table>
			</center>
		';
		
			if(!$mail->send()){
				echo $mail->ErrorInfo;
			}
			else{
				echo "";
			}
		
		//sending main to tutor
			$email=new PHPMailer;
		//$mail->SMTPDebug=4;
			$email->isSMTP();
			$email->Host='smtp.gmail.com';
			$email->SMTPAuth=true;
			$email->Username='peertutoringady@gmail.com';
			$email->Password='YashDeepakAshish';
			$email->Port=587;
			$email->SMTPSecure='tls';
			$email->setFrom('peertutoringady@gmail.com','PeerTutorial@noReply');
			$email->addAddress($tutor);
		//$mail->addReplyTo('vijaypop12@gmail.com');
			// $mail->addBCC($contact.'@sms.clicksend.com');
			$email->isHTML(true);
			$email->Subject='Booking Confirmed';
			$email->Body='<center><h1>Booking Confirmed</h1><br>
					<table width="300">
				<tr>
					<td>OrderID :</td>
					<td align="right">'.$order.'</td>
				</tr>
				<tr>
					<td>Student :</td>
					<td align="right">'.$cust_name.'</td>
				</tr>
				<tr>
					<td>Question :</td>
					<td align="right">'.$ask.'</td>
				</tr>
				<tr>
					<td>StudentID :</td>
					<td align="right">'.$cust.'</td>
				</tr>
				<tr>
					<td>Amount :</td>
					<td align="right">'.$amt.'</td>
				</tr>
				<tr>
					<td>Starting Date :</td>
					<td align="right">'.$start.'</td>
				</tr>
				<tr>
					<td>Ending Date :</td>
					<td align="right">'.$end.'</td>
				</tr>
				<tr>
					<td>Mode :</td>
					<td align="right">'.$mode.'</td>
				</tr>
			</table>
			</center>
		';
		
			if(!$email->send()){
				echo $email->ErrorInfo;
			}
			else{
				echo "";
			}
			}
			catch(\Exception $e){
				echo $e->getMessage();
			}
		}
	} 
	?>
	<center><button onclick="printfunction()">Print</button></center>
<?php
}	
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>
<script>
	function printfunction(){
		window.print();
	}
</script>
