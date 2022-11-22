<?php
echo $this->extend('layout/navbar');
echo $this->section('content');
?>

<!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
<div class="pagetitle">
    <h1><?= ucwords($title) ?></h1>
    <hr>
</div>

<!-- Main content -->
<section class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card p-5">
                    <form action="<?= base_url('toko/update_keranjang') ?>" method="post">
                        <div class="row">
                            <div class="col-4 d-flex justify-content-center align-items-center">
                                <img src="/assets/img/produk/<?= ($produk->gambar == null ? "default_product.png" : $produk->gambar) ?>" width="200rem" alt="<?= $produk->nama_produk ?>">

                            </div>
                            <div class="col-8">

                                <input type="hidden" name="id_keranjang" value="<?= $produk->id_keranjang ?>">
                                <div class="mb-3 row">
                                    <label for="nama_produk" class="col-sm-2 col-form-label">Produk</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="nama_produk" value="<?= $produk->nama_produk ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="harga_produk" class="col-sm-2 col-form-label">Harga</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="harga_produk" value="Rp<?= number_format($produk->harga) ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="jumlah_produk" class="col-sm-2 col-form-label">Jumlah</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="jumlah_produk" id="jumlah_produk" value="<?= $produk->jumlah ?>">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="<?= base_url('toko/keranjang') ?>" type="button" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->

<!-- /.content-wrapper -->

<?= $this->endSection() ?>