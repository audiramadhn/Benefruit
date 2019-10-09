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

				

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
                                        <th>Tanggal Pesan</th>
										<th>Nama Pemesan (Mitra)</th>
										<th>Nama Buah</th>
										<th>Harga/kg</th>
										<th>Quantity</th>
                                        <th>Total Harga</th>
                                        <th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($produk as $product): ?>
									<tr>
										<td width="150">
											<?php echo $product->nama_produk ?>
										</td>
										<td>
											<?php echo "Rp. ".number_format($product->harga,2,',','.') ?>
										</td>
										<td>
											<img src="<?php echo base_url('gambar/produk/'.$product->gambar) ?>" width="64" />
										</td>
										<td class="small">
											<?php echo substr($product->deskripsi, 0, 120) ?></td>
										<td width="250">
											<a href="<?php echo site_url('produk/ubah/'.$product->id_produk) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Ubah</a>
											<a onclick="deleteConfirm('<?php echo site_url('produk/hapus/'.$product->id_produk) ?>')"
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