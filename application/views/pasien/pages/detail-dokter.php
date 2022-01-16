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
						<li>Detail Dokter</li>
					</ul>
					<h1 class="back-title">Detail Dokter</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- breadcrumb area end -->

<!-- doctor details area start -->
<section class="doctor-details-area pt-120 pb-120">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 col-lg-12">
				<div class="doctor-details-wrap">
					<div class="authore-box">
						<div class="thumb">
							<img src="<?= base_url('uploads/profile/' . $dokter->foto) ?>" alt="">
						</div>
						<div class="content">
							<span><i class="fal fa-map-marker-alt"></i> <?= $dokter->alamat ?></span>
							<h3 class="title"><?= $dokter->nama_dokter ?></h3>
							<ul class="authore-meta">
								<li><i class="fal fa-envelope"></i><a href="mailto:<?= $dokter->email ?>"><?= $dokter->email ?></a></li>
							</ul>
						</div>
					</div>
					<div class="doctor-details-content">
						<p><?php if (!$jadwal) { ?>
						<div class="education-widget">
							<h3 class="sub-title">Tidak Ada Jadwal Yang Tersedia</h3>
						</div>
					<?php	} else { ?>
						<div class="education-widget">
							<h3 class="sub-title">Jadwal Yang Tersedia</h3>
							<div class="experience-box">
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
										<?php	} ?>

									</tbody>
								</table>
							</div>
						</div>
					<?php	} ?></p>
					</div>
				</div>
				<div class="doctor-contact-form">
					<h4 class="sub-title"><i class="fal fa-comments"></i> Let’s Talk</h4>
					<h2 class="title">Buat Janji Sekarang!</h2>
					<?php if (!$jadwal) { ?>
						<button disabled class="site-btn">Buat Janji</button>
					<?php	} else { ?>
						<a class="site-btn" href="<?= base_url('pasien/konsultasi/index/' . $dokter->id_dokter) ?>">Buat Janji</a>
					<?php	} ?>
				</div>
			</div>
			<div class="col-xl-4 col-lg-12">
				<div class="sidebar-wrap">
					<div class="award-widget">
						<h4 class="widget-title mb-30">Pengalaman</h4>
						<div class="award-boxs">
							<div class="single-award-box">
								<div class="icon">
									<i class="fal fa-award"></i>
								</div>
								<h5 class="title"><?= $dokter->pengalaman_kerja ?></h5>
							</div>
						</div>
					</div>
					<div class="award-widget mt-35">
						<h4 class="widget-title mb-30">No. STR</h4>
						<div class="award-boxs">
							<div class="single-award-box">
								<div class="icon">
									<i class="fal fa-id-card"></i>
								</div>
								<h5 class="title"><?= $dokter->STR ?></h5>
							</div>
						</div>
					</div>
					<div class="award-widget mt-35">
						<h4 class="widget-title mb-30">Spesialisasi</h4>
						<div class="award-boxs">
							<div class="single-award-box">
								<div class="icon">
									<i class="fal fa-user-md"></i>
								</div>
								<h5 class="title"><?= $dokter->keahlian ?></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- doctor details area end -->