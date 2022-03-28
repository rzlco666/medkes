<!-- breadcrumb area start -->
<section class="breadcrumb-area bg_img pb-160" data-background="<?= base_url('assets_pasien/') ?>images/banner/01.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="breadcrumb-content">
					<h2 class="title" style="color: #003242;">Riwayat Jadwal Antrian</h2>
					<ul style="color: #003242;">
						<li><a style="color: #003242;" href="<?= base_url('pasien/') ?>">Home</a></li>
						<li>|</li>
						<li>Riwayat Jadwal Antrian</li>
					</ul>
					<h1 class="back-title">Riwayat Jadwal Antrian</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- breadcrumb area end -->

<!-- Cart Area Strat-->
<section class="cart-area pt-120 pb-120">
	<div class="container">
		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('validasiDiagnosa'); ?>"></div>
		<?php unset($_SESSION['validasiDiagnosa']); ?>

		<div class="row">
			<div class="col-12">
				<div class="table-content table-responsive">
					<table class="table">
						<thead>
						<tr>
							<th class="cart-product-name">ID Antrian</th>
							<th class="cart-product-name">Poli</th>
							<th class="cart-product-name">Tanggal</th>
							<th class="product-price">Status</th>
							<th class="product-quantity">Aksi</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($antrian as $data) : ?>
							<tr>
								<td class="product-name"><?= $data->id_antrian ?></td>
								<td class="product-name"><?= $data->nama_poli ?></td>
								<td class="product-name">
									<h6 class="m-0">
										<i class="bi bi-calendar-event"></i>
										<b><?= longdate_indo($data->tanggal) ?></b>
									</h6>
								</td>
								<td class="product-price">
									<?php switch ($data->status):
										case "Menunggu": ?>
											<span class="btn btn-warning btn-sm disabled text-white">Menunggu</span>
											<?php break;
										case "Disetujui": ?>
											<span class="btn btn-primary btn-sm disabled text-white">Disetujui</span>
											<?php break;
										case "Diproses": ?>
											<span class="btn btn-warning btn-sm disabled text-white">Diproses</span>
											<?php break;
										case "Dibatalkan": ?>
											<span class="btn btn-danger btn-sm disabled text-white">Dibatalkan</span>
											<?php break;
										case "Selesai": ?>
											<span class="btn btn-success btn-sm disabled text-white">Selesai</span>
											<?php break;
									endswitch; ?>
								</td>
								<td class="product-quantity">
									<?php switch ($data->status):
										case "Menunggu": ?>
											<a href="<?= base_url('pasien/antrian/cetak_nomor/' . $data->id_antrian) ?>"
											   target="_blank" class="text-info">Cetak No Antrian</a>
											<?php break;
										case "Disetujui": ?>
											<a href="<?= base_url('pasien/antrian/cetak_nomor/' . $data->id_antrian) ?>"
											   target="_blank" class="text-info">Cetak No Antrian</a>
											<?php break;
										case "Diproses": ?>
											<span class="btn btn-warning btn-sm disabled text-white">Diproses</span>
											<?php break;
										case "Dibatalkan": ?>
											<span class="btn btn-danger btn-sm disabled text-white">Dibatalkan</span>
											<?php break;
										case "Selesai": ?>
											<span class="btn btn-success btn-sm disabled text-white">Selesai</span>
											<?php break;
									endswitch; ?>
								</td>
							</tr>
						<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Cart Area End-->
