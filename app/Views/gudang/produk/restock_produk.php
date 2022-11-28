<?php
echo $this->extend('layout/navbar');
echo $this->section('content');
?>

<div class="pagetitle">
	<h1>Restock Produk</h1>
</div>


<div class="container">
	<div class="card">
		<div class="col">
			<form action="<?= base_url('gudang/restock_produk') ?>" method="POST">
				<div class="p-4 row">
					<div class="col-6">
						<div class="form-group">
							<input type="hidden" name="id_produk" value="<?= $produk->id_produk ?>">
							<label for="nama_produk">Nama Produk</label>
							<input type="text" name="nama_produk" class="form-control" id="nama_produk" value="<?= $produk->nama_produk ?>" disabled>
						</div>
						<div class="form-group">
							<label for="harga">Harga</label>
							<input type="text" name="harga" class="form-control" id="harga" value="<?= $produk->harga ?>" disabled>
						</div>
						<div class="form-group">
							<label for="stok">Jumlah Restock</label>
							<input type="number" name="stok" class="form-control" id="stok" value="" placeholder="<?= $produk->stok ?>">
						</div>
						<div class="row ms-1">
							<button type="submit" class="btn btn-primary mt-3 col-2">Submit</button>
							<a href="<?= base_url('gudang/produk') ?>" class="btn btn-secondary col-2 mt-3 ms-2">Cancel</a>
						</div>
					</div>
				</div>
			</form>
		</div>

	</div>
</div>

<?= $this->endSection() ?>