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
								<th>No.</th>
								<th>Nama Dokter</th>
								<th>Tanggal</th>
								<th>Jam Operasional</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach ($jadwal as $data) { ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $data->nama_dokter ?></td>
									<td><?= longdate_indo($data->tanggal) ?></td>
									<td><?= $data->jam_mulai ?> WIB - <?= $data->jam_berakhir ?> WIB</td>
									<td>
										<button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#jadwal<?= $data->id_jadwal ?>">Sunting
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
												<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
												<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
											</svg>
										</button>
										<div class="modal fade" id="jadwal<?= $data->id_jadwal ?>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered" role="document">
												<div class="modal-content">
													<form action="<?= base_url('admin/jadwal/proses_update_jadwal/' . $data->id_jadwal) ?>" method="POST">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">Sunting Jadwal</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															</button>
														</div>
														<div class="modal-body">
															<div class="row">
																<div class="col-md-12 mx-auto">
																	<div class="row">
																		<div class="col-md-12">
																			<div class="form-group">
																				<label for="email">Tanggal</label>
																				<input name="tanggal" value="<?= $data->tanggal ?>" class="form-control basicFlatpickr flatpickr flatpickr-input active text-black" type="text" placeholder="Select Date..">
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group">
																				<label for="website1">Jam Mulai</label>
																				<input value="<?= $data->jam_mulai ?>" name="jam_mulai" class="form-control flatpickr flatpickr-input active text-black timeFlatpickr" type="text" placeholder="Select Date..">
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group">
																				<label for="website2">Jam Berakhir</label>
																				<input value="<?= $data->jam_berakhir ?>" name="jam_berakhir" class="form-control flatpickr flatpickr-input active text-black timeFlatpickr2" type="text" placeholder="Select Date..">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="modal-footer">
															<button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Close</button>
															<button type="submit" class="btn btn-primary">Save</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</td>
								</tr>

							<?php	} ?>

						</tbody>
						<tfoot>
							<tr>
								<th>No</th>
								<th>Nama Dokter</th>
								<th>Tanggal</th>
								<th>Jam Operasional</th>
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
		var f4 = flatpickr(document.getElementsByClassName('timeFlatpickr'), {
			enableTime: true,
			noCalendar: true,
			dateFormat: "H:i",
		});
	</script>
	<script>
		var f4 = flatpickr(document.getElementsByClassName('timeFlatpickr2'), {
			enableTime: true,
			noCalendar: true,
			dateFormat: "H:i",
		});
	</script>
	<script>
		var f6 = flatpickr(document.getElementsByClassName('basicFlatpickr'), {
			enableTime: false,
			noCalendar: false,
		});
	</script>
