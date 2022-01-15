<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>plugins/table/datatable/datatables.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>plugins/table/datatable/dt-global_style.css">
<link href="<?= base_url('assets/admin/') ?>assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
<!-- Modal -->
<div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<form action="<?= base_url('apotek/obat/proses_tambah_obat') ?>" method="POST">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Obat</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12 mx-auto">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="nama">Nama Obat</label>
										<input id="nama" name="nama_obat" class="form-control text-black" type="text" placeholder="Nama Obat">
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
					<button type="button" class="btn btn-primary mx-3 mt-3" data-toggle="modal" data-target="#exampleModal">Tambah Obat
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
							<line x1="12" y1="5" x2="12" y2="19"></line>
							<line x1="5" y1="12" x2="19" y2="12"></line>
						</svg></button>
					<table id="default-ordering" class="table table-hover" style="width:100%">
						<thead>
							<tr>
								<th>No.</th>
								<th>Nama Obat</th>
								<th class="dt-no-sorting text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach ($obat as $data) { ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $data->nama_obat ?></td>
									<td class="text-center">
										<a href="<?= base_url('apotek/obat/proses_hapus_obat/' . $data->id_obat) ?>" onclick="return confirm('Anda yakin, ingin menghapus obat ini?')">
											<button class="btn btn-danger btn-sm">Hapus Obat
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
													<polyline points="3 6 5 6 21 6"></polyline>
													<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
													<line x1="10" y1="11" x2="10" y2="17"></line>
													<line x1="14" y1="11" x2="14" y2="17"></line>
												</svg>
											</button>
										</a>
									</td>
								</tr>
							<?php	} ?>
						</tbody>
						<tfoot>
							<tr>
								<th>No</th>
								<th>Nama Obat</th>
								<th class="invisible"></th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>

		</div>

	</div>
