<?php
echo $this->extend('layout/navbar');
echo $this->section('content');
?>

<div class="pagetitle">
	<h1>Pesanan Dalam Proses</h1>
</div>

<section class="content p-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<table class="table table-striped table-bordered border shadow">
					<thead>
						<tr class="table" style="text-align: center;">
							<th scope="col">No</th>
							<th scope="col">Action</th>
							<th scope="col">ID Produk</th>
							<th scope="col">Nama</th>
							<th scope="col">Stock</th>
							<th scope="col">Harga</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						foreach ($produk as $p) {
						?>

							<tr style="text-align: center;">
								<td scope="row"><?= $i++ ?></td>
								<td>
									<!-- detail button -->
									<a class="btn btn-info btn-sm" href="<?= base_url('/gudang/detail_pesanan') ?>" role="button">
										<ion-icon name="eye-outline"></ion-icon>
									</a>

									<!-- restock button -->
									<a class="btn btn-success btn-sm" href="" role="button">
										<ion-icon name="add-circle-outline"></ion-icon>
									</a>
								<td><?= $p->id_produk ?></td>
								<td><?= $p->nama_produk ?></td>
								<td><?= $p->stok ?></td>
								<td><?= $p->harga ?></td>
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