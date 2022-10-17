<?php
echo $this->extend('layout/navbar');
echo $this->section('content');
?>

<!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
<div class="pagetitle">
	<h1>Pesanan Masuk</h1>
</div>

<!-- Main content -->
<section class="content p-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<table class="table table-striped border shadow">
					<thead>
						<tr class="table">
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
							<th>
								<button>
									<ion-icon name="cube-outline"></ion-icon>
								</button>

							</th>
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
							<th>
								<button>
									<ion-icon name="cube-outline"></ion-icon>
								</button>

							</th>
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
							<th>
								<button>
									<ion-icon name="cube-outline"></ion-icon>
								</button>
							</th>
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

<!-- /.content-wrapper -->

<?= $this->endSection() ?>