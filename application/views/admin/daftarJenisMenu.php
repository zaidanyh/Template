<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h4 mb-0 text-gray-800"><?= $title ?></h1>
		<button type="button" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#modalAddType"><i class="fa fa-plus-circle text-white-50"></i> Tambah Kategori Menu</button>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<?= $this->session->flashdata('message'); ?>
			<table class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					if (empty($result)) { ?>
						<tr>
							<td colspan="3" class="text-muted text-center p-1">Kategori Masih Kosong</td>
						</tr>
						<?php } else {
						$i = 1;
						foreach ($result as $key) { ?>
							<tr>
								<td><?= $i; ?></td>
								<td><?= $key['name']; ?></td>
								<td>
									<a class="badge badge-warning p-1" href="<?= base_url('admin/'); ?>edit/<?= $key['type_id'] ?>"><i class="fa fa-eye p-1"></i> Edit</a>
									<a class="badge badge-danger p-1" href="<?= base_url('admin/'); ?>delete/<?= $key['type_id'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')">
										<i class="fa fa-trash-alt p-1"></i> Delete
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

<!-- Modal -->
<div class="modal fade" id="modalAddType" tabindex="-1" role="dialog" aria-labelledby="Title" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="Title">Tambah <?= $title; ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?= form_open('admin/category'); ?>
				<div class="form-group">
					<label>Kategori Menu</label>
					<input type="text" class="form-control form-control-user" name="name" placeholder="Nama">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
				<button type="submit" class="btn btn-success">Tambah</button>
				<?= form_close(); ?>
			</div>
		</div>
	</div>
</div>
