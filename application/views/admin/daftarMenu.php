<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h4 mb-0 text-bg-gray-800">Daftar Menu</h1>
		<button type="button" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#modalAddMenu"><i class="fa fa-plus-circle text-white-50"></i> Tambah Menu</button>
	</div>

	<div class="row">
		<div class="col-lg-8">
			<div class="card shadow">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Tabel Data Menu</h6>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<?= $this->session->flashdata('message'); ?>
						<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>#</th>
									<th>Kategori</th>
									<th>Menu</th>
									<th>Harga</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php if (empty($menu)) { ?>
									<tr>
										<td colspan="5" class="text-muted text-center p-2">Menu masih kosong</td>
									</tr>
									<?php
								} else {
									$i = 1;
									foreach ($menu as $key) { ?>
										<tr>
											<td><?= $i; ?></td>
											<td><?= $key['type']; ?></td>
											<td><?= $key['name']; ?></td>
											<td>Rp. <?= number_format($key['price'], 0, "","."); ?></td>
											<td>
												<a type="button" class="badge badge-warning mb-1" data-toggle="modal" data-target="#editMenu<?= $key['menu_id']; ?>"><i class="fa fa-eye p-1"></i> Edit</a>
												<a class="badge badge-danger mt-1" href="<?= base_url('admin/'); ?>deletemenu/<?= $key['menu_id'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')">
													<i class="fa fa-trash-alt p-1"></i> Hapus
												</a>
											</td>
										</tr>
								<?php $i++;
									}
								} ?>
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


<!-- Modal Add Menu -->
<div class="modal fade" id="modalAddMenu" tabindex="-1" role="dialog" aria-labelledby="titleAddMenu" aria-hidden="false">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="titleAddMenu">Tambah Menu</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?= form_open('admin/addmenu'); ?>
			<div class="modal-body">
				<div class="form-group">
					<label>Kategori</label>
					<select name="type" class="form-control form-control-user">
						<option disabled selected> Pilih : </option>
						<?php foreach ($type as $key) { ?>
							<option value="<?= $key['type_id'] ?>"><?= $key['name'] ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label>Nama Menu</label>
							<input type="text" class="form-control form-control-user" name="name" placeholder="Nama">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label>Harga</label>
							<input type="number" class="form-control form-control-user" name="price" placeholder="Harga">
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
				<button type="submit" class="btn btn-success">Tambah</button>
			</div>
			<?= form_close(); ?>
		</div>
	</div>
</div>

<!-- Modal Edit Menu -->

<?php foreach ($menu as $key) { ?>
	<div class="modal fade" id="editMenu<?= $key['menu_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editMenu" aria-hidden="false">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="editMenu">Edit Menu</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?= form_open('admin/allmenu') ?>
				<div class="modal-body">
					<input type="hidden" name="idMenu" value="<?= $key['menu_id']; ?>">
					<div class="form-group">
						<label>Kategori</label>
						<select name="typeMenu" class="form-control form-control-user">
							<option disabled selected> Pilih : </option>
							<?php foreach ($type as $tipe) { ?>
								<option value="<?= $tipe['type_id'] ?>" <?php if ($key['type'] == $tipe['name']) echo 'selected="selected"'; ?>>
									<?= $tipe['name'] ?>
								</option>
							<?php } ?>
						</select>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Nama Menu</label>
								<input type="text" class="form-control form-control-user" name="nameMenu" placeholder="Nama" value="<?= $key['name']; ?>">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Harga</label>
								<input type="number" class="form-control form-control-user" name="priceMenu" placeholder="Harga" value="<?= $key['price']; ?>">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-success">Simpan</button>
				</div>
				<?= form_close(); ?>
			</div>
		</div>
	</div>
<?php } ?>
