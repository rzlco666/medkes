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
							<form class="section contact" action="<?= base_url('dokter/diagnosa/proses_tambah_diagnosa/' . $id_konsultasi) ?>" method="POST" enctype="multipart/form-data">
								<div class="info">
									<h5 class="">Input Diagnosa</h5>
									<div class="row">
										<div class="col-md-11 mx-auto">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>No Rekam Medis</label>
														<input type="text" name="no_rekam_medis" class="form-control" placeholder="No rekam medis" value="<?= set_value('no_rekam_medis') ?>">
														<span class="form-text text-danger" style="color: red !important;"><?= form_error('no_rekam_medis'); ?></span>
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Tanggal</label>
														<input id="myDate" name="tanggal" class="form-control flatpickr flatpickr-input active text-black" type="text" placeholder="Pilih Tanggal.." value="<?= set_value('tanggal') ?>">
														<span class="form-text text-danger"><?= form_error('tanggal'); ?></span>
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Jam</label>
														<input id="myID" data-enable-time="true" name="jam" class="form-control flatpickr flatpickr-input active text-black" type="text" placeholder="Pilih Jam.." value="<?= set_value('jam') ?>">
														<span class="form-text text-danger"><?= form_error('jam'); ?></span>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Diagnosa</label>
														<textarea name="diagnosa" class="form-control mb-4" cols="30" rows="8"><?= set_value('diagnosa') ?></textarea>
														<span class="form-text text-danger"><?= form_error('diagnosa'); ?></span>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Foto Pemeriksaan</label>
														<input type="file" name="foto_pemeriksaan" class="form-control mb-4 dropify">
														<span class="form-text text-danger"><?= form_error('foto_pemeriksaan'); ?></span>
													</div>
												</div>
											</div>
											<button class="btn btn-primary mb-2">Tambah Diagnosa</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- End Diagnosa -->
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
