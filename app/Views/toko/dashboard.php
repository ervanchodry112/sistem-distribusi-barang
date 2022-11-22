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
									<ion-icon class="text-primary" name="cube" style="font-size: 4rem;"></ion-icon>
								</div>
								<div class="col-8 align-end">
									<div class="text-end text-muted">Semua Pesanan</div>
									<div class="text-primary text-end h1" style="font-size: 3rem;"><strong><?= $semua_pesanan_card ?></strong></div>
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
									<div class="text-primary text-end h1" style="font-size: 3rem;"><strong><?= $pesanan_diproses_card ?></strong></div>
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
									<div class="text-primary text-end h1" style="font-size: 3rem;"><strong><?= $pesanan_selesai_card ?></strong></div>
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
								<button class="nav-link active" data-bs-toggle="tab" data-bs-target="#dashboard-semua">Semua Pesanan</button>
							</li>

							<li class="nav-item">
								<button class="nav-link" data-bs-toggle="tab" data-bs-target="#dashboard-diproses">Pesanan Diproses</button>
							</li>

							<li class="nav-item">
								<button class="nav-link" data-bs-toggle="tab" data-bs-target="#dashboard-selesai">Pesanan Selesai</button>
							</li>

						</ul>
						<div class="tab-content pt-2">

							<div class="tab-pane fade show active dashboard-semua" id="dashboard-semua">
								<table class="table table-hover">
									<thead>
										<tr class="table" style="text-align: center;">
											<th scope="col">No</th>
											<th scope="col">Id Pesanan</th>
											<th scope="col">Tanggal</th>
											<th scope="col">Status Pesanan</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i = 1;
										foreach ($semua_pesanan as $p) {
										?>
											<tr style="text-align: center;">
												<td scope="row"><?= $i++ ?></td>
												<td><?= $p->receipt ?></td>
												<td><?= $p->tanggal ?></td>
												<td class="text-<?= ($p->id_status == 5 ? 'danger' : ($p->id_status == 4 ? 'success' : 'warning')) ?>"><strong><?= $p->nama_status ?></strong></td>
												<td>
													<!-- detail button -->
													<a class="btn btn-primary btn-sm" href="<?= base_url('/gudang/detail_pesanan') ?>" role="button">
														<i class="bi bi-file-text"></i>
													</a>
													<!-- reject button -->
													<?php
													if (!($p->id_status == 4 || $p->id_status == 5)) {
													?>
														<a class="btn btn-danger btn-sm" href="<?= base_url('toko/delete_pesanan/' . $p->id_pesanan) ?>" role="button" onclick="return confirm('Yakin Ingin Membatalkan Pesanan?')">
															<i class="bi bi-trash3"></i>
														</a>
													<?php
													}
													?>
												</td>
											</tr>
										<?php
										}
										?>
									</tbody>
								</table>
							</div>

							<div class="tab-pane fade show active dashboard-diproses" id="dashboard-diproses">
								<table class="table table-hover">
									<thead>
										<tr style="text-align: center;">
											<th scope="col">No</th>
											<th scope="col">Id Pesanan</th>
											<th scope="col">Tanggal</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i = 1;
										foreach ($pesanan_diproses as $p) {
										?>
											<tr style="text-align: center;">
												<td scope="row"><?= $i++ ?></td>
												<td><?= $p->receipt ?></td>
												<td><?= $p->tanggal ?></td>
												<td>
													<!-- detail button -->
													<a class="btn btn-primary btn-sm" href="<?= base_url('/gudang/detail_pesanan') ?>" role="button">
														<i class="bi bi-file-text"></i>
													</a>
													<!-- reject button -->
													<a class="btn btn-danger btn-sm" href="<?= base_url('toko/delete_pesanan/' . $p->id_pesanan) ?>" role="button" onclick="return confirm('Yakin Ingin Membatalkan Pesanan?')">
														<i class="bi bi-trash3"></i>
													</a>
												</td>
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
										<tr style="text-align: center;">
											<th scope="col">No</th>
											<th scope="col">Id Pesanan</th>
											<th scope="col">Tanggal</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i = 1;
										foreach ($pesanan_selesai as $p) {
										?>

											<tr style="text-align: center;">
												<td scope="row"><?= $i++ ?></td>
												<td><?= $p->receipt ?></td>
												<td><?= $p->tanggal ?></td>
												<td>
													<!-- detail button -->
													<a class="btn btn-primary btn-sm" href="<?= base_url('/gudang/detail_pesanan') ?>" role="button">
														<i class="bi bi-file-text"></i>
													</a>
												</td>
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
	</div>
</section>
<!-- /.content -->
<!-- /.content-wrapper -->

<?= $this->endSection() ?>