<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="<?= base_url('assets/admin/') ?>assets/css/users/account-setting.css" rel="stylesheet" type="text/css"/>
<link href="<?= base_url('assets/admin/') ?>assets/css/components/custom-modal.css" rel="stylesheet" type="text/css"/>
<link href="<?= base_url('assets/admin/') ?>plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
<link href="<?= base_url('assets/admin/') ?>plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
<!--  END CUSTOM STYLE FILE  -->
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
								<li class="breadcrumb-item active">Edit Diagnosa</li>
							</ol>
						</div>
						<h4 class="page-title">Edit Diagnosa - <?= $id_konsultasi ?></h4>
					</div>
				</div>
			</div>
			<!-- end page title -->

			<!-- Form row -->
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<h4 class="header-title">Edit Diagnosa - <?= $id_konsultasi ?></h4>

							<form class="contact"
								  action="<?= base_url('dokter/diagnosa/proses_edit_diagnosa/' . $id_konsultasi) ?>"
								  method="POST" enctype="multipart/form-data">
								<div class="row mt-3">
									<div class="col-md-6 mb-3">
										<label class="form-label">No Rekam Medis</label>
										<input type="text" name="no_rekam_medis" class="form-control"
											   placeholder="No Rekam Medis" value="<?= $diagnosa->no_rekam_medis ?>">
										<span class="form-text text-danger"
											  style="color: red !important;"><?= form_error('no_rekam_medis'); ?></span>
									</div>
									<div class="col-md-3 mb-3">
										<label class="form-label">Tanggal</label>
										<input id="myDate" name="tanggal"
											   class="form-control flatpickr flatpickr-input active text-black"
											   type="text" placeholder="Pilih Tanggal.."
											   value="<?= $diagnosa->tanggal ?>">
										<span class="form-text text-danger"><?= form_error('tanggal'); ?></span>
									</div>
									<div class="col-md-3 mb-3">
										<label class="form-label">Jam</label>
										<input id="myID" data-enable-time="true" name="jam"
											   class="form-control flatpickr flatpickr-input active text-black"
											   type="text" placeholder="Pilih Jam.." value="<?= $diagnosa->jam ?>">
										<span class="form-text text-danger"><?= form_error('jam'); ?></span>
									</div>
								</div>

								<div class="row">
									<div class="mb-3 col-md-6">
										<label class="form-label">Diagnosa</label>
										<textarea name="diagnosa" class="form-control mb-4" cols="30"
												  rows="8"><?= $diagnosa->diagnosa ?></textarea>
										<span class="form-text text-danger"><?= form_error('diagnosa'); ?></span>
									</div>
									<div class="mb-3 col-md-6">
										<?php if ($diagnosa->foto_pemeriksaan != NULL) : ?>
											<label class="form-label">Foto Pemeriksaan</label>
											<input type="file" name="foto_pemeriksaan" class="form-control mb-4 dropify"
												   data-default-file="<?= base_url('uploads/diagnosa/' . $diagnosa->foto_pemeriksaan) ?>">
											<span class="form-text text-danger"><?= form_error('foto_pemeriksaan'); ?></span>
										<?php else: ?>
										<label class="form-label">Foto Pemeriksaan</label>
										<input type="file" name="foto_pemeriksaan" class="form-control mb-4 dropify">
										<span class="form-text text-danger"><?= form_error('foto_pemeriksaan'); ?></span>
										<?php endif; ?>
									</div>
								</div>

								<button type="submit" class="btn btn-primary waves-effect waves-light">Tambah Diagnosa
								</button>

							</form>

						</div> <!-- end card-body -->
					</div> <!-- end card-->
				</div> <!-- end col -->
			</div>
			<!-- end row -->

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">

							<h4 class="header-title mb-2">Input Resep Obat</h4>
							<button type="button"
									class="btn btn-xs width-xs btn-primary waves-effect waves-light mb-2"
									data-bs-toggle="modal"
									data-bs-target="#resep">
								<span class="btn-label"><i class="mdi mdi-plus-circle-outline"></i></span>Tambah Resep
							</button>

							<!-- Modal -->
							<div id="resep" class="modal fade"
								 tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel"
								 aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<form action="<?= base_url('dokter/diagnosa/proses_tambah_resep/' . $id_konsultasi) ?>" method="POST">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal</h5>
												<button type="button" class="btn-close"
														data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col-md-12 mx-auto">
														<div class="row">
															<div class="col-md-12 mb-2">
																<div class="form-group">
																	<label for="email">Obat</label>
																	<select class="form-control mt-1" name="id_obat">
																		<option disabled selected>Nama Obat</option>
																		<?php foreach ($obat as $data) { ?>
																			<option value="<?= $data->id_obat ?>" <?php echo set_select('id_obat', $data->id_obat, (!empty($data) && $data == $data->id_obat ? TRUE : FALSE)); ?>><?= $data->nama_obat ?></option>
																		<?php } ?>
																	</select>
																	<span class="form-text text-danger"><?= form_error('id_obat'); ?></span>
																</div>
															</div>
															<div class="col-md-12 mb-2">
																<div class="form-group">
																	<label for="email">Cara Pakai</label>
																	<input type="text" name="cara_pakai" class="form-control mt-1">
																	<span class="form-text text-danger"><?= form_error('cara_pakai'); ?></span>
																</div>
															</div>
															<div class="col-md-12 mb-2">
																<div class="form-group">
																	<label for="email">Dosis</label>
																	<input type="text" name="dosis" class="form-control mt-1">
																	<span class="form-text text-danger"><?= form_error('dosis'); ?></span>
																</div>
															</div>
															<div class="col-md-12 mb-2">
																<div class="form-group">
																	<label for="email">No Record</label>
																	<input type="text" name="no_record" class="form-control mt-1">
																	<span class="form-text text-danger"><?= form_error('no_record'); ?></span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-light"
														data-bs-dismiss="modal">Close
												</button>
												<button type="submit" class="btn btn-primary">Tambah</button>
											</div>
										</form>
									</div>
								</div>
							</div><!-- /.modal -->

							<table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
								<thead>
								<tr>
									<th>#</th>
									<th>Nama Obat</th>
									<th>Cara Pakai</th>
									<th>Dosis</th>
									<th>Aksi</th>
								</tr>
								</thead>


								<tbody>
								<?php $no = 1;
								foreach ($konsultasi as $data) { ?>
									<tr>
										<td><?= $no++ ?>.</td>
										<td><?= $data->nama_obat ?></td>
										<td><?= $data->cara_pakai ?></td>
										<td><?= $data->dosis ?></td>
										<td>
												<form action="<?= base_url('dokter/diagnosa/hapus_resep/' . $id_konsultasi) ?>" method="POST">
													<input type="hidden" name="id_obat" value="<?= $data->id_obat ?>">
													<input type="hidden" name="id_resep" value="<?= $data->id_resep ?>">
													<button type="button"
															class="btn btn-xs width-xs btn-danger waves-effect waves-light" onclick="return confirm('Anda yakin ingin menghapus?');">
														<span class="btn-label"><i
																class="mdi mdi-trash-can-outline"></i></span>Hapus Resep
													</button>
												</form>
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
					<script>document.write(new Date().getFullYear())</script> &copy; UBold theme by <a
							href="">Coderthemes</a>
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

<!-- Modal -->
<div class="modal fade" id="resep" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<form action="<?= base_url('dokter/diagnosa/proses_tambah_resep/' . $id_konsultasi) ?>" method="POST">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12 mx-auto">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="email">Obat</label>
										<select class="form-control" name="id_obat">
											<option disabled selected>Nama Obat</option>
											<?php foreach ($obat as $data) { ?>
												<option value="<?= $data->id_obat ?>" <?php echo set_select('id_obat', $data->id_obat, (!empty($data) && $data == $data->id_obat ? TRUE : FALSE)); ?>><?= $data->nama_obat ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="email">Cara Pakai</label>
										<input type="text" name="cara_pakai" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="email">Dosis</label>
										<input type="text" name="dosis" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="email">No Record</label>
										<input type="text" name="no_record" class="form-control">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-primary">Tambah</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- end modal -->

<script src="<?= base_url('assets/admin/') ?>plugins/flatpickr/flatpickr.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/flatpickr/custom-flatpickr.js"></script>

<script>
	flatpickr("#myDate", {
		enableTime: true,
		dateFormat: "Y-m-d",
		defaultDate: "today",
		clickOpens: false
	});
</script>
<script>
	flatpickr("#myID", {
		enableTime: true,
		noCalendar: true,
		dateFormat: "H:i",
		defaultDate: new Date(),
		clickOpens: false
	});
</script>
