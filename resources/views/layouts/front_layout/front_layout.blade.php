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
		<title>Taxi</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{ asset('front/css/linearicons.css') }}">
			<link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
			<link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
			<link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">
			<link rel="stylesheet" href="{{ asset('front/css/nice-select.css') }}">							
			<link rel="stylesheet" href="{{ asset('front/css/animate.min.css') }}">
			<link rel="stylesheet" href="{{ asset('front/css/jquery-ui.css') }}">			
			<link rel="stylesheet" href="{{ asset('front/css/main.css') }}">
		</head>
		<body>	
			  <header id="header">
		  		<div class="header-top">
				</div>
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
			    		<a href="index.html"><img src="{{ asset('front/img/logo.png') }}" alt="" title="" /></a>		
						<nav id="nav-menu-container">
							<ul class="nav-menu">
							  <li class="menu-active"><a href="index.html">Home</a></li>
							  <li><a href="about.html">About</a></li>
							  <li><a href="service.html">Services</a></li>
							  <li><a href="gallery.html">Gallery</a></li>
							  <li class="menu-has-children"><a href="">Blog</a>
							    <ul>
							      <li><a href="blog-home.html">Blog Home</a></li>
							      <li><a href="blog-single.html">Blog Single</a></li>
							      <li class="menu-has-children"><a href="">Level 2</a>
							        <ul>
							          <li><a href="#">Item One</a></li>
							          <li><a href="#">Item Two</a></li>
							        </ul>
							      </li>					              
							    </ul>
							  </li>
							  <li><a href="elements.html">Elements</a></li>							  			          	          
							  <li><a href="contact.html">Contact</a></li>
							</ul>
						</nav><!-- #nav-menu-container -->		
			    	</div>
			    </div>
			  </header><!-- #header -->

                @yield('content')
			
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Quick links</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Features</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Resources</h6>
								<ul>
									<li><a href="#">Guides</a></li>
									<li><a href="#">Research</a></li>
									<li><a href="#">Experts</a></li>
									<li><a href="#">Agencies</a></li>
								</ul>								
							</div>
						</div>												
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>	
						<p class="mt-80 mx-auto footer-text col-lg-12">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>											
					</div>
				</div>
				<img class="footer-bottom" src="{{ asset('front/img/footer-bottom.png') }}" alt="">
			</footer>	
			<!-- End footer Area -->	

			<script src="{{ asset('front/js/vendor/jquery-2.2.4.min.js') }}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="{{ asset('front/js/easing.min.js') }}"></script>			
			<script src="{{ asset('front/js/hoverIntent.js') }}"></script>
			<script src="{{ asset('front/js/superfish.min.js') }}"></script>	
			<script src="{{ asset('front/js/jquery.ajaxchimp.min.js') }}"></script>
			<script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>	
 			<script src="{{ asset('front/js/jquery-ui.js') }}"></script>								
			<script src="{{ asset('front/js/jquery.nice-select.min.js') }}"></script>							
			<script src="{{ asset('front/js/mail-script.js') }}"></script>	
			<script src="{{ asset('front/js/main.js') }}"></script>	
		</body>
	</html>