<?php
session_start();
include "header.php";
?>
    <!-- END nav -->
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
            <h1 class="mb-0 bread">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	
		<center>
		<h3>Drop Your Query Here!!</h3>
		  </center>
        <div class="row block-9">
          <div class="col-md-12 order-md-last d-flex">
            <form action="#" class="bg-white p-5 contact-form" method="post">
              <div class="form-group">
                <input type="text" class="form-control" name="name"placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="mail"placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject"placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="mess" id="" cols="30" rows="7" class="form-control"  placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" name="message" class="btn btn-primary py-3 px-5">
              </div>
          
			</form>
          
          
<?php
include"conn.php";
if(isset($_POST['message'])){
$name=$_POST['name'];
$email=$_POST['mail'];
$subject=$_POST['subject'];	
$message=$_POST['mess'];
$a="INSERT INTO contact(name,email,subject,message)values('$name','$email','$subject','$message')";	
$b=mysqli_query($conn,$a);
if($b){
	echo"<script>
	alert('Thankyou for contacting us.')
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
 include"footer.php";
 ?>