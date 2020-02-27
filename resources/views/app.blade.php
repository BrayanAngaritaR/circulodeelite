<!DOCTYPE html>
<html lang="en">
<head>
<title>Élite</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/bootstrap4/bootstrap.min.css')}}">
<link href="assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">

<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/responsive.css')}}">






<!-- Custom Styles -->
@stack('styles')
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo"><a href="#">Élite</a></div>
						<nav class="main_nav">
							<ul>
								<li class="active"><a href="index.html">Inicio</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contacto</a></li>
							</ul>
						</nav>
						<div class="search_container ml-auto">
							<form action="#">
								<input type="search" class="header_search_input" required="required" placeholder="Buscar...">
								<img class="header_search_icon" src="{{ asset('assets/images/search.png')}}" alt="">
							</form>
							
						</div>
						<div class="hamburger ml-auto menu_mm">
							<i class="fa fa-bars trans_200 menu_mm" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="#">Élite</a></div>
		<div class="search">
			<form action="#">
				<input type="search" class="header_search_input menu_mm" required="required" placeholder="Type to Search...">
				<img class="header_search_icon menu_mm" src="{{ asset('assets/images/search_2.png')}}" alt="">
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.html">Inicio</a></li>
				<li class="menu_mm"><a href="#">Blog</a></li>
				<li class="menu_mm"><a href="#">Contacto</a></li>
			</ul>
		</nav>
	</div>
	
	@yield('content')

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row row-lg-eq-height">
				<div class="col-lg-9 order-lg-1 order-2">
					<div class="footer_content">
						<div class="footer_logo"><a href="#">Élite</a></div>
						<div class="footer_social">
							<ul>
								<li class="footer_social_facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="footer_social_twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="footer_social_pinterest"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li class="footer_social_vimeo"><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
								<li class="footer_social_instagram"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li class="footer_social_google"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="copyright">
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> Derechos reservados | Desarrollado con el <i class="fa fa-heart-o" aria-hidden="true"></i> por <a href="https://bepro.digital" target="_blank">BePro</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 order-lg-2 order-1">
					<div class="subscribe">
						<div class="subscribe_background"></div>
						<div class="subscribe_content">
							<div class="subscribe_title">Subscribirse</div>
							<form action="#">
								<input type="email" class="sub_input" placeholder="Correo electrónico" required="required">
								<button class="sub_button">
									<svg version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve">
										<polygon fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
									</svg>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="{{ asset('js/app.js')}}"></script>
<script src="{{ asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{ asset('assets/styles/bootstrap4/popper.js')}}"></script>
<script src="{{ asset('assets/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{ asset('assets/plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.js')}}"></script>
<script src="{{ asset('assets/plugins/easing/easing.js')}}"></script>
<script src="{{ asset('assets/plugins/masonry/masonry.js')}}"></script>
<script src="{{ asset('assets/plugins/masonry/images_loaded.js')}}"></script>
<script src="{{ asset('assets/js/custom.js')}}"></script>
</body>
</html>