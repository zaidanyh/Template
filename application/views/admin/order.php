<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h4 mb-0 text-gray-800">Pemesanan Pelanggan</h1>
	</div>

	<div class="row">
		<div class="col-lg-8">
			<div class="card shadow-lg">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Input Pesanan</h6>
				</div>
				<?= form_open('admin/orders'); ?>
				<div class="card-body">
					<div class="row">
						<div class="col-lg-6">
							<?= $this->session->flashdata('message'); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-7">
							<div class="form-group">
								<label>Nama Pesanan</label>
								<input type="text" class="form-control form-control-user" name="name" id="menuCoffee" list="mymenu" onkeyup="fetchData(this.value)">
								<datalist id="mymenu">
									<?php foreach ($menu as $key) { ?>
										<option value="<?= $key['name']; ?>" />
									<?php } ?>
								</datalist>
								<?= form_error('name', '<small class="text-danger">', '</small>') ?>
							</div>
						</div>
						<div class="col-lg-5">
							<div class="form-group">
								<input type="hidden" name="menuId" id="idMenu">
								<label>Harga</label>
								<input type="number" name="price" id="priceMenu" class="form-control form-control-user" placeholder="Rp. 0" readonly>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-5">
							<div class="form-group">
								<label>Jumlah Pesanan</label>
								<input type="number" name="amount" id="amountOrder" class="form-control form-control-user" placeholder="Jumlah">
								<?= form_error('amount', '<small class="text-danger">', '</small>') ?>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="form-group">
								<label>Total Bayar</label>
								<input type="number" name="total" id="totalPayment" class="form-control form-control-user" placeholder="Total" readonly>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-success">Submit</button>
				</div>
				<?= form_close(); ?>
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
