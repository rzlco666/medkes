<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8" />
	<title>Admin MEDKES</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
	<meta content="Coderthemes" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- App favicon -->
	<link rel="shortcut icon" href="<?= base_url('assets_pasien/') ?>images/logo/favicon_medkes.png">

	<!-- App css -->
	<link href="<?= base_url('assets_admin/') ?>css/config/default/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
	<link href="<?= base_url('assets_admin/') ?>css/config/default/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

	<link href="<?= base_url('assets_admin/') ?>css/config/default/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
	<link href="<?= base_url('assets_admin/') ?>css/config/default/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

	<!-- icons -->
	<link href="<?= base_url('assets_admin/') ?>css/icons.min.css" rel="stylesheet" type="text/css" />

	<link href="<?= base_url('assets/admin/') ?>plugins/animate/animate.css" rel="stylesheet" type="text/css" />
	<script src="<?= base_url('assets/admin/') ?>plugins/sweetalerts/promise-polyfill.js"></script>
	<link href="<?= base_url('assets/admin/') ?>plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/admin/') ?>plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/admin/') ?>assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>plugins/dropify/dropify.min.css">

</head>

<!-- body start -->

<body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

	<!-- Begin page -->
	<div id="wrapper">

		<!-- Topbar Start -->
		<div class="navbar-custom">
			<div class="container-fluid">
				<ul class="list-unstyled topnav-menu float-end mb-0">

					<li class="d-none d-lg-block">
						<form class="app-search">
							<div class="app-search-box dropdown">
								<div class="input-group">
									<input type="search" class="form-control" placeholder="Search..." id="top-search">
									<button class="btn input-group-text" type="submit">
										<i class="fe-search"></i>
									</button>
								</div>
								<div class="dropdown-menu dropdown-lg" id="search-dropdown">
									<!-- item-->
									<div class="dropdown-header noti-title">
										<h5 class="text-overflow mb-2">Found 22 results</h5>
									</div>
								</div>
							</div>
						</form>
					</li>

					<li class="dropdown d-inline-block d-lg-none">
						<a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							<i class="fe-search noti-icon"></i>
						</a>
						<div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
							<form class="p-3">
								<input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
							</form>
						</div>
					</li>

					<li class="dropdown d-none d-lg-inline-block">
						<a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
							<i class="fe-maximize noti-icon"></i>
						</a>
					</li>

					<li class="dropdown d-none d-lg-inline-block topbar-dropdown">
						<a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							<i class="fe-grid noti-icon"></i>
						</a>
						<div class="dropdown-menu dropdown-lg dropdown-menu-end">

							<div class="p-lg-1">
								<div class="row g-0">
									<div class="col">
										<a class="dropdown-icon-item" href="#">
											<img src="<?= base_url('assets_admin/') ?>images/brands/slack.png" alt="slack">
											<span>Slack</span>
										</a>
									</div>
									<div class="col">
										<a class="dropdown-icon-item" href="#">
											<img src="<?= base_url('assets_admin/') ?>images/brands/github.png" alt="Github">
											<span>GitHub</span>
										</a>
									</div>
									<div class="col">
										<a class="dropdown-icon-item" href="#">
											<img src="<?= base_url('assets_admin/') ?>images/brands/dribbble.png" alt="dribbble">
											<span>Dribbble</span>
										</a>
									</div>
								</div>

								<div class="row g-0">
									<div class="col">
										<a class="dropdown-icon-item" href="#">
											<img src="<?= base_url('assets_admin/') ?>images/brands/bitbucket.png" alt="bitbucket">
											<span>Bitbucket</span>
										</a>
									</div>
									<div class="col">
										<a class="dropdown-icon-item" href="#">
											<img src="<?= base_url('assets_admin/') ?>images/brands/dropbox.png" alt="dropbox">
											<span>Dropbox</span>
										</a>
									</div>
									<div class="col">
										<a class="dropdown-icon-item" href="#">
											<img src="<?= base_url('assets_admin/') ?>images/brands/g-suite.png" alt="G Suite">
											<span>G Suite</span>
										</a>
									</div>

								</div>
							</div>

						</div>
					</li>

					<li class="dropdown notification-list topbar-dropdown">
						<a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							<i class="fe-bell noti-icon"></i>
							<span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
						</a>
						<div class="dropdown-menu dropdown-menu-end dropdown-lg">

							<!-- item-->
							<div class="dropdown-item noti-title">
								<h5 class="m-0">
									<span class="float-end">
										<a href="" class="text-dark">
											<small>Clear All</small>
										</a>
									</span>Notification
								</h5>
							</div>

							<div class="noti-scroll" data-simplebar>

								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item notify-item active">
									<div class="notify-icon">
										<img src="<?= base_url('assets_admin/') ?>images/users/user-1.jpg" class="img-fluid rounded-circle" alt="" />
									</div>
									<p class="notify-details">Cristina Pride</p>
									<p class="text-muted mb-0 user-msg">
										<small>Hi, How are you? What about our next meeting</small>
									</p>
								</a>
							</div>

							<!-- All-->
							<a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
								View all
								<i class="fe-arrow-right"></i>
							</a>

						</div>
					</li>

					<li class="dropdown notification-list topbar-dropdown">
						<a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							<?php if ($this->session->foto == NULL || $this->session->foto == '') { ?>
								<img src="<?= base_url('assets_admin/') ?>images/users/user-1.jpg" alt="user-image" class="rounded-circle">
							<?php	} else { ?>
								<img src="<?= base_url('uploads/profile/' . $this->session->foto) ?>" alt="user-image" class="rounded-circle">
							<?php	} ?>
							<span class="pro-user-name ms-1">
								<?= $this->session->nama_admin; ?> <i class="mdi mdi-chevron-down"></i>
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-end profile-dropdown ">
							<!-- item-->
							<div class="dropdown-header noti-title">
								<h6 class="text-overflow m-0">Welcome !</h6>
							</div>

							<!-- item-->
							<a href="javascript:void(0);" class="dropdown-item notify-item">
								<i class="fe-user"></i>
								<span>My Account</span>
							</a>

							<!-- item-->
							<a href="javascript:void(0);" class="dropdown-item notify-item">
								<i class="fe-settings"></i>
								<span>Settings</span>
							</a>

							<div class="dropdown-divider"></div>

							<!-- item-->
							<a href="<?= base_url('admin/auth/logout') ?>" class="dropdown-item notify-item">
								<i class="fe-log-out"></i>
								<span>Logout</span>
							</a>

						</div>
					</li>

					<li class="dropdown notification-list">
						<a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
							<i class="fe-settings noti-icon"></i>
						</a>
					</li>

				</ul>

				<!-- LOGO -->
				<div class="logo-box">
					<a href="<?= base_url('admin') ?>" class="logo logo-dark text-center">
						<span class="logo-sm">
							<img src="<?= base_url('assets_admin/') ?>images/logo-sm_medkes.png" alt="" height="22">
							<!-- <span class="logo-lg-text-light">UBold</span> -->
						</span>
						<span class="logo-lg">
							<img src="<?= base_url('assets_admin/') ?>images/logo-dark_medkes.png" alt="" height="20">
							<!-- <span class="logo-lg-text-light">U</span> -->
						</span>
					</a>

					<a href="<?= base_url('admin') ?>" class="logo logo-light text-center">
						<span class="logo-sm">
							<img src="<?= base_url('assets_admin/') ?>images/logo-sm_medkes.png" alt="" height="22">
						</span>
						<span class="logo-lg">
							<img src="<?= base_url('assets_admin/') ?>images/logo-light_medkes.png" alt="" height="20">
						</span>
					</a>
				</div>

				<ul class="list-unstyled topnav-menu topnav-menu-left m-0">
					<li>
						<button class="button-menu-mobile waves-effect waves-light">
							<i class="fe-menu"></i>
						</button>
					</li>

					<li>
						<!-- Mobile menu toggle (Horizontal Layout)-->
						<a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
							<div class="lines">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</a>
						<!-- End mobile menu toggle-->
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- end Topbar -->

		<!-- ========== Left Sidebar Start ========== -->
		<div class="left-side-menu">

			<div class="h-100" data-simplebar>

				<!-- User box -->
				<div class="user-box text-center">
					<img src="<?= base_url('assets_admin/') ?>images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
					<div class="dropdown">
						<a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown"><?= $this->session->nama_admin; ?></a>
						<div class="dropdown-menu user-pro-dropdown">

							<!-- item-->
							<a href="javascript:void(0);" class="dropdown-item notify-item">
								<i class="fe-user me-1"></i>
								<span>My Account</span>
							</a>

							<!-- item-->
							<a href="javascript:void(0);" class="dropdown-item notify-item">
								<i class="fe-settings me-1"></i>
								<span>Settings</span>
							</a>

							<!-- item-->
							<a href="<?= base_url('admin/auth/logout') ?>" class="dropdown-item notify-item">
								<i class="fe-log-out me-1"></i>
								<span>Logout</span>
							</a>

						</div>
					</div>
					<p class="text-muted">Admin Head</p>
				</div>

				<!--- Sidemenu -->
				<div id="sidebar-menu">

					<ul id="side-menu">

						<li class="menu-title">Navigation</li>

						<li>
							<a href="<?= base_url('admin') ?>">
								<i data-feather="airplay"></i>
								<span> Dashboards </span>
							</a>
						</li>

						<li class="menu-title mt-2">Apps</li>

						<li>
							<a href="<?= base_url('admin/kelola/daftar_pasien') ?>">
								<i data-feather="list"></i>
								<span> Daftar Pasien </span>
							</a>
						</li>

						<li>
							<a href="<?= base_url('admin/jadwal') ?>">
								<i data-feather="calendar"></i>
								<span> Jadwal </span>
							</a>
						</li>

						<li>
							<a href="<?= base_url('admin/jadwal/konsultasi') ?>">
								<i data-feather="message-square"></i>
								<span> Konsultasi </span>
							</a>
						</li>

						<li>
							<a href="<?= base_url('admin/kelola/pasien') ?>">
								<i data-feather="list"></i>
								<span> Kelola Pasien </span>
							</a>
						</li>

						<li>
							<a href="<?= base_url('admin/kelola/dokter') ?>">
								<i data-feather="user"></i>
								<span> Kelola Dokter </span>
							</a>
						</li>

					</ul>

				</div>
				<!-- End Sidebar -->

				<div class="clearfix"></div>

			</div>
			<!-- Sidebar -left -->

		</div>
		<!-- Left Sidebar End -->