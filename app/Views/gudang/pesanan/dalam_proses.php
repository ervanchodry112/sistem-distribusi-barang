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
				<div class="card">
					<div class="card-body">

						<table class="table table-striped table-bordered border shadow">
							<thead>
								<tr class="table" style="text-align: center;">
									<th scope="col">No</th>
									<th scope="col">Id Pesanan</th>
									<th scope="col">Nama Toko</th>
									<th scope="col">Alamat</th>
									<th scope="col">Status Pesanan</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if ($pesanan == null) {
								?>
									<tr class="text-center">
										<td colspan="7">Tidak ada pesanan yang sedang dalam proses</td>
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
											<td><?= $p->alamat ?></td>
											<td><?= $p->nama_status ?></td>
											<td>
												<!-- detail button -->
												<a class="btn btn-primary btn-sm" href="<?= base_url('gudang/detail_pesanan/' . $p->id_pesanan) ?>" role="button">
													<i class="bi bi-file-text"></i>
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