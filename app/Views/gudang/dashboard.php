<?php
echo $this->extend('layout/navbar');
echo $this->section('content');
?>

<!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
<div class="pagetitle">
	<h1>Dashboard</h1>
</div>

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<!-- Masukkan content utama disini -->
				<div class="row">
					<!--Card Pesanan Masuk  -->
					<div class="col-sm-4">
						<div class="card p-4">
							<div class="row d-flex align-items-center">
								<div class="col-4">
									<ion-icon class="text-primary" name="log-in" style="font-size: 4rem;"></ion-icon>
								</div>
								<div class="col-8 align-end">
									<div class="text-end text-muted">Pesanan Masuk</div>
									<div class="text-primary text-end h1" style="font-size: 3rem;"><strong><?= $pesanan_masuk ?></strong></div>
								</div>
							</div>
						</div>
					</div>
					<!-- Card Pesanan Masuk -->

					<!-- Card pesanan dalam proses -->
					<div class="col-sm-4">
						<div class="card p-4">
							<div class="row d-flex align-items-center">
								<div class="col-4">
									<ion-icon class="text-primary" name="refresh" style="font-size: 3rem;"></ion-icon>
								</div>
								<div class="col-8 align-end">
									<div class="text-end text-muted">Dalam Proses</div>
									<div class="text-primary text-end h1" style="font-size: 3rem;"><strong><?= $pesanan_diproses ?></strong></div>
								</div>
							</div>
						</div>
					</div>
					<!-- Card Pesanan dalam Proses -->

					<!-- Card Pesanan selesai -->
					<div class="col-sm-4">
						<div class="card p-4">
							<div class="row d-flex align-items-center">
								<div class="col-4">
									<ion-icon class="text-primary" name="checkmark-circle" style="font-size: 4rem;"></ion-icon>
								</div>
								<div class="col-8 align-end">
									<div class="text-end text-muted">Pesanan Selesai</div>
									<div class="text-primary text-end h1" style="font-size: 3rem;"><strong><?= $pesanan_selesai ?></strong></div>
								</div>
							</div>
						</div>
					</div>
					<!-- Card Pesanan selesai -->
				</div>

				<div class="card">
					<div class="card-body pt-3">
						<!-- Bordered Tabs -->
						<ul class="nav nav-tabs nav-tabs-bordered d-flex justify-content-evenly">

							<li class="nav-item">
								<button class="nav-link active" data-bs-toggle="tab" data-bs-target="#dashboard-masuk">Pesanan Masuk</button>
							</li>

							<li class="nav-item">
								<button class="nav-link" data-bs-toggle="tab" data-bs-target="#dashboard-selesai">Pesanan Selesai</button>
							</li>

						</ul>
						<div class="tab-content pt-2">

							<div class="tab-pane fade show active dashboard-masuk" id="dashboard-masuk">
								<table class="table table-hover">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Id Pesanan</th>
											<th scope="col">Nama Toko</th>
											<th scope="col">Tanggal</th>
											<th scope="col">Alamat</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i = 1;
										foreach ($pesanan_masuk_list as $p) {
										?>
											<tr>
												<td scope="row"><?= $i++ ?></td>
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


							<div class="tab-pane fade show dashboard-selesai" id="dashboard-selesai">
								<table class="table table-hover">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Id Pesanan</th>
											<th scope="col">Nama Toko</th>
											<th scope="col">Nama Supir</th>
											<th scope="col">Status Pesanan</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i = 1;
										foreach ($pesanan_selesai_list as $p) {
										?>

											<tr style="text-align: center;">
												<td scope="row"><?= $i++ ?></td>
												<td><?= $p->id_pesanan ?></td>
												<td><?= $p->nama_toko ?></td>
												<td><?= $p->nama_supir ?></td>
												<td><?= $p->status_pesanan ?></td>
											</tr>
										<?php
										}
										?>
									</tbody>
								</table>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
</section>
<!-- /.content -->
<!-- /.content-wrapper -->

<?= $this->endSection() ?>