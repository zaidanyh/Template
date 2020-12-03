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

	<!-- load chart -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

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
			<li class="nav-item active">
				<a class="nav-link" href="<?= base_url('admin'); ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span>
				</a>
			</li>

			<hr class="sidebar-divider">
			<div class="sidebar-heading">
				Pemesanan
			</div>

			<li class="nav-item">
				<a class="nav-link pb-0" href="<?= base_url('admin/category'); ?>">
					<i class="fa fa-fw fa-list-ul"></i>
					<span>Kategori Menu</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link pb-0" href="<?= base_url('admin/allmenu'); ?>">
					<i class="fa fa-fw fa-list-alt"></i>
					<span>Daftar Menu</span>
				</a>
			</li>
			<li class="nav-item pb-0">
				<a class="nav-link" href="<?= base_url('admin/orders'); ?>">
					<i class="fa fa-fw fa-cart-plus"></i>
					<span>Pesan</span>
				</a>
			</li>

			<hr class="sidebar-divider">
			<div class="sidebar-heading">
				Informasi
			</div>
			<li class="nav-item">
				<a class="nav-link pb-0" href="<?= base_url('admin/schedule'); ?>">
					<i class="fa fa-fw fa-clock"></i>
					<span>Atur Jadwal Toko</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link pb-0" href="<?= base_url('admin/blog'); ?>">
					<i class="fa fa-fw fa-folder-open"></i>
					<span>Atur Tentang Kami</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('admin/contact'); ?>">
					<i class="fa fa-fw fa-question-circle"></i>
					<span>Atur Informasi Kontak</span>
				</a>
			</li>

			<hr class="sidebar-divider">
			<div class="sidebar-heading">
				Riwayat
			</div>
			<li class="nav-item">

				<a class="nav-link" href="<?= base_url('admin/history') ?>">
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
								<a class="dropdown-item" href="<?= base_url('admin/account') ?>">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Profile
								</a>

								<a class="dropdown-item" href="<?= base_url('admin/change_password') ?>">
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

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h4 mb-0 text-gray-800">Dashboard</h1>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<?= $this->session->flashdata('message'); ?>
						</div>
					</div>

					<!-- Content Row -->
					<div class="row justify-content-center">

						<!-- Earnings (Monthly) Card Example -->
						<div class="col-xl-4 col-md-6 mb-4">
							<div class="card border-left-danger shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
												Pendapatan (Kemarin)</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($statistics['lastDay'], 0, "", "."); ?></div>
										</div>
										<div class="col-auto">
											<i class="fas fa-calendar-week fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 mb-4">
							<div class="card border-left-warning shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
												Pendapatan (Hari Ini)</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($statistics['daily'], 0, "", "."); ?></div>
										</div>
										<div class="col-auto">
											<i class="fas fa-money-check-alt fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 mb-4 mx-auto">
							<div class="card border-left-success shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
												Total Semua Pendapatan</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($statistics['total'], 0, "", "."); ?></div>
										</div>
										<div class="col-auto">
											<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-xl-4 col-md-6 mb-4">
							<div class="card border-left-danger shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
												Pendapatan (Bulan lalu)</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($statistics['lastMonth'], 0, "", "."); ?></div>
										</div>
										<div class="col-auto">
											<i class="fas fa-calendar-check fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 mb-4">
							<div class="card border-left-warning shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
												Pendapatan (Bulan Ini)</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($statistics['monthly'], 0, "", "."); ?></div>
										</div>
										<div class="col-auto">
											<i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 mb-4 mx-auto">
							<div class="card border-left-primary shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
												Total Transaksi
											</div>
											<div class="row no-gutters align-items-center">
												<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $statistics['amount']; ?></div>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-10 mx-auto">
							<div class="card shadow mb-4">
								<!-- Card Header - Dropdown -->
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-primary">Ringkasan Pendapatan</h6>
								</div>
								<!-- Card Body -->
								<div class="card-body">
									<div class="chart-area">
										<canvas id="myAreaChart"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; Saerah Kopi 2020</span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->
	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Apakah anda Yakin?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Pilih "Keluar" di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
					<a class="btn btn-primary" href="<?= base_url('login/logout') ?>">Keluar</a>
				</div>
			</div>
		</div>
	</div>

	<script>
		var ctx = document.getElementById('myAreaChart').getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: [
					<?php
					foreach ($chart as $key) {
						echo "'" . $key['month'] . "', ";
					}
					?>
				],
				datasets: [{
					label: "Pendapatan",
					lineTension: 0.3,
					backgroundColor: "rgba(78, 115, 223, 0.05)",
					borderColor: "rgba(78, 115, 223, 1)",
					pointRadius: 3,
					pointBackgroundColor: "rgba(78, 115, 223, 1)",
					pointBorderColor: "rgba(78, 115, 223, 1)",
					pointHoverRadius: 3,
					pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
					pointHoverBorderColor: "rgba(78, 115, 223, 1)",
					pointHitRadius: 10,
					pointBorderWidth: 2,
					data: [
						<?php
						foreach ($chart as $value) {
							echo "'" . $value['revenue'] . "', ";
						}
						?>
					],
				}],
			},
			options: {
				maintainAspectRatio: false,
				layout: {
					padding: {
						left: 10,
						right: 25,
						top: 25,
						bottom: 0
					}
				},
				scales: {
					xAxes: [{
						time: {
							unit: 'date'
						},
						gridLines: {
							display: false,
							drawBorder: false
						},
						ticks: {
							maxTicksLimit: 7
						}
					}],
					yAxes: [{
						ticks: {
							maxTicksLimit: 7,
							padding: 10,
							beginAtZero: true
						},
						gridLines: {
							color: "rgb(234, 236, 244)",
							zeroLineColor: "rgb(234, 236, 244)",
							drawBorder: false,
							borderDash: [2],
							zeroLineBorderDash: [2]
						}
					}]
				}
			}
		});
	</script>
	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/sb-admin-2.js"></script>
</body>

</html>
