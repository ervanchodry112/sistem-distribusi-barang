<?php
echo $this->extend('layout/navbar');
echo $this->section('content');
?>

<div class="pagetitle">
    <h1><?= $title ?></h1>
</div><!-- End Page Title -->

<section class="section profile">
    <div class="row">
    <div class="col-xl-4">

        <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="<?= base_url('assets/img/default.png') ?>" alt="Profile" class="rounded-circle">
            <h2><?= $user->username ?></h2>
            <h3><?= $user->email ?></h3>
        </div>
        </div>

    </div>

    <div class="col-xl-8">

        <div class="card">
        <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
            </li>

            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
            </li>

            </ul>
            <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">Profile Details</h5>

                <div class="row">
                <div class="col-lg-3 col-md-4 label ">Username</div>
                <div class="col-lg-9 col-md-8"><?= $user->username ?></div>
                </div>

                <div class="row">
                <div class="col-lg-3 col-md-4 label">Email</div>
                <div class="col-lg-9 col-md-8"><?= $user->email ?></div>
                </div>

                <div class="row">
                <div class="col-lg-3 col-md-4 label">Role</div>
                <div class="col-lg-9 col-md-8"><?= $user->name ?></div>
                </div>
            </div>

            <div class="tab-pane fade pt-3" id="profile-change-password">
                <!-- Change Password Form -->
                <form action="update_password/<?= user_id() ?>" method="post">

                <div class="row mb-3">
                    <label for="current_password" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                    <div class="col-md-8 col-lg-9">
                    <input name="current_password" type="password" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="new_password" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                    <div class="col-md-8 col-lg-9">
                    <input name="new_password" type="password" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="renew_password" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                    <div class="col-md-8 col-lg-9">
                    <input name="renew_password" type="password" class="form-control">
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
                </form><!-- End Change Password Form -->

            </div>

            </div><!-- End Bordered Tabs -->

        </div>
        </div>

    </div>
    </div>
</section>

<?= $this->endSection() ?>