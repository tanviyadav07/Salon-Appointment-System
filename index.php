<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
 
     ?>
<!doctype html>
<html lang="en">
  <head>
   
    <title>Doctor Appointment | Home Page</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
   <!--<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">-->
     <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">--> 
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
   <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">-->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet" >
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style5.css">
  </head>
  <body id=home>

<?php include_once('includes/header.php');?>

<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="assets/js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active 

<div class="w3l-hero-headers-9">
  <div class="css-slider">
    <input id="slide-1" type="radio" name="slides" checked>
    <section class="slide slide-one">
      <div class="container">
        <div class="banner-text">
          <h4>Creative Styling</h4>
          <h3>beauty salon<br>
            fashion for woman</h3>

            <a href="book-appointment.php" class="btn logo-button top-margin">Get An Appointment</a>
        </div>
      </div>
      
    </section>
    <input id="slide-2" type="radio" name="slides">
    <section class="slide slide-two">
      <div class="container">
        <div class="banner-text">
          <h4>Creative Styling</h4>
          <h3>beauty salon<br>
            fashion for woman</h3>
          <a href="book-appointment.php" class="btn logo-button top-margin">Get An Appointment</a>
        </div>
      </div>-->
      <!-- <nav>
        <label for="slide-2" class="prev">&#10094;</label>
        <label for="slide-1" class="next">&#10095;</label>
      </nav> 
</section>-->
     <!-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/slide3.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/slide2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block"> 
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/slide1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/slide3.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/slide2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/slide1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <section class="my-4">
    <div class="py-3">
        <h1 style="font-family: 'Josefin Sans', sans-serif;" class="text-center"><u>Some Services</u></h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/s1a.jpg" class="img-fluid serviceimg">
                <h3 style="font-family: 'Josefin Sans', sans-serif;" class="text-center pb-5">Skin, Hair & Nail Diseases</h3> 
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/s2.jpg" class="img-fluid serviceimg">
                <h3 style="font-family: 'Josefin Sans', sans-serif;" class="text-center pb-5">Skincare Advice</h3> 
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/s3.jpg" class="img-fluid serviceimg">
                <h3 style="font-family: 'Josefin Sans', sans-serif;" class="text-center pb-5">Cosmectic Treatment</h3> 
            </div>
            
            <!--<div class="col-lg-4 col-md-4 col-12">
                <img src="images/s4.webp" class="img-fluid serviceimg">
                <h3 style="font-family: 'Josefin Sans', sans-serif;" class="text-center pb-5">Acne Treatment</h3> 
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/s5.jpg" class="img-fluid serviceimg">
                <h3 style="font-family: 'Josefin Sans', sans-serif;" class="text-center pb-5">Pimple Treatment</h3> 
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/s6.JPG" class="img-fluid serviceimg">
                <h3 style="font-family: 'Josefin Sans', sans-serif;" class="text-center pb-5">Laser Treatment</h3> 
            </div>-->
        </div>
    </div>
</section>
    <!--<header>
      <label for="slide-1" id="slide-1"></label>
      <label for="slide-2" id="slide-2"></label>
    </header>
  </div>
</div> 
<section class="w3l-call-to-action_9">
    <div class="call-w3 ">
        <div class="container">
            <div class="grids">
                    <div class="grids-content row">

                        <div class="column col-lg-4 col-md-6 color-2 ">
                            <div>
                            <h4 class=" ">Our Salon is Most Popular</h4>
                            <p class="para ">Eline Hair and Beauty Salon Offers - Beauty Services</p>
                            <a href="about.php" class="action-button btn mt-md-4 mt-3">Read more</a>
                        </div>
                    </div>
                        <div class="column col-lg-4 col-md-6 col-sm-6 back-image  ">
                            <img src="assets/images/5.jpg" alt="product" class="img-responsive ">
                        </div>
                        <div class="column col-lg-4 col-md-6 col-sm-6 back-image2 ">
                            <img src="assets/images/6.jpg" alt="product" class="img-responsive ">
                          </div>
                    </div>
                </div>
        </div>
    </div>
</section>-->
<section class="w3l-teams-15">
	<div class="team-single-main ">
		<div class="container">
		
				<div class="column2 image-text">
					<h3 class="team-head ">What is a dermatologist?</h3>
					<p class="para  text ">
          A dermatologist is a medical doctor who specializes in conditions that affect the skin, hair, and nails. Whether it's rashes, wrinkles, psoriasis, or melanoma, no one understands your skin, hair, and nails better than a board-certified dermatologist.
						<a href="book-appointment.php" class="btn logo-button top-margin mt-4">Get An Appointment</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--<section class="w3l-specification-6">
    <div class="specification-layout ">
        <div class="container">
            <div class=" row">
                <div class="col-lg-6 back-image">
                    <img src="assets/images/b1.jpg" alt="product" class="img-responsive ">
                </div>
                <div class="col-lg-6 about-right-faq align-self">
                    <h3 class="title-big"><a href="about.html">Clean and Recommended Hair Salon</a></h3>
                    <p class="mt-3 para"> Their array of beauty parlour services include haircuts, hair spas, colouring, texturing, styling, waxing, pedicures, manicures, threading, body spa, natural facials and more.</p>
                        <div class="hair-cut">
                            <div >
                    <ul class="w3l-right-book">
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">Hair cut with Blow dry</a></li>
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">Color & highlights</a></li>
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">Shampoo & Set</a></li>
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">Blow Dry & Curl</a></li>
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">Advance Hair Color</a></li>
                    </ul>
                </div>
                    <div  class="image-right">
                        <ul class="w3l-right-book">
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">Back Massage</a></li>
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">Hair Treatment</a></li>
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">Face Massage</a></li>
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">Skin Care</a></li>
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">Body Therapies</a></li>
                        </ul>
                </div>
            </div>
        </div>
</section>-->
<br><br><br>
<iframe src="includes/footer.php" style="height:300px!important; width:100%" scrolling="no"></iframe>
<?//php include_once('includes/footer.php');?>
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
	<span class="fa fa-long-arrow-up"></span>
</button>
<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("movetop").style.display = "block";
		} else {
			document.getElementById("movetop").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>
<!-- /move top -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   
    <script src="https://cdnjs.couldfare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>