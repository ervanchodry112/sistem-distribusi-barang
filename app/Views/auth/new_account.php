<?php
echo $this->extend('layout/navbar');
echo $this->section('content');
?>

<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="pagetitle">
    <h1><?= $title ?></h1>
</div>

<?php
if (session()->getFlashdata('pesan')) {
    echo '<div class="alert alert-success" role="alert">';
    echo session()->getFlashdata('pesan');
    echo '</div>';
}
?>
<!-- Main content -->
<section class="content p-5">
    <div class="container-fluid">
        <div class="row card p-2">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr class="table" style="text-align: center;">
                            <th scope="col">No</th>
                            <th scope="col">Email</th>
                            <th scope="col">Username</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($new_user as $p) {
                        ?>

                            <tr style="text-align: center;">
                                <td scope="row"><?= $i++ ?></td>
                                <td><?= $p->email ?></td>
                                <td><?= $p->username ?></td>
                                <td><?= ucwords($p->name) ?></td>
                                <td>
                                    <!-- Accept button -->
                                    <a class="btn btn-success btn-sm" href="<?= base_url('/auth/activate/' . $p->id) ?>" role="button">
                                        <ion-icon name="checkmark"></ion-icon>
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="<?= base_url('/auth/activate/' . $p->id) ?>" role="button">
                                        <ion-icon name="trash"></ion-icon>
                                    </a>
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
<!-- /.content -->
<!-- /.content-wrapper -->

<?= $this->endSection() ?>