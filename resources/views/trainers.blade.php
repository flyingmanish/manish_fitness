	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Fitness</title>

			@include('header')
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Trainers				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="trainers.html"> Trainers</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start trainer Area -->
			<section class="trainer-area section-gap" id="trainer">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Our Experienced Trainers</h1>
								<p>As you pour the first glass of your favorite Chianti.</p>
							</div>
						</div>
					</div>						
					<div class="row justify-content-center d-flex align-items-center">
						<div class="col-lg-3 col-md-6 single-trainer">
						    <div class="thumb">
						        <img class="img-fluid" src="{{url('assets/img/t1.jpg')}}" alt="">
						        <div class="align-items-center justify-content-center d-flex">
									<a href="https://www.facebook.com/manish.shirke.58"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
						        </div>
						    </div>
						    <div class="meta-text mt-30 text-center">
							    <h4>Manish Shirke</h4>
							    <p>Managing Director/ Trainer</p>									    	
						    </div>
						</div>
						<div class="col-lg-3 col-md-6 single-trainer">
						    <div class="thumb">
						        <img class="img-fluid" src="{{url('assets/img/t2.jpg')}}" alt="">
						        <div class="align-items-center justify-content-center d-flex">
									<a href="https://www.facebook.com/akash.matale.1"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
						        </div>
						    </div>
						    <div class="meta-text mt-30 text-center">
							    <h4>Akash Matale</h4>
							    <p>Co-founder/Trainer</p>			    	
						    </div>
						</div>	
						<div class="col-lg-3 col-md-6 single-trainer">
						    <div class="thumb">
						        <img class="img-fluid" src="{{url('assets/img/t3.jpg')}}" alt="">
						        <div class="align-items-center justify-content-center d-flex">
									<a href="https://www.facebook.com/profile.php?id=100009121243700"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
						        </div>
						    </div>
						    <div class="meta-text mt-30 text-center">
							    <h4>Shruti Kadam</h4>
							    <p>Floor Manager/ Trainer</p>			    	
						    </div>
						</div>	
						<div class="col-lg-3 col-md-6 single-trainer">
						    <div class="thumb">
						        <img class="img-fluid" src="{{url('assets/img/t4.jpg')}}" alt="">
						        <div class="align-items-center justify-content-center d-flex">
									<a href="https://www.facebook.com/profile.php?id=100008725272065&ref=br_rs"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
						        </div>
						    </div>
						    <div class="meta-text mt-30 text-center">
							    <h4>Vipul Vidhate</h4>
							    <p>Manager/ Trainer</p>			    	
						    </div>
						</div>																															
				
					</div>
				</div>	
			</section>
			<!-- End trainer Area -->

			<!-- Start cta Area -->
			<section class="cta-area">
				<div class="container-fluid">
					<div class="row no-padding">
						<div class="col-lg-6 single-cta cta1 no-padding section-gap relative">
							<div class="overlay overlay-bg"></div>
							<h6 class=text-uppercase>Book an appointment</h6>
							<h1>Get into shape now</h1>
							<a href="#" class="primary-btn">Book Now</a>
						</div>
						<div class="col-lg-6 single-cta cta2 no-padding section-gap relative">
							<div class="overlay overlay-bg"></div>
							<h6 class=text-uppercase>Book an appointment</h6>
							<h1>Get into shape now</h1>
							<a href="#" class="primary-btn">Book Now</a>			
		
						</div>
					</div>
				</div>	
			</section>
			<!-- End cta Area -->			
		@include('footer')					    			
	</html>