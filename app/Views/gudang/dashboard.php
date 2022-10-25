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
									<div class="text-primary text-end h1" style="font-size: 3rem;"><strong>100</strong></div>
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
									<div class="text-primary text-end h1" style="font-size: 3rem;"><strong>58</strong></div>
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
									<div class="text-primary text-end h1" style="font-size: 3rem;"><strong>12</strong></div>
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
								document.addEventListener("DOMContentLoaded", () => {
									const series = {
										"pesananMasuk": {
											"jumlah": [
												8,
												9,
												5,
												15,
												13,
												2
											],
											"dates": [
												"2021-01-01",
												"2021-01-02",
												"2021-01-03",
												"2021-01-04",
												"2021-01-05",
												"2021-01-06"
											]
										},
										"pesananDiproses": {
											"jumlah": [
												5,
												7,
												1,
												3,
												4,
												2
											],
											"dates": [
												"2021-01-01",
												"2021-01-02",
												"2021-01-03",
												"2021-01-04",
												"2021-01-05",
												"2021-01-06"
											]
										},
										"pesananSelesai": {
											"jumlah": [
												10,
												11,
												15,
												13,
												17,
												18

											],
											"dates": [
												"2021-01-01",
												"2021-01-02",
												"2021-01-03",
												"2021-01-04",
												"2021-01-05",
												"2021-01-06"

											]
										},
										"produk": {
											"jumlah": [
												14,
												16,
												13,
												12,
												11,
												17

											],
											"dates": [
												"2021-01-01",
												"2021-01-02",
												"2021-01-03",
												"2021-01-04",
												"2021-01-05",
												"2021-01-06"

											]
										},
									}
									new ApexCharts(document.querySelector("#areaChart"), {
										series: [{
												name: "Pesanan Masuk",
												data: series.pesananDiproses.jumlah
											},
											{
												name: "Pesanan Diproses",
												data: series.pesananMasuk.jumlah
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