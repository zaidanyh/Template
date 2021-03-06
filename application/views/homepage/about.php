<!DOCTYPE html>
<html>

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

<body style="background:linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url('<?= base_url('assets') ?>/img/bg.jpg');">
	<h1 class="text-center text-white d-none d-lg-block site-heading"><span class="site-heading-lower">saerah kopi</span></h1>
	<nav class="navbar navbar-light navbar-expand-lg sticky-top bg-dark py-lg-4" id="mainNav">
		<div class="container-fluid"><a class="navbar-brand text-uppercase d-lg-none text-expanded" href="#">Saerah Kopi</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="nav navbar-nav mx-auto">
					<li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>">Home</a></li>
					<li class="nav-item"><a class="nav-link active" href="<?= base_url('home') ?>/about">tentang kami</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('home'); ?>/schedule">Jadwal</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<section class="page-section about-heading">
		<div class="container" style="display: grid; place-items: center;">
			<img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?= base_url('assets/upload/blog/') . $data['photo']; ?>">
			<div class="about-heading-content">
				<div class="row">
					<div class="col-lg-10 col-xl-9 mx-auto">
						<div class="bg-faded rounded p-5">
							<h2 class="section-heading mb-4"><span class="section-heading-upper">Strong Coffee, Strong Roots</span><span class="section-heading-lower">&nbsp;<?= $data['name_blog']; ?></span></h2>
							<p><?= htmlspecialchars_decode($data['blog_content']); ?></p>
						</div>
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
	<a class="btn btn-light btn-lg border rounded-circle d-block float-right order-12 d-flex justify-content-center align-items-center" role="button" data-bs-hover-animate="pulse" target="_blank" style="width: 70px;height: 70px;" href="https://api.whatsapp.com/send?phone=<?= $whatsapp['description']; ?>"><i class="fa fa-phone" data-bs-hover-animate="flash" style="width: 30px;height: 30px;margin-top: 10px;"></i></a>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets') ?>/js/bs-init.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
	<script src="<?= base_url('assets') ?>/js/current-day.js"></script>
</body>

</html>
