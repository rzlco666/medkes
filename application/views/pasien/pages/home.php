    <!-- Hero area start -->
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
    <?php unset($_SESSION['success']); ?>

    <section class="hero-area bg_img" data-background="<?= base_url('assets_pasien/') ?>images/banner/01.jpg">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6">
    				<div class="hero-content">
    					<h1 class="title">MEDKES<span>.</span>
    					</h1>
    					<p>Konsultasi dan ambil antrian serta dapatkan penanganan dokter professional kami.</p>
    					<div class="hero-buttons">
    						<a href="<?= base_url('pasien/dokter') ?>" class="site-btn">Cek Dokter</a>
    						<a href="about.html" class="site-btn red">Learn More</a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="hero-ilustration-shape">
    		<img src="<?= base_url('assets_pasien/') ?>images/ilustration/ilustration-1.png" alt="">
    	</div>
    </section>
    <!-- Hero area end -->

    <!-- feature area start -->
    <section class="feature-area pb-120">
    	<div class="container feature-container">
    		<div class="row justify-content-center">
    			<div class="col-lg-6 col-md-8 col-sm-10 text-center">
    				<div class="section-heading mb-70">
    					<h2 class="section-title shape">Pelayan Kami</h2>
    					<p>Konsultasi dan ambil antrian serta dapatkan penanganan dokter professional kami.</p>
    				</div>
    			</div>
    		</div>
    		<div class="row justify-content-center mt-none-50">
    			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-8 mt-50 text-center">
    				<div class="single-feature-box">
    					<div class="icon">
    						<img src="<?= base_url('assets_pasien/') ?>images/icons/feature-icon-01.png" alt="">
    					</div>
    					<div class="content">
    						<h3 class="title">Konsultasi Dengan Dokter</h3>
    						<p>Disini anda bisa konsultasi dengan dokter mengenai penyakit ataupun masalah kecantikan anda.</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-8 mt-50 text-center">
    				<div class="single-feature-box">
    					<div class="icon">
    						<img src="<?= base_url('assets_pasien/') ?>images/icons/feature-icon-02.png" alt="">
    					</div>
    					<div class="content">
    						<h3 class="title">Buat Janji</h3>
    						<p>Disini anda bisa membuat janji sesuai jadwal dokter yang tersedia.</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-8 mt-50 text-center">
    				<div class="single-feature-box">
    					<div class="icon">
    						<img src="<?= base_url('assets_pasien/') ?>images/icons/feature-icon-03.png" alt="">
    					</div>
    					<div class="content">
    						<h3 class="title">Dokter Cepat Tanggap.</h3>
    						<p>Disini anda akan mendapatkan pelayanan terbaik dan juga dokter yang cepat tanggap dalam melayani anda.</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- feature area end -->

    <!-- about area start -->
    <section class="about-area pb-160">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6">
    				<div class="about-thumb-wrap">
    					<div class="about-thumb-small">
    						<img src="<?= base_url('assets_pasien/') ?>images/about/02.jpg" alt="">
    					</div>
    					<div class="about-thumb-big">
    						<img src="<?= base_url('assets_pasien/') ?>images/about/01.jpg" alt="">
    					</div>
    					<div class="about-thumb-shape-big">
    						<img src="<?= base_url('assets_pasien/') ?>images/icons/plus-icon-big.png" alt="">
    					</div>
    					<div class="about-thumb-shape-small">
    						<img src="<?= base_url('assets_pasien/') ?>images/icons/plus-icon.png" alt="">
    					</div>
    					<div class="about-thumb-shape-circle">
    						<img src="<?= base_url('assets_pasien/') ?>images/ilustration/circle-shpae.png" alt="">
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-6">
    				<div class="about-content mt-50">
    					<div class="section-heading mb-55">
    						<h4 class="sub-title">About Us</h4>
    						<h2 class="section-title">Expert Medical Writers <br> &amp; Editors Makes</h2>
    						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp
    							or incididunt ut labore et dolore magna aliqua.</p>
    					</div>
    					<div class="about-list mt-none-20">
    						<div class="single-item d-flex align-items-center mt-20">
    							<div class="icon">
    								<i class="fal fa-check"></i>
    							</div>
    							<span>100+ Expert Doctor</span>
    						</div>
    						<div class="single-item d-flex align-items-center mt-20">
    							<div class="icon">
    								<i class="fal fa-check"></i>
    							</div>
    							<span>Instant Operation &amp; Appointment</span>
    						</div>
    						<div class="single-item d-flex align-items-center mt-20">
    							<div class="icon">
    								<i class="fal fa-check"></i>
    							</div>
    							<span>From Scientific Journals</span>
    						</div>
    						<div class="single-item d-flex align-items-center mt-20">
    							<div class="icon">
    								<i class="fal fa-check"></i>
    							</div>
    							<span>Medicine &amp; Instruments</span>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- about area end -->

	<!-- news area start -->
	<section class="news-area bg-2 pt-110 pb-110">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-8 text-center">
					<div class="section-heading mb-70">
						<h2 class="section-title shape">News Feeds</h2>
						<p>Berita maupun informasi terbaru dari Media Kesehatan.</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center mt-none-30">
				<div class="col-xl-4 col-lg-6 col-sm-12 mt-30">
					<div class="single-news-box">
						<div class="thumb">
							<img style="object-fit: cover; width: 370px; height: 280px;" src="https://blog-frontend.envato.com/cdn-cgi/image/width=1200,quality=85,format=auto/uploads/2021/06/CON178%E2%80%93JuneBlog%E2%80%933D.jpg" alt="">
						</div>
						<div class="content">
							<div class="news-meta-date">
								<span>23</span>
								Mar
							</div>
							<div class="news-meta">
								<ul>
									<li><a href="#0"><i class="fal fa-user"></i> Rosali D.</a></li>
									<li><a href="#0"><i class="fal fa-calendar-alt"></i> 24th Feb 2020</a></li>
								</ul>
							</div>
							<h4 class="title"><a href="blog-details.html">The Medical Department Is
									Comprised Of Medical.</a></h4>
							<a href="blog-details.html" class="inline-btn">Read More</a>
							<span class="count">01</span>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-sm-12 mt-30">
					<div class="single-news-box">
						<div class="thumb">
							<img src="<?= base_url('assets_pasien/') ?>images/blog/02.jpg" alt="">
						</div>
						<div class="content">
							<div class="news-meta-date">
								<span>10</span>
								Feb
							</div>
							<div class="news-meta">
								<ul>
									<li><a href="#0"><i class="fal fa-user"></i> Rosali D.</a></li>
									<li><a href="#0"><i class="fal fa-calendar-alt"></i> 24th Feb 2020</a></li>
								</ul>
							</div>
							<h4 class="title"><a href="blog-details.html">With In-depth Experience In
									Broad Range Of Disease.</a></h4>
							<a href="blog-details.html" class="inline-btn">Read More</a>
							<span class="count">02</span>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-sm-12 mt-30">
					<div class="single-news-box">
						<div class="thumb">
							<img src="<?= base_url('assets_pasien/') ?>images/blog/03.jpg" alt="">
						</div>
						<div class="content">
							<div class="news-meta-date">
								<span>04</span>
								Mar
							</div>
							<div class="news-meta">
								<ul>
									<li><a href="#0"><i class="fal fa-user"></i> Rosali D.</a></li>
									<li><a href="#0"><i class="fal fa-calendar-alt"></i> 24th Feb 2020</a></li>
								</ul>
							</div>
							<h4 class="title"><a href="blog-details.html">Experience In A Broad Range
									of disease states.</a></h4>
							<a href="blog-details.html" class="inline-btn">Read More</a>
							<span class="count">03</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- news area end -->

    <!-- video section start -->
    <section class="video-area bg_img pt-160 pb-160" data-overlay="94">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12">
    				<div class="video-content text-center">
    					<div class="video-button-trigger">
    						<a href="//www.youtube.com/embed/GwHKnEpS1DA?rel=0&amp;controls=0&amp;showinfo=0" class="video-btn" data-rel="lightcase:myCollection"><i class="fa fa-play"></i></a>
    						<span class="intro">Intro Video</span>
    					</div>
    					<div class="section-heading">
    						<h2 class="section-title">Media Kesehatan Untuk Pelayanan Kesehatan Yang Lebih Baik</h2>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="video-shape">
    		<span><img src="<?= base_url('assets_pasien/') ?>images/icons/video-icon-01.png" alt=""></span>
    		<span><img src="<?= base_url('assets_pasien/') ?>images/icons/video-icon-02.png" alt=""></span>
    	</div>
    </section>
    <!-- video section end -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="<?= base_url('assets/') ?>nice-select/js/jquery.nice-select.js"></script>
    <!-- Script -->

    <script>
    	const flashData = $('.flash-data').data('flashdata');
    	if (flashData) {
    		Swal.fire({
    			icon: 'success',
    			title: 'Sukses!',
    			text: flashData
    		});
    	}
    </script>
    <script>
    	$(document).ready(function() {
    		$("#myselect").niceSelect();
    	});
    </script>
