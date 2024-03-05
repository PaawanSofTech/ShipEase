<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>ShipEase - Navigating the Waves of Convenience</title>
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

	<div class="hero-wrap" style="background-image: url('images/banner_5.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text justify-content-start align-items-center">
				<div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
					<div class="text">
						<h1 class="mb-4" style=" font-weight: bold">Navigating <span> the Waves of Convenience</span>
						</h1>
						<p style="font-size: 18px; ">

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
				<div class="col-lg-4 col-md-6 mt-0 mt-md-5">
					<form action="shipping.php" method="post" class="request-form ftco-animate">
						<h2>Shipping Details</h2>
						<div class="form-group">
							<label for="pickup_location" class="label">Pick-up location</label>
							<input style="color: black" type="text" name="departure" id="pickup_location"
								class="form-control" placeholder="City, Airport, Station, etc" required>
						</div>
						<div class="form-group">
							<label for="dropoff_location" class="label">Drop-off location</label>
							<input type="text" name="arrival" id="dropoff_location" class="form-control"
								placeholder="City, Airport, Station, etc" required>
						</div>

						<div class="form-group">
							<input type="submit" value="Search Cargo" class="btn btn-primary py-3 px-4">
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
							<p>Embark on your journey with our rental cars, providing vitality and mobility for your
								travels.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<br>
	<section class="ftco-section">
		<div class="container-fluid px-4">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">What we offer</span>
					<h2 class="mb-2">Choose Your Cargo</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="car-wrap ftco-animate">
						<div class="img d-flex align-items-end" style="background-image: url(images/container1.jpg);">
							<div class="price-wrap d-flex">
								<span class="rate">$1000</span>
								<p class="from-day">
									<span>From</span>
									<span>/Day</span>
								</p>
							</div>
						</div>
						<div class="text p-4 text-center">
							<h2 class="mb-0"><a href="#">APL (American President Lines)</a></h2>
							<br>
							<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book
									now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="car-wrap ftco-animate">
						<div class="img d-flex align-items-end" style="background-image: url(images/container2.jpg);">
							<div class="price-wrap d-flex">
								<span class="rate">$750</span>
								<p class="from-day">
									<span>From</span>
									<span>/Day</span>
								</p>
							</div>
						</div>
						<div class="text p-4 text-center">
							<h2 class="mb-0"><a href="#">ONE (Ocean Network Express)</a></h2>
							<br>
							<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book
									now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="car-wrap ftco-animate">
						<div class="img d-flex align-items-end" style="background-image: url(images/container3.jpg);">
							<div class="price-wrap d-flex">
								<span class="rate">$1200</span>
								<p class="from-day">
									<span>From</span>
									<span>/Day</span>
								</p>
							</div>
						</div>
						<div class="text p-4 text-center">
							<h2 class="mb-0"><a href="#">ZIM Integrated Shipping Services</a></h2>
							<br>
							<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book
									now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="car-wrap ftco-animate">
						<div class="img d-flex align-items-end" style="background-image: url(images/container4.jpg);">
							<div class="price-wrap d-flex">
								<span class="rate">$950</span>
								<p class="from-day">
									<span>From</span>
									<span>/Day</span>
								</p>
							</div>
						</div>
						<div class="text p-4 text-center">
							<h2 class="mb-0"><a href="#">Yang Ming Marine Transport Corporation</a></h2>
							<br>
							<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book
									now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="car-wrap ftco-animate">
						<div class="img d-flex align-items-end" style="background-image: url(images/container5.jpg);">
							<div class="price-wrap d-flex">
								<span class="rate">$1500</span>
								<p class="from-day">
									<span>From</span>
									<span>/Day</span>
								</p>
							</div>
						</div>
						<div class="text p-4 text-center">
							<h2 class="mb-0"><a href="#">Hapag-Lloyd</a></h2>
							<br>
							<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book
									now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="car-wrap ftco-animate">
						<div class="img d-flex align-items-end" style="background-image: url(images/container6.jpg);">
							<div class="price-wrap d-flex">
								<span class="rate">$1350</span>
								<p class="from-day">
									<span>From</span>
									<span>/Day</span>
								</p>
							</div>
						</div>
						<div class="text p-4 text-center">
							<h2 class="mb-0"><a href="#">CMA CGM</a></h2>
							<br>
							<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book
									now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="car-wrap ftco-animate">
						<div class="img d-flex align-items-end" style="background-image: url(images/container7.jpeg);">
							<div class="price-wrap d-flex">
								<span class="rate">$1000</span>
								<p class="from-day">
									<span>From</span>
									<span>/Day</span>
								</p>
							</div>
						</div>
						<div class="text p-4 text-center">
							<h2 class="mb-0"><a href="#">Evergreen Marine Services Corporation</a></h2>
							<br>
							<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book
									now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="car-wrap ftco-animate">
						<div class="img d-flex align-items-end" style="background-image: url(images/container8.jpg);">
							<div class="price-wrap d-flex">
								<span class="rate">$1350</span>
								<p class="from-day">
									<span>From</span>
									<span>/Day</span>
								</p>
							</div>
						</div>
						<div class="text p-4 text-center">
							<h2 class="mb-0"><a href="#">UASC (United Arab Shipping Company)</a></h2>
							<br>
							<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book
									now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section services-section img" style="background-image: url(images/banner_2.jpg);">
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
							<p>Choose your destination effortlessly, just as the Duden river flows through its course.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services services-2">
						<div class="media-body py-md-4 text-center">
							<div class="icon d-flex align-items-center justify-content-center"><span
									class="flaticon-select"></span></div>
							<h3>Select Term</h3>
							<p>Choose the duration that suits your needs effortlessly.
							</p>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services services-2">
						<div class="media-body py-md-4 text-center">
							<div class="icon d-flex align-items-center justify-content-center"><span
									class="flaticon-rent"></span></div>
							<h3>Choose A Cargo</h3>
							<p>Select from our diverse fleet of vehicles for a tailored experience.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services services-2">
						<div class="media-body py-md-4 text-center">
							<div class="icon d-flex align-items-center justify-content-center"><span
									class="flaticon-review"></span></div>
							<h3>Enjoy The Ease</h3>
							<p>Sit back, relax, with our seamless transportation services.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<br>

	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
					style="background-image: url(images/ship.jpg);">
				</div>
				<div class="col-md-6 wrap-about py-md-5 ftco-animate">
					<div class="heading-section mb-5 pl-md-5">
						<span class="subheading">About us</span>
						<h2 class="mb-4">Choose A Perfect Cargo</h2>

						<p>In the realm of seamless cargo transport, envision your perfect journey with us. Just as a
							small river named Duden supplies essential regelialia to its surroundings, we provide vital
							and reliable shipping solutions. Our commitment is akin to a paradisematic country, ensuring
							that your cargo experience is unparalleled. Navigating the waves of logistics, we strive to
							deliver excellence. On this voyage, you won't encounter the roasted parts of sentences, but
							a smooth and reliable service that stands the test of time. Choose us for your cargo needs,
							and let your shipments sail with confidence.</p>
						<p><a href="#" class="btn btn-primary">Search Services</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<br>
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