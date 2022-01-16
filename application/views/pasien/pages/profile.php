<!-- breadcrumb area start -->
<section class="breadcrumb-area bg_img pb-160" data-background="<?= base_url('assets_pasien/') ?>images/banner/01.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="breadcrumb-content">
					<h2 class="title" style="color: #003242;"><?= $profile->nama_pasien ?></h2>
					<ul style="color: #003242;">
						<li><a style="color: #003242;" href="<?= base_url('pasien/') ?>">Home</a></li>
						<li>|</li>
						<li>Profile</li>
					</ul>
					<h1 class="back-title">Profile</h1>
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
							<?php if ($profile->foto == NULL || $profile->foto == '') { ?>
								<img src="<?= base_url('assets_pasien/') ?>images/others/authore-1.jpeg" alt="">
							<?php } else { ?>
								<img src="<?= base_url('uploads/profile/' . $profile->foto) ?>" alt="">
							<?php	} ?>
							<button type="button" data-toggle="modal" data-target="#updateFoto" class="site-btn mt-10"><i class="fa fa-fw fa-camera"></i>
								<span>Ganti Foto</span></button>
						</div>
						<div class="content">
							<span><i class="fal fa-map-marker-alt"></i> <?= $profile->alamat ?></span>
							<h3 class="title"><?= $profile->nama_pasien ?></h3>
							<ul class="authore-meta">
								<li><i class="fal fa-phone"></i><a href="tel:<?= $profile->no_hp ?>"><?= $profile->no_hp ?></a></li>
								<li><i class="fal fa-envelope"></i><a href="mailto:<?= $profile->email ?>"><?= $profile->email ?></a></li>
							</ul>
						</div>
					</div>
					<div class="doctor-details-content">
						<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
						<?php unset($_SESSION['flash']); ?>
						<div class="flash-validasi" data-flashvalidasi="<?= $this->session->flashdata('validasi'); ?>"></div>
						<?php unset($_SESSION['validasi']); ?>
						<p>
						<form class="form" action="<?= base_url('pasien/profile/update_profile/' . $profile->id_pasien) ?>" method="POST">
							<div class="row">
								<div class="col">
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label>Nama Lengkap</label>
												<input class="form-control" type="text" name="nama_pasien" placeholder="Nama Lengkap" value="<?= $profile->nama_pasien ?>">
												<small class="form-text text-danger"><?= form_error('nama_pasien'); ?></small>
											</div>
										</div>
										<div class="col">
											<div class="form-group">
												<label>Username</label>
												<input class="form-control" type="text" name="username" placeholder="username" value="<?= $profile->username ?>">
												<small class="form-text text-danger"><?= form_error('username'); ?></small>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label>Email</label>
												<input class="form-control" type="text" name="email" placeholder="email" value="<?= $profile->email ?>">
												<small class="form-text text-danger"><?= form_error('email'); ?></small>
											</div>
										</div>
										<div class="col">
											<div class="form-group">
												<label>No HP</label>
												<input class="form-control" type="number" name="no_hp" placeholder="No HP" value="<?= $profile->no_hp ?>">
												<small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label>No Telepon Rumah</label>
												<input class="form-control" type="text" name="no_telepon_rumah" placeholder="No Telepon Rumah" value="<?= $profile->no_telepon_rumah ?>">
												<span class="text-muted">*Jika tidak memiliki no telpon isi dengan -</span>
												<small class="form-text text-danger"><?= form_error('no_telepon_rumah'); ?></small>
											</div>
										</div>
										<div class="col">
											<div class="form-group">
												<label>Jenis Kelamin</label>
												<input type="hidden" name="jenis_kelamin" value="<?php echo $profile->jenis_kelamin ?>">
												<select class="form-control" name="jenis_kelamin">
													<?php if ($profile->jenis_kelamin) { ?>
														<option disabled selected><?php echo $profile->jenis_kelamin ?></option>
													<?php } else { ?>
														<option disabled selected>Jenis Kelamin</option>
													<?php } ?>
													<option value="Laki-laki" <?php echo set_select('jenis_kelamin', 'Laki-laki', (!empty($data) && $data == "Laki-laki" ? TRUE : FALSE)); ?>>Laki-laki</option>
													<option value="Perempuan" <?php echo set_select('jenis_kelamin', 'Perempuan', (!empty($data) && $data == "Perempuan" ? TRUE : FALSE)); ?>>Perempuan</option>
												</select>
												<small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label>Tanggal Lahir</label>
												<input class="form-control" type="date" name="tgl_lahir" value="<?php echo $profile->tgl_lahir ?>">
												<small class="form-text text-danger"><?= form_error('tgl_lahir'); ?></small>
											</div>
										</div>
										<div class="col">
											<div class="form-group">
												<label>No KTP</label>
												<input class="form-control" type="number" name="no_ktp" value="<?= $profile->no_ktp ?>">
												<small class="form-text text-danger"><?= form_error('no_ktp'); ?></small>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-6">
											<div class="form-group">
												<label>Alamat</label>
												<textarea class="form-control" name="alamat" cols="30" rows="5"><?= $profile->alamat ?></textarea>
												<small class="form-text text-danger"><?= form_error('alamat'); ?></small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- <div class="row">
												<div class="col-12 col-sm-6 mb-3">
													<div class="mb-2"><b>Change Password</b></div>
													<div class="row">
														<div class="col">
															<div class="form-group">
																<label>Current Password</label>
																<input class="form-control" type="password" placeholder="••••••">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col">
															<div class="form-group">
																<label>New Password</label>
																<input class="form-control" type="password" placeholder="••••••">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col">
															<div class="form-group">
																<label>Confirm <span class="d-none d-xl-inline">Password</span></label>
																<input class="form-control" type="password" placeholder="••••••">
															</div>
														</div>
													</div>
												</div>
											</div> -->
							<div class="row">
								<div class="col d-flex justify-content-end">
									<button class="site-btn" type="submit"><i class="fa fa-fw fa-cog"></i><span> Simpan Perubahan</span></button>
								</div>
							</div>
						</form>
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-12">
				<div class="sidebar-wrap">
					<div class="award-widget">
						<h4 class="widget-title mb-30">Bergabung</h4>
						<div class="award-boxs">
							<div class="single-award-box">
								<div class="icon">
									<i class="fal fa-handshake"></i>
								</div>
								<h5 class="title"><?= longdate_indo($profile->tgl_buat) ?></h5>
							</div>
						</div>
					</div>
					<!-- <div class="award-widget mt-35">
						<h4 class="widget-title mb-30">No. STR</h4>
						<div class="award-boxs">
							<div class="single-award-box">
								<div class="icon">
									<i class="fal fa-id-card"></i>
								</div>
								<h5 class="title">B</h5>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- doctor details area end -->

<!-- Modal Update Foto-->
<div class="modal fade" id="updateFoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<?= form_open_multipart('pasien/profile/update_foto/' . $profile->id_pasien, array('method' => 'POST')) ?>
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Detail Upload Foto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label>Upload Foto</label>
					<input type="file" name="foto" class="dropify" data-height="200">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				<button type="submit" class="btn btn-primary">Upload Foto</button>
			</div>
			<?= form_close() ?>
		</div>
	</div>
</div>
<!-- END Modal Update Foto-->

<script src="<?= base_url('assets/pasien/') ?>js/jquery-3.5.1.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	const flashData = $('.flash-data').data('flashdata');
	if (flashData) {
		Swal.fire({
			icon: 'success',
			title: 'Data Pasien',
			text: 'Berhasil ' + flashData
		});
	}
</script>
<script>
	const flashValidasi = $('.flash-validasi').data('flashvalidasi');
	if (flashValidasi) {
		Swal.fire({
			icon: 'warning',
			title: 'Data Pasien',
			text: 'Data Pasien Harus  ' + flashValidasi
		});
	}
</script>
<script>
	$('.logOut').on('click', function(e) {
		e.preventDefault();
		const href = $(this).attr('href');
		Swal.fire({
			title: 'Anda yakin ingin keluar?',
			text: "Anda harus login lagi untuk memulai konsultasi!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Ya, keluar!'
		}).then((result) => {
			if (result.isConfirmed) {
				document.location.href = href;
			}
		});
	});
</script>
<script type="text/javascript" src="<?= base_url('assets/pasien/') ?>dropify/js/dropify.min.js"></script>