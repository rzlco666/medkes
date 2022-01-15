<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>plugins/table/datatable/datatables.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>plugins/table/datatable/dt-global_style.css">
<link href="<?= base_url('assets/admin/') ?>assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
<!-- Modal -->
<div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<form action="<?= base_url('apotek/obat/proses_tambah_resep') ?>" method="POST">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Resep</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12 mx-auto">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="cara">Cara Pakai</label>
										<input id="cara" name="cara_pakai" class="form-control text-black" type="text" placeholder="Cara Pakai">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="kode">Kode Obat</label>
										<input id="kode" name="kode_obat" class="form-control text-black" type="text" placeholder="Kode Obat">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="dosis">Dosis</label>
										<input id="dosis" name="dosis" class="form-control text-black" type="text" placeholder="Dosis Obat">
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
<!--End Modal -->

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
	<div class="layout-px-spacing">

		<div class="row layout-top-spacing">

			<div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
				<div class="widget-content widget-content-area br-6">
					<button type="button" class="btn btn-primary mx-3 mt-3" data-toggle="modal" data-target="#exampleModal">Tambah Resep
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
							<line x1="12" y1="5" x2="12" y2="19"></line>
							<line x1="5" y1="12" x2="19" y2="12"></line>
						</svg></button>
					<table id="default-ordering" class="table table-hover" style="width:100%">
						<thead>
							<tr>
								<th>No.</th>
								<th>Cara Pakai</th>
								<th>Kode Obat</th>
								<th>Dosis</th>
								<th class="dt-no-sorting text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach ($resep as $data) { ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $data->cara_pakai ?></td>
									<td><?= $data->kode_obat ?></td>
									<td><?= $data->dosis ?></td>
									<td class="text-center">
										<button class="btn btn-primary btn-sm">Edit Resep
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
												<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
												<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
											</svg>
										</button>
									</td>
								</tr>
							<?php	} ?>

						</tbody>
						<tfoot>
							<tr>
								<th>No.</th>
								<th>Cara Pakai</th>
								<th>Kode Obat</th>
								<th>Dosis</th>
								<th class="invisible"></th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
