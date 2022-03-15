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
								<li class="breadcrumb-item active">Pembayaran</li>
							</ol>
						</div>
						<h4 class="page-title">Pembayaran</h4>
					</div>
				</div>
			</div>
			<!-- end page title -->

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">

							<h4 class="header-title mb-2">Pembayaran</h4>

							<table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
								<thead>
								<tr>
									<th>#</th>
									<th>Nama Pasien</th>
									<th>Nominal</th>
									<th>Tanggal Bayar</th>
									<th>Bukti Bayar</th>
									<th>Status</th>
									<th>Aksi</th>
								</tr>
								</thead>

								<tbody>
								<?php
								foreach ($pembayaran as $data) { ?>
									<?php $date =  $data->tgl_pembayaran != null ? longdate_indo($data->tgl_pembayaran) : '' ?>
									<?php $foto =  $data->foto_pembayaran != null ? 'disabled' : '' ?>
									<tr>
										<td><?= $data->id_pembayaran ?></td>
										<td><?= $data->nama_pasien ?></td>
										<td><?= "Rp " . number_format($data->nominal, 2, ",", ".") ?></td>
										<td><?= $date ?></td>
										<td class="text-center">
											<button type="button" class="btn btn-sm btn-outline-info waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#buktiBayar<?= $data->id_pembayaran ?>"><i class="mdi mdi-eye"></i></button>
											<!-- Modal -->
											<div id="buktiBayar<?= $data->id_pembayaran ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h4 class="modal-title" id="standard-modalLabel">Bukti Pembayaran <?= $data->id_pembayaran ?></h4>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<div class="row">
																<div class="col-md-12 mx-auto">
																	<img class="img-thumbnail" src="<?= base_url('uploads/pembayaran/') . $data->foto_pembayaran ?>" alt="">
																</div>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
														</div>
													</div><!-- /.modal-content -->
												</div><!-- /.modal-dialog -->
											</div><!-- /.modal -->
											<!-- End Modal -->
										</td>

										<?php if ($data->status_bayar == "Belum dibayar") { ?>
											<?php if ($data->foto_pembayaran) { ?>
												<td class="text-text-center">
													<span class="badge bg-info text-white"> Dalam Diproses </span>
												</td>
											<?php	} else { ?>
												<td class="text-text-center">
													<span class="badge bg-warning text-white"> Belum Diproses </span>
												</td>
											<?php	} ?>
										<?php	} else { ?>
											<?php if (!$data->tgl_validasi) { ?>
												<td class="text-text-center">
													<span class="badge bg-info text-white"> Dalam Proses </span>
												</td>
											<?php	} else { ?>
												<td class="text-text-center">
													<span class="badge bg-success text-white"> Terbayar </span>
												</td>
											<?php	} ?>
										<?php	} ?>
										<td class="text-center">
											<?php if ($data->status_bayar == "Belum dibayar") { ?>
												<?php if ($data->foto_pembayaran) { ?>
													<button type="button" class="btn btn-xs width-xs btn-warning waves-effect waves-light">
														<span class="btn-label"><i class="mdi mdi-circle-edit-outline"></i></span>Terima
													</button>
												<?php	} else { ?>
													<button type="button" class="btn btn-xs width-xs btn-danger waves-effect waves-light disabled">
														<span class="btn-label"><i class="mdi mdi-alert-circle-outline"></i></span>Belum Diproses
													</button>
												<?php	} ?>
											<?php	} else { ?>
												<?php if ($data->tgl_validasi) { ?>
													<button type="button" class="btn btn-xs width-xs btn-success waves-effect waves-light disabled">
														<span class="btn-label"><i class="mdi mdi-checkbox-marked-circle-outline"></i></span>Diterima
													</button>
												<?php	} else { ?>
													<button type="button" class="btn btn-xs width-xs btn-warning waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#setujuKonsultasi<?= $data->id_konsultasi ?>">
														<span class="btn-label"><i class="mdi mdi-check-circle-outline"></i></span>Setujui
													</button>
													<!-- Modal -->
													<div id="setujuKonsultasi<?= $data->id_konsultasi ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content">
																<form action="<?= base_url('admin/jadwal/setujui_konsultasi/' . $data->id_konsultasi) ?>" method="POST">
																<div class="modal-header">
																	<h4 class="modal-title" id="standard-modalLabel">Setujui Pembayaran</h4>
																	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
																</div>
																<div class="modal-body">
																	<div class="row">
																		<div class="col-md-12 mx-auto">
																			<div class="row">
																				<div class="col-md-12">
																					<div class="form-group">
																						<label for="email">Link Konsultasi</label>
																						<input name="meet" class="form-control text-black" type="text" placeholder="Masukkan link meet">
																						<span class="form-text text-warning">Link akan terkirim ke email pasien </span>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
																	<button type="submit" class="btn btn-primary">Setujui</button>
																</div>
																</form>
															</div><!-- /.modal-content -->
														</div><!-- /.modal-dialog -->
													</div><!-- /.modal -->
														  <!-- End Modal -->
												<?php	} ?>
											<?php	} ?>
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
