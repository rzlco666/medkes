<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>plugins/table/datatable/datatables.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>plugins/table/datatable/dt-global_style.css">
<link href="<?= base_url('assets/admin/') ?>assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/admin/') ?>plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
<link href="<?= base_url('assets/admin/') ?>plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">

<style>
	.flatpickr-calendar.open {
		display: inline-block;
		z-index: 1900;
	}
</style>

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
	<div class="layout-px-spacing">

		<div class="row layout-top-spacing">

			<div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
				<div class="widget-content widget-content-area br-6">
					<table id="default-ordering" class="table table-hover" style="width:100%">
						<thead>
							<tr>
								<th>Id Konsultasi</th>
								<th>Nama Pasien</th>
								<th>Tanggal</th>
								<th>Jam</th>
								<th>Keluhan</th>
								<th class="text-center">Foto Keluhan</th>
								<th>Status</th>
								<th class="dt-no-sorting text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($konsultasi as $data) { ?>
								<tr>
									<td><?= $data->id_konsultasi ?></td>
									<td><?= $data->nama_pasien ?></td>
									<td><?= longdate_indo($data->tanggal) ?></td>
									<td><?= $data->jam ?> WIB</td>
									<td><?= $data->keluhan ?></td>
									<td class="text-center">
										<a href="javascript:void(0);" data-toggle="modal" data-target="#fotoKeluhan<?= $data->id_konsultasi ?>">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye text-primary">
												<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
												<circle cx="12" cy="12" r="3"></circle>
											</svg>
										</a>
										<!-- Modal -->
										<div class="modal fade" id="fotoKeluhan<?= $data->id_konsultasi ?>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Foto Keluhan</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														</button>
													</div>
													<div class="modal-body">
														<div class="row">
															<div class="col-md-12 mx-auto">
																<img class="img-thumbnail" src="<?= base_url('uploads/keluhan/' . $data->foto_keluhan) ?>" alt="">
															</div>
														</div>
													</div>
													<div class="modal-footer">
														<button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Tutup</button>
													</div>
												</div>
											</div>
										</div>
										<!--End Modal -->
									</td>
									<td>
										<?php switch ($data->status):
											case "Disetujui": ?>
												<span class="badge badge-primary"><?= $data->status ?></span>
											<?php break;
											case "Ubah jadwal": ?>
												<span class="badge badge-warning"><?= $data->status ?></span>
											<?php break;
											case "Dibatalkan": ?>
												<span class="badge badge-danger"><?= $data->status ?></span>
											<?php break;
											case "Selesai": ?>
												<span class="badge badge-success"><?= $data->status ?></span>
										<?php break;
										endswitch; ?>
									</td>
									<td class="text-center">
										<?php switch ($data->status):
											case "Disetujui": ?>
												<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#detailKonsultasi<?= $data->id_konsultasi ?>">Link Konsultasi
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link">
														<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
														<path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
													</svg>
												</button>

												<!-- Modal Lihat Link-->
												<div class="modal fade" id="detailKonsultasi<?= $data->id_konsultasi ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="exampleModalLongTitle">Detail Konsultasi</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<div class="container">
																	<div class="card border-5 pt-2 active pb-0 px-3">
																		<div class="card-body">
																			<div class="row">
																				<div class="col-12">
																					<h4 class="card-title "><b>Id Konsultasi : <?= $data->id_konsultasi ?></b></h4>
																				</div>
																				<div class="col">
																					<h6 class="card-subtitle mb-2 text-muted">
																						<p class="card-text text-muted small mt-2"><span class="vl mr-2 ml-0"></span> <?= longdate_indo($data->tanggal) ?> <br>Jam <?= $data->jam ?> WIB <br><a href="<?= $data->meet ?>" target="_blank"><?= $data->meet ?></a></p>
																					</h6>
																				</div>
																			</div>
																		</div>
																		<div class="card-footer bg-white px-0 ">
																			<div class="row">
																				<div class="col-md-auto">
																					<a href="<?= $data->meet ?>" target="_blank" class="btn-outlined btn-black text-muted text-center">
																						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#007bff" class="bi bi-link" viewBox="0 0 16 16">
																							<path d="M6.354 5.5H4a3 3 0 0 0 0 6h3a3 3 0 0 0 2.83-4H9c-.086 0-.17.01-.25.031A2 2 0 0 1 7 10.5H4a2 2 0 1 1 0-4h1.535c.218-.376.495-.714.82-1z" />
																							<path d="M9 5.5a3 3 0 0 0-2.83 4h1.098A2 2 0 0 1 9 6.5h3a2 2 0 1 1 0 4h-1.535a4.02 4.02 0 0 1-.82 1H12a3 3 0 1 0 0-6H9z" />
																						</svg>
																						<small class="text-primary font-weight-light h6 mt-1">Link untuk Konsultasi</small>
																					</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<form action="<?= base_url('dokter/jadwal/proses_reschedule_jadwal/' . $data->id_konsultasi) ?>" method="POST">
																	<div class="container mt-3">
																		<div class="card border-5 pt-2 active pb-0 px-3">
																			<div class="card-body">
																				<div class="row">
																					<div class="col-md-12 mx-auto">
																						<h5 class="modal-title mb-3" id="exampleModalLabel">Reschedule Jadwal</h5>
																						<div class="row">
																							<div class="col-md-6">
																								<div class="form-group">
																									<label for="website1">Tanggal Reschedule</label>
																									<input id="myDate" name="tanggal_reschedule" class="form-control flatpickr flatpickr-input active text-black" type="text" placeholder="Pilih Tanggal..">
																								</div>
																							</div>
																							<div class="col-md-6">
																								<div class="form-group">
																									<label for="website2">Jam Reschedule</label>
																									<input id="myID" data-enable-time="true" name="jam_reschedule" class="form-control flatpickr flatpickr-input active text-black" type="text" placeholder="Pilih Jam..">
																								</div>
																							</div>
																							<button class="btn btn-warning mb-3 ml-3">Reschedule</button>
																							<span class="text-warning">* Abaikan apabila jadwal tidak direschedule</span>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</form>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
																<a href="<?= base_url('dokter/jadwal/konsultasi_selesai/' . $data->id_konsultasi) ?>">
																	<button type="button" class="btn btn-secondary">Selesai Konsultasi</button>
																</a>
															</div>
														</div>
													</div>
												</div>
												<!-- END Modal Lihat Link-->
											<?php break;
											case "Ubah jadwal": ?>
												<button style="cursor: not-allowed !important;" class="btn btn-warning btn-sm">Dalam Persetujuan
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
														<circle cx="12" cy="12" r="10"></circle>
														<polyline points="12 6 12 12 16 14"></polyline>
													</svg>
												</button>
											<?php break;
											case "Dibatalkan": ?>
												<button class="btn btn-danger btn-sm">Dibatalkan
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
														<circle cx="12" cy="12" r="10"></circle>
														<line x1="15" y1="9" x2="9" y2="15"></line>
														<line x1="9" y1="9" x2="15" y2="15"></line>
													</svg>
												</button>
											<?php break;
											case "Selesai": ?>
												<button disabled class="btn btn-success btn-sm">Konsultasi Selesai
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
														<polyline points="20 6 9 17 4 12"></polyline>
													</svg>
												</button>
										<?php break;
										endswitch; ?>
									</td>
								</tr>
							<?php	} ?>

						</tbody>
						<tfoot>
							<tr>
								<th>Id Konsultasi</th>
								<th>Nama Pasien</th>
								<th>Tanggal</th>
								<th>Jam</th>
								<th>Keluhan</th>
								<th class="text-center">Foto Keluhan</th>
								<th>Status</th>
								<th class="invisible"></th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>

		</div>

	</div>
	<script src="<?= base_url('assets/admin/') ?>plugins/flatpickr/flatpickr.js"></script>
	<script src="<?= base_url('assets/admin/') ?>plugins/flatpickr/custom-flatpickr.js"></script>

	<script>
		flatpickr("#myDate", {
			enableTime: true,
			dateFormat: "Y-m-d",
		});
	</script>
	<script>
		flatpickr("#myID", {
			enableTime: true,
			noCalendar: true,
			dateFormat: "H:i",
			defaultDate: "09:45"
		});
	</script>
