<?php
echo $this->extend('template');
echo $this->section('navbar');
?>

<!-- Content Wrapper. Contains page content -->
<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">


                        <div class="card mb-3">


                            <div class="card-body">
                                <div class="d-flex justify-content-center pt-4 pb-1">
                                    <a href="/" class="logo d-flex align-items-center w-auto">
                                        <img src="<?= base_url('/assets/img/icon.png') ?>" alt="">
                                        <span class="d-none d-lg-block">GuildStore</span>
                                    </a>
                                </div><!-- End Logo -->

                                <hr class="mb-0">

                                <div class="pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                    <p class="text-center small">Enter your username & password to login</p>
                                </div>

                                <?= view('Myth\Auth\Views\_message_block') ?>

                                <form class="row g-3 needs-validation" action="<?= url_to('login') ?>" method="post">
                                    <?= csrf_field() ?>
                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label"><?= lang('Auth.emailOrUsername') ?></label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="login" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="yourUsername" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                                            <div class=" invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label"><?= lang('Auth.password') ?></label>
                                        <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="yourPassword" placeholder="<?= lang('Auth.password') ?>">
                                        <div class="invalid-feedback">
                                            <?= session('errors.password') ?>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <?php if ($config->allowRemembering) : ?>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                                    <?= lang('Auth.rememberMe') ?>
                                                </label>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit"><?= lang('Auth.loginAction') ?></button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Don't have account? <a href="<?= base_url('auth/registrasi') ?>">Create an account</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->


<?= $this->endSection() ?>