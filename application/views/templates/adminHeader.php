<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?= $title ?></title>

	<!-- Custom fonts for this template-->

	<link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="nav navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:  #77523d;">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center m-3" href="<?= base_url('admin'); ?>">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fa fa-coffee"></i>
				</div>
				<div class="sidebar-brand-text mx-3">Saerah Kopi</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">
			<!-- Nav Item - Dashboard -->
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('administrator'); ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span>
				</a>
			</li>

			<hr class="sidebar-divider">
			<div class="sidebar-heading">
				Pemesanan
			</div>

			<?php if ($title == "Daftar Kategori Menu | Saerah Kopi") { ?>
				<li class="nav-item active">
				<?php } else { ?>
				<li class="nav-item">
				<?php } ?>
				<a class="nav-link pb-0" href="<?= base_url('administrator/category'); ?>">
					<i class="fa fa-fw fa-list-ul"></i>
					<span>Kategori Menu</span>
				</a>
				</li>

				<?php if ($title == "Daftar Menu | Saerah Kopi") { ?>
					<li class="nav-item active">
					<?php } else { ?>
					<li class="nav-item">
					<?php } ?>
					<a class="nav-link pb-0" href="<?= base_url('administrator/allmenu'); ?>">
						<i class="fa fa-fw fa-list-alt"></i>
						<span>Daftar Menu</span>
					</a>
					</li>

					<?php if ($title == "Pesanan | Saerah Kopi") { ?>
						<li class="nav-item active">
						<?php } else { ?>
						<li class="nav-item pb-0">
						<?php } ?>
						<a class="nav-link" href="<?= base_url('administrator/orders'); ?>">
							<i class="fa fa-fw fa-cart-plus"></i>
							<span>Pesan</span>
						</a>
						</li>

						<hr class="sidebar-divider">
						<div class="sidebar-heading">
							Informasi
						</div>

						<?php if ($title == "Pengaturan Jadwal | Saerah Kopi") { ?>
							<li class="nav-item active">
							<?php } else { ?>
							<li class="nav-item">
							<?php } ?>
							<a class="nav-link pb-0" href="<?= base_url('administrator/schedule'); ?>">
								<i class="fa fa-fw fa-clock"></i>
								<span>Atur Jadwal Toko</span>
							</a>
							</li>

							<?php if ($title == "Tentang Saerah Kopi") { ?>
								<li class="nav-item active">
								<?php } else { ?>
								<li class="nav-item">
								<?php } ?>
								<a class="nav-link pb-0" href="<?= base_url('administrator/blog'); ?>">
									<i class="fa fa-fw fa-folder-open"></i>
									<span>Atur Tentang Kami</span>
								</a>
								</li>

								<?php if ($title == "Informasi Kontak | Saerah Kopi") { ?>
									<li class="nav-item active">
									<?php } else { ?>
									<li class="nav-item">
									<?php } ?>
									<a class="nav-link" href="<?= base_url('administrator/contact'); ?>">
										<i class="fa fa-fw fa-question-circle"></i>
										<span>Atur Informasi Kontak</span>
									</a>
									</li>

									<hr class="sidebar-divider">
									<div class="sidebar-heading">
										Riwayat
									</div>

									<?php if ($title == "Riwayat Data Pesanan | Saerah Kopi") { ?>
										<li class="nav-item active">
										<?php } else { ?>
										<li class="nav-item">
										<?php } ?>
										<a class="nav-link" href="<?= base_url('administrator/history') ?>">
											<i class="fa fa-fw fa-history"></i>
											<span>Riwayat Pesanan</span>
										</a>
										</li>

										<!-- Divider -->
										<hr class="sidebar-divider d-none d-md-block">

										<!-- Sidebar Toggler (Sidebar) -->
										<div class="text-center d-none d-md-inline">
											<button class="rounded-circle border-0" id="sidebarToggle"></button>
										</div>
		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
								<img class="img-profile rounded-circle" src="<?= base_url('assets/') ?>img/undraw_profile.svg">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="<?= base_url('administrator/account') ?>">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Profile
								</a>

								<a class="dropdown-item" href="<?= base_url('administrator/change_password') ?>">
									<i class="fa fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
									Change Password
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->
