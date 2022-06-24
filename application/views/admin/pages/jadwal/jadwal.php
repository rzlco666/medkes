<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

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

<!-- Modal -->
<div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<form action="<?= base_url('admin/jadwal/proses_tambah_jadwal') ?>" method="POST">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal Dokter</h5>
					<button type="button" class="btn-close"
							data-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12 mx-auto">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="nama">Dokter</label>
										<select name="id_dokter" id="id_dokter" class="form-control id_dokter">
											<option value="">Pilih Dokter</option>
											<?php foreach ($dokter as $d) : ?>
												<option name="id_dokter" value="<?= $d->id_dokter ?>"><?= $d->nama_dokter ?></option>
											<?php endforeach; ?>
										</select>
									</div>
									<div class="form-group">
										<label for="email">Tanggal</label>
										<input name="tanggal" value="<?= date("Y-m-d") ?>" class="basicFlatpickr form-control flatpickr flatpickr-input active text-black" type="text" placeholder="Select Date..">
									</div>
										<div class="form-group">
											<label for="website1">Jam Mulai</label>
											<input name="jam_mulai" class="timeFlatpickr form-control flatpickr flatpickr-input active text-black" type="text" placeholder="Select Date..">
										</div>
										<div class="form-group">
											<label for="website2">Jam Berakhir</label>
											<input name="jam_berakhir" class="timeFlatpickr2 form-control flatpickr flatpickr-input active text-black" type="text" placeholder="Select Date..">
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--End Modal -->

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
								<li class="breadcrumb-item active">Jadwal</li>
							</ol>
						</div>
						<h4 class="page-title">Jadwal</h4>
					</div>
				</div>
			</div>
			<!-- end page title -->

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">

							<h4 class="header-title">Jadwal</h4>
							<button type="button" class="btn btn-xs width-xs btn-primary waves-effect waves-light mb-2" data-toggle="modal"
									data-target="#exampleModal">
								<span class="btn-label"><i class="mdi mdi-plus-circle-outline"></i></span>Tambah Jadwal Dokter
							</button>

							<table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
								<thead>
									<tr>
										<th>#</th>
										<th>Nama Dokter</th>
										<th>Tanggal</th>
										<th>Jam Operasional</th>
										<th>Aksi</th>
									</tr>
								</thead>


								<tbody>
									<?php $no = 1;
									foreach ($jadwal as $data) { ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $data->nama_dokter ?></td>
											<td><?= longdate_indo($data->tanggal) ?></td>
											<td><?= $data->jam_mulai ?> WIB - <?= $data->jam_berakhir ?> WIB</td>
											<td>
												<button type="button" class="btn btn-xs width-xs btn-warning waves-effect waves-light mb-2" data-toggle="modal"
														data-target="#jadwal<?= $data->id_jadwal ?>">
													<span class="btn-label"><i class="mdi mdi-circle-edit-outline"></i></span>Edit Jadwal
												</button>
												<div class="modal fade" id="jadwal<?= $data->id_jadwal ?>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered" role="document">
														<div class="modal-content">
															<form action="<?= base_url('admin/jadwal/proses_update_jadwal/' . $data->id_jadwal) ?>" method="POST">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">Sunting Jadwal</h5>
																	<button type="button" class="btn-close"
																			data-dismiss="modal" aria-label="Close"></button>
																</div>
																<div class="modal-body">
																	<div class="row">
																		<div class="col-md-12 mx-auto">
																			<div class="row">
																				<div class="col-md-12">
																					<div class="form-group">
																						<label for="email">Tanggal</label>
																						<input name="tanggal" value="<?= $data->tanggal ?>" class="form-control basicFlatpickr flatpickr flatpickr-input active text-black" type="text" placeholder="Select Date..">
																					</div>
																				</div>
																				<div class="col-md-6">
																					<div class="form-group">
																						<label for="website1">Jam Mulai</label>
																						<input value="<?= $data->jam_mulai ?>" name="jam_mulai" class="form-control flatpickr flatpickr-input active text-black timeFlatpickr" type="text" placeholder="Select Date..">
																					</div>
																				</div>
																				<div class="col-md-6">
																					<div class="form-group">
																						<label for="website2">Jam Berakhir</label>
																						<input value="<?= $data->jam_berakhir ?>" name="jam_berakhir" class="form-control flatpickr flatpickr-input active text-black timeFlatpickr2" type="text" placeholder="Select Date..">
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="modal-footer">
																	<button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Close</button>
																	<button type="submit" class="btn btn-primary">Save</button>
																</div>
															</form>
														</div>
													</div>
												</div>
											</td>
										</tr>
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
	var f4 = flatpickr(document.getElementsByClassName('timeFlatpickr'), {
		enableTime: true,
		noCalendar: true,
		dateFormat: "H:i",
	});
</script>
<script>
	var f4 = flatpickr(document.getElementsByClassName('timeFlatpickr2'), {
		enableTime: true,
		noCalendar: true,
		dateFormat: "H:i",
	});
</script>
<script>
	var f6 = flatpickr(document.getElementsByClassName('basicFlatpickr'), {
		enableTime: false,
		noCalendar: false,
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
//script init selectize
<script>
	$(document).ready(function() {
		$('.id_dokter').selectize({
		});
	});
</script>
