<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h4 mb-0 text-gray-800">Informasi Kontak</h1>
		<button type="button" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#modalKontak"><i class="fa fa-plus-circle text-white-50"></i> Tambah Kontak</button>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<?= $this->session->flashdata('message'); ?>
			<table class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama</th>
						<th>Deskripsi</th>
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
								<a class="badge badge-danger m-1" href="<?= base_url('admin/'); ?>deletecontact/<?= $key['id_contact'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')">
									<i class="fa fa-trash-alt p-1"></i> Delete
								</a>
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

<!-- Modal Add Kontak -->
<div class="modal fade" id="modalKontak" tabindex="-1" role="dialog" aria-labelledby="titleAddMenu" aria-hidden="false">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="titleAddMenu">Tambah Informasi Kontak</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?= form_open('admin/contact'); ?>
			<div class="modal-body">
				<div class="form-group">
					<label>Nama Informasi Kontak</label>
					<input type="text" class="form-control form-control-user" name="name">
				</div>
				<div class="form-group">
					<label>Deskripsi</label>
					<input type="text" class="form-control form-control-user" name="description">
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
				<?= form_open('admin/editcontact/' . $key['id_contact']); ?>
				<div class="modal-body">
					<div class="form-group">
						<label>Nama Informasi Kontak</label>
						<input type="text" class="form-control form-control-user" name="name" value="<?= $key['name']; ?>">
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<input type="text" class="form-control form-control-user" name="description" value="<?= $key['description']; ?>">
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
