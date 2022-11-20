<?php
echo $this->extend('layout/navbar');
echo $this->section('content');
?>

<div class="pagetitle">
	<h1>Produk</h1>
</div>

<section class="content p-5">
	<div class="container-fluid">
		<div class="col d-flex">
			<a href="<?= base_url('/gudang/tambah_produk') ?>" class="btn btn-primary mb-3 d-flex align-items-center">
				<ion-icon name="add" class="me-2"></ion-icon>
				<span>Add Produk</span>
			</a>
		</div>
		<div class="row">
			<div class="col-12">
				<table class="table table-striped table-bordered border shadow">
					<thead>
						<tr class="table" style="text-align: center;">
							<th scope="col">No</th>
							<th scope="col">ID Produk</th>
							<th scope="col">Nama</th>
							<th scope="col">Harga</th>
							<th scope="col">Stock</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						foreach ($produk as $p) {
						?>

							<tr style="text-align: center;">
								<td scope="row"><?= $i++ ?></td>
								<td><?= $p->id_produk ?></td>
								<td><?= $p->nama_produk ?></td>
								<td><?= $p->harga ?></td>
								<td><?= $p->stok ?></td>
								<td>
									<!-- detail button -->
									<a class="btn btn-primary btn-sm" href="<?= base_url('/gudang/detail_pesanan') ?>" role="button">
										<i class="bi bi-file-text"></i>
									</a>

									<!-- restock button -->
									<a class="btn btn-success btn-sm" href="<?= base_url('/gudang/edit/' . $p->id_produk) ?>" role="button">
										<i class="bi bi-clipboard-plus"></i>
									</a>
								</td>
							</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection() ?>