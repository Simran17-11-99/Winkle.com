<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
<div class="container">
<div class="row">
<table class="table table-bordered">

  <thead class="table-dark">
  <center>
  <h1>Order Items View</h1>
  </center>
 
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">User ID</th>
      <th scope="col">Product ID</th>
     <th scope="col">Grand Total</th>
    </tr>
  </thead>
  <tbody>
  <?php
  include"../conn.php";
  $a="SELECT * from order_items";
  $b=mysqli_query($conn,$a);
  $c=mysqli_num_rows($b);
  if($c>0){
	  while($r=mysqli_fetch_array($b)){
	  
  ?>
    <tr>
      <th scope="row"><?php echo $r['sno'];?></th>
      <td><?php echo $r['pid'];?></td>
      <td><?php echo $r['uid'];?></td>
          <td><?php echo $r['gtotal'];?></td>
      
    </tr>
  <?php }}?>
      </div>
	  </div>
  </tbody>
</table>