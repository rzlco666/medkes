<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>plugins/dropify/dropify.min.css">
<link href="<?= base_url('assets/admin/') ?>assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->

<link href="<?= base_url('assets/admin/') ?>assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/admin/') ?>plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
<link href="<?= base_url('assets/admin/') ?>plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">

<style>
	.flatpickr-calendar.open {
		display: inline-block;
		z-index: 1900;
	}
</style>

<div class="content-page">
	<div class="content">

		<!-- Start Content-->
		<div class="container-fluid">

			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box">
						<div class="page-title-right">
							<ol class="breadcrumb m-0">
								<li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
								<li class="breadcrumb-item active">Profile</li>
							</ol>
						</div>
						<h4 class="page-title">Profile</h4>
					</div>
				</div>
			</div>
			<!-- end page title -->

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">

							<div class="row">
								<!--  END CUSTOM STYLE FILE  -->

								<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
								<div class="flash-data-gagal" data-flashdata="<?= $this->session->flashdata('gagal'); ?>"></div>

								<?php if (isset($_SESSION['flash'])) {
									unset($_SESSION['flash']);
								}
								if (isset($_SESSION['gagal'])) {
									unset($_SESSION['gagal']);
								} ?>

								<form id="general-info" action="<?= base_url('dokter/profile/update_profile') ?>" method="POST" enctype="multipart/form-data" class="section general-info">

									<div class="col-xl-2 col-lg-12 col-md-4">
										<div class="upload mt-4 pr-md-4">

											<?php if ($profile->foto == NULL || $profile->foto == "") { ?>
												<img style="width: 150px;" src="<?= base_url('assets_admin/') ?>images/users/user-1.jpg" alt="">
											<?php	} else { ?>
												<img style="width: 150px;" src="<?= base_url('uploads/profile/' . $profile->foto) ?>" alt="">
											<?php	} ?>

										</div>
									</div>

									<div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
										<div class="form">
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label for="fullName">Nama Lengkap</label>
														<input type="text" name="nama_dokter" class="form-control mb-4" placeholder="Nama Lengkap" value="<?= $profile->nama_dokter ?>">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label for="profession">Username</label>
														<input type="text" name="username" class="form-control mb-4" placeholder="Username" value="<?= $profile->username ?>">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label for="profession">No Telepon</label>
														<input type="text" name="no_telp" class="form-control mb-4" placeholder="Nomer Telepon" value="<?= $profile->no_telp ?>">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label for="profession">Email</label>
														<input type="text" name="email" class="form-control mb-4" placeholder="Email" value="<?= $profile->email ?>">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label for="profession">Ganti Foto</label><br>
														<input type="file" name="foto" />
														<!-- <input type="number" id="dengan-rupiah" name="harga" class="form-control mb-4" placeholder="Harga" value="<?= $profile->harga ?>"> -->
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label for="profession">Pengalaman Kerja</label>
														<input type="text" name="pengalaman_kerja" class="form-control mb-4" placeholder="Pengalaman Kerja" value="<?= $profile->pengalaman_kerja ?>">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label for="profession">STR</label>
														<input type="number" name="str" class="form-control mb-4" placeholder="STR" value="<?= $profile->STR ?>">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label for="profession">Keahlian</label>
														<input type="text" name="keahlian" class="form-control mb-4" placeholder="Keahlian" value="<?= $profile->keahlian ?>">
													</div>
												</div>
											</div>
											<button class="btn btn-primary mb-2">Update</button>
										</div>
									</div>
								</form>
							</div>

						</div> <!-- end card body-->
					</div> <!-- end card -->
				</div><!-- end col-->
			</div>
			<!-- end row-->

		</div> <!-- container -->

	</div> <!-- content -->
	<!-- Footer Start -->
	<footer class="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<script>
						document.write(new Date().getFullYear())
					</script> &copy; UBold theme by <a href="">Coderthemes</a>
				</div>
				<div class="col-md-6">
					<div class="text-md-end footer-links d-none d-sm-block">
						<a href="javascript:void(0);">About Us</a>
						<a href="javascript:void(0);">Help</a>
						<a href="javascript:void(0);">Contact Us</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


</div>
<!-- END wrapper -->
<script src="<?= base_url('assets/admin/') ?>assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/flatpickr/flatpickr.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/flatpickr/custom-flatpickr.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/dropify/dropify.min.js"></script>
<script>
	var f4 = flatpickr(document.getElementById('timeFlatpickr'), {
		enableTime: true,
		noCalendar: true,
		dateFormat: "H:i",
		defaultDate: "09:45"
	});
</script>
<script>
	var f4 = flatpickr(document.getElementById('timeFlatpickr2'), {
		enableTime: true,
		noCalendar: true,
		dateFormat: "H:i",
		defaultDate: "16:45"
	});
</script>

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
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
			"sInfo": "Tampilkan Halaman _PAGE_ dari _PAGES_",
			"sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
			"sSearchPlaceholder": "Cari...",
			"sLengthMenu": "Jumlah :  _MENU_",
		},
		// "ordering": false,
		"order": [
			[0, "desc"]
		],
		"stripeClasses": [],
		"lengthMenu": [10, 20, 50],
		"pageLength": 10,
		drawCallback: function() {
			$('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered');
		}
	});
</script>