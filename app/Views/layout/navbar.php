<?= $this->extend('template') ?>

<?= $this->section('navbar') ?>
<header id="header" class="header fixed-top d-flex align-items-center">

	<div class="d-flex align-items-center justify-content-between">
		<a href="/" class="logo d-flex align-items-center">
			<img src="/assets/img/icon.png" alt="">
			<span class="d-none d-lg-block">Guild Store</span>
		</a>
		<i class="bi bi-list toggle-sidebar-btn"></i>
	</div><!-- End Logo -->
</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
	<ul class="sidebar-nav" id="sidebar-nav">
		<?php
		if (in_groups('superadmin') || in_groups('gudang')) {
		?>
			<li class="nav-heading">Gudang</li>

			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('gudang/dashboard') ?>">
					<i class="bi bi-grid"></i>
					<span>Dashboard</span>
				</a>
			</li><!-- End Dashboard Nav -->

			<li class="nav-item">
				<a class="nav-link collapsed" data-bs-target="#gudang-collapse" data-bs-toggle="collapse" href="#">
					<i class="bi bi-clipboard"></i><span>Pesanan</span><i class="bi bi-chevron-down ms-auto"></i>
				</a>
				<ul id="gudang-collapse" class="nav-content collapse " data-bs-parent="#sidebar-nav">
					<li>
						<a href="<?= base_url('gudang/pesanan_masuk') ?>">
							<i class="bi bi-box-arrow-in-right"></i><span>Pesanan Masuk</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('gudang/dalam_proses') ?>">
							<i class="bi bi-circle"></i><span>Pesanan Diproses</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('gudang/dalam_pengiriman') ?>">
							<i class="bi bi-circle"></i><span>Pesanan Dikirim</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('gudang/pesanan_selesai') ?>">
							<i class="bi bi-circle"></i><span>Pesanan Selesai</span>
						</a>
					</li>
				</ul>
			</li><!-- End Pesanan Nav -->

			<li class="nav-item">
				<a class="nav-link " href="<?= base_url('gudang/produk') ?>">
					<i class="bi bi-grid"></i>
					<span>Produk</span>
				</a>
			</li> <!-- End Produk Nav -->
		<?php
		}
		if (in_groups('toko')) {
		?>

			<li class="nav-heading">Toko</li>

			<li class="nav-item">
				<a class="nav-link " href="<?= base_url('toko/dashboard') ?>">
					<i class="bi bi-grid"></i>
					<span>Dashboard</span>
				</a>
			</li><!-- End Dashboard Nav -->

			<li class="nav-item">
				<a class="nav-link " href="<?= base_url('toko/pesanan') ?>">
					<i class="bi bi-grid"></i>
					<span>Pesanan</span>
				</a>
			</li><!-- End Components Nav -->
		<?php
		}
		if (in_groups('supir')) {
		?>

			<li class="nav-heading">Supir</li>

			<li class="nav-item">
				<a class="nav-link " href="<?= base_url('supir/dashboard') ?>">
					<i class="bi bi-grid"></i>
					<span>Dashboard</span>
				</a>
			</li><!-- End Dashboard Nav -->

			<li class="nav-item">
				<a class="nav-link collapsed" data-bs-target="#toko-collapse" data-bs-toggle="collapse" href="#">
					<i class="bi bi-clipboard"></i><span>Pesanan</span><i class="bi bi-chevron-down ms-auto"></i>
				</a>
				<ul id="toko-collapse" class="nav-content collapse " data-bs-parent="#sidebar-nav">
					<li>
						<a href="<?= base_url('supir/pesanan_masuk') ?>">
							<i class="bi bi-box-arrow-in-right"></i><span>Pesanan Masuk</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('supir/dalam_pengiriman') ?>">
							<i class="bi bi-circle"></i><span>Dalam Pengiriman</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('supir/pesanan_selesai') ?>">
							<i class="bi bi-circle"></i><span>Pesanan Selesai</span>
						</a>
					</li>
				</ul>
			</li><!-- End Components Nav -->
		<?php
		}
		if (in_groups('superadmin')) {
		?>

			<li class="nav-heading">Admin</li>

			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('auth/new_account') ?>">
					<i class="bi bi-person-fill"></i>
					<span>New Account</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('auth/account') ?>">
					<i class="bi bi-person-fill"></i>
					<span>Account</span>
				</a>
			</li>
		<?php
		}
		?>

		<li class="nav-heading">Account</li>

		<li class="nav-item">
			<a class="nav-link" href="<?= base_url('auth/profile') ?>">
				<i class="bi bi-person-fill"></i>
				<span>Profile</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link " href="<?= base_url('logout') ?>">
				<i class="bi bi-box-arrow-right"></i>
				<span>Logout</span>
			</a>
		</li>


	</ul>
</aside>

<main id="main" class="main">
	<?= $this->renderSection('content') ?>
</main>

<footer id="footer" class="footer bg-white position-fixed end-0 start-0 bottom-0 mt-auto">
	<div class="copyright">
		&copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
	</div>
</footer>

<script>
	$(document).ready(function() {
		$(".nav-link").removeClass("active");
	});
</script>
<!-- End Sidebar-->
<?= $this->endSection() ?>