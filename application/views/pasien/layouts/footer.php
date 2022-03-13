    <!-- footer start -->
    <footer class="site-footer pt-100 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-12 pr-50">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="footer-widget">
                                <h4 class="widget-title">About Us</h4>
                                <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                <div class="social-links">
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                    <a href="#0"><i class="fab fa-behance"></i></a>
                                    <a href="#0"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-sm-7">
                            <div class="footer-widget">
                                <h4 class="widget-title">Links</h4>
                                <div class="row">
                                    <div class="col-5 pr-10">
                                        <ul>
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="gallery.html">Portfolio</a></li>
                                            <li><a href="#0">Pricing</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-7 pl-10">
                                        <ul>
                                            <li><a href="blog.html">News</a></li>
                                            <li><a href="#0">Press Release</a></li>
                                            <li><a href="case-service.html">Case Study</a></li>
                                            <li><a href="#0">Insigts</a></li>
                                            <li><a href="#0">Terms</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-5 col-lg-3">
                            <div class="footer-widget department">
                                <h4 class="widget-title">Department</h4>
                                <ul>
                                    <li><a href="service-details.html">Body Sergery</a></li>
                                    <li><a href="service-details.html">Major Operation</a></li>
                                    <li><a href="service-details.html">Child Care</a></li>
                                    <li><a href="service-details.html">Heart Operation</a></li>
                                    <li><a href="service-details.html">Instant Karma</a></li>
                                    <li><a href="service-details.html">PGO Theraphy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright-text">
                                <p>Copyright By@<span>Example</span> - 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 pl-0 pr-10">
                    <div class="opening-hour-box bg_img ml-none-10" data-overlay="94" data-background="<?= base_url('assets_pasien/') ?>images/bg/open-hour-bg.jpg">
                        <div class="opening-hour-top">
                            <div class="icon">
                                <img src="<?= base_url('assets_pasien/') ?>images/icons/clock-icon-white.png" alt="">
                            </div>
                            <div class="content">
                                <h5 class="title">Opening Hours</h5>
                                <p>It’s a fake timing. Actually we
                                are available 24/7.</p>
                            </div>
                        </div>
                        <div class="opening-hour-list">
                            <ul>
                                <li>Monday - Friday<span>8:00 - 16:00</span></li>
                                <li>Saturday<span>8:00 - 12:00</span></li>
                                <li>Sunday<span><strong>Closed</strong></span></li>
                                <li>Lunch Break<span>9:15 - 22:45</span></li>
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
