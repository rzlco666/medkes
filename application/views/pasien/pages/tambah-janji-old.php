<link href="<?= base_url('assets/pasien/') ?>time/css/mobiscroll.javascript.min.css" rel="stylesheet" />

<!-- Content -->
<div class="main-content account-content">
	<div class="content">
		<div class="container">
			<div class="account-box">
				<div class="appointment">
					<h3>Isi Data Dibawah Ini</h3>
					<p>Data dibawah ini nantinya akan diarahkan untuk berkonsultasi dengan salah satu dokter kami yaitu, <?= $dokter->nama_dokter ?>.</p>
					<div class="tab-content">
						<div class="tab-pane active" id="clinic-consultation">
							<?= form_open_multipart('pasien/konsultasi/tambah_janji', array('method' => 'POST')) ?>
							<div class="form-group">
								<label>Tanggal <span class="text-red">*</span>
								</label>
								<select name="tanggal" id="tangl" class="form-control">
									<option>Pilih Tanggal</option>
									<?php foreach ($jadwal as $data) { ?>
										<option value="<?= $data->tanggal ?>" data-id="<?= $data->jam_mulai . "," . $data->jam_berakhir ?>"><?= longdate_indo($data->tanggal) ?></option>
									<?php	} ?>
								</select>
								<span class="form-text text-danger"><?= form_error('tanggal'); ?></span>
							</div>
							<div class="form-group">
								<label>Jam Konsultasi <span class="text-red">*</span>
								</label>
								<input id="demo-24h" name="jam" class="form-control" data-label-style="stacked" placeholder="Pilih Waktu..." />
								<span class="form-text text-danger"><?= form_error('jam'); ?></span>
							</div>
							<div class="form-group">
								<label>Keluhan</label>
								<textarea name="keluhan" class="form-control"></textarea>
								<span class="form-text text-danger"><?= form_error('keluhan'); ?></span>
							</div>
							<div class="form-group">
								<label>Foto Keluhan</label>
								<input type="file" name="foto_keluhan" class="dropify" data-height="200">
								<span class="form-text text-danger"><?= form_error('foto_keluhan'); ?></span>
							</div>
							<input type="hidden" name="id_dokter" class="form-control" value="<?= $dokter->id_dokter ?>">
							<input type="hidden" name="nominal" class="form-control" value="<?= $dokter->harga ?>">
							<div class="form-group text-center m-b-0">
								<input type="submit" class="btn btn-primary account-btn" value="Submit">
							</div>
							<?= form_close() ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Content /-->
<script src="<?= base_url('assets/pasien/') ?>js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/pasien/') ?>dropify/js/dropify.min.js"></script>


<script src="<?= base_url('assets/pasien/') ?>time/js/mobiscroll.javascript.min.js"></script>
<script type="text/javascript">
	$("#tangl").on('change', function() {
		var jam_mulai = $(this).find(':selected').data('id')
		const myArr = jam_mulai.split(",");
		mobiscroll.datepicker('#demo-24h', {
			themeVariant: 'light',
			controls: ['time'],
			timeFormat: 'HH:mm',
			touchUi: true,
			min: myArr[0],
			max: myArr[1]
		});
	})
</script>
