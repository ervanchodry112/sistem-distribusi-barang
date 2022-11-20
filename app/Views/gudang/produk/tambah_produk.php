<?php
echo $this->extend('layout/navbar');
echo $this->section('content');
?>

<div class="pagetitle">
	<h1>Tambah Produk</h1>
</div>


<div class="container">
	<div class="card">
		<div class="col">
			<form action="<?= base_url('gudang/add_produk') ?>" method="POST" enctype="multipart/form-data">
				<div class="p-4 row">
					<div class="col-6">
						<div class="form-group">
							<label for="nama_produk">Nama Produk</label>
							<input type="text" name="nama_produk" class="form-control" id="nama_produk">
						</div>
						<div class="form-group">
							<label for="harga">Harga</label>
							<input type="text" name="harga" class="form-control" id="harga">
						</div>
						<div class="form-group">
							<label for="stok">Stok Produk</label>
							<input type="number" name="stok" class="form-control" id="stok">
						</div>
						<div class="mb-3">
							<label for="foto" class="form-label">Upload Foto Produk..</label>
							<input class="form-control" type="file" id="foto">
						</div>
						<button type="submit" class="btn btn-primary mt-3">Submit</button>
					</div>
				</div>
			</form>
		</div>

	</div>
</div>

<?= $this->endSection() ?>