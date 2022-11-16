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
        <div class="row">
            <div class="col-2">
                <a href="<?= base_url('/toko/produk') ?>" class="btn btn-primary btn-sm mb-3 d-flex align-items-center">
                    <ion-icon name="add" class="me-2"></ion-icon>
                    <span>Tambah</span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-bordered border shadow text-center">
                    <thead>
                        <tr class="table" style="text-align: center;">
                            <th scope="col">No</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Total</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($keranjang as $p) {
                        ?>

                            <tr style="text-align: center;">
                                <td scope="row"><?= $i++ ?></td>
                                <td><?= $p->nama_produk ?></td>
                                <td>Rp<?= number_format($p->harga) ?></td>
                                <td><?= $p->jumlah ?></td>
                                <td>Rp<?= number_format($p->jumlah * $p->harga) ?></td>
                                <td>
                                    <!-- detail button -->
                                    <a class="btn btn-secondary btn-sm" href="<?= base_url('/gudang/detail_pesanan') ?>" role="button">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </a>
                                    <!-- reject button -->
                                    <a class="btn btn-danger btn-sm" href="<?= base_url('toko/delete_pesanan/' . $p->id_pesanan) ?>" role="button" onclick="return confirm('Yakin Ingin Membatalkan Pesanan?')">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <!-- edit button -->
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