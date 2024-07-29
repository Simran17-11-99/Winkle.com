<?php
//$payment= $_GET['pay'];
session_start();
include"header.php";
if(!isset($_SESSION['Uid'])){
	echo"<script>
	window.location.href:'login.php';
	</script>";
}
else{
	$uid= $_SESSION['Uid'];
}
?>
<?php include"conn.php";
 if(isset($_POST['sub'])){
	 $payment= $_POST['pay'];
	 //echo $payment;
	 //die();
	 $name=$_POST['name'];
	 $lname=$_POST['lname'];
	 $state=$_POST['country'];
	 $street=$_POST['address'];
	 $appartment=$_POST['Appartment'];
	 $town=$_POST['town'];
	 $zip=$_POST['zip'];
	 $phone=$_POST['phone'];
	 $email=$_POST['email'];
	 
	 
$a="INSERT into checkout(Fname,Lname,Country,Street,Appartment,Town,Zip,Phone,Email,Uid)values('$name','$lname','$state','$street','$appartment','$town','$zip','$phone','$email','$uid')";
$b=mysqli_query($conn,$a);
if($b){
	$pro= mysqli_query($conn,"SELECT * FROM cart where Uid='$uid'");
	$count= mysqli_num_rows($pro);
	while($r=mysqli_fetch_array($pro)){
		$pid= $r['pid'];
	    echo $pid;
	}
	$item= mysqli_query($conn,"INSERT INTO order_items(pid,uid,gtotal)values('$pid','$uid','$payment')");
	if($item){
		echo"<script> alert('Order placed')</script>";
		$cartempty= mysqli_query($conn,"Delete from cart where Uid='$uid'");
	}
	
}	 
	 
}
 ?>
<html>
<head>
<title>Pay through PayPal: www.TestAccount.com</title>
</head>
 <body onLoad="document.forms['paypalForm'].submit();">
<form name="paypalForm" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
 <input type="hidden" name="cmd" value="_xclick" />
 <input type="hidden" name="business" value="sb-43oqpn26267682@business.example.com" />
 <input type="hidden" name="password" value="WB7DXUG5LWTU76GV" />
 <input type="hidden" name="custom" value="1123" />
 <input type="hidden" name="item_name" value="10" />
 <input type="hidden" name="amount" value="<?php echo $payment;?>"/>
 <input type="hidden" name="rm" value="30" />
 <input type="hidden" name="return" value="success.php" />
 <input type="hidden" name="cancel_return" value="cancel.php" />
 <input type="hidden" name="cert_id" value="AOu1gSw7rsh2hMiKGgAy873K-5WWAy0HQ.FwuLSQiRBNNq8P-cqOaIuw" />
</form>
</body>''
</html>
