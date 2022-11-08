<?php
echo $this->extend('template');
echo $this->section('navbar');
?>

<main class="d-flex flex-column align-items-center justify-content-center py-4">
    <div class="m-auto border rounded shadow p-5" style="width: 35%;">
        <form action="<?= base_url('auth/attempt_toko') ?>" class=" needs-validation text-center" method="post">
            <?= csrf_field() ?>
            <img class="mb-4" src="<?= base_url('/assets/img/icon.png') ?>" alt="" width="72" height="57">
            <div class="mb-3">
                <?= view('Myth\Auth\Views\_message_block') ?>
            </div>
            <h1 class="h3 mb-3 fw-normal"><?= ucwords($title) ?></h1>

            <div class="form-floating mb-3">
                <input type="text" class="form-control <?php if (session('errors.nama')) : ?>is-invalid<?php endif ?>" name="nama_toko" id="nama_toko" placeholder="Nama Toko" value="<?= old('nama_toko') ?>">
                <label for="nama_toko">Nama Toko</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" id="alamat" class="form-control <?php if (session('errors.alamat')) : ?>is-invalid<?php endif ?>" name="alamat" placeholder="Alamat" value="<?= old('alamat') ?>">
                <label   for="alamat">Alamat</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" id="pemilik" class="form-control <?php if (session('errors.pemilik')) : ?>is-invalid<?php endif ?>" name="pemilik" placeholder="Pemilik" value="<?= old('pemilik') ?>">
                <label for="pemilik">Nama Pemilik</label>
            </div>
            <input type="hidden" name="id_users" value="<?= $id_user->id ?>">

            <button class="btn btn-primary btn-block mb-3" type="submit"><?= lang('Auth.register') ?></button>
        </form>
    </div>
</main>

<?= $this->endSection() ?>