


<!DOCTYPE html>
<html lang="en">
	<head>
        
		<title>Home | Guards London</title>
        <base href="https://preview.erilisdesign.com/html/oli/" target="_blank">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Erilisdesign.com">

		<link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/utilities.css">

		<link rel="stylesheet" href="assets/css/custom.css">

		<link rel="stylesheet" href="assets/vendor/fullPage.js/dist/jquery.fullpage.min.css" type="text/css">
		<link rel="stylesheet" href="assets/vendor/slick/slick.min.css" type="text/css">
		<link rel="stylesheet" href="assets/vendor/vegas/vegas.min.css" type="text/css">
		<link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css" type="text/css">
		<link rel="stylesheet" href="assets/vendor/themify-icons/css/themify-icons.css" type="text/css">

		<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,700%7CMRoboto:300,400,500,700" rel="stylesheet">

		<link rel="shortcut icon" href="https://fabrum.nz/guards/public/london-footer.png">

	</head>
	<body>

		<div id="preloader" class="preloader preloader-dark">
			<div class="loader-status">
				<div class="circle-side"></div>
			</div>
		</div>

		<!-- Global Overlay -->
		<div class="global-overlay">
			<div class="overlay-inner bg-image-holder bg-cover">
				<!-- <img src="https://fabrum.nz/guards/public/bg2.jpg" alt="background"> -->
				<video muted autoplay poster="https://fabrum.nz/guards/public/bg2.jpg"  class="home-video">
                	<source src="{{asset('london.mp4')}}" type="video/mp4">
				</video>
			</div>
			<div class="overlay-inner bg-black opacity-70"></div>
		</div>

		<!-- Frame -->
		<div class="frame d-none d-lg-block">
			<div class="frame-left"></div>
			<div class="frame-right"></div>
			<div class="frame-top"></div>
			<div class="frame-bottom"></div>
		</div>

		<div class="site-container">

			<!-- Site Header -->
			<header class="site-header header-fixed d-flex justify-content-center">
				<!-- Logo -->
				<a href="#" class="logo_header">
				<img src="https://fabrum.nz/guards/public/london-footer.png" alt="">
				</a>
			</header>

			<section id="home" class="d-flex min-vh--100">
				<div class="container align-self-center text-white">
					<!-- <h1 class="text-center mb-3">We are launching soon</h1> -->
					<!-- <p class="lead text-center mb-5">5 Yarm Rd, Stockton-on-Tees TS18 3SF</p> -->
					<div class="text-center"><a href="{{ url('/') }}" class="btn-guards">Find Your Home</a></div>
					<div class="row">
						<div class="col-12 col-md-8 col-lg-7 mx-lg-auto">
							<div class="subscribe-form">
								
								<div class="subscribe-form-result"></div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Site Footer -->
			<footer class="site-footer footer-fixed footer-mobile-dark footer-light">
				<div class="container-fluid align-items-md-center justify-content-md-between btm_footer">
					<div><img class="footer_logo" src="https://fabrum.nz/guards/public/images/london.png" alt=""></div>
					<div>© 2022 Guards London - All Rights Reserved</div>
					<div>
						<h5>Contact</h5>
						43 BERKELEY SQUARE<br> LONDON <br> W1J 5AP
					</div>
					<div class="life">Protecting your life investments</div>
					
				</div>
			</footer>

		</div>

		<script src="assets/vendor/jquery/dist/jquery.min.js"></script>
		<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
		<script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="assets/vendor/jquery-form/dist/jquery.form.min.js"></script>
		<script src="assets/vendor/jQuery.countdown/dist/jquery.countdown.min.js"></script>
		<script src="assets/vendor/granim.js/dist/granim.min.js"></script>
		<script src="assets/vendor/slick/slick.min.js"></script>
		<script src="assets/vendor/vegas/vegas.min.js"></script>
		<script src="assets/vendor/jquery.mb.YTPlayer/jquery.mb.YTPlayer.min.js"></script>

		<script src="assets/js/main.js"></script>
<style>
.logo img {
    width: 300px;
    position: relative;
    top: 1rem;
}
.btn-link {
	/* background: #040f28; */
    border: none;
    color: #fff;
    /* box-shadow: 3px 12px 19px 1px #000000a1; */
}
a.btn-lg.btn-link:hover {
    color: #fff;
    background: #040f28;
    text-decoration: none;
}
a.btn-lg.btn-link:focus {
    text-decoration: none;
    color: #fff;
}
a, p, h1, h2 {
	color: #d9a852 !important;
}
.footer-fixed.footer-mobile-dark.footer-light {
    background: #040f28;
}
.footer_logo {
	max-width: 200px;
}
header.site-header.header-fixed.d-flex.justify-content-center {
    background: #040f28;
}
.logo_header img {
	max-width: 180px;
}
.btm_footer {
	display: grid;
	grid-template-columns: auto auto auto;
}
footer {
    padding: 1rem 1rem !important;
}
.preloader .circle-side {
  border-color: #d9a852;
}
@media only screen and (max-width: 600px) {
	.btm_footer {
        text-align: center;
		grid-template-columns: auto !important;
	}
	.life {
		display: none;
	}
}
.btn-guards {
    text-transform: capitalize;
    color: #D8AC45;
    text-decoration: none;
    text-align: center;
    letter-spacing: 0.5px;
    cursor: pointer;
    display: inline-block;
    height: 46px;
    line-height: 44px;
    padding: 0;
    width: 200px;
    vertical-align: middle;
    -webkit-tap-highlight-color: transparent;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px rgb(0 0 0 / 0%);
    position: relative;
    overflow: hidden;
}
.btn-guards:before, .btn-guards:after {
    content: "";
    position: absolute;
    z-index: -1;
    left: 0;
    right: 0;
    background: linear-gradient(90.38deg, rgba(216, 172, 69, 0) 0.28%, #D8AC45 38.88%, #D8AC45 60.2%, rgba(216, 172, 69, 0) 100%);
    height: 2px;
    -webkit-transition-property: right;
    transition-property: right;
    -webkit-transition-duration: 1.5s;
    transition-duration: 1.5s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
    animation: animatedgradientOut 1s ease;
}
.btn-guards:after {
    bottom: 0;
}
.btn-guards:hover:before, .btn-guards:focus:before, .btn-guards:active:before, .btn-guards:hover:after, .btn-guards:focus:after, .btn-guards:active:after {
    right: -160%;
}
video {
	width: 100%;
}
</style>
	</body>
</html>
