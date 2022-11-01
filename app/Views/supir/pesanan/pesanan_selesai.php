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
							<tr class="table">
								<th scope="col">No</th>
								<th scope="col">Action</th>
								<th scope="col">Id</th>
								<th scope="col">Jumlah</th>
								<th scope="col">Total</th>
								<th scope="col">Nama Toko</th>
								<th scope="col">Status Pesanan</th>
								<th scope="col">Nama Kurir</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td scope="row">1</td>
								<td style="text-align: center;">
									<!-- detail button -->
									<a class="btn btn-info btn-sm" href="<?= base_url('/supir/detail_pesanan') ?>" role="button">
										<ion-icon name="search-outline"></ion-icon>
									</a>
								</td>
								<td>
									<?= $p->id_pesanan ?></td>
								<td><?= $p->jumlah ?></td>
								<td><?= $p->total ?></td>
								<td><?= $p->nama_toko ?></td>
								<td><?= $p->nama_status ?></td>


							</tr>
							<tr>
								<td scope="row">2</td>
								<td style="text-align: center;">
									<!-- detail button -->
									<a class="btn btn-info btn-sm" href="<?= base_url('/supir/detail_pesanan') ?>" role="button">
										<ion-icon name="search-outline"></ion-icon>
									</a>
								</td>
								<td>ID8</td>
								<td>5</td>
								<td>Rp. 50000</td>
								<td>Mas Toko</td>
								<td>Selesai</td>
								<td>Mas Adi</td>
							</tr>
							<tr>
								<td scope="row">3</td>
								<td style="text-align: center;">
									<!-- detail button -->
									<a class="btn btn-info btn-sm" href="<?= base_url('/supir/detail_pesanan') ?>" role="button">
										<ion-icon name="search-outline"></ion-icon>
									</a>
								</td>
								<td>ID9</td>
								<td>5</td>
								<td>Rp. 50000</td>
								<td>Mba Toko</td>
								<td>Selesai</td>
								<td>Mas Azka</td>
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