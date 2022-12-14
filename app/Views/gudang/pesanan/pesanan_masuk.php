<?php
echo $this->extend('layout/navbar');
echo $this->section('content');
?>

<!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
<div class="pagetitle ps-2">
	<h1><?= ucwords($title) ?></h1>
</div>

<!-- Main content -->
<section class="content pt-3">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">

						<table class="table table-striped">
							<thead>
								<tr class="table" style="text-align: center;">
									<th scope="col">No</th>
									<th scope="col">Id Pesanan</th>
									<th scope="col">Nama Toko</th>
									<th scope="col">Tanggal</th>
									<th scope="col">Alamat</th>
									<th scope="col">Action</th>

								</tr>
							</thead>
							<tbody>
								<?php
								if ($pesanan == null) {
								?>
									<tr class="text-center">
										<td colspan="7">Tidak ada pesanan yang masuk</td>
									</tr>
									<?php
								} else {
									$i = 1;
									foreach ($pesanan as $p) {
									?>

										<tr style="text-align: center;">
											<td scope="row"><?= $i++ ?></td>
											<td><?= $p->receipt ?></td>
											<td><?= $p->nama_toko ?></td>
											<td><?= $p->tanggal ?></td>
											<td><?= $p->alamat ?></td>
											<td>
												<!-- prosses button -->
												<a class="btn btn-success btn-sm" href="<?= base_url('gudang/proses/' . $p->id_pesanan) ?>" role="button">
													<i class="bi bi-clipboard-check"></i>
												</a>
												<!-- detail button -->
												<a class="btn btn-primary btn-sm" href="<?= base_url('detail_pesanan/' . $p->receipt) ?>" role="button">
													<i class="bi bi-file-text"></i>
												</a>
												<!-- reject button -->
												<a class="btn btn-danger btn-sm" href="<?= base_url('gudang/reject/' . $p->id_pesanan) ?>" role="button" onclick="return confirm('Yakin Ingin Membatalkan Pesanan?')">
													<i class="bi bi-clipboard-x"></i>
												</a>
											</td>
										</tr>
								<?php
									}
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->

<!-- /.content-wrapper -->

<?= $this->endSection() ?>