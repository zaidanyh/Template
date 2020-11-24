<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
		<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus-circle text-white-50"></i> Tambah Jenis Menu</a>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<table class="table table-striped table-bordered table-sm" cellspacing="0">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
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
					} ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
