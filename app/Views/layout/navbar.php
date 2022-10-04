<?= $this->extend('template') ?>

<?= $this->section('navbar') ?>
<!-- Navbar -->
<!-- Left navbar links -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-black navbar-dark">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown-center">
                <a class="dropdown-toggle nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <ion-icon name="person-circle-outline"></ion-icon>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <div class="brand-link elevation-4">
            <img src="<?= base_url('assets/img/icon.png') ?>" alt="Store Logo" class="brand-image" style="opacity: .8">
            <span class="brand-text font-weight-light">Guild Store</span>
        </div>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?= base_url('assets/img/default.png') ?>" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Nama User Disini</a>
                </div>
            </div>


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- isi Sidebar -->
                    <li class="nav-item">
                        <a href="<?= base_url('gudang/dashboard') ?>" class="nav-link d-flex align-items-center">
                            <ion-icon name="apps" class="me-2"></ion-icon>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#pesananCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="pesananCollapse" class="nav-link d-flex align-items-center">
                            <ion-icon name="clipboard-outline" class="me-2"></ion-icon>
                            <p>Pesanan</p>
                            <ion-icon name="chevron-down-outline" class="ms-auto"></ion-icon>
                        </a>
                    </li>
                    <ul class="collapse nav nav-item ms-3" id="pesananCollapse">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="">
                                <ion-icon name="log-in" class="me-2" style="font-size: 20px"></ion-icon>
                                Pesanan Masuk
                            </a>
                        </li>
                        <li>
                            <a class="nav-link d-flex align-items-center" href="">
                                <ion-icon name="reload" class="me-2" style="font-size: 20px"></ion-icon>
                                Pesanan Masuk
                            </a>
                        </li>
                        <li>
                            <a class="nav-link d-flex align-items-center" href="">
                                <ion-icon name="checkbox-outline" class="me-2" style="font-size: 20px"></ion-icon>
                                Pesanan Masuk
                            </a>
                        </li>
                    </ul>
                    <li class="nav-item">
                        <a href="<?= base_url('gudang/barang') ?>" class="nav-link d-flex align-items-center">
                            <ion-icon name="dice-outline" class="me-2"></ion-icon>
                            <p>Barang</p>
                        </a>
                    </li>
                    <hr class="text-white my-2">
                    <li class="nav-item">
                        <a href="<?= base_url('auth/profile') ?>" class="nav-link d-flex align-items-center">
                            <ion-icon name="person" class="me-2"></ion-icon>
                            <p>Profile</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <?= $this->renderSection('content') ?>


    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.2.0
        </div>
        <strong>Copyright &copy; 2022.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<?= $this->endSection() ?>