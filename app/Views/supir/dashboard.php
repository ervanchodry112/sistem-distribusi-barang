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
							<div class="row">
								<div class="col-3">
									<div class="card p-4">
										<div class="card-title">Pesanan 1</div>
										<p>Jl. Delima Kemiling Bandarlampung</p>
									</div>

								</div>
								<div class="col-3">
									<div class="card p-4">
										<div class="card-title">Pesanan 2</div>
										<p>Rejomulyo Lampung Selatan</p>
									</div>
								</div>
								<div class="col-3">
									<div class="card p-4">
										<div class="card-title">Pesanan 3</div>
										<p>Sukarame Bandarlampung</p>
									</div>
								</div>
								<div class="col-3">
									<div class="card p-4">
										<div class="card-title">Pesanan 4</div>
										<p>Natar Lampung Selatan</p>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-3">
									<div class="card p-4">
										<div class="card-title">Pesanan 5</div>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat asperiores temporibus fugiat obcaecati a exercitationem nemo ullam sunt, dolores cupiditate ex sequi eius soluta nesciunt repellendus culpa! Doloremque, repellendus unde.</p>
									</div>

								</div>
								<div class="col-3">
									<div class="card p-4">
										<div class="card-title">Pesanan 6</div>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptatibus atque nemo blanditiis dolorem numquam sapiente, debitis, reprehenderit soluta officia deserunt velit at iure cum! Corporis, possimus illum. Officiis, nostrum!</p>
									</div>
								</div>
								<div class="col-3">
									<div class="card p-4">
										<div class="card-title">Pesanan 7</div>
										<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis architecto assumenda dolore odit doloremque consequuntur velit inventore, molestiae possimus cupiditate quisquam maiores in quod. Velit voluptatibus obcaecati officia ratione doloribus!</p>
									</div>
								</div>
								<div class="col-3">
									<div class="card p-4">
										<div class="card-title">Pesanan 8</div>
										<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur beatae nostrum rerum voluptates id et odio eveniet, ut deleniti blanditiis! Dolores, excepturi beatae adipisci odio tempora nostrum fuga? Molestiae, repudiandae!</p>
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
																			<div class="text-end text-muted">Pesan Masuk</div>
																			<div class="text-primary text-end h1" style="font-size: 3rem;"><strong>30</strong></div>
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
																			<div class="text-end text-muted">Pesan Dalam Pengiriman</div>
																			<div class="text-primary text-end h1" style="font-size: 3rem;"><strong>23</strong></div>
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
																	<h5 class="card-title">Pesanan</h5>
																	<div class="row">
																		<div class="col-3">
																			<div class="card p-4">
																				<div class="card-title">Pesanan 1</div>
																				<p>Jl. Delima Kemiling Bandarlampung</p>
																			</div>

																		</div>
																		<div class="col-3">
																			<div class="card p-4">
																				<div class="card-title">Pesanan 2</div>
																				<p>Rejomulyo Lampung Selatan</p>
																			</div>
																		</div>
																		<div class="col-3">
																			<div class="card p-4">
																				<div class="card-title">Pesanan 3</div>
																				<p>Sukarame Bandarlampung</p>
																			</div>
																		</div>
																		<div class="col-3">
																			<div class="card p-4">
																				<div class="card-title">Pesanan 4</div>
																				<p>Natar Lampung Selatan</p>
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-3">
																			<div class="card p-4">
																				<div class="card-title">Pesanan 5</div>
																				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat asperiores temporibus fugiat obcaecati a exercitationem nemo ullam sunt, dolores cupiditate ex sequi eius soluta nesciunt repellendus culpa! Doloremque, repellendus unde.</p>
																			</div>

																		</div>
																		<div class="col-3">
																			<div class="card p-4">
																				<div class="card-title">Pesanan 6</div>
																				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptatibus atque nemo blanditiis dolorem numquam sapiente, debitis, reprehenderit soluta officia deserunt velit at iure cum! Corporis, possimus illum. Officiis, nostrum!</p>
																			</div>
																		</div>
																		<div class="col-3">
																			<div class="card p-4">
																				<div class="card-title">Pesanan 7</div>
																				<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis architecto assumenda dolore odit doloremque consequuntur velit inventore, molestiae possimus cupiditate quisquam maiores in quod. Velit voluptatibus obcaecati officia ratione doloribus!</p>
																			</div>
																		</div>
																		<div class="col-3">
																			<div class="card p-4">
																				<div class="card-title">Pesanan 8</div>
																				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur beatae nostrum rerum voluptates id et odio eveniet, ut deleniti blanditiis! Dolores, excepturi beatae adipisci odio tempora nostrum fuga? Molestiae, repudiandae!</p>
																			</div>
																		</div>
																	</div>
																</div>
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