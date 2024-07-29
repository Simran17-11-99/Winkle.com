<?php
session_start();
include"conn.php";
if(isset($_POST['login'])){
	$mail=$_POST['lmail'];
	$pass=$_POST['lpass'];
$a= "SELECT * from users where Email='$mail' and Password='$pass'";
	$b= mysqli_query($conn,$a);
	$c= mysqli_num_rows($b);
	if($c>0){
	   while($r=mysqli_fetch_array($b)){
		   $_SESSION['user']=$r['Name'];
		   $_SESSION['Uid']=$r['sno'];
		   echo"<script>
		   window.location.href='index.php';
		   </script>";
	   }
	}
	else{
		echo"<script>alert ('Unable to Login');</script>";
	}
}	
?>
<?php 
include "header.php";
?>
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">	  
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Login</span></p>
            <h1 class="mb-0 bread">Login</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section contact-section bg-light">    
	  <div class="container">
      <center>
      <h3>Enter Your Details</h3>
	  </center>
        <div class="row block-9">
          <div class="col-md-12 order-md-last d-flex">
            <form class="bg-white p-5 contact-form" method="post">
              <div class="form-group">
                <input type="email" class="form-control" name="lmail" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="lpass" placeholder="Your Password">
              </div>
              <div class="form-group">
                <input type="submit" value="Login" name="login" class="btn btn-primary py-3 px-5">
              </div>
            </form>
		 </div> 
        </div>
      </div>
    </section> 
<?php
include "footer.php";
?>
