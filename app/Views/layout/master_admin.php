<?php $session = \Config\Services::session(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Voting</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('') ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url('') ?>/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="<?= base_url('') ?>/assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('') ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('') ?>/assets/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url('') ?>/assets/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-blue navbar-dark navbar-primary">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <span class="dropdown-item dropdown-header bg-light">Akun</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url('') ?>" class="brand-link text-center">
                <span class="brand-text font-weight-bolder">E-Voting</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link <?php if ($sidebar == 'dashboard') { ?> active <?php } ?>">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Dashboard
                                    <!-- <i class="right fas fa-angle-left"></i> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?= base_url('') ?>/assets/pages/widgets.html" class="nav-link <?php if ($sidebar == 'pemilih') { ?> active <?php } ?>">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Pemilih/User
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?= base_url('kandidat') ?>" class="nav-link <?php if ($sidebar == 'kandidat') { ?> active <?php } ?>">
                                <i class="nav-icon fas fa-user-friends"></i>
                                <p>
                                    Kandidat
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link <?php if ($sidebar == 'hasil') { ?> active <?php } ?>">
                                <i class="nav-icon fas fa-chart-line"></i>
                                <p>
                                    Hasil Voting
                                    <!-- <i class="right fas fa-angle-left"></i> -->
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <div class="flash-data" data-flashdata="<?= session()->getFlashdata('success') ?>"></div>
        <div class="flash-data-e" data-flashdata="<?= session()->getFlashdata('error') ?>"></div>

        <div class="content-wrapper">
            <div class="content-header mb-3">
                <h1>Kandidat</h1>
            </div>
            <?= $this->renderSection('isi') ?>
        </div>



        <footer class="main-footer">
            <!-- <strong>Copyright &copy; 2014-2019 <a href="<?= base_url('') ?>/assets/http://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.0
            </div> -->
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url('') ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url('') ?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <!-- <script src="<?= base_url('') ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <!-- ChartJS -->
    <script src="<?= base_url('') ?>/assets/plugins/chart.js/Chart.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?= base_url('') ?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url('') ?>/assets/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url('') ?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Summernote -->
    <script src="<?= base_url('') ?>/assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url('') ?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('') ?>/assets/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url('') ?>/assets/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('') ?>/assets/dist/js/demo.js"></script>
</body>

<script>
    const flashData = $('.flash-data').data('flashdata');
    if (flashData) {
        $(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true
            });
            Toast.fire({
                icon: 'success',
                type: 'success',
                title: flashData
            });
        });
    }
</script>
<script>
    const flashDatae = $('.flash-data-e').data('flashdata');
    if (flashDatae) {
        $(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000
            });
            Toast.fire({
                icon: 'errorr',
                type: 'success',
                title: flashDatae
            });
        });
    }
</script>

</html>