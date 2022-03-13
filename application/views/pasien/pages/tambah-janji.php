<link href="<?= base_url('assets/pasien/') ?>time/css/mobiscroll.javascript.min.css" rel="stylesheet"/>
<!-- breadcrumb area start -->
<section class="breadcrumb-area bg_img pb-160" data-background="<?= base_url('assets_pasien/') ?>images/banner/01.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="breadcrumb-content">
					<h2 class="title" style="color: #003242;"><?= $dokter->nama_dokter ?></h2>
					<ul style="color: #003242;">
						<li><a style="color: #003242;" href="<?= base_url('pasien/') ?>">Home</a></li>
						<li>|</li>
						<li>Konsultasi</li>
					</ul>
					<h1 class="back-title">Konsultasi</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- breadcrumb area end -->

<!-- checkout-area start -->
<section class="checkout-area pt-120 pb-120">
	<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="checkbox-form">
						<?php if (!$jadwal) { ?>
							<h3>Tidak Ada Jadwal Yang Tersedia</h3>
						<?php } else { ?>
							<h3>Jadwal Yang Tersedia</h3>
							<div class="row">
								<div class="col-md-12">
									<table class="table table-striped">
										<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Tanggal</th>
											<th scope="col">Jam Mulai</th>
											<th scope="col">Jam Selesai</th>
										</tr>
										</thead>
										<tbody>
										<?php $no = 1;
										foreach ($jadwal as $row) { ?>
											<tr>
												<th scope="row"><?= $no++ ?></th>
												<td><?= longdate_indo($row->tanggal) ?></td>
												<td><?= $row->jam_mulai ?></td>
												<td><?= $row->jam_berakhir ?></td>
											</tr>
										<?php } ?>

										</tbody>
									</table>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="your-order mb-30 ">
						<h3>Isi Data Dibawah Ini</h3>
						<p>Data dibawah ini nantinya akan diarahkan untuk berkonsultasi
							dengan <?= $dokter->nama_dokter ?>.</p>
						<div class="mt-30" id="clinic-consultation">
							<?= form_open_multipart('pasien/konsultasi/tambah_janji', array('method' => 'POST')) ?>
							<div class="col-md-12">
								<div class="country-select">
									<label>Tanggal <span class="required">*</span></label>
									<select name="tanggal" id="tangl" class="form-control">
										<option>Pilih Tanggal</option>
										<?php foreach ($jadwal as $data) { ?>
											<option value="<?= $data->tanggal ?>"
													data-id="<?= $data->jam_mulai . "," . $data->jam_berakhir ?>"><?= longdate_indo($data->tanggal) ?></option>
										<?php } ?>
									</select>
									<span class="form-text text-danger"><?= form_error('tanggal'); ?></span>
								</div>
							</div>
							<div class="col-md-12">
								<div class="checkout-form-list">
									<label>Jam Konsultasi <span class="required">*</span></label>
									<input id="demo-24h" name="jam" class="form-control" data-label-style="stacked"
										   placeholder="Pilih Waktu..."/>
									<span class="form-text text-danger"><?= form_error('jam'); ?></span>
								</div>
							</div>
							<div class="col-md-12">
								<div class="checkout-form-list">
									<label>Keluhan</label>
									<textarea name="keluhan" class="form-control"></textarea>
									<span class="form-text text-danger"><?= form_error('keluhan'); ?></span>
								</div>
							</div>
							<div class="col-md-12">
								<div class="checkout-form-list">
									<label>Foto Keluhan</label>
									<input type="file" name="foto_keluhan" class="dropify">
									<span class="form-text text-danger"><?= form_error('foto_keluhan'); ?></span>
								</div>
							</div>
							<input type="hidden" name="id_dokter" class="form-control"
								   value="<?= $dokter->id_dokter ?>">
							<input type="hidden" name="nominal" class="form-control" value="<?= $dokter->harga ?>">
						</div>
						<div class="order-button-payment mt-20">
							<button type="submit" class="site-btn">Booking Konsultasi</button>
						</div>
						<?= form_close() ?>
					</div>
				</div>
	</div>
</section>
<!-- checkout-area end -->
