<!-- breadcrumb area start -->
<section class="breadcrumb-area bg_img pb-160" data-background="<?= base_url('assets_pasien/') ?>images/banner/01.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="breadcrumb-content">
					<h2 class="title" style="color: #003242;">Riwayat Jadwal Konsultasi</h2>
					<ul style="color: #003242;">
						<li><a style="color: #003242;" href="<?= base_url('pasien/') ?>">Home</a></li>
						<li>|</li>
						<li>Riwayat Jadwal Konsultasi</li>
					</ul>
					<h1 class="back-title">Riwayat Jadwal Konsultasi</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- breadcrumb area end -->

<!-- Cart Area Strat-->
<section class="cart-area pt-120 pb-120">
	<div class="container">
		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('validasiDiagnosa'); ?>"></div>
		<?php unset($_SESSION['validasiDiagnosa']); ?>

		<div class="row">
			<div class="col-12">
					<div class="table-content table-responsive">
						<table class="table">
							<thead>
							<tr>
								<th class="cart-product-name">ID Konsultasi</th>
								<th class="product-thumbnail">Konsultasi Dengan</th>
								<th class="cart-product-name">Jadwal</th>
								<th class="product-price">Status</th>
								<th class="product-quantity">Aksi</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($konsultasi as $data) : ?>
							<tr>
								<td class="product-name"><?= $data->id_konsultasi ?></td>
								<td class="product-thumbnail">
									<table style="border-style: hidden;">
										<tr>
											<td><img style="max-width: 50px;" src="<?= base_url('assets/pasien/') ?>img/doctor-06.jpg" alt="..."></td>
											<td>
												<h6 class=" m-0"><?= $data->nama_dokter ?></h6>
												<p class="text-secondary"><?= $data->keahlian ?></p>
											</td>
										</tr>
									</table>
								</td>
								<td class="product-name">
									<h6 class="m-0">
										<i class="bi bi-calendar-event"></i>
										<b><?= longdate_indo($data->tanggal) ?></b>
									</h6>
									<p class="text-secondary"><?= $data->jam ?> WIB</p>
								</td>
								<td class="product-price">
									<?php switch ($data->status):
										case "Menunggu": ?>
											<span class="btn btn-warning btn-sm disabled text-white">Menunggu</span>
											<?php break;
										case "Disetujui": ?>
											<span class="btn btn-primary btn-sm disabled text-white">Disetujui</span>
											<?php break;
										case "Ubah jadwal": ?>
											<span class="btn btn-warning btn-sm disabled text-white">Ubah Jadwal</span>
											<?php break;
										case "Dibatalkan": ?>
											<span class="btn btn-danger btn-sm disabled text-white">Dibatalkan</span>
											<?php break;
										case "Selesai": ?>
											<span class="btn btn-success btn-sm disabled text-white">Selesai</span>
											<?php break;
									endswitch; ?>
								</td>
								<td class="product-quantity">
									<?php switch ($data->status):
										case "Menunggu": ?>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter<?= $data->kode_bayar ?>">
												<h6 class="text-warning">Bayar Sekarang <i class="bi bi-caret-right-fill"></i></h6>
											</a>
											<!-- Modal Bayar Sekarang-->
											<div class="modal fade" id="exampleModalCenter<?= $data->kode_bayar ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<?= form_open_multipart('pasien/konsultasi/bayar_konsultasi', array('method' => 'POST')) ?>
														<input type="hidden" name="id_pembayaran" value="<?= $data->id_pembayaran ?>">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLongTitle">Detail Pembayaran</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<div class="form-group text-left">
																<label>Harga Pembayaran</label>
																<input type="text" value="<?= "Rp " . number_format($data->nominal, 2, ",", ".") ?>" class="form-control" readonly>
															</div>
															<div class="form-group text-left">
																<label>Kode Pembayaran</label>
																<input type="text" value="<?= $data->kode_bayar ?>" class="form-control" readonly>
															</div>
															<div class="form-group">
																<label>Upload File Bukti Pembayaran</label>
																<?php if ($data->foto_pembayaran != NULL) { ?>
																	<img style="width: 300px; height: 300px;" src="<?= base_url('uploads/pembayaran/') . $data->foto_pembayaran ?>" alt="">
																<?php	} else { ?>
																	<input type="file" name="foto_pembayaran" class="dropify" data-height="200">
																<?php	} ?>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
															<?php if ($data->foto_pembayaran == NULL) { ?>
																<button type="submit" class="btn btn-primary">Bayar Sekarang</button>
															<?php	}  ?>
														</div>
														<?= form_close() ?>
													</div>
												</div>
											</div>
											<!-- END Modal Bayar Sekarang-->
											<?php break;
										case "Disetujui": ?>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#detailKonsultasi<?= $data->id_konsultasi ?>">
												<h6 class="text-primary">Link Konsultasi <i class="bi bi-caret-right-fill"></i></h6>
											</a>
											<a href="<?= base_url('pasien/konsultasi/cetak_invoice/' . $data->id_konsultasi) ?>" class="text-info">Lihat Invoice</a>
											<!-- Modal Link Konsultasi -->
											<div class="modal fade" id="detailKonsultasi<?= $data->id_konsultasi ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<?= form_open_multipart('pasien/konsultasi/bayar_konsultasi', array('method' => 'POST')) ?>
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLongTitle">Detail Konsultasi</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<div class="container">
																<div class="card border-5 pt-2 active pb-0 px-3">
																	<div class="card-body ">
																		<div class="row">
																			<div class="col-12 ">
																				<h4 class="card-title"><b>Id Konsultasi : <?= $data->id_konsultasi ?></b></h4>
																			</div>
																			<div class="col">
																				<h6 class="card-subtitle mb-2 text-muted">
																					<p class="card-text text-muted small mt-2"><span class="vl mr-2 ml-0"></span> <?= longdate_indo($data->tanggal) ?> <br>Jam <?= $data->jam ?> WIB</p>
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
														</div>
														<div class=" modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
														</div>
														<?= form_close() ?>
													</div>
												</div>
											</div>
											<!-- END Modal Link Konsultasi -->
											<?php break;
										case "Ubah jadwal": ?>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#ubahJadwal<?= $data->id_konsultasi ?>">
												<h6 class="text-warning">Ubah Jadwal <i class="bi bi-caret-right-fill"></i></h6>
											</a>
											<!-- Modal Ubah Jadwal -->
											<div class="modal fade" id="ubahJadwal<?= $data->id_konsultasi ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<input type="hidden" name="id_konsultasi" value="<?= $data->id_konsultasi ?>">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLongTitle">Detail Konsultasi</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<div class="container">
																<div class="card border-5 pt-2 active pb-0 px-3">
																	<div class="card-body ">
																		<div class="row">
																			<div class="col-12 ">
																				<h4 class="card-title"><b>Id Konsultasi : <?= $data->id_konsultasi ?></b></h4>
																				<p class="text-muted">Dikarenakan dokter berhalangan hadir untuk waktu yang telah ditentukan sebelumnya, dokter mengajukan untuk ubah jadwal pada tanggal :</p>
																			</div>
																			<div class="col">
																				<h6 class="card-subtitle mb-2 text-muted">
																					<p class="card-text small mt-2 font-weight-bold"><span class="vl mr-2 ml-0"></span> <?= longdate_indo($data->tgl_reschedule) ?> <br><br>Jam <?= $data->jam_reschedule ?> WIB</p>
																				</h6>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="modal-footer">
															<a href="<?= base_url('pasien/konsultasi/ubah_jadwal_cancel/' . $data->id_konsultasi) ?>">
																<button type="button" class="btn btn-danger">Tidak Setuju</button>
															</a>
															<a href="<?= base_url('pasien/konsultasi/ubah_jadwal_setuju/' . $data->id_konsultasi) ?>">
																<button type="submit" class="btn btn-primary">Setuju</button>
															</a>
														</div>
													</div>
												</div>
											</div>
											<!-- END Modal Ubah Jadwal -->
											<?php break;
										case "Dibatalkan": ?>
											<a href="">
												<h6 class="text-danger">Dibatalkan <i class="bi bi-x-circle-fill"></i></i></h6>
											</a>
											<?php break;
										case "Selesai": ?>
											<a href="<?= base_url('pasien/konsultasi/diagnosa/' . $data->id_konsultasi) ?>">
												<h6 class="text-success">Hasil Diagnosa <i class="bi bi-caret-right-fill"></i></h6>
											</a>
											<a href="<?= base_url('pasien/konsultasi/cetak_invoice/' . $data->id_konsultasi) ?>" class="text-info">Lihat Invoice</a>
											<?php break;
									endswitch; ?>
								</td>
							</tr>
							<?php endforeach ?>
							</tbody>
						</table>
					</div>
			</div>
		</div>
	</div>
</section>
<!-- Cart Area End-->
