<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h4 mb-0 text-bg-gray-800">Edit Account</h1>
		<?= $this->session->flashdata('message'); ?>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<?= form_open('administrator/account'); ?>
			<div class="form-group row">
				<label for="email" class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control form-control-user" id="email" name="email" value="<?= $user['email']; ?>" readonly>
				</div>
			</div>

			<div class="form-group row">
				<label for="name" class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-10">
					<input type="name" class="form-control form-control-user" id="name" name="name" value="<?= $user['name']; ?>">
					<?= form_error('name', '<small class="text-danger">', '</small>') ?>
				</div>
			</div>

			<div class="form-group row justify-content-end">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Edit</button>
				</div>
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
