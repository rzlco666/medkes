<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
	<div class="content">

		<!-- Start Content-->
		<div class="container-fluid">

			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box">
						<div class="page-title-right">
							<ol class="breadcrumb m-0">
								<li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
								<li class="breadcrumb-item active">Data Pasien</li>
							</ol>
						</div>
						<h4 class="page-title">Data Pasien</h4>
					</div>
				</div>
			</div>
			<!-- end page title -->

			<div class="row">
				<div class="col-md-6 col-xl-3">
					<div class="card" id="tooltip-container">
						<div class="card-body">
							<i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
							<h4 class="mt-0 font-16">Pasien Mendaftar Dalam Periode 1 Tahun</h4>
							<h2 class="text-primary my-3 text-center"><span data-plugin="counterup"><?= $jumlah_pasien ?></span> Pasien</h2>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-xl-3">
					<div class="card" id="tooltip-container1">
						<div class="card-body">
							<i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
							<h4 class="mt-0 font-16">Pasien Mendaftar Kurang dari 1 Minggu</h4>
							<h2 class="text-primary my-3 text-center"><span data-plugin="counterup"><?= $week_pasien ?></span> Pasien</h2>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-xl-3">
					<div class="card" id="tooltip-container2">
						<div class="card-body">
							<i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
							<h4 class="mt-0 font-16">Pasien Mendaftar Kurang dari 1 Bulan</h4>
							<h2 class="text-primary my-3 text-center"><span data-plugin="counterup"><?= $month_pasien ?></span> Pasien</h2>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">

							<h4 class="header-title mb-2">Data Pasien</h4>

							<table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
								<thead>
									<tr>
										<th>#</th>
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
							</table>

						</div> <!-- end card body-->
					</div> <!-- end card -->
				</div><!-- end col-->
			</div>
			<!-- end row-->

		</div> <!-- container -->

	</div> <!-- content -->
	<!-- Footer Start -->
	<footer class="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<script>
						document.write(new Date().getFullYear())
					</script> &copy; UBold theme by <a href="">Coderthemes</a>
				</div>
				<div class="col-md-6">
					<div class="text-md-end footer-links d-none d-sm-block">
						<a href="javascript:void(0);">About Us</a>
						<a href="javascript:void(0);">Help</a>
						<a href="javascript:void(0);">Contact Us</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


</div>
<!-- END wrapper -->
