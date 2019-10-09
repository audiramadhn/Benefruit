<html><head>
    
    <?php $this->load->view('beranda/header')?>
	
</head>

<body>

    <div id="page" class="page">

<!-- header -->
    <?php $this->load->view('beranda/navbar')?>
<!-- //header -->

<!-- banner -->
<div class="inner-banner bg bg1" id="home" style="outline: none; cursor: inherit;">
	<div class="container">
	</div>
</div>
<!-- //banner -->

<!-- about -->
<section class="about py-5 editContent" id="about" style="outline: none; cursor: inherit;">
	<div class="container py-lg-5 py-sm-3">
		<h3 class="heading mb-sm-5 mb-4 text-center editContent" style="outline: none; cursor: inherit;"> Tentang Benefruit</h3>
		<div class="row">
			<div class="col-lg-6 about-left">
				<h5 class="mb-3 editContent" style="outline: none; cursor: inherit;">Tujuan Utama Kami</h5>
				<h3 class="mb-lg-4 mb-2 editContent" style="outline: none; cursor: inherit;">Membantu Investor, Mitra, dan Petani.</h3>
				<h4 class="editContent" style="outline: none; cursor: inherit;">Mewujudkan industri pertanian yang berkemajuan guna menghadapi revolusi industri 4.0</h4>
			</div>
			<div class="col-lg-6 pl-xl-5 mt-lg-0 mt-4 about-right">
				<p class="editContent" style="outline: none; cursor: inherit;">Benefruit bertujuan menampung para investor, mitra, dan petani dalam rangka membantu investor menemukan mitra dan petani yang memiliki hasil pertanian dan pengolahannya yang berkualitas tinggi. </p>
				<p class="pt-3 mt-3 border-top editContent" style="outline: none; cursor: inherit;"><span class="fa fa-quote-left text-color mr-2" style="outline: none; cursor: inherit;"></span>Hasil dari penjualan produk menggunakan sistem bagi hasil sesuai hukum syariat islam.<span class="fa fa-quote-right text-color mr-2" style="outline: none; cursor: inherit;"></span></p>
			</div>
		</div>
	</div>
</section>
<!-- //about -->
    <?php $this->load->view('beranda/about/visi_misi')?>
<!-- about bottom -->
<div class="abt_bottom py-md-5 editContent" style="outline: none; cursor: inherit;">
	<div class="container py-md-4 py-5">
		<div class="row">
			<div class="col-md-9">
				<h4 class="abt-text text-capitalize editContent" style="outline: none; cursor: inherit;">We give you Care tips and Ideas on what style suits your garden</h4>
			</div>
			<div class="col-md-3">
				<a href="services.html" class="text-capitalize serv_link btn" style="outline: none; cursor: inherit;">our Services</a>
			</div>
		</div>
	</div>
</div>
<!-- //about bottom -->

<!-- stats -->
<section class="w3_stats bg bg1" id="stats" style="outline: none; cursor: inherit;">
	<div class="overlay-clr py-sm-5">
		<div class="container">
			<div class="w3-stats py-5 editContent" style="outline: none; cursor: inherit;">
				<div class="row">
					<div class="col-lg-3 col-6">
						<div class="counter">
							<span class="fa fa-smile-o" style="outline: none; cursor: inherit;"></span>
							<div class="timer count-title count-number mt-2 editContent" style="outline: none; cursor: inherit;">5100</div>
							<p class="count-text text-uppercase editContent" style="outline: none; cursor: inherit;">happy customers</p>
						</div>
					</div>
					<div class="col-lg-3 col-6">
						<div class="counter">
							<span class="fa fa-pagelines" style="outline: none; cursor: inherit;"></span>
							<div class="timer count-title count-number mt-2 editContent" style="outline: none; cursor: inherit;">2271</div>
							<p class="count-text text-uppercase editContent" style="outline: none; cursor: inherit;">Planted Trees</p>
						</div>
					</div>
					<div class="col-lg-3 col-6 mt-lg-0 mt-5">
						<div class="counter">
							<span class="fa fa-users" style="outline: none; cursor: inherit;"></span>
							<div class="timer count-title count-number mt-2 editContent" style="outline: none; cursor: inherit;">1120+</div>
							<p class="count-text text-uppercase editContent" style="outline: none; cursor: inherit;">Farmers</p>
						</div>
					</div>
					<div class="col-lg-3 col-6 mt-lg-0 mt-5">
						<div class="counter">
							<span class="fa fa-leaf" style="outline: none; cursor: inherit;"></span>
							<div class="timer count-title count-number mt-2 editContent" style="outline: none; cursor: inherit;">2690</div>
							<p class="count-text text-uppercase editContent" style="outline: none; cursor: inherit;">Products</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //stats -->

<!-- team -->
    <?php $this->load->view('beranda/about/anggota')?>
<!-- //team -->

<!-- feedback -->
    <?php $this->load->view('beranda/about/feedback')?>
<!-- //feedback -->

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