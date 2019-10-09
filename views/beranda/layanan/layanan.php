<html>

<head>
    <?php $this->load->view('beranda/header')?>	
</head>

<body>

    <div id="page" class="page">

<!-- //header -->
    <?php $this->load->view('beranda/navbar')?>
<!-- //header -->

<!-- banner -->
<div class="inner-banner bg bg1" id="home" style="outline: none; cursor: inherit;">
	<div class="container">
	</div>
</div>
<!-- //banner -->

<!-- services -->
<section class="services py-5 editContent" style="outline: none; cursor: inherit;">
	<div class="container py-lg-5">
		<h3 class="heading mb-sm-2 mb-1 text-center editContent" style="outline: none; cursor: inherit;"> Layanan Kami</h3>
		<div class="row editContent pt-5" style="outline: none; cursor: inherit;">
			<div class="col-lg-4 col-sm-6">
				<div class="home-grid editContent" style="outline: none; cursor: inherit;">
					<span class="num-title editContent" style="outline: none; cursor: inherit;">01</span>
					<h4 class="home-title mt-3 editContent" style="outline: none; cursor: inherit;">Crop Cultivation</h4>
					<p class="mt-2 editContent" style="outline: none; cursor: inherit;"> Pellentesque in ipsum id orci porta dapibus roined magna ipsum.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mt-sm-0 mt-4">
				<div class="home-grid editContent" style="outline: none; cursor: inherit;">
					<span class="num-title editContent" style="outline: none; cursor: inherit;">02</span>
					<h4 class="home-title mt-3 editContent" style="outline: none; cursor: inherit;">Farm Plantation</h4>
					<p class="mt-2 editContent" style="outline: none; cursor: inherit;"> Pellentesque in ipsum id orci porta dapibus roined magna ipsum.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mt-lg-0 mt-4">
				<div class="home-grid editContent" style="outline: none; cursor: inherit;">
					<span class="num-title editContent" style="outline: none; cursor: inherit;">03</span>
					<h4 class="home-title mt-3 editContent" style="outline: none; cursor: inherit;">Plant Renovation</h4>
					<p class="mt-2 editContent" style="outline: none; cursor: inherit;"> Pellentesque in ipsum id orci porta dapibus roined magna ipsum.</p>
				</div>
			</div>
		</div>
		
		<div class="row editContent pt-5" style="outline: none; cursor: inherit;">
			<div class="row col-lg-9 mt-lg-1 mt-1 mx-auto px-lg-3 px-0">
				<div class="col-lg-6 col-sm-6">
					<div class="home-grid editContent" style="outline: none; cursor: inherit;">
						<span class="num-title editContent" style="outline: none; cursor: inherit;">04</span>
						<h4 class="home-title mt-3 editContent" style="outline: none; cursor: inherit;">Crop Harvesting</h4>
						<p class="mt-2 editContent" style="outline: none; cursor: inherit;"> Pellentesque in ipsum id orci porta dapibus roined magna ipsum.</p>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 mt-sm-0 mt-4">
					<div class="home-grid editContent" style="outline: none; cursor: inherit;">
						<span class="num-title editContent" style="outline: none; cursor: inherit;">05</span>
						<h4 class="home-title mt-3 editContent" style="outline: none; cursor: inherit;">Gardening Farm</h4>
						<p class="mt-2 editContent" style="outline: none; cursor: inherit;"> Pellentesque in ipsum id orci porta dapibus roined magna ipsum.</p>
					</div>
				</div>
			</div>
		</div>
			
	</div>
</section>
<!-- //services -->

<!-- Why Choose Us -->
    <?php $this->load->view('beranda/layanan/alasan')?>
<!-- Why Choose Us -->

<!-- Products & Services -->
    <?php $this->load->view('beranda/layanan/produk_layanan')?>
<!-- //Products & Services -->

<!-- newsletter -->
    <?php $this->load->view('beranda/layanan/langganan')?>
<!-- //newsletter -->

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