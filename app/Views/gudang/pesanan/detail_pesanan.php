<?php
echo $this->extend('layout/navbar');
echo $this->section('content');
?>

<div class="pagetitle">
	<h1>Detail Pesanan</h1>
</div>

<div class="card px-2">
	<div class="card-body pt-2">
		<div class="tab-pane fade show active profile-overview" id="profile-overview">
			<h5 class="card-title"><?= $pesanan->receipt ?></h5>
			<div class="bg-info rounded border px-3 pt-2 shadow">
				<table class="table table-borderless w-50 text-white">
					<tbody>
						<div class="row">
							<div class="col-6">
								<tr>
									<td>Nama Toko</td>
									<td>: <?= $pesanan->nama_toko ?></td>
								</tr>
								<tr>
									<td>Tanggal</td>
									<td>: <?= $pesanan->tanggal ?></td>
								</tr>
								<tr>
									<td>Status</td>
									<td>: <?= $pesanan->nama_status ?></td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td>: <?= $pesanan->alamat ?></td>
								</tr>
							</div>

						</div>
					</tbody>
				</table>
			</div>

			<h5 class="card-title">Produk Detail</h5>

			<table class="table table-striped table-bordered border shadow">
				<thead>
					<tr class="table" style="text-align: center;">
						<th scope="col">No</th>
						<th scope="col">Gambar</th>
						<th scope="col">Id Produk</th>
						<th scope="col">Nama Produk</th>
						<th scope="col">Harga Satuan</th>
						<th scope="col">Jumlah barang</th>

					</tr>
				</thead>
				<tbody>

					<?php
					$i = 1;
					foreach ($produk as $p) {
					?>
						<tr class="align-middle" style="text-align: center;">
							<td scope="row"><?= $i++ ?></td>
							<td><img src="/assets/img/produk/<?= ($p->gambar == null ? "default_product.png" : $p->gambar) ?>" height="200rem" class="" alt="..." di></td>
							<td><?= $p->id_produk ?></td>
							<td><?= $p->nama_produk ?></td>
							<td>Rp.<?= number_format($p->harga) ?></td>
							<td><?= $p->jumlah_produk ?></td>
						</tr>

					<?php
					}
					?>

		</div>
	</div>
</div>


<?= $this->endSection() ?>