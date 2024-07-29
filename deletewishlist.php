<?php
include"conn.php";
if(isset($_GET['id'])){
	$id=$_GET['id'];
$a="DELETE from wishlist where sno='$id'";
$b=mysqli_query($conn,$a);
if($b){
	echo"<script>window.location.href='wishlist.php';
	</script>";
}
else{
    echo "<script>alert('Unable to delete');
    </script>";
}
}
?>