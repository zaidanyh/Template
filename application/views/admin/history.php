<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h4 mb-0 text-gray-800">Daftar Riwayat Pesanan</h1>
	</div>

	<div class="row">
		<div class="col-lg-9">
			<div class="card shadow">
				<div class="card-header py-3"></div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Kategori</th>
									<th>Pesanan</th>
									<th>Harga</th>
									<th>Jumlah</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($history as $key) { ?>
									<tr>
										<td><?= $key['category']; ?></td>
										<td><?= $key['name']; ?></td>
										<td><?= $key['price']; ?></td>
										<td><?= $key['amount']; ?></td>
										<td><?= $key['total']; ?></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
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
