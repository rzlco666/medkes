<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>plugins/table/datatable/datatables.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>plugins/table/datatable/dt-global_style.css">
<link href="<?= base_url('assets/admin/') ?>assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
	<div class="layout-px-spacing">

		<div class="row layout-top-spacing">

			<div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
				<div class="widget-content widget-content-area br-6">
					<?php if (!$pasien->jam_centang) : ?>
						<a href="<?= base_url('apotek/dashboard/proses_tebus_resep/' . $id_konsultasi) ?>" class="tebus">
							<button type="button" class="btn btn-primary mx-3 mt-3">Tebus Resep</button>
						</a>
					<?php endif; ?>
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
	<script src="<?= base_url('assets/pasien/') ?>js/jquery-3.5.1.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		$('.tebus').on('click', function(e) {
			e.preventDefault();
			const href = $(this).attr('href');
			Swal.fire({
				title: 'Anda yakin ingin resep ditebus?',
				text: "Setelah resep ditebus, resep akan hilang ditampilan!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Ya, Tebus!'
			}).then((result) => {
				if (result.isConfirmed) {
					document.location.href = href;
				}
			});
		});
	</script>
