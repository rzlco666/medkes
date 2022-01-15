<!-- Content -->
<div class="main-content">
	<!-- Page Header -->
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-4 col-lg-4 col-xl-4 doctor-sidebar">
					<div class="doctor-list doctor-view">
						<div class="doctor-inner">
							<img class="img-fluid" alt="" src="<?= base_url('uploads/profile/' . $dokter->foto) ?>">
							<div class="doctor-details">
								<div class="doctor-info">
									<p>
										<span class="depart"><?= $dokter->keahlian ?></span>
									</p>
									<p>
										<span class="depart">NO STR : <?= $dokter->STR ?></span>
									</p>
								</div>
								<ul class="social-list">
									<li>
										<a class="facebook" href="#"><i class="fab fa-twitter"></i></a>
									</li>
									<li>
										<a class="twitter" href="#"><i class="fab fa-facebook-f"></i></a>
									</li>
									<li>
										<a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
									</li>
									<li>
										<a class="g-plus" href="#"><i class="fab fa-google-plus-g"></i></a>
									</li>
								</ul>
								<div class="book-appointment">
									<?php if (!$jadwal) { ?>
										<button disabled class="btn btn-primary btn-block mt-3">Buat Janji</button>
									<?php	} else { ?>
										<a class="btn btn-primary btn-block" href="<?= base_url('pasien/konsultasi/index/' . $dokter->id_dokter) ?>">Buat Janji</a>
									<?php	} ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-8 col-lg-8 col-xl-8">
					<div class="about-doctor">
						<h2 class="mb-1"><?= $dokter->nama_dokter ?></h2>
						<span class="text-black-50"><?= $dokter->keahlian ?></span>
					</div>
					<div class="experience-widget">
						<h3 class="sub-title">Pengalaman</h3>
						<div class="experience-box">
							<ul class="experience-list">
								<li>
									<div class="timeline-content">
										<h6><?= $dokter->pengalaman_kerja ?></h6>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<?php if (!$jadwal) { ?>
						<div class="education-widget">
							<h3 class="sub-title">Tidak Ada Jadwal Yang Tersedia</h3>
						</div>
					<?php	} else { ?>
						<div class="education-widget">
							<h3 class="sub-title">Jadwal Yang Tersedia</h3>
							<div class="experience-box">
								<table class="table table-striped">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Tanggal</th>
											<th scope="col">Jam Mulai</th>
											<th scope="col">Jam Selesai</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1;
										foreach ($jadwal as $row) { ?>
											<tr>
												<th scope="row"><?= $no++ ?></th>
												<td><?= longdate_indo($row->tanggal) ?></td>
												<td><?= $row->jam_mulai ?></td>
												<td><?= $row->jam_berakhir ?></td>
											</tr>
										<?php	} ?>

									</tbody>
								</table>
							</div>
						</div>
					<?php	} ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Content /-->
