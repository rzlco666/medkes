<!-- breadcrumb area start -->
<section class="breadcrumb-area bg_img pb-160" data-background="<?= base_url('assets_pasien/') ?>images/banner/01.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="breadcrumb-content">
					<h2 class="title" style="color: #003242;">Registrasi</h2>
					<ul style="color: #003242;">
						<li><a style="color: #003242;" href="<?= base_url('pasien/') ?>">Home</a></li>
						<li>|</li>
						<li>Registrasi</li>
					</ul>
					<h1 class="back-title">registrasi</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- breadcrumb area end -->

<!-- login Area Strat-->
<section class="login-area pt-100 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<div class="basic-login">
					<h3 class="text-center mb-60">Registrasi</h3>
					<form action="<?= base_url('pasien/auth/proses_registrasi') ?>" method="POST">
						<label for="nama_pasien">Nama Pasien <span>**</span></label>
						<input id="nama_pasien" type="text" name="nama_pasien" value="<?php echo set_value('nama_pasien') ?>" placeholder="Enter Nama Pasien..." />
						<span class="form-text text-danger"><?= form_error('nama_pasien'); ?></span>

						<label for="email">Email Pasien <span>**</span></label>
						<input id="email" type="email" name="email" value="<?php echo set_value('email') ?>" placeholder="Enter Email Pasien..." />
						<span class="form-text text-danger"><?= form_error('email'); ?></span>

						<label for="username">Username Pasien <span>**</span></label>
						<input id="username" type="text" name="username" value="<?php echo set_value('username') ?>" placeholder="Enter Username Pasien..." />
						<span class="form-text text-danger"><?= form_error('username'); ?></span>

						<label for="pass">Password <span>**</span></label>
						<input id="pass" type="password" name="password" placeholder="Enter password..." />
						<span class="form-text text-danger"><?= form_error('password'); ?></span>

						<label for="password2">Ketik Ulang Password <span>**</span></label>
						<input id="password2" type="password" name="password2" placeholder="Ketik Ulang Password..." />
						<span class="form-text text-danger"><?= form_error('password2'); ?></span>

						<div class="login-action mb-20 fix">
							<!-- <span class="log-rem f-left">
								<input id="remember" type="checkbox" />
								<label for="remember">Remember me!</label>
							</span> -->
							<!-- <span class="forgot-login f-right">
								<a href="#">Lost your password?</a>
							</span> -->
						</div>
						<button type="submit" class="site-btn red w-100">Buat Akun</button>
						<div class="or-divide"><span>atau</span></div>
						<a style="text-align: center;" class="site-btn w-100" href="<?= base_url('pasien/auth/') ?>">Login Sekarang</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- login Area End-->

<script src="<?= base_url('assets/pasien/') ?>js/jquery-3.5.1.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	const flashData = $('.flash-data').data('flashdata');
	console.log(flashData);
	if (flashData) {
		Swal.fire({
			icon: 'error',
			title: 'Error!',
			text: flashData
		});
	}
</script>