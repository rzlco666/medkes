<div class="footer-wrapper">
	<div class="footer-section f-section-1">
		<p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com/">DesignReset</a>, All rights reserved.</p>
	</div>
	<div class="footer-section f-section-2">
		<p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
				<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
			</svg></p>
	</div>
</div>
</div>
<!--  END CONTENT PART  -->

</div>
<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="<?= base_url('assets/admin/') ?>assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>bootstrap/js/popper.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/js/app.js"></script>
<script>
	$(document).ready(function() {
		App.init();
	});
</script>
<script src="<?= base_url('assets/admin/') ?>plugins/highlight/highlight.pack.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->




<script src="<?= base_url('assets/admin/') ?>assets/js/scrollspyNav.js"></script>
<!-- <script src="<?= base_url('assets/admin/') ?>plugins/sweetalerts/sweetalert2.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/sweetalerts/custom-sweetalert.js"></script> -->



<script src="<?= base_url('assets/admin/') ?>plugins/dropify/dropify.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/blockui/jquery.blockUI.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/tagInput/tags-input.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/js/users/account-settings.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/apex/apexcharts.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>assets/js/dashboard/dash_2.js"></script>

<script src="<?= base_url('assets/admin/') ?>plugins/table/datatable/datatables.js"></script>
<script>
	$('#default-ordering').DataTable({
		"dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
			"<'table-responsive'tr>" +
			"<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
		"oLanguage": {
			"oPaginate": {
				"sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
				"sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
			},
			"sInfo": "Tampilkan halaman _PAGE_ dari _PAGES_",
			"sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
			"sSearchPlaceholder": "Cari...",
			"sLengthMenu": "Jumlah :  _MENU_",
		},
		"order": [
			[0, "asc"]
		],
		"stripeClasses": [],
		"lengthMenu": [7, 10, 20, 50],
		"pageLength": 7,
		drawCallback: function() {
			$('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered');
		}
	});
</script>

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>


</html>