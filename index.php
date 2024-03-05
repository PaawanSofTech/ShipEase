<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Autoroad - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
		rel="stylesheet">

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

	<style>
		input.form-control[type="text"] {
			color: black !important;
		}
	</style>
</head>

<body>

	<?php include('includes/navbar.php'); ?>
	<!-- END nav -->

	<div class="hero-wrap" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text justify-content-start align-items-center">
				<div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
					<div class="text">
						<h1 class="mb-4">Navigating <span> the Waves of Convenience</span></h1>
						<p style="font-size: 18px;">

							Sail smoothly through the logistics of your voyage and experience the ease of maritime
							transport with us.</p>
						<a href="	" class="icon-wrap popup-vimeo d-flex align-items-center mt-4">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="ion-ios-play"></span>
							</div>
							<div class="heading-title ml-5">
								<span>Discover Seamless Ship Port Transportation</span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-2 col"></div>
				<div class="col-lg-4 col-md-6 mt-0 mt-md-5 ">
					<form action="#" class="request-form ftco-animate">
						<h2>Shiping Details</h2>
						<div class="form-group">
							<label for="" class="label">Pick-up location</label>
							<input style="color:black" type="text" class="form-control"
								placeholder="City, Airport, Station, etc">
						</div>
						<div class="form-group">
							<label for="" class="label">Drop-off location</label>
							<input type="text" class="form-control" placeholder="City, Airport, Station, etc">
						</div>

						<div class="form-group">
							<input type="submit" value="Search Vehicle" class="btn btn-primary py-3 px-4">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<br>

	<section class="ftco-section services-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">Our Services</span>
					<h2 class="mb-2">Our Services</h2>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services">
						<div class="media-body py-md-4">
							<div class="d-flex mb-3 align-items-center">
								<div class="icon"><span class="flaticon-customer-support"></span></div>
								<h3 class="heading mb-0 pl-3">24/7 Cargo Support</h3>
							</div>
							<p>Experience reliable cargo transportation around the clock.
							</p>
							</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services">
						<div class="media-body py-md-4">
							<div class="d-flex mb-3 align-items-center">
								<div class="icon"><span class="flaticon-route"></span></div>
								<h3 class="heading mb-0 pl-3">Diverses location</h3>
							</div>
							<p>Connect effortlessly to various destinations with our comprehensive service.
								</p>
							</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services">
						<div class="media-body py-md-4">
							<div class="d-flex mb-3 align-items-center">
								<div class="icon"><span class="flaticon-online-booking"></span></div>
								<h3 class="heading mb-0 pl-3">Effortless Reservations</h3>
							</div>
							<p>Book with ease, ensuring a smooth journey every time.
							</p>
							</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services">
						<div class="media-body py-md-4">
							<div class="d-flex mb-3 align-items-center">
								<div class="icon"><span class="flaticon-rent"></span></div>
								<h3 class="heading mb-0 pl-3">Rental Cars</h3>
							</div>
							<p>Embark on your journey with our rental cars, providing vitality and mobility for your travels.
							</p>
							</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container-fluid px-4">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">What we offer</span>
					<h2 class="mb-2">Choose Your Car</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="car-wrap ftco-animate">
						<div class="img d-flex align-items-end" style="background-image: url(images/car-1.jpg);">
							<div class="price-wrap d-flex">
								<span class="rate">$25</span>
								<p class="from-day">
									<span>From</span>
									<span>/Day</span>
								</p>
							</div>
						</div>
						<div class="text p-4 text-center">
							<h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
							<span>Audi</span>
							<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book
									now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="car-wrap ftco-animate">
						<div class="img d-flex align-items-end" style="background-image: url(images/car-2.jpg);">
							<div class="price-wrap d-flex">
								<span class="rate">$25</span>
								<p class="from-day">
									<span>From</span>
									<span>/Day</span>
								</p>
							</div>
						</div>
						<div class="text p-4 text-center">
							<h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
							<span>Ford</span>
							<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book
									now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="car-wrap ftco-animate">
						<div class="img d-flex align-items-end" style="background-image: url(images/car-3.jpg);">
							<div class="price-wrap d-flex">
								<span class="rate">$25</span>
								<p class="from-day">
									<span>From</span>
									<span>/Day</span>
								</p>
							</div>
						</div>
						<div class="text p-4 text-center">
							<h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
							<span>Cheverolet</span>
							<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book
									now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="car-wrap ftco-animate">
						<div class="img d-flex align-items-end" style="background-image: url(images/car-4.jpg);">
							<div class="price-wrap d-flex">
								<span class="rate">$25</span>
								<p class="from-day">
									<span>From</span>
									<span>/Day</span>
								</p>
							</div>
						</div>
						<div class="text p-4 text-center">
							<h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
							<span>Mercedes</span>
							<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book
									now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="car-wrap ftco-animate">
						<div class="img d-flex align-items-end" style="background-image: url(images/car-5.jpg);">
							<div class="price-wrap d-flex">
								<span class="rate">$25</span>
								<p class="from-day">
									<span>From</span>
									<span>/Day</span>
								</p>
							</div>
						</div>
						<div class="text p-4 text-center">
							<h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
							<span>Audi</span>
							<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book
									now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="car-wrap ftco-animate">
						<div class="img d-flex align-items-end" style="background-image: url(images/car-6.jpg);">
							<div class="price-wrap d-flex">
								<span class="rate">$25</span>
								<p class="from-day">
									<span>From</span>
									<span>/Day</span>
								</p>
							</div>
						</div>
						<div class="text p-4 text-center">
							<h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
							<span>Ford</span>
							<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book
									now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="car-wrap ftco-animate">
						<div class="img d-flex align-items-end" style="background-image: url(images/car-7.jpg);">
							<div class="price-wrap d-flex">
								<span class="rate">$25</span>
								<p class="from-day">
									<span>From</span>
									<span>/Day</span>
								</p>
							</div>
						</div>
						<div class="text p-4 text-center">
							<h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
							<span>Cheverolet</span>
							<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book
									now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="car-wrap ftco-animate">
						<div class="img d-flex align-items-end" style="background-image: url(images/car-8.jpg);">
							<div class="price-wrap d-flex">
								<span class="rate">$25</span>
								<p class="from-day">
									<span>From</span>
									<span>/Day</span>
								</p>
							</div>
						</div>
						<div class="text p-4 text-center">
							<h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
							<span>Mercedes</span>
							<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book
									now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section services-section img" style="background-image: url(images/bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
					<span class="subheading">Work flow</span>
					<h2 class="mb-3">How it works</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services services-2">
						<div class="media-body py-md-4 text-center">
							<div class="icon d-flex align-items-center justify-content-center"><span
									class="flaticon-route"></span></div>
							<h3>Pick Destination</h3>
							<p>A small river named Duden flows by their place and supplies it with you</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services services-2">
						<div class="media-body py-md-4 text-center">
							<div class="icon d-flex align-items-center justify-content-center"><span
									class="flaticon-select"></span></div>
							<h3>Select Term</h3>
							<p>A small river named Duden flows by their place and supplies it with you</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services services-2">
						<div class="media-body py-md-4 text-center">
							<div class="icon d-flex align-items-center justify-content-center"><span
									class="flaticon-rent"></span></div>
							<h3>Choose A Car</h3>
							<p>A small river named Duden flows by their place and supplies it with you</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services services-2">
						<div class="media-body py-md-4 text-center">
							<div class="icon d-flex align-items-center justify-content-center"><span
									class="flaticon-review"></span></div>
							<h3>Enjoy The Ride</h3>
							<p>A small river named Duden flows by their place and supplies it with you</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section testimony-section">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Testimonial</span>
					<h2 class="mb-3">Happy Clients</h2>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel ftco-owl">
						<div class="item">
							<div class="testimony-wrap text-center py-4 pb-5">
								<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
								</div>
								<div class="text pt-4">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Roger Scott</p>
									<span class="position">Marketing Manager</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center py-4 pb-5">
								<div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
								</div>
								<div class="text pt-4">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Roger Scott</p>
									<span class="position">Interface Designer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center py-4 pb-5">
								<div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
								</div>
								<div class="text pt-4">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Roger Scott</p>
									<span class="position">UI Designer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center py-4 pb-5">
								<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
								</div>
								<div class="text pt-4">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Roger Scott</p>
									<span class="position">Web Developer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center py-4 pb-5">
								<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
								</div>
								<div class="text pt-4">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Roger Scott</p>
									<span class="position">System Analyst</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
					style="background-image: url(images/about.jpg);">
				</div>
				<div class="col-md-6 wrap-about py-md-5 ftco-animate">
					<div class="heading-section mb-5 pl-md-5">
						<span class="subheading">About us</span>
						<h2 class="mb-4">Choose A Perfect Car</h2>

						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
							It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it
							would have been rewritten a thousand times and everything that was left from its origin
							would be the word "and" and the Little Blind Text should turn around and return to its own,
							safe country. But nothing the copy said could convince her and so it didn’t take long until
							a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged
							her into their agency, where they abused her for their.</p>
						<p><a href="#" class="btn btn-primary">Search Vehicle</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Blog</span>
					<h2>Recent Blog</h2>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="blog-single.html" class="block-20"
							style="background-image: url('images/image_1.jpg');">
						</a>
						<div class="text pt-4">
							<div class="meta mb-3">
								<div><a href="#">July. 24, 2019</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
							</div>
							<h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="blog-single.html" class="block-20"
							style="background-image: url('images/image_2.jpg');">
						</a>
						<div class="text pt-4">
							<div class="meta mb-3">
								<div><a href="#">July. 24, 2019</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
							</div>
							<h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20"
							style="background-image: url('images/image_3.jpg');">
						</a>
						<div class="text pt-4">
							<div class="meta mb-3">
								<div><a href="#">July. 24, 2019</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
							</div>
							<h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include('includes/footer.php'); ?>

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
		</svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

</body>

</html>