<?php

$conn = mysqli_connect("localhost","root","","project") or die("Connection Failed");

$sql = "SELECT * FROM shoes WHERE pname = '{$_POST['pname']}' limit 1";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");


if(mysqli_num_rows($result) > 0 ){
    $r = mysqli_fetch_array($result);
  ?>
  
							<div class="single-product">
								<img class="img-fluid" src="<?php echo 'shoe/'.$r['pimage']; ?>" alt="">
								<div class="product-details">
									<h6><?php echo $r['pname']; ?></h6>
									<div class="price">
										<h6><?php echo "₹ ".$r['dprice']; ?></h6>
										<h6 class="l-through"><?php echo "₹ ".$r['aprice']; ?></h6>
									</div>
									<div class="prd-bottom">

										<a href="addtocart.php?id=<?php echo $r['sno']; ?>" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Wishlist</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">compare</p>
										</a>
										<a href="product.php?idd=<?php echo $r['sno'];?>" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div>
								</div>
							</div>
						
  <?php
    }
else{
    echo "No Record Found.";
}


?>
