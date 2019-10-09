<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/header.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("petani/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('Petani/tambahBaru') ?>"><i class="fas fa-plus"></i> Tambah Buah</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama Buah</th>
										<th>Harga/kg</th>
										<th>Stok Buah</th>
										<th>Gambar</th>
										<th>Deskripsi</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($petani as $product): ?>
									<tr>
										<td width="150">
											<?php echo $product->namaBuah ?>
										</td>
										<td>
											<?php echo "Rp. ".number_format($product->hargaBuah,2,',','.') ?>
										</td>
										<td>
											<img src="<?php echo base_url('gambar/buah/'.$product->gambar) ?>" width="64" />
										</td>
										<td class="small">
											<?php echo substr($product->deskBuah, 0, 120) ?></td>
										<td width="250">
											<a href="<?php echo site_url('Petani/ubah/'.$product->idBuah) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Ubah</a>
											<a onclick="deleteConfirm('<?php echo site_url('Petani/hapus/'.$product->idBuah) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("admin/modal.php") ?>

	<?php $this->load->view("admin/js.php") ?>

<script>
	function deleteConfirm(url){
		$('#btn-hapus').attr('href', url);
		$('#deleteModal').modal();
	}
</script>

</body>

</html>