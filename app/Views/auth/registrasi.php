<?php
echo $this->extend('template');
echo $this->section('navbar');
?>

<main class="d-flex flex-column align-items-center justify-content-center py-4">
    <div class="form-signin m-auto border rounded shadow p-5" style="width: 35%;">
        <div class="mb-3">
            <?= view('Myth\Auth\Views\_message_block') ?>
        </div>
        <form action="<?= url_to('register') ?>" class=" needs-validation text-center" method="post">
            <?= csrf_field() ?>
            <img class="mb-4" src="<?= base_url('/assets/img/icon.png') ?>" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Registrasi Akun</h1>

            <div class="form-floating mb-3">
                <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" id="email" placeholder="name@example.com" value="<?= old('email') ?>">
                <label for=" email">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" id="username" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                <label for="username">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="password" placeholder="Password" autocomplete="off">
                <label for="password">Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="pass_confirm" id="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
            </div>
            <div class="d-flex justify-content-center mb-2">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="userRole" id="userRole1" value="toko">
                    <label class="form-check-label" for="userRole1">Toko</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="userRole" id="userRole2" value="supir">
                    <label class="form-check-label" for="userRole2">Supir</label>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <button class="btn btn-primary btn-block mb-3" type="submit"><?= lang('Auth.register') ?></button>
                </div>
            </div>

            <p><?= lang('Auth.alreadyRegistered') ?> <a href="<?= url_to('login') ?>"><?= lang('Auth.signIn') ?></a></p>
        </form>
    </div>
</main>

<?= $this->endSection() ?>