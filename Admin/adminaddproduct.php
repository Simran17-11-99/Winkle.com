<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
<center><h1>Add Product</h1></center>
<div class="container">
<div class="row">

<form class="form-inline" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label class="sr-only" for="number" >Product ID</label>
    <input type="number" class="form-control" name="id" id="email">
  </div>
  <div class="form-group">
    <label class="sr-only" for="pwd" >Name</label>
    <input type="text" class="form-control" name="name" id="pwd">
  </div>
  
   <div class="form-group">
    <label class="sr-only" for="pwd" >Price</label>
    <input type="Number" class="form-control" name="price" id="pwd">
  </div>
   <div class="form-group">
    <label class="sr-only" for="pwd" >Actual Price</label>
    <input type="number" class="form-control" name="aprice" id="pwd">
  </div>
   <div class="form-group">
    <label class="sr-only" for="pwd" >Description</label>
    <input type="text" class="form-control" name="des" id="pwd">
  </div>
   <div class="form-group">
    <label class="sr-only" for="pwd" >Category</label>
    <input type="text" class="form-control" name="cat" id="pwd">
  </div>
   <div class="form-group">
    <label class="sr-only" for="pwd" >Sub-Category</label>
    <input type="text" class="form-control" name="subcat" id="pwd">
  </div>
  
   <div class="form-group">
    <label class="sr-only" for="pwd" >Image</label>
    <input type="file" class="form-control-file" name="pimg" id="pwd">
  </div>
  <br>
  <button type="submit" class="btn btn-primary" name="sub">Submit</button>
</form>
</div>
</div>
<?php
include"../conn.php";
if(isset($_POST['sub'])){
	$id=$_POST['id'];
	$name=$_POST['name'];
	$price=$_POST['price'];
	$actualprice=$_POST['aprice'];
	$description=$_POST['des'];
	$category=$_POST['cat'];
	$subcategory=$_POST['subcat'];
	
$filename=$_FILES['pimg']['name'];
$tempname=$_FILES['pimg']['tmp_name'];
$path= '../Projectimages/'.$filename;
$s=move_uploaded_file($tempname,$path);

$a="INSERT INTO addproduct(pid,pname,pprice,actualprice,pdesc,pcategory,psubcategory,pimage)values('$id','$name','$price','$actualprice','$description','$category','$subcategory','$filename')";
$b=mysqli_query($conn,$a);
if($b){
	echo"Product Added";
}
else{
	echo"Product not added";
}
}
?>