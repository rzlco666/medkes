<!--  BEGIN CUSTOM STYLE FILE  -->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>plugins/dropify/dropify.min.css">
<link href="<?= base_url('assets/admin/') ?>assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/admin/') ?>assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/admin/') ?>plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
<link href="<?= base_url('assets/admin/') ?>plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>plugins/table/datatable/datatables.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>plugins/table/datatable/dt-global_style.css">
<!--  END CUSTOM STYLE FILE  -->
<style>
	.flatpickr-calendar.open {
		display: inline-block;
		z-index: 1900;
	}
</style>
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
										<span class="form-text text-danger"><?= form_error('id_obat'); ?></span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="email">Cara Pakai</label>
										<input type="text" name="cara_pakai" class="form-control">
										<span class="form-text text-danger"><?= form_error('cara_pakai'); ?></span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="email">Dosis</label>
										<input type="text" name="dosis" class="form-control">
										<span class="form-text text-danger"><?= form_error('dosis'); ?></span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="email">No Record</label>
										<input type="text" name="no_record" class="form-control">
										<span class="form-text text-danger"><?= form_error('no_record'); ?></span>
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
<!--End Modal -->
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
	<div class="layout-px-spacing">

		<div class="account-settings-container layout-top-spacing">

			<div class="account-content">
				<div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
					<!-- Start Diagnosa -->
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
							<form class="section contact" action="<?= base_url('dokter/diagnosa/proses_edit_diagnosa/' . $id_konsultasi) ?>" method="POST" enctype="multipart/form-data">
								<div class="info">
									<h5 class="">Edit Diagnosa</h5>
									<div class="row">
										<div class="col-md-11 mx-auto">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>No Rekam Medis</label>
														<input type="text" name="no_rekam_medis" class="form-control mb-4" placeholder="No rekam medis" value="<?= $diagnosa->no_rekam_medis ?>">
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Tanggal</label>
														<input id="myDate" name="tanggal" class="form-control flatpickr flatpickr-input active text-black" type="text" placeholder="Pilih Tanggal.." value="<?= $diagnosa->tanggal ?>">
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Jam</label>
														<input id="myID" data-enable-time="true" name="jam" class="form-control flatpickr flatpickr-input active text-black" type="text" placeholder="Pilih Jam.." value="<?= $diagnosa->jam ?>">
													</div>
												</div>

											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Diagnosa</label>
														<textarea name="diagnosa" class="form-control mb-4" cols="30" rows="6"><?= $diagnosa->diagnosa ?></textarea>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Foto Pemeriksaan</label>
														<input type="file" name="foto_pemeriksaan" class="form-control mb-4 dropify">
													</div>
												</div>
												<?php if ($diagnosa->foto_pemeriksaan != NULL) : ?>
													<div class="col-md-4">
														<div class="form-group">
															<label>Foto Pemeriksaan</label>
															<input type="file" disabled class="mb-4 dropify" data-default-file="<?= base_url('uploads/diagnosa/' . $diagnosa->foto_pemeriksaan) ?>">
															<!-- <img src="<?= base_url('uploads/diagnosa/' . $diagnosa->foto_pemeriksaan) ?>" class="img-fluid rounded"> -->
														</div>
													</div>
												<?php endif; ?>
											</div>
											<button class="btn btn-primary mb-2">Edit Diagnosa</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- End Diagnosa -->
					<!-- Start Obat -->
					<!-- End Obat -->
					<div class="row layout-top-spacing">
						<div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
							<div class="section contact">
								<div class="info">
									<h5 class="">Input Resep Obat</h5>
									<div class="row">
										<div class="col-md-11 mx-auto">
											<button class="btn btn-primary mb-2" data-toggle="modal" data-target="#resep">Tambah Resep</button>
											<table id="default-ordering" class="table table-hover">
												<thead>
													<tr>
														<th>No.</th>
														<th>Nama Obat</th>
														<th>Cara Pakai</th>
														<th>Dosis</th>
														<th class="dt-no-sorting text-center">Aksi</th>
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
																<center>
																	<form action="<?= base_url('dokter/diagnosa/hapus_resep/' . $id_konsultasi) ?>" method="POST">
																		<input type="hidden" name="id_obat" value="<?= $data->id_obat ?>">
																		<input type="hidden" name="id_resep" value="<?= $data->id_resep ?>">
																		<button class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus?');">Hapus Resep
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
																				<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
																				<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
																			</svg>
																		</button>
																	</form>
																</center>
															</td>
														</tr>
													<?php } ?>
												</tbody>
												<tfoot>
													<tr>
														<th>No.</th>
														<th>Nama Obat</th>
														<th>Cara Pakai</th>
														<th>Dosis</th>
														<th class="invisible"></th>
													</tr>
												</tfoot>
											</table>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?= base_url('assets/admin/') ?>plugins/flatpickr/flatpickr.js"></script>
	<script src="<?= base_url('assets/admin/') ?>plugins/flatpickr/custom-flatpickr.js"></script>

	<script>
		flatpickr("#myDate", {
			enableTime: true,
			dateFormat: "Y-m-d",
			clickOpens: false
		});
	</script>
	<script>
		flatpickr("#myID", {
			enableTime: true,
			noCalendar: true,
			dateFormat: "H:i",
			clickOpens: false
		});
	</script>
