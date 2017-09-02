<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Finnice</title>
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- REVOLUTION SLIDER -->
		<link href="assets/plugins/slider.revolution/css/extralayers.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/slider.revolution/css/settings.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
	</head>

	<!--
		AVAILABLE BODY CLASSES:
		
		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background
		
		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click
		
		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/_smarty/boxed_background/1.jpg"
	-->
	<body class="smoothscroll enable-animation">

		<!-- SLIDE TOP -->
		<div id="slidetop">

			<div class="container">
				
				<div class="row">

					<div class="col-md-4">
						<h6><i class="icon-heart"></i> WHY SMARTY?</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. </p>
					</div>

					<div class="col-md-4">
						<h6><i class="fa fa-check"></i> RECENTLY VISITED</h6>
						<ul class="list-unstyled">
							<li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> This is a very long text, very very very very very very very very very very very very </a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Dolor sit amet,consectetur adipiscing elit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet,consectetur adipiscing elit</a></li>
						</ul>
					</div>

					<div class="col-md-4">
						<h6><i class="icon-envelope"></i> CONTACT INFO</h6>
						<ul class="list-unstyled">
							<li><b>Address:</b> PO Box 21132, Here Weare St, <br /> Melbourne, Vivas 2355 Australia</li>
							<li><b>Phone:</b> 1-800-565-2390</li>
							<li><b>Email:</b> <a href="mailto:support@yourname.com">support@yourname.com</a></li>
						</ul>
					</div>

				</div>

			</div>

			<a class="slidetop-toggle" href="#"><!-- toggle button --></a>

		</div>
		<!-- /SLIDE TOP -->


		<!-- wrapper -->
		<div id="wrapper">

			<!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
			<div id="header" class="translucent clearfix">

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- BUTTONS -->
						<ul class="pull-right nav nav-pills nav-second-main">

							<!-- SEARCH -->
							<li class="search">
								<a href="javascript:;">
									<i class="fa fa-search"></i>
								</a>
								<div class="search-box">
									<form action="page-search-result-1.html" method="get">
										<div class="input-group">
											<input type="text" name="src" placeholder="Search" class="form-control" />
											<span class="input-group-btn">
												<button class="btn btn-primary" type="submit">Search</button>
											</span>
										</div>
									</form>
								</div> 
							</li>
							<!-- /SEARCH -->

							<!-- QUICK SHOP CART -->
							<li class="quick-cart">
								<a href="#">
									<span class="badge badge-aqua btn-xs badge-corner">2</span>
									<i class="fa fa-shopping-cart"></i> 
								</a>
								<div class="quick-cart-box">
									<h4>Shop Cart</h4>

									<div class="quick-cart-wrapper">

										<a href="#"><!-- cart item -->
											<img src="demo_files/images/people/300x300/4-min.jpg" width="45" height="45" alt="" />
											<h6><span>2x</span> RED BAG WITH HUGE POCKETS</h6>
											<small>$37.21</small>
										</a><!-- /cart item -->

										<a href="#"><!-- cart item -->
											<img src="demo_files/images/people/300x300/5-min.jpg" width="45" height="45" alt="" />
											<h6><span>2x</span> THIS IS A VERY LONG TEXT AND WILL BE TRUNCATED</h6>
											<small>$17.18</small>
										</a><!-- /cart item -->

										<!-- cart no items example -->
										<!--
										<a class="text-center" href="#">
											<h6>0 ITEMS ON YOUR CART</h6>
										</a>
										-->

									</div>

									<!-- quick cart footer -->
									<div class="quick-cart-footer clearfix">
										<a href="shop-cart.html" class="btn btn-primary btn-xs pull-right">VIEW CART</a>
										<span class="pull-left"><strong>TOTAL:</strong> $54.39</span>
									</div>
									<!-- /quick cart footer -->

								</div>
							</li>
							<!-- /QUICK SHOP CART -->

						</ul>
						<!-- /BUTTONS -->

						<!-- Logo -->
						<a class="logo pull-left" href="index.html">
							<img src="assets/images/_smarty/logo_light.png" alt="" />
						</a>

						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
							<nav class="nav-main">

								<!--
									NOTE
									
									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example: 

									<li>
										<a href="#">HOME</a>
									</li>
								-->
								<ul id="topMain" class="nav nav-pills nav-main">
									<li class="dropdown active"><!-- HOME -->
										<a class="dropdown-toggle" href="#">
											HOME
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													HOME CORPORATE
												</a>
												<ul class="dropdown-menu">
													<li><a href="index-corporate-1.html">CORPORATE LAYOUT 1</a></li>
													<li><a href="index-corporate-2.html">CORPORATE LAYOUT 2</a></li>
													<li><a href="index-corporate-3.html">CORPORATE LAYOUT 3</a></li>
													<li><a href="index-corporate-4.html">CORPORATE LAYOUT 4</a></li>
													<li><a href="index-corporate-5.html">CORPORATE LAYOUT 5</a></li>
													<li><a href="index-corporate-6.html">CORPORATE LAYOUT 6</a></li>
													<li><a href="index-corporate-7.html">CORPORATE LAYOUT 7</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													HOME PORTFOLIO
												</a>
												<ul class="dropdown-menu">
													<li><a href="index-portfolio-1.html">PORTFOLIO LAYOUT 1</a></li>
													<li><a href="index-portfolio-2.html">PORTFOLIO LAYOUT 2</a></li>
													<li><a href="index-portfolio-masonry.html">PORTFOLIO MASONRY</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													HOME BLOG
												</a>
												<ul class="dropdown-menu">
													<li><a href="index-blog-1.html">BLOG LAYOUT 1</a></li>
													<li><a href="index-blog-2.html">BLOG LAYOUT 2</a></li>
													<li><a href="index-blog-3.html">BLOG LAYOUT 3</a></li>
													<li><a href="index-blog-4.html">BLOG LAYOUT 4</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													HOME SHOP
												</a>
												<ul class="dropdown-menu">
													<li><a href="index-shop-1.html">SHOP LAYOUT 1</a></li>
													<li><a href="index-shop-2.html">SHOP LAYOUT 2</a></li>
													<li><a href="index-shop-3.html">SHOP LAYOUT 3</a></li>
													<li><a href="index-shop-4.html">SHOP LAYOUT 4</a></li>
													<li><a href="index-shop-5.html">SHOP LAYOUT 5</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													HOME MAGAZINE
												</a>
												<ul class="dropdown-menu">
													<li><a href="index-magazine-1.html">MAGAZINE LAYOUT 1</a></li>
													<li><a href="index-magazine-2.html">MAGAZINE LAYOUT 2</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													HOME LANDING PAGE
												</a>
												<ul class="dropdown-menu">
													<li><a href="index-landing-1.html">LANDING PAGE LAYOUT 1</a></li>
													<li><a href="index-landing-2.html">LANDING PAGE LAYOUT 2</a></li>
													<li><a href="index-landing-3.html">LANDING PAGE LAYOUT 3</a></li>
													<li><a href="index-landing-4.html">LANDING PAGE LAYOUT 4</a></li>
													<li><a href="index-landing-5.html">LANDING PAGE LAYOUT 5</a></li>
												</ul>
											</li>
											<li class="dropdown active">
												<a class="dropdown-toggle" href="#">
													HOME FULLSCREEN
												</a>
												<ul class="dropdown-menu">
													<li class="active"><a href="home.blade.php">FULLSCREEN - REVOLUTION</a></li>
													<li><a href="index-fullscreen-youtube.html">FULLSCREEN - YOUTUBE</a></li>
													<li><a href="index-fullscreen-local-video.html">FULLSCREEN - LOCAL VIDEO</a></li>
													<li><a href="index-fullscreen-image.html">FULLSCREEN - IMAGE</a></li>
													<li><a href="index-fullscreen-txt-rotator.html">FULLSCREEN - TEXT ROTATOR</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													HOME ONE PAGE
												</a>
												<ul class="dropdown-menu">
													<li><a href="index-onepage-default.html">ONE PAGE - DEFAULT</a></li>
													<li><a href="index-onepage-revolution.html">ONE PAGE - REVOLUTION</a></li>
													<li><a href="index-onepage-image.html">ONE PAGE - IMAGE</a></li>
													<li><a href="index-onepage-parallax.html">ONE PAGE - PARALLAX</a></li>
													<li><a href="index-onepage-youtube.html">ONE PAGE - YOUTUBE</a></li>
													<li><a href="index-onepage-text-rotator.html">ONE PAGE - TEXT ROTATOR</a></li>
													<li><a href="start.html#onepage"><span class="label label-success pull-right">new</span> 10+ MORE LAYOUTS</a></li>
												</ul>
											</li>
											<li class="divider"></li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													HOME - THEMATICS <i class="fa fa-heart margin-left-10"></i>
												</a>
												<ul class="dropdown-menu">
													<li><a href="index-thematics-restaurant.html">HOME - RESTAURANT</a></li>
													<li><a href="index-thematics-education.html">HOME - EDUCATION</a></li>
													<li><a href="index-thematics-construction.html">HOME - CONSTRUCTION</a></li>
													<li><a href="index-thematics-medical.html">HOME - MEDICAL</a></li>
													<li><a href="index-thematics-church.html">HOME - CHURCH</a></li>
													<li><a href="index-thematics-fashion.html">HOME - FASHION</a></li>
													<li><a href="index-thematics-wedding.html">HOME - WEDDING</a></li>
													<li><a href="index-thematics-events.html">HOME - EVENTS</a></li>
													<li><a href="index-thematics-hosting.html">HOME - HOSTING</a></li>
													<li><a href="index-thematics-lawyer.html">HOME - LAWYER</a></li>
													<li><a href="index-thematics-music.html">HOME - MUSIC</a></li>
												<li><a href="http://www.stepofweb.com/propose-design.html" data-toggle="tooltip" data-placement="top" title="Do you need a specific home design? We can include it in the next update!" target="_blank"><span class="label label-danger pull-right">hot</span> PROPOSE THEMATIC</a></li>
												</ul>
											</li>
											<li class="divider"></li>
											<li><a href="start.html#newrevslider" data-toggle="tooltip" data-placement="top" title="57 More Revolution Slider V5"><span class="label label-danger pull-right">new</span> 57 MORE LAYOUTS</a></li>
											<li class="divider"></li>
											<li><a href="index-simple-revolution.html">HOME SIMPLE - REVOLUTION</a></li>
											<li><a href="index-simple-layerslider.html">HOME SIMPLE - LAYERSLIDER</a></li>
											<li><a href="index-simple-parallax.html">HOME SIMPLE - PARALLAX</a></li>
											<li><a href="index-simple-youtube.html">HOME SIMPLE - YOUTUBE</a></li>
										</ul>
									</li>
									<li class="dropdown"><!-- PAGES -->
										<a class="dropdown-toggle" href="#">
											PAGES
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													MISCELLANEOUS
												</a>
												<ul class="dropdown-menu">
													<li><a href="portfolio-single-project.html">PROJECT PAGE</a></li>
													<li><a href="page-category.html">CATEGORY PAGE</a></li>
													<li><a href="page-cookie-alert.html">COOKIE ALERT</a></li>
													<li><a href="page-music.html">MUSIC PAGE</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													ABOUT
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-about-us-1.html">ABOUT US - LAYOUT 1</a></li>
													<li><a href="page-about-us-2.html">ABOUT US - LAYOUT 2</a></li>
													<li><a href="page-about-us-3.html">ABOUT US - LAYOUT 3</a></li>
													<li><a href="page-about-us-4.html">ABOUT US - LAYOUT 4</a></li>
													<li><a href="page-about-us-5.html">ABOUT US - LAYOUT 5</a></li>
													<li><a href="page-about-me-1.html">ABOUT ME - LAYOUT 1</a></li>
													<li><a href="page-about-me-2.html">ABOUT ME - LAYOUT 2</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													TEAM
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-team-1.html">TEAM - LAYOUT 1</a></li>
													<li><a href="page-team-2.html">TEAM - LAYOUT 2</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													SERVICES
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-services-1.html">SERVICES - LAYOUT 1</a></li>
													<li><a href="page-services-2.html">SERVICES - LAYOUT 2</a></li>
													<li><a href="page-services-3.html">SERVICES - LAYOUT 3</a></li>
													<li><a href="page-services-4.html">SERVICES - LAYOUT 4</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													FAQ
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-faq-1.html">FAQ - LAYOUT 1</a></li>
													<li><a href="page-faq-2.html">FAQ - LAYOUT 2</a></li>
													<li><a href="page-faq-3.html">FAQ - LAYOUT 3</a></li>
													<li><a href="page-faq-4.html">FAQ - LAYOUT 4</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													CONTACT
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-contact-1.html">CONTACT - LAYOUT 1</a></li>
													<li><a href="page-contact-2.html">CONTACT - LAYOUT 2</a></li>
													<li><a href="page-contact-3.html">CONTACT - LAYOUT 3</a></li>
													<li><a href="page-contact-4.html">CONTACT - LAYOUT 4</a></li>
													<li><a href="page-contact-5.html">CONTACT - LAYOUT 5</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													ERROR
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-404-1.html">ERROR 404 - LAYOUT 1</a></li>
													<li><a href="page-404-2.html">ERROR 404 - LAYOUT 2</a></li>
													<li><a href="page-404-3.html">ERROR 404 - LAYOUT 3</a></li>
													<li><a href="page-404-4.html">ERROR 404 - LAYOUT 4</a></li>
													<li><a href="page-404-5.html">ERROR 404 - LAYOUT 5</a></li>
													<li><a href="page-404-6.html">ERROR 404 - LAYOUT 6</a></li>
													<li><a href="page-404-7.html">ERROR 404 - LAYOUT 7</a></li>
													<li><a href="page-404-8.html">ERROR 404 - LAYOUT 8</a></li>
													<li class="divider"></li>
													<li><a href="page-500-1.html">ERROR 500 - LAYOUT 1</a></li>
													<li><a href="page-500-2.html">ERROR 500 - LAYOUT 2</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													SIDEBAR
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-sidebar-left.html">SIDEBAR LEFT</a></li>
													<li><a href="page-sidebar-right.html">SIDEBAR RIGHT</a></li>
													<li><a href="page-sidebar-both.html">SIDEBAR BOTH</a></li>
													<li><a href="page-sidebar-no.html">NO SIDEBAR</a></li>
													<li class="divider"></li>
													<li><a href="page-sidebar-dark-left.html">SIDEBAR LEFT - DARK</a></li>
													<li><a href="page-sidebar-dark-right.html">SIDEBAR RIGHT - DARK</a></li>
													<li><a href="page-sidebar-dark-both.html">SIDEBAR BOTH - DARK</a></li>
													<li><a href="page-sidebar-dark-no.html">NO SIDEBAR - DARK</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													LOGIN/REGISTER
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-login-1.html">LOGIN - LAYOUT 1</a></li>
													<li><a href="page-login-2.html">LOGIN - LAYOUT 2</a></li>
													<li><a href="page-login-3.html">LOGIN - LAYOUT 3</a></li>
													<li><a href="page-login-4.html">LOGIN - LAYOUT 4</a></li>
													<li><a href="page-login-5.html">LOGIN - LAYOUT 5</a></li>
													<li><a href="page-login-register-1.html">LOGIN + REGISTER 1</a></li>
													<li><a href="page-login-register-2.html">LOGIN + REGISTER 2</a></li>
													<li><a href="page-login-register-3.html">LOGIN + REGISTER 3</a></li>
													<li><a href="page-register-1.html">REGISTER - LAYOUT 1</a></li>
													<li><a href="page-register-2.html">REGISTER - LAYOUT 2</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													CLIENTS
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-clients-1.html">CLIENTS 1 - SIDEBAR RIGHT</a></li>
													<li><a href="page-clients-2.html">CLIENTS 1 - SIDEBAR LEFT</a></li>
													<li><a href="page-clients-3.html">CLIENTS 1 - FULLWIDTH</a></li>
													<li class="divider"></li>
													<li><a href="page-clients-4.html">CLIENTS 2 - SIDEBAR RIGHT</a></li>
													<li><a href="page-clients-5.html">CLIENTS 2 - SIDEBAR LEFT</a></li>
													<li><a href="page-clients-6.html">CLIENTS 2 - FULLWIDTH</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													SEARCH RESULT
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-search-result-1.html">LAYOUT 1 - LEFT SIDEBAR</a></li>
													<li><a href="page-search-result-2.html">LAYOUT 1 - RIGHT SIDEBAR</a></li>
													<li><a href="page-search-result-3.html">LAYOUT 1 - FULLWIDTH</a></li>
													<li class="divider"></li>
													<li><a href="page-search-result-4.html">LAYOUT 2 - LEFT SIDEBAR</a></li>
													<li><a href="page-search-result-5.html">LAYOUT 2 - RIGHT SIDEBAR</a></li>
													<li class="divider"></li>
													<li><a href="page-search-result-6.html">LAYOUT 3 - TABLE SEARCH</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													PROFILE
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-profile.html">USER PROFILE</a></li>
													<li><a href="page-profile-projects.html">USER PROJECTS</a></li>
													<li><a href="page-profile-comments.html">USER COMMENTS</a></li>
													<li><a href="page-profile-history.html">USER HISTORY</a></li>
													<li><a href="page-profile-settings.html">USER SETTINGS</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													MAINTENANCE
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-maintenance-1.html">MAINTENANCE - LAYOUT 1</a></li>
													<li><a href="page-maintenance-2.html">MAINTENANCE - LAYOUT 2</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													COMING SOON
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-coming-soon-1.html">COMING SOON - LAYOUT 1</a></li>
													<li><a href="page-coming-soon-2.html">COMING SOON - LAYOUT 2</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													FORUM
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-forum-home.html">FORUM - HOME</a></li>
													<li><a href="page-forum-topic.html">FORUM - TOPIC</a></li>
													<li><a href="page-forum-post.html">FORUM - POST</a></li>
												</ul>
											</li>
											<li><a href="page-careers.html">CAREERS</a></li>
											<li><a href="page-sitemap.html">SITEMAP</a></li>
											<li><a href="page-blank.html">BLANK PAGE</a></li>
										</ul>
									</li>
									<li class="dropdown"><!-- FEATURES -->
										<a class="dropdown-toggle" href="#">
											FEATURES
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													<i class="et-browser"></i> SLIDERS
												</a>
												<ul class="dropdown-menu">
													<li>
														<a class="dropdown-toggle" href="#">REVOLUTION SLIDER 4.x</a>
														<ul class="dropdown-menu">
															<li><a href="feature-slider-revolution-fullscreen.html">FULLSCREEN</a></li>
															<li><a href="feature-slider-revolution-fullwidth.html">FULL WIDTH</a></li>
															<li><a href="feature-slider-revolution-fixedwidth.html">FIXED WIDTH</a></li>
															<li><a href="feature-slider-revolution-kenburns.html">KENBURNS EFFECT</a></li>
															<li><a href="feature-slider-revolution-videobg.html">HTML5 VIDEO</a></li>
															<li><a href="feature-slider-revolution-captions.html">CAPTIONS</a></li>
															<li><a href="feature-slider-revolution-smthumb.html">THUMB SMALL</a></li>
															<li><a href="feature-slider-revolution-lgthumb.html">THUMB LARGE</a></li>
															<li class="divider"></li>
															<li><a href="feature-slider-revolution-prev1.html">NAV PREVIEW 1</a></li>
															<li><a href="feature-slider-revolution-prev2.html">NAV PREVIEW 2</a></li>
															<li><a href="feature-slider-revolution-prev3.html">NAV PREVIEW 3</a></li>
															<li><a href="feature-slider-revolution-prev4.html">NAV PREVIEW 4</a></li>
															<li><a href="feature-slider-revolution-prev0.html">NAV THEME DEFAULT</a></li>
														</ul>
													</li>
													<li>
														<a class="dropdown-toggle" href="#">LAYER SLIDER</a>
														<ul class="dropdown-menu">
															<li><a href="feature-slider-layer-fullwidth.html">FULLWIDTH</a></li>
															<li><a href="feature-slider-layer-fixed.html">FIXED WIDTH</a></li>
															<li><a href="feature-slider-layer-captions.html">CAPTIONS</a></li>
															<li><a href="feature-slider-layer-carousel.html">CAROUSEL</a></li>
															<li><a href="feature-slider-layer-2d3d.html">2D &amp; 3D TRANSITIONS</a></li>
															<li><a href="feature-slider-layer-thumb.html">THUMB NAV</a></li>
															<li class="divider"></li>
															<li><a href="start.html#layerslider6"><span class="label label-success pull-right">new</span> LAYER SLIDER 6</a></li>
														</ul>
													</li>
													<li>
														<a class="dropdown-toggle" href="#">FLEX SLIDER</a>
														<ul class="dropdown-menu">
															<li><a href="feature-slider-flexslider-fullwidth.html">FULL WIDTH</a></li>
															<li><a href="feature-slider-flexslider-content.html">CONTENT</a></li>
															<li><a href="feature-slider-flexslider-thumbs.html">WITH THUMBS</a></li>
														</ul>
													</li>
													<li>
														<a class="dropdown-toggle" href="#">OWL SLIDER</a>
														<ul class="dropdown-menu">
															<li><a href="feature-slider-owl-fullwidth.html">FULL WIDTH</a></li>
															<li><a href="feature-slider-owl-fixed.html">FIXED WIDTH</a></li>
															<li><a href="feature-slider-owl-fixed+progress.html">FIXED + PROGRESS</a></li>
															<li><a href="feature-slider-owl-carousel.html">BASIC CAROUSEL</a></li>
															<li><a href="feature-slider-owl-fade.html">EFFECT - FADE</a></li>
															<li><a href="feature-slider-owl-backslide.html">EFFECT - BACKSLIDE</a></li>
															<li><a href="feature-slider-owl-godown.html">EFFECT - GODOWN</a></li>
															<li><a href="feature-slider-owl-fadeup.html">EFFECT - FADE UP</a></li>
														</ul>
													</li>
													<li>
														<a class="dropdown-toggle" href="#">SWIPE SLIDER</a>
														<ul class="dropdown-menu">
															<li><a href="feature-slider-swipe-full.html">FULLSCREEN</a></li>
															<li><a href="feature-slider-swipe-fixed-height.html">FIXED HEIGHT</a></li>
															<li><a href="feature-slider-swipe-autoplay.html">AUTOPLAY</a></li>
															<li><a href="feature-slider-swipe-fade.html">FADE TRANSITION</a></li>
															<li><a href="feature-slider-swipe-slide.html">SLIDE TRANSITION</a></li>
															<li><a href="feature-slider-swipe-coverflow.html">COVERFLOW TRANSITION</a></li>
															<li><a href="feature-slider-swipe-html5-video.html">HTML5 VIDEO</a></li>
															<li><a href="feature-slider-swipe-3columns.html">3 COLUMNS</a></li>
															<li><a href="feature-slider-swipe-4columns.html">4 COLUMNS</a></li>
														</ul>
													</li>
													<li><a href="feature-slider-nivo.html">NIVO SLIDER</a></li>
													<li><a href="feature-slider-camera.html">CAMERA SLIDER</a></li>
													<li><a href="feature-slider-elastic.html">ELASTIC SLIDER</a></li>
													<li><a href="feature-slider-backstretch.html">BACKSTRETCH SLIDER</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													<i class="et-hotairballoon"></i> HEADERS
												</a>
												<ul class="dropdown-menu">
													<li><a href="feature-header-light.html">HEADER - LIGHT</a></li>
													<li><a href="feature-header-dark.html">HEADER - DARK</a></li>
													<li>
														<a class="dropdown-toggle" href="#">HEADER - HEIGHT</a>
														<ul class="dropdown-menu">
														<li><a href="feature-header-large.html">LARGE (96px)</a></li>
														<li><a href="feature-header-medium.html">MEDIUM (70px)</a></li>
														<li><a href="feature-header-small.html">SMALL (60px)</a></li>
														</ul>
													</li>
													<li>
														<a class="dropdown-toggle" href="#">HEADER - SHADOW</a>
														<ul class="dropdown-menu">
															<li><a href="feature-header-shadow-after-1.html">SHADOW 1 - AFTER</a></li>
															<li><a href="feature-header-shadow-before-1.html">SHADOW 1 - BEFORE</a></li>
															<li class="divider"></li>
															<li><a href="feature-header-shadow-after-2.html">SHADOW 2 - AFTER</a></li>
															<li><a href="feature-header-shadow-before-2.html">SHADOW 2 - BEFORE</a></li>
															<li class="divider"></li>
															<li><a href="feature-header-shadow-after-3.html">SHADOW 3 - AFTER</a></li>
															<li><a href="feature-header-shadow-before-3.html">SHADOW 3 - BEFORE</a></li>
															<li class="divider"></li>
															<li><a href="feature-header-shadow-dark-1.html">SHADOW - DARK PAGE EXAMPLE</a></li>
														</ul>
													</li>
													<li><a href="feature-header-transparent.html">HEADER - TRANSPARENT</a></li>
													<li><a href="feature-header-transparent-line.html">HEADER - TRANSP+LINE</a></li>
													<li><a href="feature-header-translucent.html">HEADER - TRANSLUCENT</a></li>
													<li>
														<a class="dropdown-toggle" href="#">HEADER - BOTTOM</a>
														<ul class="dropdown-menu">
															<li><a href="feature-header-bottom-light.html">BOTTOM LIGHT</a></li>
															<li><a href="feature-header-bottom-dark.html">BOTTOM DARK</a></li>
															<li><a href="feature-header-bottom-transp.html">BOTTOM TRANSPARENT</a></li>
														</ul>
													</li>
													<li>
														<a class="dropdown-toggle" href="#">HEADER - LEFT SIDE</a>
														<ul class="dropdown-menu">
															<li><a href="feature-header-side-left-1.html">FIXED</a></li>
															<li><a href="feature-header-side-left-2.html">OPEN ON CLICK</a></li>
															<li><a href="feature-header-side-left-3.html">DARK</a></li>
														</ul>
													</li>
													<li>
														<a class="dropdown-toggle" href="#">HEADER - RIGHT SIDE</a>
														<ul class="dropdown-menu">
															<li><a href="feature-header-side-right-1.html">FIXED</a></li>
															<li><a href="feature-header-side-right-2.html">OPEN ON CLICK</a></li>
															<li><a href="feature-header-side-right-3.html">DARK</a></li>
														</ul>
													</li>
													<li>
														<a class="dropdown-toggle" href="#">HEADER - STATIC</a>
														<ul class="dropdown-menu">
															<li><a href="feature-header-static-top-light.html">STATIC TOP - LIGHT</a></li>
															<li><a href="feature-header-static-top-dark.html">STATIC TOP - DARK</a></li>
															<li class="divider"></li>
															<li><a href="feature-header-static-bottom-light.html">STATIC BOTTOM - LIGHT</a></li>
															<li><a href="feature-header-static-bottom-dark.html">STATIC BOTTOM - DARK</a></li>
														</ul>
													</li>
													<li><a href="feature-header-nosticky.html">HEADER - NO STICKY</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													<i class="et-anchor"></i> FOOTERS
												</a>
												<ul class="dropdown-menu">
													<li><a href="feature-footer-1.html#footer">FOOTER - LAYOUT 1</a></li>
													<li><a href="feature-footer-2.html#footer">FOOTER - LAYOUT 2</a></li>
													<li><a href="feature-footer-3.html#footer">FOOTER - LAYOUT 3</a></li>
													<li><a href="feature-footer-4.html#footer">FOOTER - LAYOUT 4</a></li>
													<li><a href="feature-footer-5.html#footer">FOOTER - LAYOUT 5</a></li>
													<li><a href="feature-footer-6.html#footer">FOOTER - LAYOUT 6</a></li>
													<li><a href="feature-footer-7.html#footer">FOOTER - LAYOUT 7</a></li>
													<li><a href="feature-footer-8.html#footer">FOOTER - LAYOUT 8 (light)</a></li>
													<li><a href="feature-footer-0.html#footer">FOOTER - STICKY</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													<i class="et-circle-compass"></i> MENU STYLES
												</a>
												<ul class="dropdown-menu">
													<li><a href="feature-menu-0.html">MENU - OVERLAY</a></li>
													<li><a href="feature-menu-1.html">MENU - STYLE 1</a></li>
													<li><a href="feature-menu-2.html">MENU - STYLE 2</a></li>
													<li><a href="feature-menu-3.html">MENU - STYLE 3</a></li>
													<li><a href="feature-menu-4.html">MENU - STYLE 4</a></li>
													<li><a href="feature-menu-5.html">MENU - STYLE 5</a></li>
													<li><a href="feature-menu-6.html">MENU - STYLE 6</a></li>
													<li><a href="feature-menu-7.html">MENU - STYLE 7</a></li>
													<li><a href="feature-menu-8.html">MENU - STYLE 8</a></li>
													<li><a href="feature-menu-9.html">MENU - STYLE 9</a></li>
													<li><a href="feature-menu-10.html">MENU - STYLE 10</a></li>
													<li><a href="feature-menu-11.html">MENU - STYLE 11 (BULLET NAV)</a></li>
													<li><a href="feature-menu-12.html">MENU - STYLE 12</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													<i class="et-genius"></i> MENU DROPDOWN
												</a>
												<ul class="dropdown-menu">
													<li><a href="feature-menu-dd-light.html">DROPDOWN - LIGHT</a></li>
													<li><a href="feature-menu-dd-dark.html">DROPDOWN - DARK</a></li>
													<li><a href="feature-menu-dd-color.html">DROPDOWN - COLOR</a></li>
													<li><a href="feature-menu-dd-effects.html">DROPDOWN - EFFECTS</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													<i class="et-beaker"></i> PAGE TITLES
												</a>
												<ul class="dropdown-menu">
													<li><a href="feature-title-left.html">ALIGN LEFT</a></li>
													<li><a href="feature-title-right.html">ALIGN RIGHT</a></li>
													<li><a href="feature-title-center.html">ALIGN CENTER</a></li>
													<li><a href="feature-title-light.html">LIGHT</a></li>
													<li><a href="feature-title-dark.html">DARK</a></li>
													<li><a href="feature-title-tabs.html">WITH TABS</a></li>
													<li><a href="feature-title-breadcrumbs.html">BREADCRUMBS ONLY</a></li>
													<li>
														<a class="dropdown-toggle" href="#">PARALLAX</a>
														<ul class="dropdown-menu">
															<li><a href="feature-title-parallax-small.html">PARALLAX SMALL</a></li>
															<li><a href="feature-title-parallax-medium.html">PARALLAX MEDIUM</a></li>
															<li><a href="feature-title-parallax-large.html">PARALLAX LARGE</a></li>
															<li><a href="feature-title-parallax-2xlarge.html">PARALLAX 2x LARGE</a></li>
															<li><a href="feature-title-parallax-transp.html">TRANSPARENT HEADER</a></li>
															<li><a href="feature-title-parallax-transp-large.html">TRANSPARENT HEADER - LARGE</a></li>
														</ul>
													</li>
													<li><a href="feature-title-short-height.html">SHORT HEIGHT</a></li>
													<li><a href="feature-title-rotative-text.html">ROTATIVE TEXT</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													<i class="et-layers"></i> PAGE SUBMENU
												</a>
												<ul class="dropdown-menu">
													<li><a href="feature-page-submenu-light.html">PAGE SUBMENU - LIGHT</a></li>
													<li><a href="feature-page-submenu-dark.html">PAGE SUBMENU - DARK</a></li>
													<li><a href="feature-page-submenu-color.html">PAGE SUBMENU - COLOR</a></li>
													<li><a href="feature-page-submenu-transparent.html">PAGE SUBMENU - TRANSPARENT</a></li>
													<li><a href="feature-page-submenu-below-title.html">PAGE SUBMENU - BELOW PAGE TITLE</a></li>
													<li><a href="feature-page-submenu-scrollto.html">PAGE SUBMENU - SCROLLTO</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													<i class="et-trophy"></i> ICONS
												</a>
												<ul class="dropdown-menu">
													<li><a href="feature-icons-fontawesome.html">FONTAWESOME</a></li>
													<li><a href="feature-icons-glyphicons.html">GLYPHICONS</a></li>
													<li><a href="feature-icons-etline.html">ET LINE</a></li>
													<li><a href="shortcode-material-design-icons.html">MATERIAL ICONS</a></li>
													<li><a href="feature-icons-flags.html">FLAGS</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													<i class="et-flag"></i> BACKGROUNDS
												</a>
												<ul class="dropdown-menu">
													<li><a href="feature-content-bg-grey.html">CONTENT - SIMPLE GREY</a></li>
													<li><a href="feature-content-bg-ggrey.html">CONTENT - GRAIN GREY</a></li>
													<li><a href="feature-content-bg-gblue.html">CONTENT - GRAIN BLUE</a></li>
													<li><a href="feature-content-bg-ggreen.html">CONTENT - GRAIN GREEN</a></li>
													<li><a href="feature-content-bg-gorange.html">CONTENT - GRAIN ORANGE</a></li>
													<li><a href="feature-content-bg-gyellow.html">CONTENT - GRAIN YELLOW</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													<i class="et-magnifying-glass"></i> SEARCH LAYOUTS
												</a>
												<ul class="dropdown-menu">
													<li><a href="feature-search-default.html">SEARCH - DEFAULT</a></li>
													<li><a href="feature-search-fullscreen-light.html">SEARCH - FULLSCREEN LIGHT</a></li>
													<li><a href="feature-search-fullscreen-dark.html">SEARCH - FULLSCREEN DARK</a></li>
													<li><a href="feature-search-header-light.html">SEARCH - HEADER LIGHT</a></li>
													<li><a href="feature-search-header-dark.html">SEARCH - HEADER DARK</a></li>
												</ul>
											</li>
											<li><a href="shortcode-animations.html"><i class="et-expand"></i> ANIMATIONS</a></li>
											<li><a href="feature-grid.html"><i class="et-grid"></i> GRID</a></li>
											<li><a href="feature-essentials.html"><i class="et-heart"></i> ESSENTIALS</a></li>
											<li><a href="page-changelog.html"><i class="et-alarmclock"></i> CHANGELOG</a></li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													<i class="et-newspaper"></i> SIDE PANEL
												</a>
												<ul class="dropdown-menu">
													<li><a href="feature-sidepanel-dark-right.html">SIDE PANEL - DARK - RIGHT</a></li>
													<li><a href="feature-sidepanel-dark-left.html">SIDE PANEL - DARK - LEFT</a></li>
													<li class="divider"></li>
													<li><a href="feature-sidepanel-light-right.html">SIDE PANEL - LIGHT - RIGHT</a></li>
													<li><a href="feature-sidepanel-light-left.html">SIDE PANEL - LIGHT - LEFT</a></li>
													<li class="divider"></li>
													<li><a href="feature-sidepanel-color-right.html">SIDE PANEL - COLOR - RIGHT</a></li>
													<li><a href="feature-sidepanel-color-left.html">SIDE PANEL - COLOR - LEFT</a></li>
												</ul>
											</li>
											<li><a target="_blank" href="../Admin/Admin_BS3/"><span class="label label-success pull-right">BONUS</span><i class="et-gears"></i> ADMIN PANEL</a></li>
										</ul>
									</li>
									<li class="dropdown mega-menu"><!-- PORTFOLIO -->
										<a class="dropdown-toggle" href="#">
											PORTFOLIO
										</a>
										<ul class="dropdown-menu">
											<li>
												<div class="row">

													<div class="col-md-5th">
														<ul class="list-unstyled">
															<li><span>GRID</span></li>
															<li><a href="portfolio-grid-1-columns.html">1 COLUMN</a></li>
															<li><a href="portfolio-grid-2-columns.html">2 COLUMNS</a></li>
															<li><a href="portfolio-grid-3-columns.html">3 COLUMNS</a></li>
															<li><a href="portfolio-grid-4-columns.html">4 COLUMNS</a></li>
															<li><a href="portfolio-grid-5-columns.html">5 COLUMNS</a></li>
															<li><a href="portfolio-grid-6-columns.html">6 COLUMNS</a></li>
														</ul>
													</div>

													<div class="col-md-5th">
														<ul class="list-unstyled">
															<li><span>MASONRY</span></li>
															<li><a href="portfolio-masonry-2-columns.html">2 COLUMNS</a></li>
															<li><a href="portfolio-masonry-3-columns.html">3 COLUMNS</a></li>
															<li><a href="portfolio-masonry-4-columns.html">4 COLUMNS</a></li>
															<li><a href="portfolio-masonry-5-columns.html">5 COLUMNS</a></li>
															<li><a href="portfolio-masonry-6-columns.html">6 COLUMNS</a></li>
															
														</ul>
													</div>

													<div class="col-md-5th">
														<ul class="list-unstyled">
															<li><span>SINGLE</span></li>
															<li><a href="portfolio-single-extended.html">EXTENDED ITEM</a></li>
															<li><a href="portfolio-single-parallax.html">PARALLAX IMAGE</a></li>
															<li><a href="portfolio-single-slider.html">SLIDER GALLERY</a></li>
															<li><a href="portfolio-single-html5-video.html">HTML5 VIDEO</a></li>
															<li><a href="portfolio-single-masonry-thumbs.html">MASONRY THUMBS</a></li>
															<li><a href="portfolio-single-embed-video.html">EMBED VIDEO</a></li>
															<li><a href="portfolio-single-project.html">SINGLE PROJECT</a></li>
														</ul>
													</div>

													<div class="col-md-5th">
														<ul class="list-unstyled">
															<li><span>LAYOUT</span></li>
															<li><a href="portfolio-layout-default.html">DEFAULT</a></li>
															<li><a href="portfolio-layout-aside-left.html">LEFT SIDEBAR</a></li>
															<li><a href="portfolio-layout-aside-right.html">RIGHT SIDEBAR</a></li>
															<li><a href="portfolio-layout-aside-both.html">BOTH SIDEBAR</a></li>
															<li><a href="portfolio-layout-fullwidth.html">FULL WIDTH (100%)</a></li>
															<li><a href="portfolio-layout-tabfilter.html">TAB FILTER &amp; PAGINATION</a></li>

														</ul>
													</div>

													<div class="col-md-5th">
														<ul class="list-unstyled">
															<li><span>LOADING</span></li>
															<li><a href="portfolio-loading-pagination.html">PAGINATION</a></li>
															<li><a href="portfolio-loading-jpagination.html">JQUERY PAGINATION</a></li>
															<li><a href="portfolio-loading-infinite-scroll.html">INFINITE SCROLL</a></li>
															<li><a href="portfolio-loading-ajax-page.html">AJAX IN PAGE</a></li>
															<li><a href="portfolio-loading-ajax-modal.html">AJAX IN MODAL</a></li>
														</ul>
													</div>

												</div>
											</li>
										</ul>
									</li>
									<li class="dropdown"><!-- BLOG and SHOP -->
										<a class="dropdown-toggle" href="#">
											BLOG &amp; SHOP
										</a>
										<ul class="dropdown-menu">

											<!-- BLOG -->
											<li>
												<h4><i class="fa fa-cubes"></i> BLOG</h4>
											</li>

											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													DEFAULT
												</a>
												<ul class="dropdown-menu">
													<li><a href="blog-default-aside-left.html">LEFT SIDEBAR</a></li>
													<li><a href="blog-default-aside-right.html">RIGHT SIDEBAR</a></li>
													<li><a href="blog-default-aside-both.html">BOTH SIDEBAR</a></li>
													<li><a href="blog-default-fullwidth.html">FULL WIDTH</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													GRID
												</a>
												<ul class="dropdown-menu">
													<li><a href="blog-column-2colums.html">2 COLUMNS</a></li>
													<li><a href="blog-column-3colums.html">3 COLUMNS</a></li>
													<li><a href="blog-column-4colums.html">4 COLUMNS</a></li>
													<li class="divider"></li>
													<li><a href="blog-column-aside-left.html">LEFT SIDEBAR</a></li>
													<li><a href="blog-column-aside-right.html">RIGHT SIDEBAR</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													MASONRY
												</a>
												<ul class="dropdown-menu">
													<li><a href="blog-masonry-2colums.html">2 COLUMNS</a></li>
													<li><a href="blog-masonry-3colums.html">3 COLUMNS</a></li>
													<li><a href="blog-masonry-4colums.html">4 COLUMNS</a></li>
													<li><a href="blog-masonry-fullwidth.html">FULLWIDTH</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													TIMELINE
												</a>
												<ul class="dropdown-menu">
													<li><a href="blog-timeline-aside-left.html">LEFT SIDEBAR</a></li>
													<li><a href="blog-timeline-aside-right.html">RIGHT SIDEBAR</a></li>
													<li><a href="blog-timeline-right-aside-right.html">RIGHT + TIMELINE RIGHT</a></li>
													<li><a href="blog-timeline-right-aside-left.html">LEFT + TIMELINE RIGHT</a></li>
													<li><a href="blog-timeline-fullwidth-left.html">FULL WIDTH - LEFT</a></li>
													<li><a href="blog-timeline-fullwidth-right.html">FULL WIDTH - RIGHT</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													SMALL IMAGE
												</a>
												<ul class="dropdown-menu">
													<li><a href="blog-smallimg-aside-left.html">LEFT SIDEBAR</a></li>
													<li><a href="blog-smallimg-aside-right.html">RIGHT SIDEBAR</a></li>
													<li><a href="blog-smallimg-aside-both.html">BOTH SIDEBAR</a></li>
													<li><a href="blog-smallimg-fullwidth.html">FULL WIDTH</a></li>
													<li class="divider"></li>
													<li><a href="blog-smallimg-alternate-1.html">ALTERNATE 1</a></li>
													<li><a href="blog-smallimg-alternate-2.html">ALTERNATE 2</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													SINGLE
												</a>
												<ul class="dropdown-menu">
													<li><a href="blog-single-default.html">DEFAULT</a></li>
													<li><a href="blog-single-aside-left.html">LEFT SIDEBAR</a></li>
													<li><a href="blog-single-aside-right.html">RIGHT SIDEBAR</a></li>
													<li><a href="blog-single-fullwidth.html">FULL WIDTH</a></li>
													<li><a href="blog-single-small-image-left.html">SMALL IMAGE - LEFT</a></li>
													<li><a href="blog-single-small-image-right.html">SMALL IMAGE - RIGHT</a></li>
													<li><a href="blog-single-big-image.html">BIG IMAGE</a></li>
													<li><a href="blog-single-fullwidth-image.html">FULLWIDTH IMAGE</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													COMMENTS
												</a>
												<ul class="dropdown-menu">
													<li><a href="blog-comments-bordered.html#comments">BORDERED COMMENTS</a></li>
													<li><a href="blog-comments-default.html#comments">DEFAULT COMMENTS</a></li>
													<li><a href="blog-comments-facebook.html#comments">FACEBOOK COMMENTS</a></li>
													<li><a href="blog-comments-disqus.html#comments">DISQUS COMMENTS</a></li>
												</ul>
											</li>


											<!-- SHOP -->
											<li>
												<h4><i class="fa fa-opencart"></i> SHOP</h4>
											</li>

											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													1 COLUMN
												</a>
												<ul class="dropdown-menu">
													<li><a href="shop-1col-left.html">LEFT SIDEBAR</a></li>
													<li><a href="shop-1col-right.html">RIGHT SIDEBAR</a></li>
													<li><a href="shop-1col-both.html">BOTH SIDEBAR</a></li>
													<li><a href="shop-1col-full.html">FULL WIDTH</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													2 COLUMNS
												</a>
												<ul class="dropdown-menu">
													<li><a href="shop-2col-left.html">LEFT SIDEBAR</a></li>
													<li><a href="shop-2col-right.html">RIGHT SIDEBAR</a></li>
													<li><a href="shop-2col-both.html">BOTH SIDEBAR</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													3 COLUMNS
												</a>
												<ul class="dropdown-menu">
													<li><a href="shop-3col-left.html">LEFT SIDEBAR</a></li>
													<li><a href="shop-3col-right.html">RIGHT SIDEBAR</a></li>
													<li><a href="shop-3col-full.html">FULL WIDTH</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													4 COLUMNS
												</a>
												<ul class="dropdown-menu">
													<li><a href="shop-4col-left.html">LEFT SIDEBAR</a></li>
													<li><a href="shop-4col-right.html">RIGHT SIDEBAR</a></li>
													<li><a href="shop-4col-full.html">FULL WIDTH</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													SINGLE PRODUCT
												</a>
												<ul class="dropdown-menu">
													<li><a href="shop-single-left.html">LEFT SIDEBAR</a></li>
													<li><a href="shop-single-right.html">RIGHT SIDEBAR</a></li>
													<li><a href="shop-single-both.html">BOTH SIDEBAR</a></li>
													<li><a href="shop-single-full.html">FULL WIDTH</a></li>
												</ul>
											</li>
											<li><a href="shop-compare.html">COMPARE</a></li>
											<li><a href="shop-cart.html">CART</a></li>
											<li><a href="shop-checkout.html">CHECKOUT</a></li>
											<li><a href="shop-checkout-final.html">ORDER PLACED</a></li>

										</ul>
									</li>
									<li class="dropdown mega-menu"><!-- SHORTCODES -->
										<a class="dropdown-toggle" href="#">
											SHORTCODES
										</a>
										<ul class="dropdown-menu">
											<li>
												<div class="row">

													<div class="col-md-5th">
														<ul class="list-unstyled">
															<li><a href="shortcode-animations.html">ANIMATIONS</a></li>
															<li><a href="shortcode-buttons.html">BUTTONS</a></li>
															<li><a href="shortcode-carousel.html">CAROUSEL</a></li>
															<li><a href="shortcode-charts.html">GRAPHS</a></li>
															<li><a href="shortcode-clients.html">CLIENTS</a></li>
															<li><a href="shortcode-columns.html">GRID &amp; COLUMNS</a></li>
															<li><a href="shortcode-counters.html">COUNTERS</a></li>
															<li><a href="shortcode-forms.html">FORM ELEMENTS</a></li>
														</ul>
													</div>

													<div class="col-md-5th">
														<ul class="list-unstyled">
															<li><a href="shortcode-dividers.html">DIVIDERS</a></li>
															<li><a href="shortcode-icon-boxes.html">BOXES &amp; ICONS</a></li>
															<li><a href="shortcode-galleries.html">GALLERIES</a></li>
															<li><a href="shortcode-headings.html">HEADING STYLES</a></li>
															<li><a href="shortcode-icon-lists.html">ICON LISTS</a></li>
															<li><a href="shortcode-labels.html">LABELS &amp; BADGES</a></li>
															<li><a href="shortcode-lightbox.html">LIGHTBOX</a></li>
															<li><a href="shortcode-forms-editors.html">HTML EDITORS</a></li>
														</ul>
													</div>

													<div class="col-md-5th">
														<ul class="list-unstyled">
															<li><a href="shortcode-list-pannels.html">LIST &amp; PANNELS</a></li>
															<li><a href="shortcode-maps.html"><span class="label label-success pull-right">new</span> MAPS</a></li>
															<li><a href="shortcode-media-embeds.html">MEDIA EMBEDS</a></li>
															<li><a href="shortcode-modals.html">MODAL / POPOVER / NOTIF</a></li>
															<li><a href="shortcode-navigations.html">NAVIGATIONS</a></li>
															<li><a href="shortcode-paginations.html">PAGINATIONS</a></li>
															<li><a href="shortcode-progress-bar.html">PROGRESS BARS</a></li>
															<li><a href="shortcode-widgets.html">WIDGETS</a></li>
														</ul>
													</div>

													<div class="col-md-5th">
														<ul class="list-unstyled">
															<li><a href="shortcode-pricing.html">PRICING BOXES</a></li>
															<li><a href="shortcode-process-steps.html">PROCESS STEPS</a></li>
															<li><a href="shortcode-callouts.html">CALLOUTS</a></li>
															<li><a href="shortcode-info-bars.html">INFO BARS</a></li>
															<li><a href="shortcode-blockquotes.html">BLOCKQUOTES</a></li>
															<li><a href="shortcode-responsive.html">RESPONSIVE</a></li>
															<li><a href="shortcode-sections.html">SECTIONS</a></li>
															<li><a href="shortcode-social-icons.html">SOCIAL ICONS</a></li>
														</ul>
													</div>

													<div class="col-md-5th">
														<ul class="list-unstyled">
															<li><a href="shortcode-alerts.html">ALERTS</a></li>
															<li><a href="shortcode-styled-icons.html">STYLED ICONS</a></li>
															<li><a href="shortcode-tables.html">TABLES</a></li>
															<li><a href="shortcode-tabs.html">TABS</a></li>
															<li><a href="shortcode-testimonials.html">TESTIMONIALS</a></li>
															<li><a href="shortcode-thumbnails.html">THUMBNAILS</a></li>
															<li><a href="shortcode-toggles.html">TOGGLES</a></li>
															<li><a href="shortcode-material-design-badges.html"><span class="label label-danger pull-right">new</span> <b>MATERIAL DESIGN</b></a></li>
														</ul>
													</div>

												</div>
											</li>
										</ul>
									</li>



									<!-- 
										MENU ANIMATIONS
											.nav-animate-fadeIn
											.nav-animate-fadeInUp
											.nav-animate-bounceIn
											.nav-animate-bounceInUp
											.nav-animate-flipInX
											.nav-animate-flipInY
											.nav-animate-zoomIn
											.nav-animate-slideInUp

											.nav-hover-animate 		= animate text on hover

											.hover-animate-bounceIn = bounceIn effect on mouse over of main menu
									-->
									<li class="dropdown mega-menu nav-animate-fadeIn nav-hover-animate hover-animate-bounceIn"><!-- THEMATIC -->
										<a class="dropdown-toggle noicon" href="#">
											<span class="badge badge-danger float-right fs-11">v2</span>
											<b>NEW</b>
										</a>
										<ul class="dropdown-menu dropdown-menu-clean">
											<li>
												<div class="row">

													<div class="col-md-5th">
														<ul class="list-unstyled">
															<li><span>PACKS : READY TO USE</span></li>
															<li class="divider"></li>
															<li>
																<span class="fs-11 mt-0 pb-15 pt-15 text-info">NEW AND HOT: COMPLETE PACKAGES READY TO USE</span>
															</li>
															<li class="divider"></li>
															<li><a target="_blank" href="pack-realestate-home-1.html">REAL ESTATE</a></li>
															<li><a target="_blank" href="pack-megashop-home-1.html">MEGA SHOP</a></li>
															<li><a target="_blank" href="pack-hotel-home-1.html">HOTEL v1</a></li>
															<li><a target="_blank" href="pack-hotel-v2-home-1.html">HOTEL v2</a></li>
															<li><a target="_blank" href="pack-photography-home-1.html">PHOTOGRAPHY / PORTFOLIO</a></li>
															<li><a target="_blank" href="pack-caffe-home-1.html">CAFFE</a></li>
															<li><a target="_blank" href="pack-caffe-onepage.html">CAFFE - ONEPAGE</a></li>
														</ul>
													</div>

													<div class="col-md-5th">
														<ul class="list-unstyled">
															<li><span>NEW PAGES</span></li>
															<li><a target="_blank" href="portfolio-single-project.html">PORTFOLIO SINGLE</a></li>
															<li><a target="_blank" href="page-cookie-alert.html">COOKIE ALERT</a></li>
															<li><a target="_blank" href="page-category.html">CATEGORY PAGE</a></li>

															<li><span>IMPROVED</span></li>
															<li><a target="_blank" href="index-thematics-hosting.html">HOMEPAGE : <b>HOSTING</b></a></li>
															<li><a target="_blank" href="index-thematics-restaurant.html">HOMEPAGE : <b>RESTAURANT</b></a></li>
															<li><a target="_blank" href="index-thematics-lawyer.html">HOMEPAGE : <b>LAWYER</b></a></li>
															<li><a target="_blank" href="index-thematics-fashion.html">HOMEPAGE : <b>FASHION</b></a></li>
														</ul>
													</div>

													<div class="col-md-5th">
														<ul class="list-unstyled">
															<li><span>NEW COMPONENTS</span></li>
															<li><a target="_blank" href="shortcode-material-design-badges.html">MATERIAL DESIGN LITE</a></li>

															<li><span>NEW FEATURES</span></li>
															<li><a target="_blank" href="feature-menu-12.html">NEW HEADER/MENU</a></li>
															<li><a target="_blank" href="feature-menu-dd-effects.html">MENU DROPDOWN EFFECTS</a></li>
															<li><a target="_blank" href="shortcode-carousel-2.html">OWL CAROUSEL 2</a></li>
															<li><a target="_blank" href="shortcode-thumbnails.html">IMAGE HOVER/STYLES</a></li>
														</ul>
													</div>

													<div class="col-md-6 hidden-sm text-center">
														<div class="p-15 block">
															<img class="img-fluid" src="demo_files/images/new_menu.png" alt="" />
														</div>
														<p class="menu-caption hidden-xs-down text-muted text-center">
															THE MOST COMPLETE HTML TEMPLATE
														</p>
													</div>

												</div>
											</li>
										</ul>
									</li>
								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>



			<!-- REVOLUTION SLIDER -->
			<section id="slider" class="slider fullwidthbanner-container roundedcorners">
				<!--
					Navigation Styles:
					
						data-navigationStyle="" theme default navigation
						
						data-navigationStyle="preview1"
						data-navigationStyle="preview2"
						data-navigationStyle="preview3"
						data-navigationStyle="preview4"
						
					Bottom Shadows
						data-shadow="1"
						data-shadow="2"
						data-shadow="3"
						
					Slider Height (do not use on fullscreen mode)
						data-height="300"
						data-height="350"
						data-height="400"
						data-height="450"
						data-height="500"
						data-height="550"
						data-height="600"
						data-height="650"
						data-height="700"
						data-height="750"
						data-height="800"
				-->
				<div class="fullscreenbanner" data-navigationStyle="preview1">
					<ul class="hide">

						<!-- SLIDE  -->
						<li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide title 1" data-thumb="demo_files/images/1200x800/10-min.jpg">

							<img src="assets/images/_smarty/1x1.png" data-lazyload="demo_files/images/1200x800/10-min.jpg" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />

							<div class="tp-dottedoverlay twoxtwo"><!-- dotted overlay --></div>
							<div class="overlay dark-3"><!-- dark overlay [1 to 9 opacity] --></div>

							<div class="tp-caption customin ltl tp-resizeme text_white"
								data-x="center"
								data-y="205"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1000"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								<span class="weight-300">DEVELOPMENT / MARKETING / DESIGN / PHOTO</span>
							</div>

							<div class="tp-caption customin ltl tp-resizeme large_bold_white"
								data-x="center"
								data-y="255"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1200"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								WELCOME TO SMARTY
							</div>

							<div class="tp-caption customin ltl tp-resizeme small_light_white font-lato size-20"
								data-x="center"
								data-y="345"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1400"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10; width: 100%; max-width: 750px; white-space: normal; text-align:center;">
								Fabulas definitiones ei pri per recteque hendrerit scriptorem in errem scribentur mel fastidii propriae philosophia cu mea.
							</div>

							<div class="tp-caption customin ltl tp-resizeme"
								data-x="center"
								data-y="433"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1550"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								<a href="#purchase" class="btn btn-default btn-lg">
									<span>Purchase Smarty Now</span> 
								</a>
							</div>

						</li>

						<!-- SLIDE  -->
						<li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide title 2" data-thumb="demo_files/images/1200x800/24-min.jpg">

							<img src="assets/images/_smarty/1x1.png" data-lazyload="demo_files/images/1200x800/24-min.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="110" />

							<div class="tp-caption very_large_text lfb ltt tp-resizeme"
								data-x="right" data-hoffset="-100"
								data-y="center" data-voffset="-100"
								data-speed="600"
								data-start="800"
								data-easing="Power4.easeOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="500"
								data-endeasing="Power4.easeIn">
								RUN WILD
							</div>

							<div class="tp-caption medium_light_white lfb ltt tp-resizeme"
								data-x="right" data-hoffset="-110"
								data-y="center" data-voffset="10"
								data-speed="600"
								data-start="900"
								data-easing="Power4.easeOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="500"
								data-endeasing="Power4.easeIn">
								Happiness is an accident of nature,<br/>
								a beautiful and flawless aberration.<br/>
								<span style="font-size:24px;font-weight:400;">&ndash; Pat Conroy</span>
							</div>

						</li>

						<!-- SLIDE -->
						<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide title 3" data-thumb="demo_files/images/video/neuron_thumb.jpg">

							<img src="assets/images/_smarty/1x1.png" data-lazyload="demo_files/images/video/neuron.jpg" alt="video" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

							<div class="tp-caption tp-fade fadeout fullscreenvideo"
								data-x="0"
								data-y="100"
								data-speed="1000"
								data-start="1100"
								data-easing="Power4.easeOut"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1500"
								data-endeasing="Power4.easeIn"
								data-autoplay="true"
								data-autoplayonlyfirsttime="false"
								data-nextslideatend="true"
								data-volume="mute" 
								data-forceCover="1" 
								data-aspectratio="16:9" 
								data-forcerewind="on" style="z-index: 2;">

								<div class="tp-dottedoverlay twoxtwo"><!-- dotted overlay --></div>

								<video class="" preload="none" width="100%" height="100%" poster="demo_files/images/video/neuron.jpg">
									<source src="demo_files/images/video/neuron.webm" type="video/webm" />
									<source src="demo_files/images/video/neuron.mp4" type="video/mp4" />
								</video>

							</div>

							<div class="tp-caption customin ltl tp-resizeme text_white"
								data-x="center"
								data-y="205"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1000"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 3;">
								<span class="weight-300">DEVELOPMENT / MARKETING / DESIGN / PHOTO</span>
							</div>

							<div class="tp-caption customin ltl tp-resizeme large_bold_white"
								data-x="center"
								data-y="255"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1200"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 3;">
								WELCOME TO SMARTY
							</div>

							<div class="tp-caption customin ltl tp-resizeme small_light_white font-lato size-20"
								data-x="center"
								data-y="345"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1400"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 3; width: 100%; max-width: 750px; white-space: normal; text-align:center;">
								Fabulas definitiones ei pri per recteque hendrerit scriptorem in errem scribentur mel fastidii propriae philosophia cu mea.
							</div>

							<div class="tp-caption customin ltl tp-resizeme"
								data-x="center"
								data-y="413"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1550"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 3;">
								<a href="#purchase" class="btn btn-default btn-lg">
									<span>Purchase Smarty Now</span> 
								</a>
							</div>

						</li>

					</ul>
					<div class="tp-bannertimer"></div>
				</div>
			</section>
			<!-- /REVOLUTION SLIDER -->



			<!-- FOOTER -->
			<footer id="footer">
				<div class="container">

					<div class="row">
						
						<div class="col-md-8">

							<!-- Footer Logo -->
							<img class="footer-logo footer-2" src="assets/images/_smarty/logo-footer.png" alt="" />

							<!-- Small Description -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>

							<hr />

							<div class="row">
								<div class="col-md-6 col-sm-6">

									<!-- Newsletter Form -->
									<p class="margin-bottom-10">Subscribe to Our <strong>Newsletter</strong></p>

									<form id="newsletterForm" action="php/newsletter.php".box-shadow- method="post">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
											<input type="email" id="email" name="email" class="form-control" placeholder="Enter your Email" required="required">
											<span class="input-group-btn">
												<button class="btn btn-success" type="submit">Subscribe</button>
											</span>
										</div>
									</form>
									<!-- /Newsletter Form -->
								</div>

								<div class="col-md-6 col-sm-6 hidden-xs">

									<!-- Social Icons -->
									<div class="margin-left-50 clearfix">

										<p class="margin-bottom-10">Follow Us</p>
										<a href="#" class="social-icon social-icon-sm social-icon-transparent social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>

										<a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>

										<a href="#" class="social-icon social-icon-sm social-icon-transparent social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>

										<a href="#" class="social-icon social-icon-sm social-icon-transparent social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
											<i class="icon-linkedin"></i>
											<i class="icon-linkedin"></i>
										</a>

										<a href="#" class="social-icon social-icon-sm social-icon-transparent social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
											<i class="icon-rss"></i>
											<i class="icon-rss"></i>
										</a>

									</div>
									<!-- /Social Icons -->

								</div>
								
							</div>



						</div>

						<div class="col-md-4">

							<h4 class="letter-spacing-1">CONTACT US</h4>

							<!-- CONTACT MESSAGES -->
							<p id="alert_success" class="alert alert-success alert-mini">Message sent! Thank You!</p>
							<p id="alert_failed" class="alert alert-danger alert-mini">Message not sent!</p>
							<p id="alert_mandatory" class="alert alert-danger alert-mini">Please, complete all mandatory fields</p>

							<!-- CONTACT FORM -->
							<form class="validate" method="post" action="php/contact.php">
								
								<input type="text" value="" placeholder="Name*" maxlength="100" class="form-control required" name="contact[name]" />
								<input type="email" value="" placeholder="Email*" data-msg-email="Please enter a valid email address." class="form-control required" name="contact[email]" />
								<textarea maxlength="5000" placeholder="Message*" rows="3" class="form-control required" name="contact[message]"></textarea>
								<input type="submit" value="SUBMIT MESSAGE" class="btn btn-success" />

							</form>
							<!-- /CONTACT FORM -->

						</div>

					</div>

				</div>

				<div class="copyright">
					<div class="container">
						<ul class="list-inline inline-links mobile-block pull-right nomargin">
							<li><a href="#">Home</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Portfolio</a></li>
							<li><a href="#">Pricing</a></li>
							<li><a href="#">Contact</a></li>
						</ul>

						&copy; All Rights Reserved, Company LTD
					</div>
				</div>
			</footer>
			<!-- /FOOTER -->

		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="assets/plugins/jquery/jquery-2.2.3.min.js"></script>

		<!-- REVOLUTION SLIDER -->
		<script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="assets/js/view/demo.revolution_slider.js"></script>

		<!-- SCRIPTS -->
		<script type="text/javascript" src="assets/js/scripts.js"></script>
		
		<!-- STYLESWITCHER - REMOVE -->
		<script async type="text/javascript" src="demo_files/styleswitcher/styleswitcher.js"></script>
	</body>
</html>