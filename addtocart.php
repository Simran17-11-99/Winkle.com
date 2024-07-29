<?php
session_start();
include"conn.php";
if(!isset($_SESSION['Uid'])){
	echo "<script>
	alert('Login First');
	window.location.href='login.php';
	</script>";
}
else{
$user =$_SESSION['Uid'];

if(isset($_GET['pid'])){
$pid=$_GET['pid'];

$a="SELECT * from addproduct where sno='$pid'";
$b=mysqli_query($conn,$a);
$c=mysqli_num_rows($b);
if($c>0){
	while($r=mysqli_fetch_array($b)){
	$id=$r['pid'];
	$name=$r['pname'];
	$price=$r['pprice'];
	$image=$r['pimage'];
    $dis=$r['pdesc'];
}
$check="SELECT * from cart where pid='$id'";
$runs=mysqli_query($conn,$check);
$count=mysqli_num_rows($runs);
if($count>0){
	echo "<script>
	alert('Already added in cart');
	window.location.href='cart.php';
        </script>";
}
else{
$cart="INSERT into cart(pid,pname,pprice,pimage,Uid,pdis,qty,gtotal)values('$id','$name','$price','$image','$user','$dis',1,'$price')";
$run=mysqli_query($conn,$cart);
if($run){
	echo "<script> alert('Added to cart');
	window.location.href='cart.php';
	</script>";
}
else{
	echo "error";
}
}
}
}
}
?>