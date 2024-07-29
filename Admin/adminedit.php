<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
<?php
if(isset($_GET['id'])){
$id=$_GET['id'];	
	
include"../conn.php";
$a="SELECT * from addproduct where sno='$id'";
$b=mysqli_query($conn,$a);
$c=mysqli_num_rows($b);
if($c>0){
$r=mysqli_fetch_array($b);


?>
<center><h1>Edit Product</h1></center>
<div class="container">
<div class="row">

<form class="form-inline" method="post">
  
  
  
  <div class="form-group">
    <label class="sr-only" for="pwd" >Name</label>
    <input type="text" class="form-control" name="name" value="<?php echo $r['pname'];?>" id="pwd">
  </div>
  
   <div class="form-group">
    <label class="sr-only" for="pwd" >Price</label>
    <input type="Number" class="form-control" name="price" id="pwd" value="<?php echo $r['pprice'];?>">
  </div>
   <div class="form-group">
    <label class="sr-only" for="pwd" >Actual Price</label>
    <input type="number" class="form-control" name="aprice" id="pwd"value="<?php echo $r['actualprice'];?>">
  </div>
   <div class="form-group">
    <label class="sr-only" for="pwd" >Description</label>
    <input type="text" class="form-control" name="des" id="pwd" value="<?php echo $r['pdesc'];?>">
  </div>
   <div class="form-group">
    <label class="sr-only" for="pwd" >Category</label>
    <input type="text" class="form-control" name="cat" id="pwd" value="<?php echo $r['pcategory'];?>">
  </div>
   <div class="form-group">
    <label class="sr-only" for="pwd" >Sub-Category</label>
    <input type="text" class="form-control" name="subcat" id="pwd" value="<?php echo $r['psubcategory'];?>">
  </div>
  
   
  
  <button type="submit" class="btn btn-primary" name="sub">Submit</button>
</form>
</div>
</div>
<?php }}
?>
<?php
if(isset($_POST['sub'])){
	
	$name=$_POST['name'];
	$price=$_POST['price'];
	$actualprice=$_POST['aprice'];
	$description=$_POST['des'];
	$category=$_POST['cat'];
	$subcategory=$_POST['subcat'];
	
	
	$a="UPDATE addproduct set pname='$name', pprice='$price', actualprice='$actualprice', pdesc='$description', pcategory='$category', psubcategory='$subcategory'where sno='$id'";
	$b=mysqli_query($conn,$a);
	if($b){
	echo "<script>
	alert('Edit Successfully');
    window.location.href='viewproduct.php';
	</script>";
	}
	else{
		echo"Data not edit";
	}
}
?>
