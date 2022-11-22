<?php
echo $this->extend('layout/navbar');
echo $this->section('content');
?>

<div class="pagetitle">
	<h1>Detail Produk</h1>
</div>

<div class="card px-2">
	<div class="card-body pt-1">
		<div class="tab-pane fade show active profile-overview" id="profile-overview">
			<h5 class="card-title"><?= $produk->nama_produk ?></h5>
			<div class="row">
				<div class="col-4 d-flex">
					<img src="/assets/img/produk/<?= ($produk->gambar == null ? "default_product.png" : $produk->gambar) ?>" height="200rem" class="" alt="..." di>
				</div>
				<div class="col-8 d-flex align-middle">
					<table class="table table-borderless w-50">
						<tbody class="align-middle">						
							<tr>
								<td>Id Produk</td>
								<td>: <?= $p->id_produk ?></td>
							</tr>
							<tr>
								<td>Nama Produk</td>
								<td>: <?= $p->nama_produk ?></td>
							</tr>
							<tr>
								<td>Harga Satuan</td>
								<td>: Rp.<?= number_format($p->harga) ?></td>
							</tr>
							<tr>
								<td>Jumlah Stok</td>
								<td>: <?= $p->stok ?></td>
							</tr>					
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>
</div>


<?= $this->endSection() ?>