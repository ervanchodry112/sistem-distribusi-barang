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

				<div class="row">
					<div class="col-12">
						<div class="card p-4">
							<h5 class="card-title">Area Chart</h5>

							<!-- Area Chart -->
							<div id="areaChart"></div>

							<script>
								console.log(
									"<?php
										foreach ($tanggal_masuk as $tg) {
											echo "\'" . $tg->tanggal . "\'";
											echo ',';
										} ?>"
								)
							</script>

							<script>
								document.addEventListener("DOMContentLoaded", () => {
									const series = {
										"pesananMasuk": {
											"jumlah": [
												<?php
												foreach ($tanggal_masuk as $tg) {
													echo "\'" . $tg->id_pesanan . "\'";
													echo ',';
												} ?>
											],
											"dates": [
												"<?php
													foreach ($tanggal_masuk as $tg) {
														echo "\'" . $tg->tanggal . "\'";
														echo ',';
													} ?>"
											]
										},
										"pesananDiproses": {
											"jumlah": [
												1,
												<?php
												foreach ($tanggal_diproses as $tg) {
													echo "\'" . $tg->id_pesanan . "\'";
													echo ',';
												} ?>
											],
											"dates": [
												'2022-10-01',
												"<?php
													foreach ($tanggal_diproses as $tg) {
														echo "\'" . $tg->tanggal . "\'";
														echo ',';
													} ?>"
											]
										},
										"pesananSelesai": {
											"jumlah": [
												<?php
												foreach ($tanggal_selesai as $tg) {
													echo "\'" . $tg->id_pesanan . "\'";
													echo ',';
												} ?>
											],
											"dates": [
												"<?php
													foreach ($tanggal_selesai as $tg) {
														echo "\'" . $tg->tanggal . "\'";
														echo ',';
													} ?>"
											]
										},
									}
									new ApexCharts(document.querySelector("#areaChart"), {
										series: [{
												name: "Pesanan Masuk",
												data: series.pesananMasuk.jumlah
											},
											{
												name: "Pesanan Diproses",
												data: series.pesananDiproses.jumlah
											},
											{
												name: "Pesanan Selesai",
												data: series.pesananSelesai.jumlah
											},
											{
												name: "Jumlah Produk",
												data: series.produk.jumlah
											}
										],
										chart: {
											type: 'area',
											height: 350,
											zoom: {
												enabled: false
											}
										},
										dataLabels: {
											enabled: false
										},
										stroke: {
											curve: 'straight'
										},
										subtitle: {
											text: 'Transaksi Pesanan',
											align: 'left'
										},
										labels: series.pesananDiproses.dates,
										xaxis: {
											type: 'datetime',
										},
										yaxis: {
											opposite: true
										},
										legend: {
											horizontalAlign: 'left'
										}
									}).render();
								});
							</script>
							<!-- End Area Chart -->
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