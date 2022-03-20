<!-- breadcrumb area start -->
<section class="breadcrumb-area bg_img pb-160" data-background="<?= base_url('assets_pasien/') ?>images/banner/01.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="breadcrumb-content">
					<h2 class="title" style="color: #003242;">Feeds List</h2>
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

<!-- blog-area start -->
<div class="blog-area bg-2 pt-120 pb-120">
	<div class="container">
		<div class="row mt-none-30">
			<?php $no = 1;
			foreach ($feed as $data){
			?>
			<div class="col-xl-6 col-lg-6 col-sm-12 mt-30">
				<div class="single-news-box">
					<div class="thumb">
						<img style="object-fit: cover; width: 770px; height: 440px;" src="<?= base_url('uploads/feed/' . $data->foto) ?>" alt="">
					</div>
					<div class="content">
						<div class="news-meta-date">
							<span><?= mediumdate_indo1($data->tanggal) ?></span>
							<?= mediumdate_indo2($data->tanggal) ?>
						</div>
						<div class="news-meta">
							<ul>
								<li><a href="#0"><i class="fal fa-user"></i> Admin MedKes</a></li>
								<li><a href="#0"><i class="fal fa-calendar-alt"></i> <?= mediumdate_indoo($data->tanggal) ?></a></li>
							</ul>
						</div>
						<h4 class="title"><a href="<?= base_url('pasien/feed/feed/'.$data->id_feed) ?>"><?= $data->judul ?></a></h4>
						<a href="<?= base_url('pasien/feed/feed/'.$data->id_feed) ?>" class="inline-btn">Selengkapnya</a>
						<span class="count"><?= $no++ ?></span>
					</div>
				</div>
			</div>
				<?php
			}
			?>
		</div>
	</div>
</div>
<!-- blog-area end -->
