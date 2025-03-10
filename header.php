<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Winkel - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	    <link rel="stylesheet" href="searchbar/css/style.css">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-black">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	
						    <?php 
						if(isset($_SESSION['user'])){
							$user= $_SESSION['user'];
							echo "<div class='icon mr-2 d-flex justify-content-center align-items-center'><span class='icon-paper-plane'>$user</span></div>
						    <span class='text'></span>
							   </div>
					 ";
						}
						?>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Winkel</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.php">Shop</a>
              
                <a class="dropdown-item" href="cart.php">Cart</a>
				<a class="dropdown-item" href="wishlist.php">Wishlist</a>
                <a class="dropdown-item" href="checkout.php">Checkout</a>
              </div>
            </li>
			 <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="login.php">Login</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
               
                
              </div>
            </li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	         
			  
			  
			  <?php
			  include"conn.php";
			  $a="SELECT * from cart";
			  $b=mysqli_query($conn,$a);
			  $c=mysqli_num_rows($b);
			  ?>
			  
			  
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	          <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[<?php echo $c;?>]</a></li>
			   <?php
			  include"conn.php";
			  $a="SELECT * from wishlist";
			  $b=mysqli_query($conn,$a);
			  $c=mysqli_num_rows($b);
			  ?>
			   <li class="nav-item cta cta-colored"><a href="wishlist.php" class="nav-link"><span class="icon-heart"></span>[<?php echo $c;?>]</a></li>

	           <li class="nav-item"><a href="signup.php" class="nav-link">Sign Up</a></li>
			
			
			
			</ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
	

    