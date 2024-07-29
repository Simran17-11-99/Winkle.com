<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
<div class="container">
<div class="row">
<table class="table table-bordered">

  <thead class="table-dark">
  <center>
  <h1>Reviews View</h1>
  </center>
 
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Name</th>
      <th scope="col">Message</th>
     <th scope="col">Image</th>
	 <th scope="col">Product ID</th>
    </tr>
  </thead>
  <tbody>
  <?php
  include"../conn.php";
  $a="SELECT * from review";
  $b=mysqli_query($conn,$a);
  $c=mysqli_num_rows($b);
  if($c>0){
	  while($r=mysqli_fetch_array($b)){
	  
  ?>
    <tr>
      <th scope="row"><?php echo $r['sno'];?></th>
      <td><?php echo $r['name'];?></td>
      <td><?php echo $r['message'];?></td>
 <td><img src="<?php echo '../Projectimages/'.$r['rimg'];?>"height="130"
 ></td>
       <td><?php echo $r['pid'];?></td>
    </tr>
  <?php }}?>
      </div>
	  </div>
  </tbody>
</table>