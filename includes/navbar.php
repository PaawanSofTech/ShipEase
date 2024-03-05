<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
		<a class="navbar-brand" href="index.html">Ship<span>Ease</span></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
			aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>

		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'index.php')
					echo 'active'; ?>"><a
						href="index.php" class="nav-link">Home</a></li>
				
				<li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'pricing.php')
					echo 'active'; ?>"><a
						href="pricing.php" class="nav-link">Pricing</a></li>
				<li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'services.php')
					echo 'active'; ?>"><a
						href="services.php" class="nav-link">Service</a></li>
				
				<li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'contact.php')
					echo 'active'; ?>"><a
						href="contact.php" class="nav-link">Contact</a></li>

			</ul>
		</div>

		<div class="h3_header-btn d-none d-sm-block" style="background-color: #FC983C; border-radius: 12px">
			<a href="sign-in.php" class="btn" style="color: white">Log In <i class="fa-light fa-arrow-up-right"></i></a>
		</div>
	</div>
</nav>