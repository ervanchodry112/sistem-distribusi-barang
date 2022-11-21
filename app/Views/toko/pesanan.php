<?php

use CodeIgniter\Database\MySQLi\Connection;
use Config\Database;

echo $this->extend('layout/navbar');
echo $this->section('content');
?>

<!-- Content Wrapper. Contains page content -->
<div class="pagetitle">
	<h1>Pesanan</h1>
</div>

<!-- Main content -->
<section class="content mt-3">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<?php
				if (session()->getFlashdata('success')) {
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<?= session()->getFlashdata('success'); ?>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php
				} elseif (session()->getFlashdata('error')) {
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<?= session()->getFlashdata('error'); ?>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php
				}
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<a href="<?= base_url('/toko/produk') ?>" class="btn btn-primary btn-sm mb-3 d-flex align-items-center">
					<ion-icon name="add" class="me-2"></ion-icon>
					<span>Buat Pesanan</span>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<table class="table table-striped table-bordered border shadow text-center">
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
						foreach ($pesanan as $p) {
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
		</div>
	</div>
</section>

<?= $this->endSection() ?>