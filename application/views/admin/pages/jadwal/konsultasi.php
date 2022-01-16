<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<link href="<?= base_url('assets/admin/') ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
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
								<li class="breadcrumb-item active">Konsultasi</li>
							</ol>
						</div>
						<h4 class="page-title">Konsultasi</h4>
					</div>
				</div>
			</div>
			<!-- end page title -->

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">

							<h4 class="header-title">Konsultasi</h4>

							<table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
								<thead>
									<tr>
										<th>ID Konsultasi</th>
										<th>Nama Pasien</th>
										<th>Tanggal</th>
										<th>Jam</th>
										<th>Keluhan</th>
										<th>Foto Keluhan</th>
										<th>Status</th>
										<th>Aksi</th>
									</tr>
								</thead>


								<tbody>
									<?php foreach ($konsultasi as $data) { ?>
										<tr>
											<td><?= $data->id_konsultasi ?></td>
											<td><?= $data->nama_pasien ?></td>
											<td><?= longdate_indo($data->tanggal) ?></td>
											<td><?= $data->jam ?> WIB</td>
											<td><?= $data->keluhan ?></td>
											<td>
												<a href="javascript:void(0);" data-toggle="modal" data-target="#fotoKeluhan<?= $data->id_konsultasi ?>">
													Lihat Foto
												</a>
												<!-- Modal -->
												<div class="modal fade" id="fotoKeluhan<?= $data->id_konsultasi ?>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="exampleModalLabel">Foto Keluhan</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																</button>
															</div>
															<div class="modal-body">
																<div class="row">
																	<div class="col-md-12 mx-auto">
																		<img class="img-thumbnail" src="<?= base_url('uploads/keluhan/' . $data->foto_keluhan) ?>" alt="">
																	</div>
																</div>
															</div>
															<div class="modal-footer">
																<button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Tutup</button>
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>
												<?php switch ($data->status):
													case "Disetujui": ?>
														<span class="badge badge-primary"><?= $data->status ?></span>
													<?php break;
													case "Ubah jadwal": ?>
														<span class="badge badge-warning"><?= $data->status ?></span>
													<?php break;
													case "Dibatalkan": ?>
														<span class="badge badge-danger"><?= $data->status ?></span>
													<?php break;
													case "Selesai": ?>
														<span class="badge badge-success"><?= $data->status ?></span>
												<?php break;
												endswitch; ?>
											</td>
											<td class="text-center">
												<?php switch ($data->status):
													case "Disetujui": ?>
														<button style="cursor: not-allowed !important;" disabled class="btn btn-primary btn-sm">Menunggu Selesai
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
																<polyline points="20 6 9 17 4 12"></polyline>
															</svg>
														</button>
													<?php break;
													case "Ubah jadwal": ?>
														<button class="btn btn-warning btn-sm">Dalam Persetujuan
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
																<circle cx="12" cy="12" r="10"></circle>
																<polyline points="12 6 12 12 16 14"></polyline>
															</svg>
														</button>
													<?php break;
													case "Dibatalkan": ?>
														<button class="btn btn-danger btn-sm">Dibatalkan
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
																<circle cx="12" cy="12" r="10"></circle>
																<line x1="15" y1="9" x2="9" y2="15"></line>
																<line x1="9" y1="9" x2="15" y2="15"></line>
															</svg>
														</button>
													<?php break;
													case "Selesai": ?>
														<button class="btn btn-success btn-sm">Info Diagnosa
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info">
																<circle cx="12" cy="12" r="10"></circle>
																<line x1="12" y1="16" x2="12" y2="12"></line>
																<line x1="12" y1="8" x2="12.01" y2="8"></line>
															</svg>
														</button>
												<?php break;
												endswitch; ?>
											</td>
										</tr>
									<?php	} ?>
								</tbody>
							</table>

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

<script src="<?= base_url('assets/admin/') ?>plugins/flatpickr/flatpickr.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/flatpickr/custom-flatpickr.js"></script>
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
<script src="<?= base_url('assets/admin/') ?>assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>bootstrap/js/bootstrap.min.js"></script>
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