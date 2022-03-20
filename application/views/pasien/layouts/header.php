<!doctype html>
<html class="no-js" lang="zxx">

<head>

	<!--========= Required meta tags =========-->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--====== Title ======-->
	<title>MEDKES &mdash; <?= $title; ?></title>

	<!--====== Favicon ======-->
	<link rel="shortcut icon" href="<?= base_url('assets_pasien/') ?>images/logo/favicon_medkes.png" type="images/x-icon" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

	<!--====== CSS Here ======-->
	<link rel="stylesheet" href="<?= base_url('assets_pasien/') ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets_pasien/') ?>css/animate.min.css">
	<link rel="stylesheet" href="<?= base_url('assets_pasien/') ?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url('assets_pasien/') ?>css/lightcase.css">
	<link rel="stylesheet" href="<?= base_url('assets_pasien/') ?>css/meanmenu.css">
	<link rel="stylesheet" href="<?= base_url('assets_pasien/') ?>css/nice-select.css">
	<link rel="stylesheet" href="<?= base_url('assets_pasien/') ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('assets_pasien/') ?>css/datepicker.min.css">
	<link rel="stylesheet" href="<?= base_url('assets_pasien/') ?>css/jquery-ui.min.css">
	<link rel="stylesheet" href="<?= base_url('assets_pasien/') ?>css/default.css">
	<link rel="stylesheet" href="<?= base_url('assets_pasien/') ?>css/style.css">
	<link rel="stylesheet" href="<?= base_url('assets_pasien/') ?>css/responsive.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/pasien/') ?>dropify/css/dropify.min.css ">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

</head>

<body>

	<!-- preloader  -->
	<div id="preloader">
		<div id="ctn-preloader" class="ctn-preloader">
			<div class="animation-preloader">
				<div class="spinner"></div>
				<div class="txt-loading">
					<span data-text-preloader="M" class="letters-loading">
						M
					</span>
					<span data-text-preloader="E" class="letters-loading">
						E
					</span>
					<span data-text-preloader="D" class="letters-loading">
						D
					</span>
					<span data-text-preloader="K" class="letters-loading">
						K
					</span>
					<span data-text-preloader="E" class="letters-loading">
						E
					</span>
					<span data-text-preloader="S" class="letters-loading">
						S
					</span>
				</div>
			</div>
			<div class="loader">
				<div class="row">
					<div class="col-3 loader-section section-left">
						<div class="bg"></div>
					</div>
					<div class="col-3 loader-section section-left">
						<div class="bg"></div>
					</div>
					<div class="col-3 loader-section section-right">
						<div class="bg"></div>
					</div>
					<div class="col-3 loader-section section-right">
						<div class="bg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- preloader end -->

	<!-- header start -->
	<header id="sticky-header" class="site-header">
		<div class="container custom-header">
			<div class="row align-items-center">
				<div class="col-xl-3 col-lg-3">
					<a href="<?= base_url('pasien/') ?>" class="site-logo">
						<img src="<?= base_url('assets_pasien/') ?>images/logo/logo_medkes2.png" alt="">
					</a>
					<div class="mobile-menu"></div>
				</div>
				<div class="col-xl-6 col-lg-9 my-auto">
					<div class="mainmenu">
						<nav id="mobile-menu">
							<ul>

								<?php if ($this->session->id_pasien) { ?>
									<li><a href="<?= base_url('pasien/') ?>">Home</a>
									</li>
									<li><a href="<?= base_url('pasien/konsultasi/jadwal') ?>">Riwayat</a>
									</li>
									<li><a href="<?= base_url('pasien/dokter') ?>">Dokter</a>
									</li>
									<li><a href="<?= base_url('pasien/dokter') ?>">Buat Janji</a>
									</li>

									<li><a href="#0">Hai, <?= $this->session->userdata('nama_pasien') ?> +</a>
										<ul class="sub-menu">
											<li><a href="<?= base_url('pasien/profile') ?>">Profile</a></li>
											<li><a href="<?= base_url('pasien/auth/logout') ?>">Logout</a></li>
										</ul>
									</li>
								<?php	} else { ?>
									<li><a href="<?= base_url('pasien/') ?>">Home</a>
									</li>
									<li><a href="<?= base_url('pasien/dokter') ?>">Dokter</a>
									</li>
									<li><a href="<?= base_url('pasien/dokter') ?>">Buat Janji</a>
									</li>

									<li><a href="#0">Akun +</a>
										<ul class="sub-menu">
											<li><a href="<?= base_url('pasien/auth/') ?>">Login</a></li>
											<li><a href="<?= base_url('pasien/auth/registrasi') ?>">Daftar</a></li>
										</ul>
									</li>
								<?php	} ?>

							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- header end -->
