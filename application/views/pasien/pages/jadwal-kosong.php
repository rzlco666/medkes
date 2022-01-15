<style>
	@media (min-width: 768px) {
		.height-100vh--md {
			height: 90vh;
		}
	}

	.w-lg-60 {
		width: 60% !important;
	}

	.w-md-80 {
		width: 80% !important;
	}

	.d-md-flex {
		display: -ms-flexbox !important;
		display: flex !important;
	}

	.align-items-md-center {
		-ms-flex-align: center !important;
		align-items: center !important;
	}
</style>

<main id="content" role="main">
	<!-- Empty Cart Notification Section -->
	<div class="d-md-flex align-items-md-center height-100vh--md">
		<div class="container text-center space-2 space-3--lg">
			<div class="w-md-80 w-lg-60 text-center mx-md-auto">
				<div class="mb-5">
					<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#007bff" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
						<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
					</svg>
					<h1 class="h2 mt-5">Anda belum mempunyai riwayat konsultasi</h1>
					<p>Sebelum pergi kehalaman riwayat konsultasi, silahkan pergi kehalaman penjadwalan atau daftar konsultasi pada bagian konsultasi atau klik tomobol dibawah ini..</p>
				</div>
				<a class="btn btn-primary btn-wide" href="<?= base_url('pasien/dokter') ?>">Buat Jadwal</a>
			</div>
		</div>
	</div>
	<!-- End Empty Cart Notification Section -->
</main>
