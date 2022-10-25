<?php
echo $this->extend('layout/navbar');
echo $this->section('content');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>
						<!-- Masukkan Judul Halaman disini -->
					</h1>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content p-5">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<table class="table table-striped table-bordered border shadow">
						<thead>
							<tr class="table" style="text-align: center;">
								<th scope="col">No</th>
								<th scope="col">Action</th>
								<th scope="col">Id Pesanan</th>
								<th scope="col">Nama Produk</th>
								<th scope="col">Jumlah</th>
								<th scope="col">Harga Satuan</th>
								<th scope="col">Total</th>
								<th scope="col">Nama Toko</th>
								<th scope="col">Alamat</th>

							</tr>
						</thead>
						<tbody>
							<tr>
								<td scope="row">1</td>
								<td>
									<!-- prosses button -->
									<a class="btn btn-success btn-sm" href="" role="button">
										<ion-icon name="cube-outline"></ion-icon>
									</a>
									<!-- detail button -->
									<a class="btn btn-info btn-sm" href="<?= base_url('/supir/detail_pesanan') ?>" role="button">
										<ion-icon name="search-outline"></ion-icon>
									</a>
								</td>
								<td>ID1</td>
								<td>Odol</td>
								<td>10</td>
								<td>Rp. 10.000</td>
								<td>Rp. 100.000</td>
								<td>Bang Toko</td>
								<td>Kemiling</td>
							</tr>
							<tr>
								<td scope="row">2</td>
								<td>
									<!-- prosses button -->
									<a class="btn btn-success btn-sm" href="" role="button">
										<ion-icon name="cube-outline"></ion-icon>
									</a>
									<!-- detail button -->
									<a class="btn btn-info btn-sm" href="<?= base_url('/supir/detail_pesanan') ?>" role="button">
										<ion-icon name="search-outline"></ion-icon>
									</a>
								</td>
								<td>ID2</td>
								<td>Pepsoden</td>
								<td>5</td>
								<td>Rp. 12.000</td>
								<td>Rp. 60.000</td>
								<td>Mas Toko</td>
								<td>Tengah Trikora</td>

							</tr>
							<tr>
								<td scope="row">3</td>
								<td>
									<!-- prosses button -->
									<a class="btn btn-success btn-sm" href="" role="button">
										<ion-icon name="cube-outline"></ion-icon>
									</a>
									<!-- detail button -->
									<a class="btn btn-info btn-sm" href="<?= base_url('/supir/detail_pesanan') ?>" role="button">
										<ion-icon name="search-outline"></ion-icon>
									</a>
								</td>
								<td>ID3</td>
								<td>Ciptadent</td>
								<td>5</td>
								<td>Rp. 12.000</td>
								<td>Rp. 60.000</td>
								<td>Mba Toko</td>
								<td>Sukasepi</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= $this->endSection() ?>