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
								<th scope="col">Id Pesanan</th>
								<th scope="col">Jumlah</th>
								<th scope="col">Nama Toko</th>
								<th scope="col">Status Pesanan</th>
								<th scope="col">Alamat</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1;
							foreach ($pengiriman as  $dalam_pengiriman => $pengiriman) : ?>
								<tr>
									<td scope="row"><?= $i++ ?></td>
									<td style="text-align: center;">
										<!-- detail button -->
										<a class="btn btn-info btn-sm" href="<?= base_url('/supir/detail_pesanan' . $pengiriman->id) ?>" role="button">
											<ion-icon name="search-outline"></ion-icon>
										</a>
										<!-- reject button -->
										<a class="btn btn-danger btn-sm" href="<?= base_url('supir/cancel_pesanan/' . $pengiriman->id) ?>" role="button">
											<ion-icon name="close-outline"></ion-icon>
										</a>
										<!-- success button -->
										<a class="btn btn-success btn-sm" href="#" role="button">
											<ion-icon name="checkmark-outline"></ion-icon>
										</a>
									<td><?= $p->id_pesanan ?></td>
									<td><?= $p->nama_toko ?></td>
									<td><?= $p->alamat ?></td>
									<td><?= $p->nama_toko ?></td>
									<td><?= $p->nama_status ?></td>
								</tr>
							<?php endforeach; ?>
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