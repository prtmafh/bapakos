<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/image/style.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?= base_url('assets/image/icon.png') ?>" />
    <title><?= $judul ?></title>
</head>
<!-- NAVBAR START -->

<body style="background: linear-gradient(to right, dimgray, gainsboro);">
    <nav class="navbar navbar-expand-lg bg-dark fixed-top" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand h3" href="#"> <img src="<?= base_url('assets/image/icon.png'); ?>" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                <span class="text-danger">BAPA</span>KOS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h3 class="offcanvas-title" id="offcanvasNavbarLabel"><span class="text-danger">BAPA</span>KOS</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url('home'); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('home/lihatkos'); ?>">Lihat kos</a>
                        </li>




                        <?php
                        if (!empty($this->session->userdata('email'))) { ?>
                            <a class="nav-link" href="<?= base_url('home/lihatkos'); ?>">Profil</a>
                            <a class="nav-link" href="<?= base_url('home/invoice'); ?>">Invoice</a>
                            <a class="nav-link" href="<?= base_url('pencari/logout'); ?>">Logout</a>
                            <a class="nav-link d-none d-sm-block" style="display:block; margin-left:20px;">Selamat Datang <b> <?= $user; ?></b></a>

                        <?php } else { ?>
                            <li class="nav-item dropdown no-arrow">
                                <a class="btn btn-danger dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    MASUK
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item " href="<?= base_url('pencari'); ?>">Masuk sebagai pencari</a>
                                    <a class="dropdown-item" href="<?= base_url('pemilik'); ?>">Masuk sebagai pemilik</a>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- NAVBAR END -->