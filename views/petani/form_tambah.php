<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/header.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("produk/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>


				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('produk') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('produk/tambah') ?>" method="post" enctype="multipart/form-data" >
						

							<div class="form-group">
								<label for="name">Nama Buah*</label>
								<input class="form-control <?php echo form_error('namaProduk') ? 'is-invalid':'' ?>"
								 type="text" name="namaProduk" placeholder="Nama Buah" />
								<div class="invalid-feedback">
									<?php echo form_error('namProduk') ?>
								</div>
							</div>

							
							<div class="form-group">
							<label for="sel1">Jenis Produk*</label>
								<select class="form-control" id="sel1" name="jenisProduk">
									<option>- pilih jenis Produk -</option>
									<option value="makanan">Makanan</option>
									<option value="kerajinan">Kerajinan</option>
								</select>
							</div>
							

							<div class="form-group">
								<label for="name">Harga Buah/kg*</label>
								<input class="form-control <?php echo form_error('hargaProduk') ? 'is-invalid':'' ?>"
								 type="text" name="hargaProduk" placeholder="Harga Buah" />
								<div class="invalid-feedback">
									<?php echo form_error('hargaProduk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Stok Buah kg*</label>
								<input class="form-control <?php echo form_error('stokProduk') ? 'is-invalid':'' ?>"
								 type="number" name="stokProduk" min="0" placeholder="Stok Buah kg" />
								<div class="invalid-feedback">
									<?php echo form_error('stokProduk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Gambar</label>
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="gambar" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Dokumen Produk</label>
								<input class="form-control-file <?php echo form_error('docProduk') ? 'is-invalid':'' ?>"
								 type="file" name="docProduk" />
								<div class="invalid-feedback">
									<?php echo form_error('docProduk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Deskripsi*</label>
								<textarea class="form-control <?php echo form_error('deskProduk') ? 'is-invalid':'' ?>"
								 name="deskProduk" placeholder="Deskripsi Produk..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('deskProduk') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Simpan" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						*Harus Diisi!
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/scrolltop.php") ?>

		<?php $this->load->view("admin/js.php") ?>

</body>

</html>