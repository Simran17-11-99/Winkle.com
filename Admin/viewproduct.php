<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
<div class="container">
<div class="row">
<table class="table table-bordered">

  <thead class="table-dark">
  <center>
  <h1>Product View</h1>
  </center>
  <tr>
      <th scope="col">Sno</th>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
	  <th scope="col">Actual Price</th>
	  <th scope="col">Discription</th>
	  <th scope="col">category</th>
	  <th scope="col">Subcategory</th>
	  <th scope="col">Image</th>
	  <th scope="col">Edit</th>
	   <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  
  <?php
  include"../conn.php";
  $limit=9;
  if(isset($_GET['page'])){
	  $page=$_GET['page'];
  }
  else
  {
	  $page=1;
  }
  
  $offset=($page-1)*$limit;
  
  
  $a="SELECT * from addproduct limit {$offset}, {$limit}";
  $b=mysqli_query($conn,$a);
  $c=mysqli_num_rows($b);
  if($c>0){
	  while($r=mysqli_fetch_array($b)){ 
  ?>
    <tr>
      <th scope="row"><?php echo $r['sno'];?></th>
	  <td><?php echo $r['pid'];?></td>
      <td><?php echo $r['pname'];?></td>
      <td><?php echo $r['pprice'];?></td>
      <td><?php echo $r['actualprice'];?></td>
      <td><?php echo $r['pdesc'];?></td>
	  <td><?php echo $r['pcategory'];?></td>
	  <td><?php echo $r['psubcategory'];?></td>
 <td><img src="<?php echo '../Projectimages/'.$r['pimage']?>" height="200"></td>
    <td><a href="adminedit.php?id=<?php echo $r ['sno'];?>" ><button type="button" class="btn btn-primary">Edit</button></a></td>
	<td><a href="admindelete.php?id=<?php echo $r['sno'];?>"><button type="button" class="btn btn-danger">Delete</button></td>
	</tr>
  <?php }}?>
      </div>
	  </div>
  </tbody>
</table>

<nav aria-label="Page navigation example">
<?php
include"../conn.php";

$a1="SELECT * from addproduct";
$b1=mysqli_query($conn,$a1);
if(mysqli_num_rows($b1)){
	$total_records=mysqli_num_rows($b1);
	$total_pages=ceil($total_records/$limit);
	echo"<ul class='pagination justify-content-center'>";
if($page>1){
	
	echo' <li class="page-item">
   <a class="page-link" href="viewproduct.php?page='.($page-1).'">Previous</a>
    </li>';
}

?>
   
	<?php   
	for($i=1; $i<=$total_pages; $i++){
		if($i==$page){
			$active='active';
		}
		else{
			
			$active="";
		}
		
		
	echo "<li class='page-item $active'><a class='page-link' href='viewproduct.php?page=$i'>$i</a></li>";
	}
	if($total_pages>$page){
		echo'<li class="page-item">
      <a class="page-link" href="viewproduct.php?page='.($page+1).'">Next</a>
    </li>';
		
	}
	?>
	
  </ul>
  <?php } ?>
</nav>
