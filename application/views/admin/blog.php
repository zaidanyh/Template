<script src="<?= base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h4 mb-0 text-gray-800">Blog Saerah Kopi</h1>
	</div>

	<div class="col-lg-6">
		<?= $this->session->flashdata('message'); ?>
	</div>
	<div class="row">
		<?php foreach ($blog as $key) { ?>
			<div class="col-lg-6">
				<div class="card shadow">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary"><?= $key['name_blog']; ?></h6>
					</div>
					<div class="card-body">
						<img src="<?= base_url('assets/upload/blog/') . $key['photo']; ?>" class="card-img-top">
						<p class="mt-3 mb-0">
							<?= htmlspecialchars_decode($key['blog_content']); ?>
						</p>
					</div>
					<div class="card-footer">
						<a type="button" class="badge badge-primary m-1" data-toggle="modal" data-target="#editblog<?= $key['id']; ?>"><i class="fas fa-pencil-alt p-1"></i> Edit</a>
					</div>
				</div>
			</div>
		<?php } ?>
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

<script src="<?= base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<?php foreach ($blog as $key) { ?>
	<div class="modal fade" id="editblog<?= $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editblog" aria-hidden="false">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="titleAddMenu">Tambah Blog</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?= form_open_multipart('admin/blog/' . $key['id']); ?>
				<div class="modal-body">
					<div class="form-group row">
						<input type="hidden" name="current_photo" value="<?= $key['photo']; ?>">
						<label class="col-sm-2 my-auto">Gambar</label>
						<div class="col-sm-3">
							<img src="<?= base_url('assets/upload/blog/') . $key['photo'] ?>" class="card-img-top">
						</div>
						<div class="col-sm-4 my-auto">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="photo" name="photo">
								<label class="custom-file-label" for="photo">Choose file</label>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2">Nama Blog</label>
						<div class="col-sm-10">
							<input type="text" class="form-control form-control-user" name="nameBlog" value="<?= $key['name_blog'] ?>">
						</div>
					</div>
					<div class="form-group">
						<label>Isi Konten</label>
						<textarea class="form-control form-control-user" id="content_field" name="content_field">
							<?= htmlspecialchars_decode($key['blog_content']); ?>
						</textarea>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-success">Ubah</button>
				</div>
				<?= form_close(); ?>
			</div>
		</div>
	</div>
<?php } ?>

<script>
	CKEDITOR.replace('content_field', {
		uiColor: '#c3c3c3'
	});
</script>
