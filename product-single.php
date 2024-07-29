<?php
include "header.php"; 

?>
    <!-- END nav -->
	
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="index.html">Product</a></span> <span>Product Single</span></p>
            <h1 class="mb-0 bread">Product Single</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
		<?php 
			include "conn.php";
          if(isset($_GET['pid'])){
	      $pid= $_GET['pid'];

			$a= "SELECT * from addproduct where sno='$pid'";
			$b= mysqli_query($conn,$a);
			$c= mysqli_num_rows($b);
			if($c>0){
				while($r=mysqli_fetch_array($b)){
					
					?>	
    			<div class="col-lg-6 mb-5 ftco-animate">
     <a href="images/menu-2.jpg" class="image-popup"><img src="<?php echo 'Projectimages/'.$r['pimage']; ?>" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3><?php echo $r['pname']; ?></h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
								<a href="#" class="mr-2">5.0</a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							</p>
							<p class="text-left mr-4">
								<a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
							</p>
							<p class="text-left">
								<a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
							</p>
						</div>
    				<p class="price"><span><?php echo "Rs.".$r['pprice'];?></span></p>
    				<p><?php echo $r['pdesc'];?>
						</p>
						<div class="row mt-4">
			
          	</div>
          	<p><a href="addtocart.php?pid=<?php echo $r['sno']?>" class="btn btn-black py-3 px-5">Add to Cart</a></p>
		<p><a href="addwishlist.php?wid=<?php echo $r['sno']?>" class="btn btn-black py-3 px-5">Add to Wishlist</a></p>
    			</div>
		  <?php }}} ?>  	    	 
			</section>
			
			
  <section class="ftco-section testimony-section">
      <div class="container" style="margin-top:-300px;">
        <div class="row justify-content-center">
          <div class="col-md-7 heading-section ftco-animate">
            <h2 class="mb-4">Our satisfied customer says</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
			
<?php
$a="SELECT * from review where pid='$pid'";
$b=mysqli_query($conn,$a);
$c=mysqli_num_rows($b);
if($c>0){
	while($r=mysqli_fetch_array($b)){
?>             
			 <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(<?php echo './Projectimages/'.$r['rimg'];?>)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4 line"><?php echo $r['message'];?></p>
                    <p class="name"><?php echo $r['name'];?></p>
                    
                  </div>
                </div>
              </div>
		  <?php  }}?>
                        
                        </div>
          </div>
        </div>
      </div>
    </section>


      
       	<center>
		<h3 class="text-center">Drop Your Review Here!!</h3>
		  </center>
        <div class="row block-9">
          <div class="col-md-12 order-md-last">
            <form action="#" class="bg-white p-5 contact-form" method="post">
              <div class="form-group">
                <input type="text" class="form-control" name="name"placeholder="Your Name">
              </div>
             

              <div class="form-group">
                <textarea name="mess" id="" cols="30" rows="7" class="form-control"  placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" name="submit" class="btn btn-primary py-3 px-5">
              </div>
          
			</form>
		</div>
		<div class="col-md-6 float-end">
		</div>
      </div>
   
    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Related Products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
			<?php 
			include "conn.php";
			$a= "SELECT * from addproduct order by rand() limit 4";
			$b= mysqli_query($conn,$a);
			$c= mysqli_num_rows($b);
			if($c>0){
				while($r=mysqli_fetch_array($b)){?>
				
				
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    	 <a href="#" class="img-prod"><img class="img-fluid" src="<?php echo'./Projectimages/'.$r['pimage'];?>" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 px-3">
    						<h3><a href="#"><?php echo $r['pname']?></a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc"><?php echo "Rs.".$r['actualprice'];?></span><span class="price-sale"><?php echo "Rs.".$r['pprice'];?></span></p>
		    					</div>
		    					<div class="rating">
	    							<p class="text-right">
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    							</p>
	    						</div>
	    					</div>
	    					<p class="bottom-area d-flex px-3">
    							<a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
    							<a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
    						</p>
    					</div>
    				</div>
    			</div>
			<?php }}?>
    		</div>
					    			</div>
    			
    			</div>
    		</div>
    	</div>
    </section>
<?php
include "footer.php";
?>
   <?php
   if(isset($_POST['submit'])){
	   $name=$_POST['name'];
	   $message=$_POST['mess'];
	   
$a="INSERT into review(name,message,pid)values('$name','$message','$pid')";
       $b=  mysqli_query($conn,$a);
   if($b){
	  echo"<script>
	alert('Thankyou for your review.');
	</script>";
   }
   else{
	   echo"<script>
	alert('error');
	</script>";
   }
   }
   ?>