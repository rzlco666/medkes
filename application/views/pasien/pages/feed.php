<?php $no = 1;
foreach ($feed as $data){
?>

<!-- breadcrumb area start -->
<section class="breadcrumb-area bg_img pb-160" data-background="<?= base_url('assets_pasien/') ?>images/banner/01.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="breadcrumb-content">
					<h2 class="title" style="color: #003242;"><?= $data->judul ?></h2>
					<ul style="color: #003242;">
						<li><a style="color: #003242;" href="<?= base_url('pasien/') ?>">Home</a></li>
						<li>|</li>
						<li>Feed</li>
					</ul>
					<h1 class="back-title">Feeds</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- breadcrumb area end -->

<!-- blog area start -->
<div class="blog-area pt-120 pb-120">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 col-lg-12">
				<article class="postbox singel-post post format-image">
					<div class="postbox_thumb mb-35">
						<img style="object-fit: cover; width: 770px; height: 440px;" src="<?= base_url('uploads/feed/' . $data->foto) ?>" alt="blog image">
					</div>
					<div class="postbox_content bg-none">
						<div class="post-meta mb-15">
							<span><i class="far fa-calendar-check"></i> <?= longdate_indo($data->tanggal) ?> </span>
							<span><a href="#0"><i class="far fa-user"></i> Admin MedKes</a></span>
						</div>
						<div class="post-text mb-20">
							<div class="post-text-centent">
								<?= $data->isi ?>
							</div>
						</div>
						<div class="row mt-50">
							<div class="col-xl-8 col-lg-8 col-md-8 mb-15">
								<div class="blog-post-tag">
									<span>Releted Tags</span>
									<a href="#">pelayanan</a>
									<a href="#">kesehatan</a>
									<a href="#">masyarakat</a>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 mb-15">
								<div class="blog-share-icon text-left text-md-right">
									<span>Share: </span>
									<a href="#0"><i class="fab fa-facebook-f"></i></a>
									<a href="#0"><i class="fab fa-twitter"></i></a>
									<a href="#0"><i class="fab fa-instagram"></i></a>
									<a href="#0"><i class="fab fa-google-plus-g"></i></a>
									<a href="#0"><i class="fab fa-vimeo-v"></i></a>
								</div>
							</div>
						</div>
					</div>
				</article>
			</div>
			<div class="col-xl-4 col-lg-12">
				<div class="sidebar-wrap">
					<div class="widget mb-40">
						<div class="widget-title-box mb-30">
							<span class="animate-border"></span>
							<h3 class="widget-title">Penulis</h3>
						</div>
						<div class="about-me text-center">
							<img style="object-fit: cover; width: 140px; height: 140px;" src="https://cdn.dribbble.com/users/63049/screenshots/3846140/dribbble-personajes.png" alt="">
							<h4>Admin MedKes</h4>
							<p>Untuk pelayanan kesehatan yang lebih baik.</p>
							<div class="widget-social-icon">
								<a href="#0"><i class="fab fa-facebook-f"></i></a>
								<a href="#0"><i class="fab fa-twitter"></i></a>
								<a href="#0"><i class="fab fa-behance"></i></a>
								<a href="#0"><i class="fab fa-linkedin-in"></i></a>
								<a href="#0"><i class="fab fa-youtube"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- blog area end -->
	<?php
}
?>
