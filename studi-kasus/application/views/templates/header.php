<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <!-- link css -->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap-4.4.1-dist/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/datatables/dataTables.bootstrap4.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome-free/css/all.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/jquery-ui/jquery-ui.css'); ?>">
    <!-- end link css -->

    <style>
        .content {
            min-height: calc(100vh - 50px);
        }

        footer {
            height: 50px;
        }
    </style>

</head>

<body>
    <!-- content -->
    <div class="content">

        <!-- nav -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
            <div class="container">
                <a class="navbar-brand font-weight-bold" href="<?= base_url('dashboard'); ?>">PERPUSTAKAAN</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link text-white" href="<?= base_url('dashboard'); ?>">Dashboard</a>

                        <?php if ($this->session->userdata('level') == 'Admin') : ?>
                            <a class="nav-item nav-link text-white" href="<?= base_url('user'); ?>">User</a>
                        <?php endif ?>

                        <a class="nav-item nav-link text-white" href="<?= base_url('mahasiswa'); ?>">Mahasiswa</a>
                        <a class="nav-item nav-link text-white" href="<?= base_url('buku'); ?>">Buku</a>
                        <a class="nav-item nav-link text-white" href="<?= base_url('peminjaman'); ?>">Peminjaman</a>
                        <a class="nav-item nav-link text-white" href="<?= base_url('login/logout'); ?>" onclick="return confirm('Anda Yakin Ingin logout?')">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end nav -->

        <!-- judul -->
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4"><?= $title; ?></h1>
            </div>
        </div>
        <!-- end judul -->