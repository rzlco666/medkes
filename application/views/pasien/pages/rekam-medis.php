<!-- breadcrumb area start -->
<section class="breadcrumb-area bg_img pb-160" data-background="<?= base_url('assets_pasien/') ?>images/banner/01.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="breadcrumb-content">
					<h2 class="title" style="color: #003242;">Rekam Medis <?= $idkonsultasi ?></h2>
					<ul style="color: #003242;">
						<li><a style="color: #003242;" href="<?= base_url('pasien/') ?>">Home</a></li>
						<li>|</li>
						<li>Rekam Medis</li>
					</ul>
					<h1 class="back-title">Rekam Medis</h1>
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
						<h3>Resep Obat</h3>
						<div class="row">
							<div class="col-md-12">
								<table class="table table-striped">
									<thead>
									<tr>
										<th scope="col">No</th>
										<th scope="col">Nama Obat</th>
										<th scope="col">Cara Pakai</th>
										<th scope="col">Dosis</th>
									</tr>
									</thead>
									<tbody>
									<?php $no = 1; ?>
									<?php foreach ($resep as $data) { ?>
										<tr>
											<th scope="row"><?= $no++ ?></th>
											<td><?= $data->nama_obat ?></td>
											<td><?= $data->cara_pakai ?></td>
											<td><?= $data->dosis ?></td>
										</tr>
									<?php	} ?>
									</tbody>
								</table>
								<a class="site-btn" target="_blank" href="<?= base_url('pasien/konsultasi/cetak_resep/' . $idkonsultasi) ?>">Cetak Resep Obat</a>
							</div>
						</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="your-order mb-30 ">
					<h3>Rekam Medis</h3>
					<div class="mt-30" id="clinic-consultation">
						<?= form_open_multipart('pasien/konsultasi/tambah_janji', array('method' => 'POST')) ?>
						<div class="col-md-12">
							<div class="checkout-form-list">
								<label>No Rekam Medis</label>
								<input type="text" readonly value="<?= $diagnosa->no_rekam_medis ?>">
							</div>
						</div>
						<div class="col-md-12">
							<div class="checkout-form-list">
								<label>Tanggal</label>
								<input type="text" readonly value="<?= longdate_indo($diagnosa->tanggal) ?> : <?= $diagnosa->jam ?>">
							</div>
						</div>
						<div class="col-md-12">
							<div class="checkout-form-list">
								<label>Diagnosa Penyakit</label>
								<textarea name="keluhan" class="form-control" disabled><?= $diagnosa->diagnosa ?></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="checkout-form-list">
								<label>Foto Pemeriksaan</label>
								<a href="javascript:void(0)" data-toggle="modal" data-target="#foto<?= $idkonsultasi ?>">
									<h4 class="text-info">Lihat</h4>
								</a>
							</div>
						</div>
					</div>
					<div class="order-button-payment mt-20">
						<a class="site-btn" href="<?= base_url('pasien/konsultasi/download_diagnosa/' . $diagnosa->no_record) ?>">Download Foto</a>
					</div>
				</div>
			</div>
		</div>
</section>
<!-- checkout-area end -->

<!-- Modal Foto -->
<div class="modal fade" id="foto<?= $idkonsultasi ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Foto Pemeriksaan &mdash; <?= $idkonsultasi ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-group text-left">
					<img class="img-fluid rounded mb-4 mb-lg-0" src="<?= base_url('uploads/diagnosa/' . $diagnosa->foto_pemeriksaan) ?>" alt="..." />
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>
<!-- END Modal Cancel -->
