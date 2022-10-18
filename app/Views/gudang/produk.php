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
						<tr>
							<td scope="row">1</td>
							<td style="text-align: center;">
								<!-- detail button -->
								<a class="btn btn-info btn-sm" href="<?= base_url('/gudang/detail_pesanan') ?>" role="button">
									<ion-icon name="search-outline"></ion-icon>
								</a>
							</td>
							<td>PD1</td>
							<td>Chitato</td>
							<td>10</td>
							<td>Rp. 10000</td>
						</tr>
						<tr>
							<td scope="row">2</td>
							<td style="text-align: center;">
								<!-- detail button -->
								<a class="btn btn-info btn-sm" href="<?= base_url('/gudang/detail_pesanan') ?>" role="button">
									<ion-icon name="search-outline"></ion-icon>
								</a>
							</td>
							<td>PD2</td>
							<td>Lays</td>
							<td>12</td>
							<td>Rp. 12000</td>
						</tr>
						<tr>
							<td scope="row">3</td>
							<td style="text-align: center;">
								<!-- detail button -->
								<a class="btn btn-info btn-sm" href="<?= base_url('/gudang/detail_pesanan') ?>" role="button">
									<ion-icon name="search-outline"></ion-icon>
								</a>
							</td>
							<td>PD3</td>
							<td>Qtela</td>
							<td>18</td>
							<td>Rp. 8000</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection() ?>