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
	<div class="modal-dialog modal-dialog-centered modal-full-width" role="document">
		<div class="modal-content">
			<form action="<?= base_url('admin/feed/proses_tambah_feed') ?>" method="POST" enctype="multipart/form-data">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Feed</h5>
					<button type="button" class="btn-close"
							data-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12 mx-auto">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="judul">Judul Feed</label>
										<input id="judul" name="judul" class="form-control text-black" type="text" placeholder="Judul">
										<span class="form-text text-danger"><?= form_error('foto'); ?></span>
									</div>
									<div class="form-group mt-2">
										<label>Isi Feed</label>
										<textarea style="height: 300px;" id="snow-editor" name="isi" class="form-control" placeholder="Isi Feed"></textarea>
										<span class="form-text text-danger"><?= form_error('isi'); ?></span>
									</div>
									<div class="form-group mt-2">
										<label class="form-label">Foto</label>
										<input type="file" name="foto" class="form-control mb-4 dropify">
										<span class="form-text text-danger"><?= form_error('foto'); ?></span>
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
								<li class="breadcrumb-item active">Data Feed</li>
							</ol>
						</div>
						<h4 class="page-title">Data Feed</h4>
					</div>
				</div>
			</div>
			<!-- end page title -->

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">

							<h4 class="header-title">Data Feed</h4>
							<button type="button" class="btn btn-xs width-xs btn-primary waves-effect waves-light mb-2" data-toggle="modal"
									data-target="#exampleModal">
								<span class="btn-label"><i class="mdi mdi-plus-circle-outline"></i></span>Tambah Feed
							</button>
							<table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
								<thead>
								<tr>
									<th>#</th>
									<th>Judul</th>
									<th>Isi dan Foto</th>
									<th>Tanggal</th>
									<th>Aksi</th>
								</tr>
								</thead>


								<tbody>
								<?php $no = 1;
								foreach ($feed as $data) { ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $data->judul ?></td>
										<td>
											<button type="button" class="btn btn-sm btn-outline-info waves-effect waves-light" data-toggle="modal"
													data-target="#detail<?= $data->id_feed ?>">
												<span class="btn-label"><i class="mdi mdi-eye"></i></span>Detail Feed
											</button>

											<!-- Modal -->
											<div class="modal fade" id="detail<?= $data->id_feed ?>" role="dialog" aria-labelledby="detail<?= $data->id_feed ?>" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="exampleModalLabel">Detail Feed</h5>
																<button type="button" class="btn-close"
																		data-dismiss="modal" aria-label="Close"></button>
															</div>
															<div class="modal-body">
																<div class="row">
																	<div class="col-md-12 mx-auto">
																		<div class="row">
																			<div class="col-md-12">
																				<h6>Judul Feed :</h6>
																				<p><?= $data->judul ?></p>
																				<h6>Isi Feed :</h6>
																				<textarea rows="30" cols="60" disabled><?= $data->isi ?></textarea>
																				<h6>Foto Feed :</h6>
																				<img class="img-thumbnail"
																					 src="<?= base_url('uploads/feed/' . $data->foto) ?>"
																					 alt="">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="modal-footer">
																<button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Close</button>
															</div>
													</div>
												</div>
											</div>
											<!--End Modal -->

										</td>
										<td><?= $data->tanggal ?></td>
										<td>
											<a href="<?= base_url('admin/feed/edit_feed/' . $data->id_feed) ?>" class="btn btn-xs width-xs btn-info waves-effect waves-light mb-2">
												<span class="btn-label"><i class="mdi mdi-circle-edit-outline"></i></span>Edit
											</a>
											<a href="<?= base_url('admin/feed/delete_feed/' . $data->id_feed) ?>" onclick="return confirm('Anda yakin, ingin menghapus feed ini?')">
												<button type="button" class="btn btn-xs width-xs btn-danger waves-effect waves-light mb-2">
													<span class="btn-label"><i class="mdi mdi-trash-can-outline"></i></span>Hapus
												</button>
											</a>
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
