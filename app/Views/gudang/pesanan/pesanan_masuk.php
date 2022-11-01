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
				<table class="table table-striped table-bordered border shadow">
					<thead>
						<tr class="table" style="text-align: center;">
							<th scope="col">No</th>
							<th scope="col">Action</th>
							<th scope="col">Id Pesanan</th>
							<th scope="col">Nama Toko</th>
							<th scope="col">Tanggal</th>
							<th scope="col">Alamat</th>

						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						foreach ($pesanan as $p) {
						?>

							<tr style="text-align: center;">
								<td scope="row"><?= $i++ ?></td>
								<td>
									<!-- prosses button -->
									<a class="btn btn-success btn-sm" href="<?= base_url('/gudang/proses/' . $p->id_pesanan) ?>" role="button">
										<i class="bi bi-box2"></i>
									</a>
									<!-- detail button -->
									<a class="btn btn-secondary btn-sm" href="<?= base_url('/gudang/detail_pesanan') ?>" role="button">
										<ion-icon name="eye-outline"></ion-icon>
									</a>
									<!-- reject button -->
									<a class="btn btn-danger btn-sm" href="#" role="button">
										<i class="bi bi-trash3"></i>
									</a>
									<!-- print button -->
									<a class="btn btn-primary btn-sm" href="#" role="button">
										<ion-icon name="print-outline"></ion-icon>
									</a>
								</td>
								<td><?= $p->id_pesanan ?></td>
								<td><?= $p->nama_toko ?></td>
								<td><?= $p->tanggal ?></td>
								<td><?= $p->alamat ?></td>
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
<!-- /.content -->

<!-- /.content-wrapper -->

<?= $this->endSection() ?>