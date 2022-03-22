<link href="<?= base_url('assets/pasien/') ?>time/css/mobiscroll.javascript.min.css" rel="stylesheet"/>
<!-- breadcrumb area start -->
<section class="breadcrumb-area bg_img pb-160" data-background="<?= base_url('assets_pasien/') ?>images/banner/01.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="breadcrumb-content">
					<h2 class="title" style="color: #003242;">Antrian</h2>
					<ul style="color: #003242;">
						<li><a style="color: #003242;" href="<?= base_url('pasien/') ?>">Home</a></li>
						<li>|</li>
						<li>Antrian</li>
					</ul>
					<h1 class="back-title">Antrian</h1>
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
						<h3>Daftar Poli</h3>
						<div class="row">
							<div class="col-md-12">
								<table class="table table-striped">
									<thead>
									<tr>
										<th scope="col">No</th>
										<th scope="col">Nama Poli</th>
									</tr>
									</thead>
									<tbody>
									<?php $no = 1;
										foreach ($poli as $p) : ?>
										<tr>
											<th scope="row"><?= $no++ ?></th>
											<td><?= $p->nama_poli ?></td>
										</tr>
									<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
				</div>
			</div>
			<div class="col-6">
				<div class="your-order mb-30">
					<h3>Isi Data Dibawah Ini</h3>
					<p><span class="required text-danger">*</span> Nomor antrian hanya dapat dibuat dan digunakan pada hari <b><?= longdate_indo(date('Y-m-d')) ?></b></p>
					<div class="mt-30" id="clinic-consultation">
						<?= form_open_multipart('pasien/antrian/tambah_antri', array('method' => 'POST')) ?>
						<div class="col-md-12">
							<div class="checkout-form-list">
								<label>Tanggal <span class="required">*</span></label>
								<input type="date" class="form-control" name="tanggal" disabled value="<?php echo date('Y-m-d'); ?>" />
								<span class="form-text text-danger"><?= form_error('tanggal'); ?></span>
							</div>
						</div>
						<div class="col-md-12">
							<div class="country-select">
								<label>Poli <span class="required">*</span></label>
								<select name="id_poli" id="id_poli" class="form-control">
									<option>Pilih Poli</option>
									<?php foreach ($poli as $data) { ?>
										<option value="<?= $data->id_poli ?>" name="id_poli"><?= $data->nama_poli ?></option>
									<?php } ?>
								</select>
								<span class="form-text text-danger"><?= form_error('id_poli'); ?></span>
							</div>
						</div>
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
