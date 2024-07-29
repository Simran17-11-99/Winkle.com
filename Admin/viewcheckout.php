<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
<div class="container">
<div class="row">
<table class="table table bordered">
 <thead class="table-dark">
  <center>
  <h1>Checkout View</h1>
  </center>
  <tr>
      <th scope="col">Sno</th>
      <th scope="col">First Name</th>
	   <th scope="col">Last Name</th>
      <th scope="col">Country</th>
	  <th scope="col">Street</th>
	  <th scope="col">Appartment</th>
	  <th scope="col">Town</th>
	  <th scope="col">Zip Code</th>
	  <th scope="col">Phone</th> 
	  <th scope="col">Email ID</th>
    </tr>
  </thead>
  <tbody>
  <?php
    include"../conn.php";
  $a="SELECT * from checkout";
  $b=mysqli_query($conn,$a);
  $c=mysqli_num_rows($b);
  if($c>0){
	 while ($r= mysqli_fetch_array($b)){
		 ?>
	<tr>
      <th scope="row"><?php echo $r['sno'];?></th>
      <td><?php echo $r['Fname'];?></td>	  
	  <td><?php echo $r['Lname'];?></td>
	   <td><?php echo $r['Country'];?></td>
		<td><?php echo $r['Street'];?></td>
        <td><?php echo $r['Appartment'];?></td>
		 <td><?php echo $r['Town'];?></td>
		  <td><?php echo $r['Zip'];?></td>
          <td><?php echo $r['Phone'];?></td>
		  <td><?php echo $r['Email'];?></td>
  </td>
  </tr>
  <?php }}?>
</div>
</div>