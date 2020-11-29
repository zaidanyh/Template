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
	<div class="row">

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-4 col-md-6 mb-4">
			<div class="card border-left-danger shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
								Pendapatan (Hari Ini)</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($daily->inDaily, 0, "", "."); ?></div>
						</div>
						<div class="col-auto">
							<i class="fa fa-credit-card fa-2x text-gray-300"></i>
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
							<div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($monthly->thisMonth, 0, "", "."); ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-4 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
								Total Pendapatan</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($statistics['total'], 0, "", "."); ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calculator fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="col-xl-4 col-md-6 mb-4 mx-auto">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Transaksi
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
