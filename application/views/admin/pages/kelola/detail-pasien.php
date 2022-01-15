<!--  BEGIN CUSTOM STYLE FILE  -->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>plugins/dropify/dropify.min.css">
<link href="<?= base_url('assets/admin/') ?>assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />


<!--  END CUSTOM STYLE FILE  -->

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
	<div class="layout-px-spacing">

		<div class="account-settings-container layout-top-spacing">

			<div class="account-content">
				<div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
							<div class="section general-info">
								<div class="info">
									<h6 class="">Informasi Pasien</h6>
									<div class="row">
										<div class="col-lg-11 mx-auto">
											<div class="row">
												<div class="col-xl-2 col-lg-12 col-md-4">
													<div class="upload mt-4 pr-md-4">
														<input type="file" disabled id="input-file-max-fs" class="dropify" data-default-file="<?= base_url('uploads/profile/' . $profile->foto) ?>" data-max-file-size="2M" />
													</div>
												</div>

												<div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
													<div class="form">
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="fullName">Nama Lengkap</label>
																	<input type="text" readonly class="form-control mb-4" value="<?= $profile->nama_pasien ?>">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="profession">Username</label>
																	<input type="text" readonly class="form-control mb-4" value="<?= $profile->username ?>">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="profession">No Hp</label>
																	<input type="text" readonly class="form-control mb-4" placeholder="Nomer Telepon" value="<?= $profile->no_hp ?>">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="profession">Email</label>
																	<input type="text" readonly class="form-control mb-4" placeholder="Email" value="<?= $profile->email ?>">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="profession">No Telepon Rumah</label>
																	<input type="text" readonly class="form-control mb-4" placeholder="Nomer Telepon" value="<?= $profile->no_telepon_rumah ?>">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="profession">Jenis Kelamin</label>
																	<input type="text" readonly class="form-control mb-4" placeholder="Email" value="<?= $profile->jenis_kelamin ?>">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="profession">Tanggal Lahir</label>
																	<input type="text" readonly class="form-control mb-4" placeholder="Harga" value="<?= $profile->tgl_lahir ?>">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="profession">No KTP</label>
																	<input type="text" readonly class="form-control mb-4" placeholder="Pengalaman Kerja" value="<?= $profile->no_ktp ?>">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="profession">Alamat</label>
																	<input type="text" readonly class="form-control mb-4" placeholder="Keahlian" value="<?= $profile->alamat ?>">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

	</div>
