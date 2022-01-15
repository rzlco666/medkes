<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
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

<div class="container mt-4">
	<div class="row flex-lg-nowrap">
		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
		<?php unset($_SESSION['flash']); ?>
		<div class="flash-validasi" data-flashvalidasi="<?= $this->session->flashdata('validasi'); ?>"></div>
		<?php unset($_SESSION['validasi']); ?>
		<div class="col">
			<div class="row">
				<div class="col mb-3">
					<div class="card">
						<div class="card-body">
							<div class="e-profile">
								<div class="row">
									<div class="col-12 col-sm-auto mb-3">
										<div class="mx-auto" style="width: 140px;">
											<div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
												<?php if ($profile->foto == NULL || $profile->foto == '') { ?>
													<span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
												<?php } else { ?>
													<img src="<?= base_url('uploads/profile/' . $profile->foto) ?>" class="img-fluid rounded" alt="">
												<?php	} ?>
											</div>
										</div>
									</div>
									<div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
										<div class="text-center text-sm-left mb-2 mb-sm-0">
											<h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"><?= $profile->nama_pasien ?></h4>
											<p class="mb-0"><?= $profile->email ?></p>
											<div class="text-muted"><small>Pasien</small></div>
											<div class="mt-2">
												<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#updateFoto">
													<i class="fa fa-fw fa-camera"></i>
													<span>Ganti Foto</span>
												</button>
											</div>
										</div>
									</div>
								</div>
								<ul class="nav nav-tabs">
									<li class="nav-item"><a href="" class="active nav-link">Pengaturan</a></li>
								</ul>
								<div class="tab-content pt-3">
									<div class="tab-pane active">
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
													<button class="btn btn-primary" type="submit">Simpan Perubahan</button>
												</div>
											</div>
										</form>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-3 mb-3">
					<div class="card mb-3">
						<div class="card-body">
							<div class="px-xl-3">
								<a href="<?= base_url('pasien/auth/logout') ?>" class="btn btn-block btn-secondary logOut">
									<i class="fa fa-sign-out"></i>
									<span>Logout</span>
								</a>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<h6 class="card-title font-weight-bold">Layanan</h6>
							<p class="card-text">Hubungi layanan kami media kesehatan.</p>
							<button type="button" class="btn btn-primary">Hubungi Kami</button>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

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
