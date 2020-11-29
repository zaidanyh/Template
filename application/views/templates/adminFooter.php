<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Apakah anda Yakin?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Pilih "Keluar" di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
				<a class="btn btn-primary" href="<?= base_url('login/logout') ?>">Keluar</a>
			</div>
		</div>
	</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.js"></script>
<script src="<?= base_url('assets/'); ?>/js/content-js.js"></script>
<script>
	function fetchData(x) {

		if (x.length == 0) {
			document.getElementById("priceMenu").value = "0";
			return;
		} else {
			const xmlHttp = new XMLHttpRequest();
			xmlHttp.open("GET", "<?= base_url('admin/fetchMenu/') ?>" + x.trim().replace(" ", "_"), true);
			xmlHttp.onload = function() {
				if (this.status == 200) {
					const result = JSON.parse(xmlHttp.response);
					document.getElementById("idMenu").value = result['menu_id'];
					document.getElementById("priceMenu").value = result['price'];
				}
			}
			xmlHttp.send();
		}
	}

	$('#amountOrder').bind("keyup mouseup", (e) => {
		const harga = $('#priceMenu').val();
		const total = e.target.value;
		$('#totalPayment').val(harga * total);
	});
</script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>

</body>

</html>
