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
						<?= ucwords($title) ?>
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
							<tr class="table" style="text-align: center;">
								<th scope="col">No</th>
								<th scope="col">Action</th>
								<th scope="col">Id Pesanan</th>
								<th scope="col">Nama Toko</th>
								<th scope="col">Alamat</th>
								<th scope="col">Status</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1;
							foreach ($pesanan as $p) { ?>
								<tr>
									<td scope="row"><?= $i++ ?></td>
									<td>
										<!-- prosses button -->
										<a class="btn btn-success btn-sm" href="<?= base_url('supir/take_pesanan/' . $p->id_pesanan) ?>" role="button">
											<ion-icon name="cube-outline"></ion-icon>
										</a>
										<!-- detail button -->
										<a class="btn btn-info btn-sm" href="<?= base_url('/supir/detail_pesanan') ?>" role="button">
											<ion-icon name="search-outline"></ion-icon>
										</a>
									</td>
									<td><?= $p->id_pesanan ?></td>
									<td><?= $p->nama_toko ?></td>
									<td><?= $p->alamat ?></td>
									<td><?= $p->nama_status ?></td>
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
</div>
<!-- /.content-wrapper -->

<?= $this->endSection() ?>