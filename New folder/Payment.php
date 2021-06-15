<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
	include "connection.php";
	session_start();
	if(isset($_POST['submit'])){
		$user=$_SESSION['user_id'];
		$ask=$_POST['ask'];
		$tutor=$_POST['tutor'];
		$query="select * from login where User_ID='$user'";
		$res=mysqli_query($con,$query);
		$row=mysqli_fetch_array($res);
		$cust_name=$row['Name'];
		$cust_mob=$row['Mobile_no'];
		
		$query="select * from teacherlogin where Email='$tutor'";
		$res=mysqli_query($con,$query);
		$row=mysqli_fetch_array($res);
		$tutor_name=$row['Name'];
		
		$start=$_POST['startDate'];
		$end=$_POST['endDate'];
		$radio=$_POST['optradio'];
		$price="";
		if($radio == "Audio")
			$price=20;
		if($radio == "Video")
			$price=30;
		if($radio == "Offline")
			$price=50;
		
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Merchant Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="icon" href="images/llogo.png">

</head>
<body >

	<h1 class="text-center">Check And Pay </h1>
	<center><p1 >PeerTutoring</p1></center>
	<pre>
	</pre>
	<div class="container px-5 py-3 "  class="text-center">
	<form method="post" action="pgRedirect.php">
		
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sno.</th>
      <th scope="col">Label</th>
      <th scope="col">Value</th>
    </tr>
  </thead>
  <tbody class="thead-light">
    <tr>
      <th scope="row">1</th>
      <td ><label>ORDER_ID ::*</label></td>
      <td><input id="ORDER_ID" tabindex="1"  class="form-control" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>" readonly="">
     <div class="form-group">
						<input type="hidden"  class="form-control" name="cust_id" value="<?php echo $user; ?>">
					</div>
					<div class="form-group">
						<input type="hidden"  class="form-control" name="tutor" value="<?php echo $tutor; ?>">
					</div>
					<div class="form-group">
						<input type="hidden"  class="form-control" name="ask" value="<?php echo $ask; ?>">
					</div>
					<div class="form-group">	
						<input type="hidden"   class="form-control" name="cust_mob" value="<?php echo $cust_mob; ?>">
					</div>

	  </td>
    </tr>
    <tr>
		<td scope="row">2</td>
		<td><label>CUSTID ::*</label></td>
		<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" class="form-control" autocomplete="off" value="<?php echo  "CUST" . rand(1,99999999)?>" readonly=""></td>
	</tr>
    <tr>
      <th scope="row">3</th>
      <td><label>Customer Name ::*</label></td>
      <td><input id="CUST_NAME" tabindex="2" class="form-control" maxlength="20" size="20" name="CUST_NAME" value="<?php echo $cust_name; ?>" readonly=""></td>
    </tr>
    
    <tr>
      <th scope="row">4</th>
      <td><label>Tutor Name ::*</label></td>
      <td><input  tabindex="4" name="TUTOR_NAME" class="form-control" maxlength="20" size="20"  value="<?php echo $tutor_name; ?>" readonly=""></td>
    </tr>

       <tr>
      <th scope="row">5</th>
      <td><label>Start Date ::*</label></td>
      <td><input  tabindex="4" name="START"   class="form-control" maxlength="20" size="20"  value="<?php echo $start; ?>" readonly=""></td>
    </tr>

    <tr>
      <th scope="row">6</th>
      <td><label>End Date ::*</label></td>
       <td><input tabindex="4" name="END"   class="form-control" maxlength="20" size="20"  value="<?php echo $end; ?>" readonly=""></td>

    </tr>
	<tr>
		<td scope="row">7</td>
		<td><label>INDUSTRY_TYPE_ID ::*</label></td>
		<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" class="form-control" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" readonly></td>
	</tr>
    <tr>
      <th scope="row">8</th>
      <td><label>Channel ::*</label></td>
      <td><input id="CHANNEL_ID" name="CHANNEL_ID"  class="form-control" maxlength="20" size="20"  autocomplete="off" value="WEB" readonly=""></td>
    </tr>

    <tr>
	 <th scope="row">9</th>
		<td><label>txnAmount*</label></td>
		<td><input title="TXN_AMOUNT" tabindex="10"   class="form-control" maxlength="20" size="20"  type="text" name="TXN_AMOUNT" value="<?php echo $price; ?>" readonly=""></td>
	</tr>
					<tr>
					<td></td>
					<td></td>
					<div class="form-group">
						<td ><input value="CheckOut"   class="form-control btn btn-danger" type="submit"	onclick=""></td>
				     </div>
				</tr>

  </tbody>
</table>




	</form>
</div>
</body>
</html>