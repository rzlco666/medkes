<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->
<link href="<?= base_url('assets/admin/') ?>plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">

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
								<li class="breadcrumb-item"><a href="<?= base_url('dokter') ?>">Dashboard</a></li>
								<li class="breadcrumb-item active">Dashboard</li>
							</ol>
						</div>
						<h4 class="page-title">Dashboard</h4>
					</div>
				</div>
			</div>
			<!-- end page title -->


			<div class="row">
				<div class="col-xl-4 col-md-6">
					<!-- Portlet card -->
					<div class="card" id="tooltip-container">
						<div class="card-body">
							<i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
							<h4 class="mt-0 font-16">Pasien Diproses</h4>
							<h2 class="text-primary my-3 text-center"><span data-plugin="counterup"><?= $number_proses ?></span> Pasien</h2>
						</div>
					</div>
				</div> <!-- end col-->

				<div class="col-xl-4 col-md-6">
					<div class="card" id="tooltip-container1">
						<div class="card-body">
							<i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
							<h4 class="mt-0 font-16">Pasien Selesai</h4>
							<h2 class="text-primary my-3 text-center"><span data-plugin="counterup"><?= $number_selesai ?></span> Pasien</h2>
						</div>
					</div>
				</div> <!-- end col-->

				<div class="col-xl-4 col-md-12">
					<div class="card" id="tooltip-container2">
						<div class="card-body">
							<i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
							<h4 class="mt-0 font-16">Selesai Konsultasi</h4>
							<h2 class="text-primary my-3 text-center"><span data-plugin="counterup"><?= $number_selesai ?></span> Konsultasi</h2>
						</div>
					</div>
				</div> <!-- end col-->
			</div>
			<!-- end row -->

			<div class="row">
				<div class="col-12">
					<!-- Portlet card -->
					<div class="card">
						<div class="card-body">
							<h4 class="header-title mb-0">Projects</h4>
							<div id="mixed-chart"></div>
						</div> <!-- end card-body-->
					</div> <!-- end card-->
				</div> <!-- end col-->
			</div>
			<!-- end row -->

		</div> <!-- container -->

	</div> <!-- content -->

	<script src="<?= base_url('assets/admin/') ?>plugins/apex/apexcharts.min.js"></script>
	<script>
		var options = {
			chart: {
				height: 350,
				type: 'bar',
				toolbar: {
					show: false,
				}
			},
			series: [{
				name: 'Pasien Konsultasi',
				type: 'column',
				data: [<?= $month2 ?>, <?= $month1 ?>, <?= $week3 ?>, <?= $week2 ?>, <?= $week1 ?>]
			}],
			stroke: {
				width: [0, 4]
			},
			title: {
				// text: 'Grafik Pasien'
			},
			labels: ['2 Bulan Terakhir', '1 Bulan Terakhir', '3 Minggu Terakhir', '2 Minggu Terakhir', '1 Minggu Terakhir'],
			xaxis: {
				type: 'date'
			},
			yaxis: [{
				title: {
					text: 'Pasien Konsultasi',
				},

			}]

		}

		var chart = new ApexCharts(
			document.querySelector("#mixed-chart"),
			options
		);

		chart.render();
	</script>