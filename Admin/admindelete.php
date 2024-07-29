<?php    
include"../conn.php";
if(isset($_GET['id'])){
	$id=$_GET['id'];
$a="DELETE from addproduct where sno='$id'";
$b=mysqli_query($conn,$a);
if($b){
	echo"<script> alert('Product Deleted');
	window.location.href='viewproduct.php';
	</script>";
}
else{
    echo "<script>alert('Unable to delete');
    </script>";
}
}
?>