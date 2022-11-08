<?php
echo $this->extend('template');
echo $this->section('navbar');
?>

<main class="d-flex flex-column align-items-center justify-content-center py-4">
    <div class="m-auto border rounded shadow p-5" style="width: 35%;">
        <form action="<?= base_url('auth/attempt_supir') ?>" class=" needs-validation text-center" method="post">
            <?= csrf_field() ?>
            <img class="mb-4" src="<?= base_url('/assets/img/icon.png') ?>" alt="" width="72" height="57">
            <div class="mb-3">
                <?= view('Myth\Auth\Views\_message_block') ?>
            </div>
            <h1 class="h3 mb-3 fw-normal"><?= ucwords($title) ?></h1>

            <div class="form-floating mb-3">
                <input type="text" class="form-control <?php if (session('errors.nama')) : ?>is-invalid<?php endif ?>" name="nama_supir" id="nama" placeholder="Nama Lengkap" value="<?= old('nama_supir') ?>">
                <label for="nama">Nama Lengkap</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" id="plat_nomor" class="form-control <?php if (session('errors.plat_nomor')) : ?>is-invalid<?php endif ?>" name="plat_nomor" placeholder="Plat Nomor" value="<?= old('plat_nomor') ?>">
                <label for="plat_nomor">Plat Nomor Kendaraan</label>
            </div>
            <input type="hidden" name="id_users" value="<?= $id_user->id ?>">

            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <button class="btn btn-primary btn-block mb-3" type="submit"><?= lang('Auth.register') ?></button>
                </div>
            </div>
        </form>
    </div>
</main>

<?= $this->endSection() ?>