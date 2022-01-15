<!-- Content -->
<div class="account-content">
	<!-- Page Header -->

	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('updateResep'); ?>"></div>
	<?php unset($_SESSION['updateResep']); ?>


	<div class="modal fade" id="tebus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<?= form_open_multipart('pasien/konsultasi/tebus/' . $diagnosa->id_konsultasi, array('method' => 'POST')) ?>
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Penebusan Pada Apotek</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group text-left">
						<label>Daftar Apotek</label>
						<select name="id_admin_apotek" class="form-control">
							<?php foreach ($apotek as $row) { ?>
								<option value="<?= $row->id_admin_apotek ?>"><?= $row->nama_admin ?></option>
							<?php	} ?>
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-primary">Tebus</button>
				</div>
				<?= form_close() ?>
			</div>
		</div>
	</div>

	<div class="container pt-4">
		<h2 class="text-center">Riwayat Resep Konsultasi</h2>
		<div class="line mb-4"></div>
		<!-- Heading Row-->
		<div class="row gx-4 gx-lg-5 align-items-center my-5">
			<div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="<?= base_url('uploads/diagnosa/' . $diagnosa->foto_pemeriksaan) ?>" alt="..." /></div>
			<div class="col-lg-5">
				<h1 class="font-weight-light">Rekam Medis</h1>
				<p>No Rekam Medis : <?= $diagnosa->no_rekam_medis ?></p>
				<p>Tanggal : <?= longdate_indo($diagnosa->tanggal) ?> : <?= $diagnosa->jam ?></p>
				<p>Diagnosa Penyakit : <?= $diagnosa->diagnosa ?>.</p>
				<a class="btn btn-primary" href="<?= base_url('pasien/konsultasi/download_diagnosa/' . $diagnosa->no_record) ?>">Download Foto</a>
			</div>
		</div>

		<div class="row mt-5">
			<?php if ($validasi->validasi_pasien === "Belum ditebus") { ?>
				<div class="book-appointment mb-3">
					<a href="javascript:void(0)" data-toggle="modal" data-target="#tebus">Tebus Resep</a>
				</div>
			<?php 	} ?>
			<table class="table table-striped table-hover ">
				<caption>List Resep Obat</caption>
				<thead>
					<tr>
						<th scope="col">No.</th>
						<th scope="col">Nama Obat</th>
						<th scope="col">Cara Pakai</th>
						<th scope="col">Dosis</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; ?>
					<?php foreach ($resep as $data) { ?>
						<tr>
							<th scope="row"><?= $no++ ?></th>
							<td><?= $data->nama_obat ?></td>
							<td><?= $data->cara_pakai ?></td>
							<td><?= $data->dosis ?></td>
						</tr>
					<?php	} ?>
				</tbody>
			</table>
		</div>


	</div>
</div>

<!-- Content /-->
<script src="<?= base_url('assets/pasien/') ?>js/jquery-3.5.1.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	$('.tebus').on('click', function(e) {
		e.preventDefault();
		const href = $(this).attr('href');
		Swal.fire({
			title: 'Anda yakin ingin resep ditebus?',
			// text: "Setelah resep ditebus, !",
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
<script>
	const flashData = $('.flash-data').data('flashdata');
	if (flashData) {
		Swal.fire({
			icon: 'success',
			title: 'Resep',
			text: flashData
		});
	}
</script>
