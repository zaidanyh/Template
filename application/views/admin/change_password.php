<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h4 mb-0 text-bg-gray-800">Change Password</h1>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<?= $this->session->flashdata('message'); ?>
			<?= form_open('admin/change_password'); ?>
			<div class="form-group">
				<label for="current_password">Current Password</label>
				<input type="password" class="form-control form-control-user" name="current_password" id="current_password">
				<?= form_error('current_password', '<small class="text-danger">', '</small>'); ?>
			</div>

			<div class="form-group">
				<label for="new_password1">New Password</label>
				<input type="password" class="form-control form-control-user" name="new_password1" id="new_password1">
				<?= form_error('new_password1', '<small class="text-danger">', '</small>'); ?>
			</div>

			<div class="form-group">
				<label for="new_password2">Repeat Password</label>
				<input type="password" class="form-control form-control-user" name="new_password2" id="new_password2">
				<?= form_error('new_password2', '<small class="text-danger">', '</small>'); ?>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Update Password</button>
			</div>
			<?= form_close(); ?>
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
