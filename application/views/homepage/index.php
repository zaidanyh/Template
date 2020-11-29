<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title><?= $title; ?></title>
	<link rel="stylesheet" href="<?= base_url('assets') ?>/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url('assets') ?>/css/custom.compiled.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
</head>

<body style="background:linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url('<?= base_url('assets') ?>/img/bg.jpg');"><a class="btn btn-light btn-lg border rounded-circle d-block float-right order-12 d-flex justify-content-center align-items-center" role="button" data-bs-hover-animate="pulse" target="_blank" style="width: 70px;height: 70px;" href="https://api.whatsapp.com/send?phone=<?= $whatsapp['description']; ?>"><i class="fa fa-phone" data-bs-hover-animate="flash" style="width: 30px;height: 30px;margin-top: 10px;"></i></a>
	<h1 class="text-center text-white d-none d-lg-block site-heading"><span data-aos="fade-up" class="site-heading-lower">Saerah Kopi</span></h1>
	<nav class="navbar navbar-light navbar-expand-lg sticky-top bg-dark py-lg-4" id="mainNav">
		<div class="container-fluid"><a class="navbar-brand text-uppercase d-lg-none text-expanded" href="#">Saerah Kopi</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="nav navbar-nav mx-auto">
					<li class="nav-item"><a class="nav-link active" href="<?= base_url() ?>">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('home') ?>/about">tentang kami</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('home') ?>/schedule">Jadwal</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<section class="page-section clearfix">
		<div class="container">
			<div class="intro"><img class="img-fluid intro-img mb-3 mb-lg-0 rounded" src="<?= base_url('assets') ?>/img/products-01.jpg">
				<div class="intro-text left-0 text-centerfaded p-5 rounded bg-faded text-center">
					<h2 class="section-heading mb-4"><span class="section-heading-upper">Fresh Coffee</span><span class="section-heading-lower">Worth Drinking</span></h2>
					<p class="mb-3">Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!</p>
					<div class="mx-auto intro-button"><a class="btn btn-primary d-inline-block mx-auto btn-xl" role="button" href="#" style="font-family: Lora, serif;">Hubungi Kami</a></div>
				</div>
			</div>
		</div>
	</section>
	<section class="page-section cta">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 mx-auto">
					<div class="cta-inner text-center rounded">
						<h2 class="section-heading mb-4"><span class="section-heading-upper">Our Promise</span><span class="section-heading-lower">To You</span></h2>
						<p class="mb-0">When you walk into our shop to start your day, we are dedicated to providing you with friendly service, a welcoming atmosphere, and above all else, excellent products made with the highest quality ingredients. If you are not
							satisfied, please let us know and we will do whatever we can to make things right!</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="footer text-faded text-center py-5">
		<div class="container">
			<p class="m-0 small">Copyright&nbsp;©&nbsp;Saerah Kopi 2020</p>
		</div>
	</footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets') ?>/js/bs-init.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
	<script src="<?= base_url('assets') ?>/js/current-day.js"></script>
</body>

</html>
