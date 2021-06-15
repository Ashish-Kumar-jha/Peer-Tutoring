<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");
include "connection.php";

$checkSum = "";
$paramList = array();

$ORDER_ID = $_POST["ORDER_ID"];
$CUST_ID = $_POST["CUST_ID"];
$INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
$CHANNEL_ID = $_POST["CHANNEL_ID"];
$TXN_AMOUNT = $_POST["TXN_AMOUNT"];
$MOBILE = $_POST["cust_mob"];
$CUST_EMAIL = $_POST["cust_id"];
$TUTOR = $_POST['tutor'];
$ASK = $_POST['ask']; 
$START=$_POST['START'];
$END=$_POST['END'];
// Create an array having all required parameters for creating checksum.
$paramList["MID"] = PAYTM_MERCHANT_MID;
$paramList["ORDER_ID"] = $ORDER_ID;
$paramList["CUST_ID"] = $CUST_ID;
$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$paramList["CHANNEL_ID"] = $CHANNEL_ID;
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;


$paramList["CALLBACK_URL"] = "http://localhost:8080/oneschool-master/pgResponse.php";

$paramList["MSISDN"] = $MOBILE; //Mobile number of customer
$paramList["EMAIL"] = $CUST_EMAIL; //Email ID of customer
$paramList["VERIFIED_BY"] = "EMAIL"; //
$paramList["IS_USER_VERIFIED"] = "YES"; //



//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);
if($TXN_AMOUNT == 20)
	$mode="Audio";
else if($TXN_AMOUNT == 30)
	$mode="Video";
else if($TXN_AMOUNT == 50)
	$mode="Offline";
$query="insert into transaction (Order_ID,User,Tutor,Txn_ID,Txn_Amount,BankTxn_ID,Bank_Name,Mode,Ask,TXN_Date,Start,End,TutingMode) values('$ORDER_ID','$CUST_EMAIL','$TUTOR','',0,'','','','$ASK','','$START','$END','$mode')";
mysqli_query($con,$query);

?>
<html>
<head>
<title>Merchant Check Out Page</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
		<table border="1">
			<tbody>
			<?php
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
</body>
</html>