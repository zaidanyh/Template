<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h4 mb-0 text-gray-800">Informasi Kontak</h1>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<?= $this->session->flashdata('message'); ?>
			<table class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>#</th>
						<th>Informasi 1</th>
						<th>Informasi 2</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					foreach ($contact as $key) { ?>
						<tr>
							<td><?= $i; ?></td>
							<td><?= $key['name']; ?></td>
							<td><?= $key['description']; ?></td>
							<td>
								<a type="button" class="badge badge-warning m-1" data-toggle="modal" data-target="#contact<?= $key['id_contact']; ?>"><i class="fa fa-eye p-1"></i> Edit</a>
							</td>
						</tr>
					<?php $i++;
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

<!-- Modal Edit Kontak -->
<?php foreach ($contact as $key) { ?>
	<div class="modal fade" id="contact<?= $key['id_contact']; ?>" tabindex="-1" role="dialog" aria-labelledby="editcontact" aria-hidden="false">
		<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="editcontact">Edit Informasi Kontak</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?= form_open('admin/contact/' . $key['id_contact']); ?>
				<div class="modal-body">
					<div class="form-group">
						<label>Nama Informasi Kontak</label>
<<<<<<< Updated upstream
						<input type="text" class="form-control form-control-user" name="name" value="<?= $key['name']; ?>" disabled>
=======
						<input type="text" class="form-control form-control-user" name="name" value="<?= $key['name']; ?>" readonly>
>>>>>>> Stashed changes
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<input type="text" class="form-control form-control-user" name="description" value="<?= $key['description']; ?>">
						<p class="text-danger mt-3" style="font-size: smaller;">
							catatan : untuk no. telpon gunakan awalan 62xxx, jangan gunakan 0
						</p>
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
