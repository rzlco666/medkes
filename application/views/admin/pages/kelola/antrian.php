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
								<li class="breadcrumb-item active">Antrian</li>
							</ol>
						</div>
						<h4 class="page-title">Antrian</h4>
					</div>
				</div>
			</div>
			<!-- end page title -->

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">

							<h4 class="header-title">Antrian</h4>

							<table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
								<thead>
								<tr>
									<th>ID Antrian</th>
									<th>Tanggal</th>
									<th>Poli</th>
									<th>Pasien</th>
									<th>Status</th>
									<th>Aksi</th>
								</tr>
								</thead>


								<tbody>
								<?php foreach ($antrian as $data) { ?>
									<tr>
										<td><?= $data->id_antrian ?></td>
										<td><?= longdate_indo($data->tanggal) ?></td>
										<td><?= $data->nama_poli ?></td>
										<td><?= $data->id_pasien ?> | <?= $data->nama_pasien ?></td>
										<td>
											<?php switch ($data->status):
												case "Menunggu":
													echo '<span class="badge bg-info text-white">Menunggu</span>';
													break;
												case "Disetujui": ?>
													<span class="badge bg-primary text-white"> <?= $data->status ?> </span>
													<?php break;
												case "Diproses": ?>
													<span class="badge bg-warning text-white"> <?= $data->status ?> </span>
													<?php break;
												case "Dibatalkan": ?>
													<span class="badge bg-danger text-white"> <?= $data->status ?> </span>
													<?php break;
												case "Selesai": ?>
													<span class="badge bg-success text-white"> <?= $data->status ?> </span>
													<?php break;
											endswitch; ?>
										</td>
										<td>
											<button type="button" class="btn btn-xs width-xs btn-info waves-effect waves-light" data-toggle="modal"
													data-target="#exampleModal<?= $data->id_antrian ?>">
												<span class="btn-label"><i class="mdi mdi-circle-edit-outline"></i></span>Edit
											</button>
											<!-- Modal -->
											<div class="modal fade" id="exampleModal<?= $data->id_antrian ?>" role="dialog" aria-labelledby="exampleModalLabel<?= $data->id_antrian ?>" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<form action="<?= base_url('admin/kelola/update_antrian/'.$data->id_antrian) ?>" method="POST">
															<div class="modal-header">
																<h5 class="modal-title" id="exampleModalLabel">Edit Antrian &mdash; <?= $data->id_antrian ?></h5>
																<button type="button" class="btn-close"
																		data-dismiss="modal" aria-label="Close"></button>
															</div>
															<div class="modal-body">
																<div class="row">
																	<div class="col-md-12 mx-auto">
																		<div class="row">
																			<div class="col-md-12">
																				<div class="form-group">
																					<label>ID Antrian</label>
																					<input class="form-control text-black" type="text" disabled value="<?= $data->id_antrian ?>">
																				</div>
																				<div class="form-group mt-2">
																					<label>Tanggal</label>
																					<input class="form-control text-black" type="text" disabled value="<?= longdate_indo($data->tanggal) ?>">
																				</div>
																				<div class="form-group mt-2">
																					<label>Poli</label>
																					<input class="form-control text-black" type="text" disabled value="<?= $data->nama_poli ?>">
																				</div>
																				<div class="form-group mt-2">
																					<label>Pasien</label>
																					<input class="form-control text-black" type="text" disabled value="<?= $data->nama_pasien ?>">
																				</div>
																				<div class="form-group mt-2">
																					<label class="form-label">Status</label> <br/>
																					<select name="status" class="form-control">
																						<option <?php if ($data->status === 'Menunggu'){ echo 'selected';} ?> name="status" value="Menunggu">Menunggu</option>
																						<option <?php if ($data->status === 'Disetujui'){ echo 'selected';} ?> name="status" value="Disetujui">Disetujui</option>
																						<option <?php if ($data->status === 'Diproses'){ echo 'selected';} ?> name="status" value="Diproses">Diproses</option>
																						<option <?php if ($data->status === 'Selesai'){ echo 'selected';} ?> name="status" value="Selesai">Selesai</option>
																						<option <?php if ($data->status === 'Dibatalkan'){ echo 'selected';} ?> name="status" value="Dibatalkan">Dibatalkan</option>
																					</select>
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
