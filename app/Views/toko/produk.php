<?php
echo $this->extend('layout/navbar');
echo $this->section('content');
?>

<!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
<div class="pagetitle">
    <h1><?= ucwords($title) ?></h1>
</div>

<!-- Main content -->
<section class="section">
    <div class="container-fluid">
        <div class="row">

            <!-- Masukkan content utama disini -->

            <?php
            foreach ($produk as $p) {
            ?>
                <div class="col-4">
                    <div class="card" style="width: 18rem; height: 20rem;">
                        <img src="/assets/img/produk/<?= ($p->gambar == null ? "default_product.png" : $p->gambar) ?>" height="190rem" class="card-img-top" alt="...">
                        <div class="card-body" style="margin-top: -20px">
                            <h5 class="card-title" style="margin-bottom: -10px;"><?= $p->nama_produk ?></h5>
                            <div class="d-flex justify-content-between align-baseline">

                                <h4 class="card-text"><strong>Rp<?= number_format($p->harga, 2) ?></strong></h4>
                                <p class=" card-text">Stok <?= ($p->stok < 100 ? $p->stok : "100+") ?></p>
                            </div>

                            <a href="<?= base_url('toko/quantity/' . $p->slug) ?>" type="button" class="btn btn-primary w-100">
                                <i class="bi bi-cart-plus"></i>
                                <span>Add to Cart</span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</section>


<!-- /.content -->

<!-- /.content-wrapper -->

<?= $this->endSection() ?>