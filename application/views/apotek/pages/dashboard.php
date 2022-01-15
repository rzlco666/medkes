<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>plugins/table/datatable/datatables.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>plugins/table/datatable/dt-global_style.css">
<link href="<?= base_url('assets/admin/') ?>assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
	<div class="layout-px-spacing">
		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('tebus'); ?>"></div>
		<?php unset($_SESSION['tebus']); ?>
		<div class="row layout-top-spacing">

			<div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
				<div class="widget-content widget-content-area br-6">
					<table id="default-ordering" class="table table-hover" style="width:100%">
						<thead>
							<tr>
								<th>No.</th>
								<th>Nama Pasien</th>
								<th>No Hp</th>
								<th>Alamat</th>
								<th>Status</th>
								<th class="dt-no-sorting text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach ($pasien as $data) { ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $data->nama_pasien ?></td>
									<td><?= $data->no_hp ?></td>
									<td><?= $data->alamat ?></td>
									<td>
										<?php if ($data->tgl_centang == NULL || $data->jam_centang == NULL) { ?>
											<span class="badge badge-warning"> Belum Ditebus </span>
										<?php } else { ?>
											<span class="badge badge-success"> Sudah Ditebus </span>
										<?php } ?>

									</td>
									<td class="text-center">
										<?php if ($data->tgl_centang == NULL || $data->jam_centang == NULL) { ?>
											<a href="<?= base_url('apotek/dashboard/tebus_resep/' . $data->id_konsultasi) ?>">
												<button class="btn btn-success btn-sm">Tebus Resep
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
														<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
														<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
													</svg>
												</button>
											</a>
										<?php } else { ?>
											<a href="<?= base_url('apotek/dashboard/tebus_resep/' . $data->id_konsultasi) ?>">
												<button class="btn btn-primary btn-sm">Info Resep
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info">
														<circle cx="12" cy="12" r="10"></circle>
														<line x1="12" y1="16" x2="12" y2="12"></line>
														<line x1="12" y1="8" x2="12.01" y2="8"></line>
													</svg>
												</button>
											</a>
										<?php } ?>
									</td>
								</tr>
							<?php	} ?>

						</tbody>
						<tfoot>
							<tr>
								<th>No.</th>
								<th>Nama Pasien</th>
								<th>No Hp</th>
								<th>Alamat</th>
								<th>Status</th>
								<th class="invisible"></th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script type="text/javascript" src="<?= base_url('assets/') ?>nice-select/js/jquery.nice-select.js"></script>
	<!-- Script -->

	<script>
		const flashData = $('.flash-data').data('flashdata');
		if (flashData) {
			Swal.fire({
				icon: 'warning',
				title: 'Perhatian!',
				text: flashData
			});
		}
	</script>
