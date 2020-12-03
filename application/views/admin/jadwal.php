<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h4 mb-0 text-bg-gray-800">Pengaturan Jadwal</h1>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<?= $this->session->flashdata('message'); ?>
			<table class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Hari</th>
						<th>Buka</th>
						<th>Tutup</th>
						<th>Libur</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php

					foreach ($schedule as $key) { ?>
						<tr>
							<td><?= $key['name_day'] ?></td>
							<td><?= $key['open']; ?></td>
							<td><?= $key['close']; ?></td>
							<?php if ($key['is_close'] == 1) { ?>
								<td>Ya</td>
							<?php } else { ?>
								<td>Tidak</td>
							<?php } ?>
							<td>
								<a type="button" class="badge badge-warning m-1" data-toggle="modal" data-target="#schedule<?= $key['id_schedule']; ?>"><i class="fa fa-eye p-1"></i> Edit</a>
							</td>
						</tr>
					<?php } ?>
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


<!-- Modal Edit Schedule -->
<?php foreach ($schedule as $key) { ?>
	<div class="modal fade" id="schedule<?= $key['id_schedule']; ?>" tabindex="-1" role="dialog" aria-labelledby="schedule" aria-hidden="false">
		<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="editMenu">Edit Jadwal</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?= form_open('administrator/schedule'); ?>
				<div class="modal-body">
					<input type="hidden" name="idSchedule" value="<?= $key['id_schedule']; ?>">
					<div class="form-group">
						<label>Nama Hari</label>
						<input type="text" class="form-control form-control-user" name="name_day" value="<?= $key['name_day']; ?>" readonly>
					</div>
					<div class="row justify-content-end">
						<div class="form-group col-lg-6">
							<label>Jam Buka</label>
							<input type="time" class="form-control form-control-user" name="open_work" value="<?= $key['open']; ?>">
						</div>
						<div class="form-group col-lg-6">
							<label>Jam Tutup</label>
							<input type="time" class="form-control form-control-user" name="close_work" value="<?= $key['close']; ?>">
						</div>
						<div class="form-check mr-3">
							<input class="form-check-input" type="checkbox" name="closing" <?php if ($key['is_close'] == 1) echo 'checked="checked"' ?>>
							<label>Tutup</label>
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
