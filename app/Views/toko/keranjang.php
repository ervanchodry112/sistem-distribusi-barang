<?php
echo $this->extend('layout/navbar');
echo $this->section('content');
?>

<!-- Content Wrapper. Contains page content -->
<div class="pagetitle">
    <h1><?= ucwords($title) ?></h1>
</div>

<!-- Main content -->
<section class="content mt-3">
    <div class="container-fluid">
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
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
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="<?= base_url('/toko/produk') ?>" class="btn btn-primary btn-sm mb-3 ">
                            <i class="bi bi-plus"></i>
                            <span>Tambah</span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form action="<?= base_url('toko/cekout') ?>" method="post">
                            <table class="table table-striped table-bordered border text-center">
                                <thead>
                                    <tr class="table" style="text-align: center;">
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($keranjang == null) {
                                    ?>
                                        <tr>
                                            <td colspan="6">Keranjang Kosong</td>
                                        </tr>
                                        <?php
                                    } else {
                                        $i = 1;
                                        foreach ($keranjang as $p) {
                                        ?>

                                            <tr style="text-align: center;">
                                                <td><input type="checkbox" name="produk[]" value="<?= $p->id_keranjang ?>"></td>
                                                <td><?= $p->nama_produk ?></td>
                                                <td>Rp<?= number_format($p->harga) ?></td>
                                                <td><?= $p->jumlah ?></td>
                                                <td>Rp<?= number_format($p->jumlah * $p->harga) ?></td>
                                                <td>
                                                    <!-- reject button -->
                                                    <a class="btn btn-danger btn-sm" href="<?= base_url('toko/delete_keranjang/' . $p->id_keranjang) ?>" role="button" onclick="return confirm('Yakin Ingin Menghapus Produk dari keranjang?')">
                                                        <i class="bi bi-trash3"></i>
                                                    </a>
                                                    <!-- edit button -->
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
                <div class="row">
                    <div class="col d-flex flex-row-reverse">
                        <button type="submit" class="btn btn-primary btn-sm shadow mx-2">Checkout</button>
                        <a href="<?= base_url('toko/clear_cart') ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus seluruh isi keranjang?')">Clear</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>