<?php
session_start(); 
$limit=9;

if(isset($_GET['page'])){
	$page = $_GET['page'];
}

else {
	$page = 1;
}
$offset = ($page-1)*$limit;
?>
    <!-- END nav -->
<?php 
include "header.php"; 	
?>
    
	<br>
	<center>
<h3>Choose Your Style!</h3>
</center>
	
    <section class="ftco-section bg-light">
	
	
    	<div class="container">
	
<!-- Script Block Start -->
    
<script type="text/javascript" src="./searchbar/js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

    // Autocomplete Textbox
    $("#city-box").keyup(function(){
      var pname = $(this).val();

      if(pname != ''){
         $.ajax({
            url: "load-product.php",
            method: "POST",
            data: { pname: pname},
            success: function(data){
              console.log(data);
              $("#cityList").fadeIn("fast").html(data);
            }
         }); 
      }else{
        $("#cityList").fadeOut();
        $("#table-data").html("");
      }
    });

    // Autocomplete List Click Code
    $(document).on('click','#cityList li',function(){
      $('#city-box').val($(this).text());
      $("#cityList").fadeOut();
    });

    // Search Button Code
    $("#search-btn").on('click', function(e){
      e.preventDefault();

      var pname = $('#city-box').val();

      if(pname == ""){
        alert("Please enter the city Name.");
        $(".row").html("");
      }else{
        $.ajax({
            url: "load-table.php",
            method: "POST",
            data: { pname: pname},
            success: function(data){
				//alert(data);
              $(".prod,.sear").html(data);
            }
         }); 
      }
    })
  });
</script>
    			<div class="row">
    			<div class="col-md-8 col-lg-10 order-md-last">
    				<div class="row">
			<?php 
			include "conn.php";
			if(isset($_GET['cat'])){
				$cat=$_GET['cat'];
		
			$a= "SELECT * from addproduct where pcategory='$cat' limit {$offset},{$limit}";
			$b= mysqli_query($conn,$a);
			$c= mysqli_num_rows($b);
			if($c>0){
				while($r=mysqli_fetch_array($b)){?>
		    			<div class="col-sm-6 col-md-6 col-lg-4 ftco-animate">
		    				<div class="product">
		    					<a href="#" class="img-prod"><img class="img-fluid" src="<?php 
						echo './Projectimages/'.$r['pimage'];
						?>" alt="Colorlib Template">
		    						<span class="status">30%</span>
		    						<div class="overlay"></div>
		    					</a>
		    					<div class="text py-3 px-3">
		    						<h3><a href="#"><?php echo $r['pname'];?></a></h3>
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
	<a href="product-single.php?pid=<?php echo $r['sno'];?>" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
		    			    
		    <a href="addwishlist.php?wid=<?php echo $r['sno'];?>" class="buy-now text-center py-2">Wish list<span><i class="ion-ios-heart ml-1"></i></span></a>
									</p>
		    					</div>
		    				</div>
		    			</div>
			<?php  }}}?>
			<?php 
			
			include "conn.php";
			if(!isset($_GET['cat'])){
				//$cat=$_GET['cat'];
			$a= "SELECT * from addproduct order by rand() limit {$offset},{$limit}";
			$b= mysqli_query($conn,$a);
			$c= mysqli_num_rows($b);
			if($c>0){
				while($r=mysqli_fetch_array($b)){?>
		    			<div class="col-sm-6 col-md-6 col-lg-4 ftco-animate">
		    				<div class="product">
		    					<a href="#" class="img-prod"><img class="img-fluid" src="<?php 
						echo './Projectimages/'.$r['pimage'];
						?>" alt="Colorlib Template">
		    						<span class="status">30%</span>
		    						<div class="overlay"></div>
		    					</a>
		    					<div class="text py-3 px-3">
		    						<h3><a href="#"><?php echo $r['pname'];?></a></h3>
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
		   <a href="product-single.php?pid=<?php  echo $r['sno'];?>" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
		    							
											<a href="addwishlist.php?wid=<?php echo $r['sno'];?>" class="buy-now text-center py-2">Wish list<span><i class="ion-ios-heart ml-1"></i></span></a>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
			<?php  }}}?>
		    		</div>
					<div class="row mt-5">
					<div class='col text-center'>
		           <div class="block-27">
					<?php
					if(isset($_GET['cat'])){
						$cat=$_GET['cat'];
			include"conn.php";
			$a="SELECT * from addproduct where pcategory='$cat'";
					$b=mysqli_query($conn,$a);
					if(mysqli_num_rows($b)>0){
						$total_records=mysqli_num_rows($b);
						$total_page=ceil($total_records/$limit);
						echo " <ul>";
					
					?>
		           
		             
	<?php
	for($i=1; $i<=$total_page;$i++){
	echo "<li><a href='shop.php?page=$i&cat=$cat'><span>$i</span></a></li>";	
	}
					}
					}
	?>
		              </ul>
		            </div>
		          </div>
		        </div>
		    	
				<div class="row mt-5">
					<div class='col text-center'>
		           <div class="block-27">
					<?php
					if(!isset($_GET['cat'])){
					include"conn.php";
					$a="SELECT * from addproduct";
					$b=mysqli_query($conn,$a);
					if(mysqli_num_rows($b)>0){
						$total_records=mysqli_num_rows($b);
						$total_page=ceil($total_records/$limit);
						echo " <ul>";
					
					?>
		           
		             
	<?php
	for($i=1; $i<=$total_page;$i++){
	echo "<li><a href='shop.php?page=$i'><span>$i</span></a></li>";	
	}
					}
					}
	?>
		              </ul>
		            </div>
		          </div>
		        </div>
		    	</div>

		    	<div class="col-md-4 col-lg-2 sidebar">
				<td id="table-form" class="mx-5">
        <form id="search-form">
     
          <div id="autocomplete">
            <input type="text" id="city-box" placeholder="Search" autocomplete="off">
            <div id="cityList"></div>
          </div>
          
        </form>
         
      </td>
    </tr>
    <tr>
      <td id="table-data"></td>
    </tr>
		    		<div class="sidebar-box-2">
		    			<h2 class="heading mb-4"><a href="#">Our categories</a></h2>
		    			<ul>
						<?php 
						include "conn.php";
						$a= "SELECT * from addproduct group by pcategory";
						$b= mysqli_query($conn,$a);
						while($row=mysqli_fetch_array($b)){
						?>
		 <li ><a href="shop.php?cat=<?php echo $row['pcategory'];?>"><?php echo $row['pcategory'];?></a></li>
						<?php }?>
		    			</ul>
		    		</div>
    			</div>
    		</div>
    	</div>
    </section>

    <?php 
include "footer.php";
?>