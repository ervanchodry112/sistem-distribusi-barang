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
									<i class="bi bi-box-seam text-primary" style="font-size: 3rem;"></i>
								</div>
								<div class="col-8 align-end">
									<div class="text-end text-muted">Siap Kirim</div>
									<div class="text-primary text-end h1" style="font-size: 3rem;"><strong><?= $siap ?></strong></div>
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
									<i class="bi bi-truck text-primary" style="font-size: 3rem;"></i>
								</div>
								<div class="col-8 align-end">
									<div class="text-end text-muted">Dalam Pengiriman</div>
									<div class="text-primary text-end h1" style="font-size: 3rem;"><strong><?= $kirim ?></strong></div>
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
									<div class="text-primary text-end h1" style="font-size: 3rem;"><strong><?= $selesai ?></strong></div>
								</div>
							</div>
						</div>
					</div>
					<!-- Card Pesanan selesai -->
				</div>

				<div class="row">
					<div class="col-12">
						<div class="card p-4">
							<h5 class="card-title">Pesanan</h5>
							<?php
							foreach ($pesanan as $p) {
							?>
								<div class="col-4">
									<div class="card" style="width: 18rem; height: 20rem;">
										<div class="card-body" style="margin-top: -20px">
											<h5 class="card-title" style="margin-bottom: -10px;">Pesanan <?= $p->id_pesanan ?></h5>
											<p class="card-text" style="margin-bottom: -10px;">Pengirim : <?= $p->nama_pengirim ?></p>
										</div>
									</div>
								</div>
							<?php
							}
							?>
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