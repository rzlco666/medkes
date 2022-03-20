    <!-- footer start -->
    <footer class="site-footer pt-100 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-12 pr-50">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="footer-widget">
                                <h4 class="widget-title">About Us</h4>
								<p>Media Kesehatan &copy;</p>
								<p>Untuk pelayanan kesehatan yang lebih baik</p>
                                <div class="social-links">
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                    <a href="#0"><i class="fab fa-behance"></i></a>
                                    <a href="#0"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-7 col-sm-12">
                            <div class="footer-widget">
                                <h4 class="widget-title">Links</h4>
                                <div class="row">
                                    <div class="col-12">
                                        <ul>
											<li><a href="<?= base_url('pasien/') ?>">Home</a>
											</li>
											<li><a href="<?= base_url('pasien/konsultasi/jadwal') ?>">Riwayat</a>
											</li>
											<li><a href="<?= base_url('pasien/dokter') ?>">Dokter</a>
											</li>

											<li><a href="<?= base_url('pasien/dokter') ?>">Buat Janji</a>
											</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright-text">
                                <p>Copyright &copy; <span>Media Kesehatan</span> - <?= date("Y") ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 pl-0 pr-10">
                    <div class="opening-hour-box bg_img ml-none-10" data-overlay="94">
                        <div class="opening-hour-top">
                            <div class="icon">
                                <img src="<?= base_url('assets_pasien/') ?>images/icons/clock-icon-white.png" alt="">
                            </div>
                            <div class="content">
                                <h5 class="title">Jam Buka</h5>
                                <p>Pada dasarnya kami buka 24/7.</p>
                            </div>
                        </div>
                        <div class="opening-hour-list">
                            <ul>
                                <li>Waktu Istirahat<span>12:00 - 13:00</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <!--========= JS Here =========-->
	<script type="text/javascript" src="<?= base_url('assets/pasien/') ?>js/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url('assets_pasien/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets_pasien/') ?>js/counterup.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/pasien/') ?>dropify/js/dropify.min.js"></script>
    <script src="<?= base_url('assets_pasien/') ?>js/datepicker.min.js"></script>
    <script src="<?= base_url('assets_pasien/') ?>js/datepicker.en.js"></script>
    <script src="<?= base_url('assets_pasien/') ?>js/jquery-ui.min.js"></script>
    <script src="<?= base_url('assets_pasien/') ?>js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url('assets_pasien/') ?>js/lightcase.js"></script>
    <script src="<?= base_url('assets_pasien/') ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets_pasien/') ?>js/jquery.meanmenu.min.js"></script>
    <script src="<?= base_url('assets_pasien/') ?>js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url('assets_pasien/') ?>js/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets_pasien/') ?>js/wow.min.js"></script>
    <script src="<?= base_url('assets_pasien/') ?>js/waypoint.js"></script>
    <script src="<?= base_url('assets_pasien/') ?>js/main.js"></script>

	<!-- Select2 JS -->
<script src="<?= base_url('assets/pasien/') ?>js/select2.min.js"></script>
<script src="<?= base_url('assets/pasien/') ?>js/moment.min.js"></script>

	<script src="<?= base_url('assets/pasien/') ?>time/js/mobiscroll.javascript.min.js"></script>
	<script type="text/javascript">
		$("#tangl").on('change', function() {
			var jam_mulai = $(this).find(':selected').data('id')
			const myArr = jam_mulai.split(",");
			mobiscroll.datepicker('#demo-24h', {
				themeVariant: 'light',
				controls: ['time'],
				timeFormat: 'HH:mm',
				touchUi: true,
				min: myArr[0],
				max: myArr[1]
			});
		})
	</script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.dropify').dropify({
			messages: {
				default: ' ',
				replace: 'Ganti',
				remove: 'Hapus',
				error: 'error'
			}
		});
	});
</script>
</body>

</html>
