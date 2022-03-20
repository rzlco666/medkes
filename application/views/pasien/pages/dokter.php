<!-- breadcrumb area start -->
<section class="breadcrumb-area bg_img pb-160" data-background="<?= base_url('assets_pasien/') ?>images/banner/01.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="breadcrumb-content">
					<h2 class="title" style="color: #003242;">Dokter Kami</h2>
					<ul style="color: #003242;">
						<li><a style="color: #003242;" href="<?= base_url('pasien/') ?>">Home</a></li>
						<li>|</li>
						<li>Dokter Kami</li>
					</ul>
					<h1 class="back-title">Dokter Kami</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- breadcrumb area end -->

<!-- our-expert area start -->
<section class="our-expert-area our-expert-area-2 our-expert-area-3 bg-2 pt-120 pb-90">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 text-center">
				<div class="section-heading mb-50">
					<h2 class="section-title shape">Dokter Kami</h2>
					<p>Dokter kami yang tersedia dengan pengalaman professional dan sertifikasi terbaik.</p>
				</div>
			</div>
		</div>
		<div class="row mt-none-30">
			<?php foreach ($dokter as $data) { ?>
				<div class="col-xl-4 col-lg-6 col-sm-12 mt-30">
					<div class="single-carousel-item">
						<div class="thumb">
							<?php
								if ($data->foto == null) {
									echo '<img style="object-fit: cover; width: 219px; height: 219px;" src="https://citilab.org.pk/wp-content/uploads/2018/07/Doctor-placeholder-male-e1597046960477.jpg" alt="">';
								} else {
									echo '<img style="object-fit: cover; width: 219px; height: 219px;" src="' . base_url('uploads/profile/') . $data->foto . '" alt="">';
								}
							?>
							<span class="icon">
								<img src="<?= base_url('assets_pasien/') ?>images/icons/heart-icon.png" alt="">
							</span>
						</div>
						<div class="content">
							<h4 class="title"><?= $data->nama_dokter ?></h4>
							<span class="sub-title"><?= $data->keahlian ?></span>
						</div>
						<div class="social-links">
							<a href="#0"><i class="fab fa-facebook-f"></i></a>
							<a href="#0"><i class="fab fa-twitter"></i></a>
							<a href="#0"><i class="fab fa-behance"></i></a>
							<a href="#0"><i class="fab fa-youtube"></i></a>
						</div>
						<div class="expert-box-buttons">
							<a href="<?= base_url('pasien/dokter/detail_dokter/' . $data->id_dokter) ?>" class="site-btn white">Detail Dokter</a>
							<span class="comments-btn"><i class="fal fa-user"></i></span>
						</div>
					</div>
				</div>
			<?php	} ?>
		</div>
	</div>
</section>
<!-- our-expert area end -->

<!-- appointment start -->
<section class="appointment-area appointment-area-3 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="appointment-box appointment-box-3 bg-2">
					<div class="row">
						<div class="col-xl-7 col-lg-10">
							<div class="section-heading">
								<h4 class="sub-title">Get A Quote</h4>
								<h2 class="section-title">Make An Appointment <br> Right Now<span>.</span></h2>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 my-auto text-right">
							<a href="<?= base_url('pasien/dokter/') ?>" class="site-btn">Make Appointment</a>
						</div>
					</div>
					<div class="appointment-ilustration">
						<img src="<?= base_url('assets_pasien/') ?>images/about/appointment-1.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- appointment end -->
