<?php
echo $this->extend('layout/navbar');
echo $this->section('content');
?>

<!-- Content Wrapper. Contains page content -->
<div class="pagetitle">
	<h1>Pesanan Masuk</h1>
</div>

<!-- Main content -->
<section class="content mt-3">
	<div class="container-fluid">
		<div class="row">
			<div class="col-2">
				<a href="" class="btn btn-primary btn-sm mb-3 d-flex align-items-center">
					<ion-icon name="add" class="me-2"></ion-icon>
					<span>Buat Pesanan</span>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<table class="table table-striped table-bordered border shadow text-center">
					<thead>
						<tr class="table" style="text-align: center;">
							<th scope="col">No</th>
							<th scope="col">Action</th>
							<th scope="col">Id Pesanan</th>
							<th scope="col">Nama Produk</th>
							<th scope="col">Jumlah</th>
							<th scope="col">Harga Satuan</th>
							<th scope="col">Total</th>

						</tr>
					</thead>
					<tbody>
						<tr>
							<td scope="row">1</td>
							<td>
								<!-- prosses button -->
								<a class="btn btn-success btn-sm" href="" role="button">
									<ion-icon name="create-outline"></ion-icon>
								</a>
								<!-- detail button -->
								<a class="btn btn-info btn-sm" href="<?= base_url('detail') ?>" role="button">
									<ion-icon name="search-outline"></ion-icon>
								</a>
								<!-- reject button -->
								<a class="btn btn-danger btn-sm" href="#" role="button">
									<ion-icon name="trash-outline"></ion-icon>
								</a>
								<!-- print button -->

							</td>
							<td>ID1</td>
							<td>Odol</td>
							<td>10</td>
							<td>Rp. 10.000</td>
							<td>Rp. 100.000</td>
						</tr>
						<tr>
							<td scope="row">2</td>
							<td>
								<!-- prosses button -->
								<a class="btn btn-success btn-sm" href="#" role="button">
									<ion-icon name="create-outline"></ion-icon>
								</a>
								<!-- detail button -->
								<a class="btn btn-info btn-sm" href="<?= base_url('/gudang/detail_pesanan') ?>" role="button">
									<ion-icon name="search-outline"></ion-icon>
								</a>
								<!-- reject button -->
								<a class="btn btn-danger btn-sm" href="#" role="button">
									<ion-icon name="trash-outline"></ion-icon>
								</a>
								<!-- print button -->

							</td>
							<td>ID2</td>
							<td>Pepsoden</td>
							<td>5</td>
							<td>Rp. 12.000</td>
							<td>Rp. 60.000</td>

						</tr>
						<tr>
							<td scope="row">3</td>
							<td>
								<!-- prosses button -->
								<a class="btn btn-success btn-sm" href="#" role="button">
									<ion-icon name="create-outline"></ion-icon>
								</a>
								<!-- detail button -->
								<a class="btn btn-info btn-sm" href="<?= base_url('/gudang/detail_pesanan') ?>" role="button">
									<ion-icon name="search-outline"></ion-icon>
								</a>
								<!-- reject button -->
								<a class="btn btn-danger btn-sm" href="#" role="button">
									<ion-icon name="trash-outline"></ion-icon>
								</a>
								<!-- print button -->

							</td>
							<td>ID3</td>
							<td>Ciptadent</td>
							<td>5</td>
							<td>Rp. 12.000</td>
							<td>Rp. 60.000</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection() ?>