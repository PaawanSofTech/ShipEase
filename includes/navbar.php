<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">Auto<span>road</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
    		<ul class="navbar-nav ml-auto">
				<li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'about.php') echo 'active'; ?>"><a href="about.php" class="nav-link">About</a></li>
				<li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'pricing.php') echo 'active'; ?>"><a href="pricing.php" class="nav-link">Pricing</a></li>
				<li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'car.php') echo 'active'; ?>"><a href="car.php" class="nav-link">Our Car</a></li>
				<li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'blog.php') echo 'active'; ?>"><a href="blog.php" class="nav-link">Blog</a></li>
				<li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'active'; ?>"><a href="contact.php" class="nav-link">Contact</a></li>
			</ul>
			</div>

		</div>
</nav>