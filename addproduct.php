<html>
<head>
<title>Add product</title>
</head>
<body>
<fieldset>
<center>
<form method="post" enctype="multipart/form-data">
Id : <input type="number" name="id"><br><br>
Name : <input type="text" name="name"><br><br>
Price : <input type="number" name="price"><br><br>
Actual Price : <input type="number" name="aprice"><br><br>
Description : <input type="text" name="desc"><br><br>
Category : <input type="text" name="cat" value="Night Wear"><br><br>
Subcategory : <input type="text" name="subcat" value="Night Suits For Women"><br><br>

Image : <input type="file" name="image"><br><br>
<input type="submit" name="sub">
</form>
</center>
</fieldset>
</body>
</html>

<?php
include "conn.php";
if(isset($_POST['sub'])){
$Id= $_POST['id'];
$Name= $_POST['name'];
$Price= $_POST['price'];
$Aprice= $_POST['aprice'];
$Description= $_POST['desc'];
$Category= $_POST['cat'];
$Subcategory= $_POST['subcat'];
	

$file_name=$_FILES['image']['name'];
$temp_name=$_FILES['image']['name'];
$path= 'Projectimages/'.$file_name;
$s=move_uploaded_file($temp_name,$path);

$a="INSERT INTO addproduct(pid,pname,pprice,actualprice, pdesc,pcategory,psubcategory,pimage)values('$Id','$Name','$Price','$Aprice','$Description','$Category','$Subcategory','$file_name')";
$b= mysqli_query($conn,$a);
if($b){
	echo"Product added";
}
else{
	echo"Product not added";
}
}
?>