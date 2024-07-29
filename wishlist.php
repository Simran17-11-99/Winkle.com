<?php
session_start();
include"header.php";
if(!isset($_SESSION['Uid'])){
	echo"<script>
	window.location.href:'login.php';
	</script>";
}
else{
	$uid= $_SESSION['Uid'];
    	
?>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Wishlist</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product</th>

						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Place order</th>
						      </tr>
						    </thead>
						    <tbody>
				<?php 
				include"conn.php";
				$a="SELECT * from wishlist where Uid='$uid'";
				$b=mysqli_query($conn,$a);
				$c=mysqli_num_rows($b);
				$gtotal=0;
				if($c>0){
					while($r=mysqli_fetch_array($b)){
						
				?>
						 <tr class="text-center">
	      <td class="product-remove"><a href="deletewishlist.php?id=<?php echo $r['sno'];?>"><span class="ion-ios-close"></span></a></td>
		  
		  <input type="hidden" class="Pid" value="<?php echo $r['sno'];?>">						
				 <td class="image-prod">
					<div class="img">
			  <img src="<?php echo './Projectimages/'.$r['pimage']; ?>" style="height:200px; width:150px;">
								</div>
								</td>
						        
						      <td class="product-name">
						        	<h3><?php echo $r['pname'];?></h3>
						        	<p><?php echo $r['pdis'];?></p>
						        </td>
						        
						        <td class="price"><?php echo "Rs.".$r['pprice'];?></td>
								<input type="hidden" class="pprice" value="<?php echo $r['pprice'];?>">
								
								
						        
						        <td class="quantity">
						     <input type="number" class="text-center qty" value="<?php echo  $r['qty'];?>">
					          </td>
						     <td>
				<a href="addtocart.php?pid=<?php echo $r['pid'];?>"><button type="submit" class="btn btn-primary btn-block">Add to cart</button></a>
</td>  
						      </tr>
							  <?php 
							  
				}}
				?>
				<!-- END TR-->
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    	
			</div>
		</section>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script>
$(document).ready(function(){
	$('.qty').on('change',function(){
	var $el =$(this).closest('tr');
	
	var Pid=$el.find('.Pid').val();
    var Price=$el.find('.pprice').val();
	var qty=$el.find('.qty').val();

//alert(Pid+" "+Price+" "+qty);  

$.ajax({
  url: 'quantity.php',
  type: 'post',
  data: {
   get_id: Pid,
   get_price : Price,
   get_qty : qty
  }, 
  success: function(data){
    if(data==1){
      //alert(data);
    location.reload();
  }
  }
});
    });
});

</script>

    <?php
}
	include"footer.php";
	?>