<!-- breadcrumb area start -->
<section class="breadcrumb-area bg_img pb-160" data-background="<?= base_url('assets_pasien/') ?>images/banner/01.jpg">
	<div class="container">
		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
		<?php unset($_SESSION['message']); ?>
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="breadcrumb-content">
					<h2 class="title" style="color: #003242;">Login</h2>
					<ul style="color: #003242;">
						<li><a style="color: #003242;" href="<?= base_url('pasien/') ?>">Home</a></li>
						<li>|</li>
						<li>login</li>
					</ul>
					<h1 class="back-title">login</h1>
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
					<h3 class="text-center mb-60">Login</h3>
					<form action="<?= base_url('pasien/auth/proses_login') ?>" method="POST">
						<label for="name">Username <span>**</span></label>
						<input id="name" type="text" name="username" autofocus value="<?php echo set_value('username') ?>" placeholder="Enter Username..." />
						<span class="form-text text-danger"><?= form_error('username'); ?></span>
						<label for="pass">Password <span>**</span></label>
						<input id="pass" type="password" name="password" placeholder="Enter password..." />
						<div class="login-action mb-20 fix">
							<span class="log-rem f-left">
								<input id="remember" type="checkbox" />
								<label for="remember">Remember me!</label>
							</span>
							<!-- <span class="forgot-login f-right">
								<a href="#">Lost your password?</a>
							</span> -->
						</div>
						<button type="submit" class="site-btn red w-100">Login</button>
						<div class="or-divide"><span>atau</span></div>
						<a style="text-align: center;" class="site-btn w-100" href="<?= base_url('pasien/auth/registrasi') ?>">Daftar Sekarang</a>
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