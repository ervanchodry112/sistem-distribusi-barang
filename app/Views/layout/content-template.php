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
            <div class="col-12">
                <!-- Masukkan content utama disini -->
            </div>
        </div>
    </div>
</section>
<!-- /.content -->

<!-- /.content-wrapper -->

<?= $this->endSection() ?>