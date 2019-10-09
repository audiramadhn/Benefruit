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

<!-- contact -->
<section class="contact py-5 editContent" style="outline: none; cursor: inherit;">
	<div class="container py-sm-3">
		<h3 class="heading mb-sm-2 mb-1 text-center editContent" style="outline: none; cursor: inherit;"> Hubungi Kami</h3>
		<div class="row map-pos editContent pt-5" style="outline: none; cursor: inherit;">
			<div class="col-lg-4 col-md-6 address-row">
				<div class="row">
					<div class="col-2 address-left">
						<div class="contact-icon editContent" style="outline: none; cursor: inherit;">
							<span class="fa fa-home" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
						</div>
					</div>
					<div class="col-10 address-right">
						<h5 class="editContent" style="outline: none; cursor: inherit;">Kunjungi kami di</h5>
						<p class="editContent" style="outline: none; cursor: inherit;">Jl. Jend. A. Yani No. 117, Surabaya.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 address-row w3-agileits">
				<div class="row">
					<div class="col-2 address-left">
						<div class="contact-icon editContent" style="outline: none; cursor: inherit;">
							<span class="fa fa-envelope" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
						</div>
					</div>
					<div class="col-10 address-right">
						<h5 class="editContent" style="outline: none; cursor: inherit;">Kirim surel ke</h5>
						<p><a href="mailto:info@example.com" class="editContent" style="outline: none; cursor: inherit;">benefruit@gmail.com</a></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 address-row">
				<div class="row">
					<div class="col-2 address-left">
						<div class="contact-icon editContent" style="outline: none; cursor: inherit;">
							<span class="fa fa-phone" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
						</div>
					</div>
					<div class="col-10 address-right">
						<h5 class="editContent" style="outline: none; cursor: inherit;">Telfon kami</h5>
						<p class="editContent" style="outline: none; cursor: inherit;">+12(345) 6789 111</p>
					</div>
				</div>
			</div>
		</div>
		<form action="#" method="post">
			<div class="row">
				<div class="col-md-6 contact-left">
					<div class="editContent" style="outline: none; cursor: inherit;">
						<input type="text" name="nama" placeholder="Nama" required="">
					</div>
					<div class="editContent" style="outline: none; cursor: inherit;">
						<input type="email" name="email" placeholder="Email" required="">
					</div>
					<div class="editContent" style="outline: none; cursor: inherit;">
						<input type="text" name="nomerHP" placeholder="Nomer Telepon" required="">
					</div>
				</div>
				<div class="col-md-6 contact-right">
					<div class="editContent" style="outline: none; cursor: inherit;">
						<textarea name="Message" placeholder="Komentar" required=""></textarea>
					</div>
					<button class="btn" style="outline: none; cursor: inherit;">Kirim</button>
				</div>
			</div>
		</form>
		<!-- map -->
		<div class="map mt-5 editContent" style="outline: none; cursor: inherit;">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1859251.8642025779!2d-76.08274894689792!3d40.06224332601239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c0fb959e00409f%3A0x2cd27b07f83f6d8d!2sNew+Jersey%2C+USA!5e0!3m2!1sen!2sin!4v1474436926209" allowfullscreen=""></iframe>
		</div>
		<!-- //map -->
	</div>
</section>
<!-- //contact -->

<!-- footer -->
    <?php $this->load->view('beranda/footer')?>
<!-- //footer -->

<!-- copyright -->
    <?php $this->load->view('beranda/copyright')?>
<!-- //copyright -->
		
<!-- move top icon -->
<a href="#home" class="move-top text-center"></a>
<!-- //move top icon --></div>
	


</body>
</html>