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

			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
				<h2></h2>
				<div class="widget widget-card-four">
					<div class="widget-content">
						<div class="w-header">
							<div class="w-info">
								<h6 class="value">Pasien Mendaftar Dalam Periode 1 Tahun</h6>
							</div>
						</div>

						<div class="w-content">

							<div class="w-info">
								<p class="value"><?= $jumlah_pasien ?> <span>Pasien</span> </p>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
				<div class="widget widget-card-four">
					<div class="widget-content">
						<div class="w-header">
							<div class="w-info">
								<h6 class="value">Pasien Mendaftar Kurang dari 1 Minggu</h6>
							</div>
						</div>

						<div class="w-content">

							<div class="w-info">
								<p class="value"><?= $week_pasien ?> <span>Pasien</span> </p>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
				<div class="widget widget-card-four">
					<div class="widget-content">
						<div class="w-header">
							<div class="w-info">
								<h6 class="value">Pasien Mendaftar Kurang dari 1 Bulan</h6>
							</div>
						</div>

						<div class="w-content">

							<div class="w-info">
								<p class="value"><?= $month_pasien ?> <span>Pasien</span> </p>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
				<div class="widget-content widget-content-area br-6">
					<table id="default-ordering" class="table table-hover" style="width:100%">
						<thead>
							<tr>
								<th>No.</th>
								<th>Nama Pasien</th>
								<th>Email</th>
								<th>Tanggal Daftar</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach ($pasien as $row) { ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $row->nama_pasien ?></td>
									<td><?= $row->email ?></td>
									<td><?= longdate_indo($row->tgl_buat) ?></td>
								</tr>
							<?php } ?>

						</tbody>
						<tfoot>
							<tr>
								<th>No.</th>
								<th>Nama Pasien</th>
								<th>Email</th>
								<th>Tanggal Daftar</th>
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
