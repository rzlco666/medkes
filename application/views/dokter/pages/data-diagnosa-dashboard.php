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
								<th>No</th>
								<th>Nama Pasien</th>
								<th>Email</th>
								<th>No Hp</th>
								<th class="dt-no-sorting text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach ($diagnosa as $row) { ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $row->nama_pasien ?></td>
									<td><?= $row->email ?></td>
									<td><?= $row->no_hp ?></td>
									<td class="text-center">
										<a href="<?= base_url('dokter/diagnosa/rekam_medis/' . $row->id_pasien) ?>">
											<button type="button" class="btn btn-info btn-sm"> Info Rekam Medis
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info">
													<circle cx="12" cy="12" r="10"></circle>
													<line x1="12" y1="16" x2="12" y2="12"></line>
													<line x1="12" y1="8" x2="12.01" y2="8"></line>
												</svg>
											</button>
										</a>
									</td>
								</tr>
							<?php        } ?>
						</tbody>
						<tfoot>
							<tr>
								<th>No</th>
								<th>Nama Pasien</th>
								<th>Email</th>
								<th>No Hp</th>
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
