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

if(isset($_GET['wid'])){
$wid=$_GET['wid'];

$a="SELECT * from addproduct where sno='$wid'";
$b=mysqli_query($conn,$a);
$c=mysqli_num_rows($b);
if($c>0){
	while($r=mysqli_fetch_array($b)){
	//$id=$r['pid'];
	$name=$r['pname'];
	$price=$r['pprice'];
	$image=$r['pimage'];
    $dis=$r['pdesc'];
	
	
}
$check="SELECT * from wishlist where pid='$id'";
$runs=mysqli_query($conn,$check);
$count=mysqli_num_rows($runs);
if($count>0){
	echo "<script>
	alert('Already added in wishlist');
        </script>";
}
else{
$wish="INSERT into wishlist(pid,pname,pprice,pimage,Uid,pdis,qty)values('$wid','$name','$price','$image','$user','$dis',1)";
$run=mysqli_query($conn,$wish);
if($run){
	echo "<script> alert('Added to wishlist');
	window.location.href='wishlist.php';
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