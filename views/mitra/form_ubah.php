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

						<form action="<?php base_url('produk/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id_produk" value="<?php echo $produk->id_produk?>" />

							<div class="form-group">
								<label for="name">Nama Produk*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="nama_produk" placeholder="Nama Produk" value="<?php echo $produk->nama_produk ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
							<label for="sel1">Jenis Produk*</label>
								<select class="form-control" id="sel1" name="jenis">
									<option>- pilih jenis produk -</option>
									<option value="buah">Kue Kering</option>
									<option value="biji">Desert</option>
								</select>
							</div>

							<div class="form-group">
								<label for="name">Harga Produk*</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="text" name="harga" placeholder="Harga Produk" value="<?php echo $produk->nama_produk ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Gambar</label>
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="gambar" />
								<input type="hidden" name="gambar_lawas" value="<?php echo $produk->gambar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>
        
							<div class="form-group">
								<label for="price">Estimasi Stok Produk Jadi*</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="number" name="harga" min="0" placeholder="Estimasi" value="<?php echo $produk->harga ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="price">Jangka Waktu Investasi*</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="number" name="harga" min="0" placeholder="Jangka Waktu Investasi" value="<?php echo $produk->harga ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="price">Prosentase Keuntungan*</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="number" name="harga" min="0" placeholder="Prosentase Keuntungan" value="<?php echo $produk->harga ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Deskripsi*</label>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 name="deskripsi" placeholder="Deskripsi Produk..."><?php echo $produk->deskripsi ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Simpan" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						*Harus Diisi
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