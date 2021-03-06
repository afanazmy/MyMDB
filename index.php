<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MyMDB &mdash; My Movie Database</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div class="gtco-loader"></div>

	<div id="page">

		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">

				<div class="row">
					<div class="col-sm-2 col-xs-12">
						<div id="gtco-logo"><a href="index.php"><img src="images/logo.png" alt="Free HTML5 Website Template by GetTemplates.co"></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="index.php">Home</a></li>
						</ul>
					</div>
				</div>

			</div>
		</nav>

		<header id="gtco-header" class="gtco-cover" role="banner">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-left">
						<div class="display-t">
							<div class="display-tc">
								<div class="row">
									<div class="col-md-5 text-center header-img">
										<img src="images/cube.png" alt="Free HTML5 Website Template by GetTemplates.co">
									</div>
									<div class="col-md-7 copy">
										<h1>Browse your movie simpler, try this for free.</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- END #gtco-header -->

		<div class="gtco-section gtco-products">
            <?php include 'grabber.php'; ?>
			<div class="gtco-container">
				<div class="row row-pb-sm">
					<div class="col-md-8 col-md-offset-2 gtco-heading text-center">
						<h2>Opening This Week</h2>
					</div>
				</div>
				<div class="row row-pb-md">
                    <?php for ($i=0; $i < $countOpeningThisWeek; $i++) { ?>
					<div class="col-md-3 col-sm-3">
						<a href="detail.php?idIMDB=<?php echo $openingThisWeek[$i]->idIMDB; ?>" class="gtco-item one-row bg-img animate-box" style="background-image: url(<?php echo $openingThisWeek[$i]->urlPoster; ?>)">
							<div class="overlay">
								<i><?php if (isset($openingThisWeek[$i]->runtime)) { echo $openingThisWeek[$i]->runtime; } ?></i>
								<div class="copy">
									<h3><?php echo $openingThisWeek[$i]->title; ?></h3>
									<p><?php echo $openingThisWeek[$i]->simplePlot; ?></p>
								</div>
							</div>
							<img src="<?php echo $openingThisWeek[$i]->urlPoster; ?>" class="hidden" alt="Free HTML5 Website Template by GetTemplates.co">
						</a>
					</div>
                    <?php } ?>
				</div>

				<div class="row row-pb-sm">
					<div class="col-md-8 col-md-offset-2 gtco-heading text-center">
						<h2>In Theaters Now</h2>
					</div>
				</div>
				<div class="row row-pb-md">
                    <?php for ($i=0; $i < $countInTheatersNow; $i++) { ?>
					<div class="col-md-3 col-sm-3">
						<a href="detail.php?idIMDB=<?php echo $inTheatersNow[$i]->idIMDB; ?>" class="gtco-item one-row bg-img animate-box" style="background-image: url(<?php echo $inTheatersNow[$i]->urlPoster; ?>)">
							<div class="overlay">
								<i><?php echo $inTheatersNow[$i]->runtime; ?></i>
								<div class="copy">
									<h3><?php echo $inTheatersNow[$i]->title; ?></h3>
									<p><?php echo $inTheatersNow[$i]->simplePlot; ?></p>
								</div>
							</div>
							<img src="<?php echo $inTheatersNow[$i]->urlPoster; ?>" class="hidden" alt="Free HTML5 Website Template by GetTemplates.co">
						</a>
					</div>
                    <?php } ?>
				</div>
				<!-- <div class="row">
					<div class="col-md-12 text-center">
					<p><a href="http://gettemplates.co" target="_blank" class="btn btn-special">Visit Gettemplates.co</a></p>
					</div>
				</div> -->
			</div>
		</div>
		<!-- END .gtco-products -->

		<footer id="gtco-footer" class="gtco-section" role="contentinfo">
			<!-- <div class="gtco-container">
				<div class="row row-pb-md">
					<div class="col-md-8 col-md-offset-2 gtco-cta text-center">
						<h3>We Love To Talk About Your Business</h3>
						<p><a href="#" class="btn btn-white btn-outline">Contact Us</a></p>
					</div>
				</div>
				<div class="row row-pb-md">
					<div class="col-md-4 gtco-widget gtco-footer-paragraph">
						<h3>Cube</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat enim et urna sagittis, rhoncus euismod.</p>
					</div>
					<div class="col-md-4 gtco-footer-link">
						<div class="row">
							<div class="col-md-6">
								<ul class="gtco-list-link">
									<li><a href="#">Home</a></li>
									<li><a href="#">Features</a></li>
									<li><a href="#">Products</a></li>
									<li><a href="#">Testimonial</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<p>
									<a href="tel://1234567890">+1 234 4565 2342</a> <br>
									<a href="#">info@domain.com</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 gtco-footer-subscribe">
						<form class="form-inline">
						  <div class="form-group">
						    <label class="sr-only" for="exampleInputEmail3">Email address</label>
						    <input type="email" class="form-control" id="" placeholder="Email">
						  </div>
						  <button type="submit" class="btn btn-primary">Send</button>
						</form>
					</div>
				</div>
			</div> -->
			<div class="gtco-copyright">
				<div class="gtco-container">
					<div class="row">
						<div class="col-md-6 text-left">
							<p><small>&copy; 2016 Free HTML5. All Rights Reserved. </small></p>
						</div>
						<div class="col-md-6 text-right">
							<p><small>Designed by <a href="http://gettemplates.co/" target="_blank">GetTemplates.co</a> Demo Images: <a href="http://pixeden.com/" target="_blank">Pixeden</a> &amp; <a href="http://unsplash.com" target="_blank">Unsplash</a></small> </p>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
