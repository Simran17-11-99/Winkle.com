<?php 
include "header.php";
?>

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Sign Up</span></p>
            <h1 class="mb-0 bread">Sign Up</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
	  <center>
      <h3>Enter Your Details</h3>
	  <center>
        <div class="row block-9">
          <div class="col-md-12 order-md-last d-flex">
            <form class="bg-white p-5 contact-form" method="post">
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="mail" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="pass" placeholder="Your Password">
              </div>
              <div class="form-group">
                <input type="submit" value="Sign Up" name="signup" class="btn btn-primary py-3 px-5">
              </div>
            </form>
			<?php
include "conn.php";
if(isset($_POST['signup'])){
$Name= $_POST['name'];
$Email= $_POST['mail'];
$Password= $_POST['pass']; 
$a="INSERT INTO users(Name,Email,Password)values('$Name','$Email','$Password')";
$b = mysqli_query($conn,$a);
if($b){
	
	echo "<script>
	alert('Signup! Successfully');
	window.location.href='login.php';
	</script>";
	
}
else{
	echo "error";
}
}
?>
          
          </div>

          
        </div>
      </div>
    </section> 
<?php
include "footer.php";
?>
