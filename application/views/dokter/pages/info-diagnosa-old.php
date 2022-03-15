<!--  BEGIN CUSTOM STYLE FILE  -->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>plugins/dropify/dropify.min.css">
<link href="<?= base_url('assets/admin/') ?>assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/admin/') ?>assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>plugins/table/datatable/datatables.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>plugins/table/datatable/dt-global_style.css">
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
	<div class="layout-px-spacing">

		<div class="account-settings-container layout-top-spacing">

			<div class="account-content">
				<div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
					<!-- Start Diagnosa -->
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
							<form class="section contact">
								<div class="info">
									<h5 class="">Info Diagnosa</h5>
									<div class="row">
										<div class="col-md-11 mx-auto">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>No Rekam Medis</label>
														<input type="text" disabled name="no_rekam_medis" class="form-control mb-4" placeholder="No rekam medis" value="<?= $diagnosa->no_rekam_medis ?>">
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Tanggal</label>
														<input id="myDate" disabled name="tanggal" class="form-control flatpickr flatpickr-input active text-black" type="text" placeholder="Pilih Tanggal.." value="<?= $diagnosa->tanggal ?>">
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Jam</label>
														<input id="myID" disabled data-enable-time="true" name="jam" class="form-control flatpickr flatpickr-input active text-black" type="text" placeholder="Pilih Jam.." value="<?= $diagnosa->jam ?>">
													</div>
												</div>

											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Diagnosa</label>
														<textarea name="diagnosa" disabled class="form-control mb-4" cols="30" rows="8"><?= $diagnosa->diagnosa ?></textarea>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Foto Pemeriksaan</label>
														<input type="file" disabled class="mb-4 dropify" data-default-file="<?= base_url('uploads/diagnosa/' . $diagnosa->foto_pemeriksaan) ?>">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- End Diagnosa -->
					<!-- Start Obat -->
					<!-- End Obat -->
					<div class="row layout-top-spacing">
						<div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
							<div class="section contact">
								<div class="info">
									<h5 class="">Data Resep Obat</h5>
									<div class="row">
										<div class="col-md-11 mx-auto">
											<table id="default-ordering" class="table table-hover">
												<thead>
													<tr>
														<th>No.</th>
														<th>Nama Obat</th>
														<th>Cara Pakai</th>
														<th>Dosis</th>
													</tr>
												</thead>
												<tbody>
													<?php $no = 1;
													foreach ($konsultasi as $data) { ?>
														<tr>
															<td><?= $no++ ?>.</td>
															<td><?= $data->nama_obat ?></td>
															<td><?= $data->cara_pakai ?></td>
															<td><?= $data->dosis ?></td>

														</tr>
													<?php } ?>
												</tbody>
												<tfoot>
													<tr>
														<th>No.</th>
														<th>Nama Obat</th>
														<th>Cara Pakai</th>
														<th>Dosis</th>
													</tr>
												</tfoot>
											</table>
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
