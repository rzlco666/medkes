<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Register | Dokter MEDKES</title>
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

	<link href="<?= base_url('assets/admin/') ?>assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>assets/css/forms/theme-checkbox-radio.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>assets/css/forms/switches.css">

</head>

<body class="loading authentication-bg authentication-bg-pattern">

	<div class="account-pages mt-5 mb-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 col-lg-6 col-xl-4">
					<div class="card bg-pattern">

						<div class="card-body p-4">

							<div class="text-center w-75 m-auto">
								<div class="auth-logo">
									<a href="<?= base_url('dokter/') ?>" class="logo logo-dark text-center">
										<span class="logo-lg">
											<img src="<?= base_url('assets_admin/') ?>images/logo-dark_medkes.png" alt="" height="22">
										</span>
									</a>

									<a href="<?= base_url('admin/') ?>" class="logo logo-light text-center">
										<span class="logo-lg">
											<img src="<?= base_url('assets_admin/') ?>images/logo-light_medkes.png" alt="" height="22">
										</span>
									</a>
								</div>
								<p class="text-muted mb-4 mt-3">Masukkan data-data untuk mendaftarkan akun.</p>
							</div>

							<form action="<?= base_url('dokter/auth/proses_registrasi') ?>" method="POST">

								<div class="mb-3">
									<label for="nama_dokter" class="form-label">Nama</label>
									<input class="form-control" type="text" id="nama_dokter" name="nama_dokter" required="" placeholder="Enter your nama">
									<span class="form-text text-danger"><?= form_error('nama_dokter'); ?></span>
								</div>

								<div class="mb-3">
									<label for="username" class="form-label">Username</label>
									<input class="form-control" type="text" id="username" name="username" required="" placeholder="Enter your username">
									<span class="form-text text-danger"><?= form_error('username'); ?></span>
								</div>

								<div class="mb-3">
									<label for="password" class="form-label">Password</label>
									<div class="input-group input-group-merge">
										<input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
										<div class="input-group-text" data-password="false">
											<span class="password-eye"></span>
										</div>
										<span class="form-text text-danger"><?= form_error('password'); ?></span>
									</div>
								</div>

								<div class="mb-3">
									<label for="password2" class="form-label">Ulang Password</label>
									<div class="input-group input-group-merge">
										<input type="password" id="password2" name="password2" class="form-control" placeholder="Ulang password">
										<div class="input-group-text" data-password="false">
											<span class="password-eye"></span>
										</div>
										<span class="form-text text-danger"><?= form_error('password2'); ?></span>
									</div>
								</div>

								<div class="mb-3">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
										<label class="form-check-label" for="checkbox-signin">Remember me</label>
									</div>
								</div>

								<div class="text-center d-grid">
									<button class="btn btn-primary" type="submit"> Register </button>
								</div>

							</form>

							<div class="text-center">
								<h5 class="mt-3 text-muted">Register in with</h5>
								<ul class="social-list list-inline mt-3 mb-0">
									<li class="list-inline-item">
										<a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
									</li>
								</ul>
							</div>

						</div> <!-- end card-body -->
					</div>
					<!-- end card -->

					<div class="row mt-3">
						<div class="col-12 text-center">
							<p class="text-white-50">Sudah Terdaftar? <a href="<?= base_url('dokter/auth/') ?>" class="text-white ms-1"><b>login disini!</b></a></p>
						</div> <!-- end col -->
					</div>
					<!-- end row -->

				</div> <!-- end col -->
			</div>
			<!-- end row -->
		</div>
		<!-- end container -->
	</div>
	<!-- end page -->

	<!-- Vendor js -->
	<script src="<?= base_url('assets_admin/') ?>js/vendor.min.js"></script>

	<!-- App js -->
	<script src="<?= base_url('assets_admin/') ?>js/app.min.js"></script>

	<!-- END GLOBAL MANDATORY SCRIPTS -->
	<script src="<?= base_url('assets/admin/') ?>assets/js/authentication/form-2.js"></script>

</body>

</html>
