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
									<td><?= date_indo($data->tanggal) ?></td>
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
														<h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal</h5>
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
									</td>
									<td>
										<?php switch ($data->status):
											case "Menunggu": ?>
												<span class="badge badge-warning"><?= $data->status ?></span>
											<?php break;
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
											case "Menunggu": ?>
												<?php if ($data->status_bayar == "Terbayar") { ?>
													<a href="javascript:void(0)" data-toggle="modal" data-target="#setujuKonsultasi<?= $data->id_konsultasi ?>" class="btn btn-warning btn-sm">Setujui
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
															<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
															<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
														</svg>
													</a>
													<a href="javascript:void(0)" class="btn btn-info btn-sm" data-toggle="modal" data-target="#lihatPembayaran<?= $data->id_konsultasi ?>">Status
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info">
															<circle cx="12" cy="12" r="10"></circle>
															<line x1="12" y1="16" x2="12" y2="12"></line>
															<line x1="12" y1="8" x2="12.01" y2="8"></line>
														</svg>
													</a>
													<!-- Start Modal Setuju -->
													<div class="modal fade text-left" id="setujuKonsultasi<?= $data->id_konsultasi ?>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<form action="<?= base_url('admin/jadwal/setujui_konsultasi/' . $data->id_konsultasi) ?>" method="POST">
																	<div class="modal-header">
																		<h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal</h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		</button>
																	</div>
																	<div class="modal-body">
																		<div class="row">
																			<div class="col-md-12 mx-auto">
																				<div class="row">
																					<div class="col-md-12">
																						<div class="form-group">
																							<label for="email">Link Konsultasi</label>
																							<input name="meet" class="form-control text-black" type="text" placeholder="Masukkan link meet">
																							<span class="form-text text-warning">Link akan terkirim ke email pasien </span>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="modal-footer">
																		<button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Batal</button>
																		<button type="submit" class="btn btn-primary">Setujui</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
													<!--End Modal Setuju -->
													<!-- Start Modal Lihat Pembayaran -->
													<div class="modal fade text-left" id="lihatPembayaran<?= $data->id_konsultasi ?>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<form action="<?= base_url('dokter/jadwal/proses_tambah_jadwal') ?>" method="POST">
																	<div class="modal-header">
																		<h5 class="modal-title" id="exampleModalLabel">Lihat Pembayaran </h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		</button>
																	</div>
																	<div class="modal-body">
																		<div class="row">
																			<div class="col-md-12 mx-auto">
																				<div class="row">
																					<div class="col-md-12">
																						<label class="mb-4" for="email">Kode Bayar : <?= $data->kode_bayar ?></label>
																						<div class="form-group">
																							<img style="width: 300px; height: 300px;" src="<?= base_url('uploads/pembayaran/') . $data->foto_pembayaran ?>" alt="">
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="modal-footer">
																		<button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Tutup</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
													<!--End Modal Lihat Pembayaran -->
												<?php } else { ?>
													<a href="javascript:void(0)" style="cursor: not-allowed !important;" class="btn btn-warning btn-sm">Setujui
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
															<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
															<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
														</svg>
													</a>
												<?php } ?>
											<?php break;
											case "Disetujui": ?>
												<a href="<?= base_url('admin/jadwal/konsultasi_selesai/' . $data->id_konsultasi) ?>">
													<button class="btn btn-primary btn-sm">Konsultasi Selesai
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
															<polyline points="20 6 9 17 4 12"></polyline>
														</svg>
													</button>
												</a>
											<?php break;
											case "Ubah jadwal": ?>
												<button class="btn btn-warning btn-sm">Dalam Persetujuan
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
												<button class="btn btn-success btn-sm">Info Diagnosa
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info">
														<circle cx="12" cy="12" r="10"></circle>
														<line x1="12" y1="16" x2="12" y2="12"></line>
														<line x1="12" y1="8" x2="12.01" y2="8"></line>
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
		var f4 = flatpickr(document.getElementById('timeFlatpickr'), {
			enableTime: true,
			noCalendar: true,
			dateFormat: "H:i",
			defaultDate: "09:45"
		});
	</script>
	<script>
		var f4 = flatpickr(document.getElementById('timeFlatpickr2'), {
			enableTime: true,
			noCalendar: true,
			dateFormat: "H:i",
			defaultDate: "16:45"
		});
	</script>
