<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<!-- END GLOBAL MANDATORY STYLES -->

<link href="<?= base_url('assets/admin/') ?>assets/css/components/custom-modal.css" rel="stylesheet" type="text/css"/>
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
								<li class="breadcrumb-item"><a href="<?= base_url('dokter') ?>">Dashboard</a></li>
								<li class="breadcrumb-item active">Detail Rekam Medis</li>
							</ol>
						</div>
						<h4 class="page-title">Detail Rekam Medis</h4>
					</div>
				</div>
			</div>
			<!-- end page title -->

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">

							<h4 class="header-title">Detail Rekam Medis</h4>

							<table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
								<thead>
								<tr>
									<th>ID Konsultasi</th>
									<th>No Rekam Medis</th>
									<th>Nama Pasien</th>
									<th>Tanggal Pemeriksaan</th>
									<th class="text-center">Foto Pemeriksaan</th>
									<th>Aksi</th>
								</tr>
								</thead>


								<tbody>
								<?php foreach ($diagnosa as $row) { ?>
									<?php $date =  $row->tanggal != null ? longdate_indo($row->tanggal) : "Belum input tanggal"; ?>
									<tr>
										<td><?= $row->id_konsultasi ?></td>
										<td><?= $row->no_record ?></td>
										<td><?= $row->nama_pasien ?></td>
										<td><?= $date ?></td>
										<td class="text-center">
											<button type="button"
													class="btn btn-sm btn-outline-info waves-effect waves-light"
													data-toggle="modal"
													data-target="#fotoDiagnosa<?= $row->no_record ?>"><i
														class="mdi mdi-eye"></i></button>
										</td>
										<td class="text-center">
											<?php if ($date === "Belum input tanggal") { ?>
												<a href="<?= base_url('dokter/diagnosa/input_diagnosa/' . $row->id_konsultasi . '/' . $row->id_dokter . '/' . $row->id_pasien) ?>">
													<button type="button"
															class="btn btn-xs width-xs btn-primary waves-effect waves-light">
															<span class="btn-label"><i
																		class="mdi mdi-stethoscope"></i></span>Tambah Diagnosa
													</button>
												</a>
											<?php } elseif (date("Y-m-d") > $row->tanggal) { ?>
												<a href="<?= base_url('dokter/diagnosa/info_diagnosa/' . $row->id_konsultasi) ?>">
													<button type="button"
															class="btn btn-xs width-xs btn-info waves-effect waves-light">
															<span class="btn-label"><i
																		class="mdi mdi-information-outline"></i></span>Info
													</button>
												</a>
											<?php    } else { ?>
												<a href="<?= base_url('dokter/diagnosa/info_diagnosa/' . $row->id_konsultasi) ?>">
													<button type="button"
															class="btn btn-xs width-xs btn-info waves-effect waves-light">
															<span class="btn-label"><i
																		class="mdi mdi-information-outline"></i></span>Info
													</button>
												</a>
												<a href="<?= base_url('dokter/diagnosa/edit_diagnosa/' . $row->id_konsultasi) ?>">
													<button type="button"
															class="btn btn-xs width-xs btn-warning waves-effect waves-light">
															<span class="btn-label"><i
																		class="mdi mdi-circle-edit-outline"></i></span>Edit Diagnosa
													</button>
												</a>
											<?php    } ?>
										</td>
									</tr>

									<!-- Modal -->
									<div class="modal fade" id="fotoDiagnosa<?= $row->no_record ?>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Foto Pemeriksaan</h5>
													<button type="button" class="btn-close"
															data-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-md-12 mx-auto">
															<img class="img-thumbnail" src="<?= base_url('uploads/diagnosa/' . $row->foto_pemeriksaan) ?>" alt="">
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Tutup</button>
												</div>
											</div>
										</div>
									</div>
									<!-- End Modal -->
								<?php } ?>
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
					</script> &copy; Media Kesehatan
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
	flatpickr("#myDate", {
		enableTime: true,
		dateFormat: "Y-m-d",
	});
</script>
<script>
	flatpickr("#myID", {
		enableTime: true,
		noCalendar: true,
		dateFormat: "H:i",
		defaultDate: "09:45"
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
		drawCallback: function () {
			$('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered');
		}
	});
</script>
