<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Ferreteria Rayito - Productos</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">
	<link rel="stylesheet" href="{{asset('template/vendors/bootstrap/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('template/vendors/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" href="{{asset('template/vendors/themify-icons/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('template/vendors/nice-select/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('template/vendors/owl-carousel/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{asset('template/vendors/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('template/css/style.css')}}">
</head>

<body>
	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<a class="navbar-brand logo_h" href="{{ route('producto.index') }}"><img src="{{asset('template/img/Icon.png')}}" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto mr-auto">
							<li class="nav-item active"><a class="nav-link" href="{{ route('producto.index') }}">Productos</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Proveedores</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<main class="site-main">

		<!--================ Hero banner start =================-->
		<section class="hero-banner">
			<div class="container">
				<div class="row no-gutters align-items-center pt-60px">
					<div class="col-5 d-none d-sm-block">
						<div class="hero-banner__img">
							<img class="img-fluid" src="template/img/ProductoHome.jpg" alt="">
						</div>
					</div>
					<div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
						<div class="hero-banner__content">
							<h1>Productos</h1>
							<p>Añade tus productos para tu tienda online.</p>
							<a class="button button-hero" href="{{route('producto.create')}}">Añadir Producto</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================ Hero banner start =================-->


		<!-- ================ trending product section start ================= -->
		<section class="section-margin calc-60px">
			<div class="container">
				<div class="section-intro pb-60px">
					<h2>Lista de <span class="section-intro__style">Productos</span></h2>
				</div>
				<div class="row">
					{{$slot}}
				</div>
			</div>
		</section>
		<!-- ================ trending product section end ================= -->

	</main>


	<!--================ Start footer Area  =================-->
	<footer class="footer">
		<div class="footer-area">
			<div class="container">
				<div class="row section_gap">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title large_title">Nuestra mision</h4>
							<p>
								Brindar materiales y herramientas enfocadas a la industria ferretera dentro de la zona metropolitana de
								Guadalajara contando con buenos estandares de calidad y gran servicio.
							</p>
							<p>
								Gracias a la ISO 90003
							</p>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
					</div>
					<div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Contactanos</h4>
							<div class="ml-40">
								<p class="sm-head">
									<span class="fa fa-location-arrow"></span>
									Negocio
								</p>
								<p>Guadalajara, Jalisco, Mexico</p>

								<p class="sm-head">
									<span class="fa fa-phone"></span>
									Numero Telefonico
								</p>
								<p>
									+123 456 7890 <br>
									+123 456 7890
								</p>

								<p class="sm-head">
									<span class="fa fa-envelope"></span>
									Email
								</p>
								<p>
									ferreteria@yahoo.com <br>
									www.ferreteria.com
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row d-flex">
					<p class="col-lg-12 footer-text text-center">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->



	<script src="{{asset('template/vendors/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('template/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('template/vendors/skrollr.min.js')}}"></script>
	<script src="{{asset('template/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('template/vendors/nice-select/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('template/vendors/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('template/vendors/mail-script.js')}}"></script>
	<script src="{{asset('template/js/main.js')}}"></script>
</body>

</html>