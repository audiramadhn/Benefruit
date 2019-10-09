<html><head>
    <?php $this->load->view('beranda/header')?>
	
</head>

<body>

    <div id="page" class="page">

    <!-- header -->

        <?php $this->load->view('beranda/navbar')?>

    <!-- //header -->

<!-- banner -->
<section class="banner_w3lspvt" id="home">
	<div class="csslider infinity" id="slider1">
		<input type="radio" name="slides" checked="checked" id="slides_1">
		<input type="radio" name="slides" id="slides_2">
		<input type="radio" name="slides" id="slides_3">
		<ul>
			<li>
				<div class="banner-top bg bg1">
					<div class="overlay">
						<div class="container">
							<div class="w3layouts-banner-info text-center">
								<h3 class="text-wh editContent">Petani</h3>
								<h4 class="text-wh mx-auto my-4 editContent">Cultivating new crops to make farmers increase profits</h4>
								<p class="text-li mx-auto mt-2 editContent">Semua petani berhak untuk mendapat kehidupan yang lebih baik, dengan memperluas jangkauan penjualan serta pendistribusian buah, yang akan dimulai dari anda.</p>
								<a href="<?php echo site_url('Autentifikasi/login')?>" class="button-style btn mt-sm-5 mt-4" style="outline: none; cursor: inherit; outline-offset: 0px; border-radius: 10px; font-size: 16px; background-color: #f57e20;">Mulai Sebagai Petani</a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="banner-top1 bg bg1" style="outline: none; cursor: inherit;">
					<div class="overlay1">
						<div class="container">
							<div class="w3layouts-banner-info text-center">
								<h3 class="text-wh editContent" style="outline: none; cursor: inherit;">Mitra</h3>
								<h4 class="text-wh mx-auto my-4 editContent" style="outline: none; cursor: inherit;">Cultivating new crops to make farmers increase profits</h4>
								<p class="text-li mx-auto mt-2 editContent" style="outline: none; cursor: inherit;">Dimana lagi anda bisa mengolah hasil buah dan juga mendapatkan modal usaha.</p>
								<a href="<?php echo site_url('Autentifikasi/login')?>" class="button-style btn mt-sm-5 mt-4" style="outline: none; cursor: inherit; outline-offset: 0px; border-radius: 10px; font-size: 16px; background-color: #f57e20;">Mulai Sebagai Mitra</a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="banner-top2 bg bg1" style="outline: none; cursor: inherit;">
					<div class="overlay">
						<div class="container">
							<div class="w3layouts-banner-info text-center">
								<h3 class="text-wh editContent" style="outline: none; cursor: inherit;">Investor</h3>
								<h4 class="text-wh mx-auto my-4 editContent" style="outline: none; cursor: inherit;">Cultivating new crops to make farmers increase profits</h4>
								<p class="text-li mx-auto mt-2 editContent" style="outline: none; cursor: inherit;">Untuk apa uang anda kalau tidak dikembangkan di disini,<br/>ayo bergabung bersama kami dan menjadi investor.</p>
								<a href="<?php echo site_url('Autentifikasi/login')?>" class="button-style btn mt-sm-5 mt-4" style="outline: none; cursor: inherit; outline-offset: 0px; border-radius: 10px; font-size: 16px; background-color: #f57e20;">Mulai Sebagai Investor</a>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="arrows">
			<label for="slides_1"></label>
			<label for="slides_2"></label>
			<label for="slides_3"></label>
		</div>
	</div>
</section>
<!-- //banner -->

<!-- about -->
	<?php $this->load->view('beranda/home/about')?>
<!-- //about -->

<!-- text -->
<section class="text py-5 bg bg1" style="outline: none; outline-offset: -2px; cursor: inherit;">
	<div class="container py-md-3 text-center">		
		<div class="row">
			<div class="col-12">
				<h3 class="mb-4 heading editContent">Tentang <span class="editContent">Benefruit</span></h3>
				<p class="editContent">Benefruit merupakan sebuah sistem yang<br/>bertujuan menampung para investor, mitra, dan petani.</p>
				<a href="<?php echo base_url('index.php/Beranda/about')?>" class="btn mr-3" style="border-radius: 10px; font-size: 17px; background-color: rgb(245, 126, 32);">Lebih Lanjut</a>
			</div>		
		</div>		
	</div>		
</section>
<!-- //text -->

<!-- core values -->
	<?php $this->load->view('beranda/home/visi_misi')?>
<!-- //core values -->
	
<!-- text -->
<section class="background-img bg bg1" style="outline: none; cursor: inherit;">
	<div class="overlay-clr py-5">
		<div class="container py-md-3">
			<div class="row core-grids">
				<div class="col-lg-4 bg-left">	
					<h4 class="editContent" style="outline: none; cursor: inherit;">We Are Innovators in Agricultural Business. Our goal is to bring healthy organic food to every People.</h4>
				</div>
				<div class="col-lg-5 col-md-7 bg-middle mt-lg-0 mt-4">	
					<p class="editContent" style="outline: none; cursor: inherit;">Integer sit amet mattis quam, sit amet dol ultricies velit. Praesent ullam corper duits turpis dolor sit amet quam.
					Nulla comodol gravida porttitor. Aenean posuere lacusnt quis leo imperdiet laoreet. Proin vulputat.</p>
					<p class="mt-3 editContent" style="outline: none; cursor: inherit;">Integer sit ut amet mattis quam, sit amet ultricies velit. Praesent ullam corper dui turpis dolor sit amet quam.
					Nulla sed commodo gravida porttitor.</p>
				</div>
				<div class="col-lg-3 col-md-5 bg-right mt-lg-0 mt-4">	
					<ul>
						<li class="editContent" style="outline: none; cursor: inherit;"><span class="fa fa-pagelines" style="outline: none; cursor: inherit;"></span> Crop Cultivation</li>
						<li class="editContent" style="outline: none; cursor: inherit;"><span class="fa fa-pagelines" style="outline: none; cursor: inherit;"></span> Farming Land</li>
						<li class="editContent" style="outline: none; cursor: inherit;"><span class="fa fa-pagelines" style="outline: none; cursor: inherit;"></span> Harvesting Crops</li>
						<li class="editContent" style="outline: none; cursor: inherit;"><span class="fa fa-pagelines" style="outline: none; cursor: inherit;"></span> Improving Agriculture</li>
						<li class="editContent" style="outline: none; cursor: inherit;"><span class="fa fa-pagelines" style="outline: none; cursor: inherit;"></span> Innovators in Agricultural business</li>
						<li class="editContent" style="outline: none; cursor: inherit;"><span class="fa fa-pagelines" style="outline: none; cursor: inherit;"></span> Agricultural Robots</li>
						<li class="editContent" style="outline: none; cursor: inherit;"><span class="fa fa-pagelines" style="outline: none; cursor: inherit;"></span> Grains and Oil seeds</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //text -->

<!-- Products & Services -->
	<?php $this->load->view('beranda/layanan/produk_layanan')?>
<!-- //Products & Services -->

<!-- Why Choose Us -->
	<?php $this->load->view('beranda/layanan/alasan')?>
<!-- Why Choose Us -->


<!-- footer -->
<?php $this->load->view('beranda/footer')?>
<!-- //footer -->

<!-- copyright -->
	<?php $this->load->view('beranda/copyright')?>
<!-- //copyright -->
		
<!-- move top icon -->
<a href="#home" class="move-top text-center"></a>
<!-- //move top icon --></div>
	


</body></html>