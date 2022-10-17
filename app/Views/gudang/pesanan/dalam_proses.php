<?php
echo $this->extend('layout/navbar');
echo $this->section('content');
?>

<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="pagetitle">
	<h1>Pesanan Dalam Proses</h1>
</div>

<!-- Main content -->
<section class="content p-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<table class="table table-striped border shadow">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Id Pesanan</th>
							<th scope="col">Jumlah</th>
							<th scope="col">Nama Toko</th>
							<th scope="col">Status Pesanan</th>
							<th scope="col">Alamat</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td scope="row">1</td>
							<td>ID4</td>
							<td>10</td>
							<td>Bang Toko</td>
							<td>Dikemas</td>
							<td>Kemiling</td>
						</tr>
						<tr>
							<td scope="row">2</td>
							<td>ID2</td>
							<td>5</td>
							<td>Mas Toko</td>
							<td>Dikirim</td>
							<td>Tengah Trikora</td>
						</tr>
						<tr>
							<td scope="row">3</td>
							<td>ID3</td>
							<td>5</td>
							<td>Mba Toko</td>
							<td>Diterima</td>
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