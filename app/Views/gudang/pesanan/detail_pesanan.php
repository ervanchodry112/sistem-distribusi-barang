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
			<h5 class="card-title">Mas Toko</h5>
			<div class="bg-info rounded border px-3 pt-2">
				<table class="table table-borderless w-50 text-white">
					<tbody>
						<tr>
							<td>Id Pesanan</td>
							<td>: PS1</td>
						</tr>
						<tr>
							<td>Total Tagihan</td>
							<td>: Rp12000</td>
						</tr>
						<tr>
							<td>Status</td>
							<td>: Dikirim</td>
						</tr>
					</tbody>
				</table>
			</div>

			<h5 class="card-title">Profile Details</h5>

			<div class="row">
				<div class="col-lg-3 col-md-4 label ">Full Name</div>
				<div class="col-lg-9 col-md-8">Kevin Anderson</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-4 label">Company</div>
				<div class="col-lg-9 col-md-8">Lueilwitz, Wisoky and Leuschke</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-4 label">Job</div>
				<div class="col-lg-9 col-md-8">Web Designer</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-4 label">Country</div>
				<div class="col-lg-9 col-md-8">USA</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-4 label">Address</div>
				<div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-4 label">Phone</div>
				<div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-4 label">Email</div>
				<div class="col-lg-9 col-md-8">k.anderson@example.com</div>
			</div>

		</div>
	</div>
</div>


<?= $this->endSection() ?>