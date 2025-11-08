<?php
include('config/koneksi.php');
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTPPN</title>
    
    <!-- Favicon -->
    <link href="asset/img/LogoIco.ico" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Heebo&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheets -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/style/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="asset/style/style.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/style/fab.css">

    <!-- ============================================ -->
    <!-- CUSTOM CSS STYLES - ALL IN ONE PLACE -->
    <!-- ============================================ -->
    <style>
        /* ===== GLOBAL STYLES ===== */
        body {
            overflow-x: hidden;
        }

        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1050;
        }

        .back-to-top i {
            font-size: 50px;
            color: #02f823;
        }

        .back-to-top:hover {
            opacity: 0.8;
        }

        /* Responsive Image */
        img {
            max-width: 100%;
            height: auto;
        }

        /* ===== CAROUSEL STYLES ===== */
        .carousel-inner img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .carousel-item {
            transition: transform 0.7s ease-in-out;
        }

        /* ===== NAVBAR & DROPDOWN STYLES ===== */
        .navbar {
            padding: 0.5rem 1rem;
        }

        .navbar-brand img {
            height: 40px;
        }

        .dropdown-menu {
            border-radius: 0;
            border-top: 3px solid #2B8D4C;
            width: 100%;
            left: 0;
        }

        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
        }

        .text-link {
            color: #2B8D4C;
            text-decoration: none;
            transition: all 0.2s ease-in-out;
        }

        .text-link:hover {
            color: #1f6f3b;
            text-decoration: underline;
        }

        .dropdown-menu .container {
            align-items: flex-start !important;
        }

        .dropdown-menu h4 {
            margin-top: 5px;
        }

        /* Mobile Navigation */
        @media (max-width: 991px) {
            .navbar-brand img {
                height: 30px;
            }

            .navbar-nav {
                text-align: center;
                padding: 1rem 0;
            }

            .dropdown-menu {
                position: relative !important;
                width: 100% !important;
                border: none;
                box-shadow: none;
                background-color: #f8f9fa;
            }

            .dropdown-menu .container {
                flex-direction: column !important;
            }

            .dropdown-menu h4 {
                font-size: 1.2rem;
                margin-bottom: 1rem;
            }

            .dropdown-menu hr {
                display: none;
            }
        }

        /* ===== PRODUCT CAROUSEL STYLES ===== */
        .thumb.active {
            border: 3px solid #2B8D4C;
            background-color: #EAF7EE !important;
        }

        /* Responsive Product Section */
        @media (max-width: 768px) {
            .carousel-inner .row {
                flex-direction: column;
            }

            .carousel-inner .col-md-5 {
                width: 100%;
                margin-bottom: 1rem;
            }

            .carousel-inner img {
                max-width: 200px;
                margin: 0 auto;
            }

            /* Thumbnail Navigation */
            .thumb {
                width: 80px !important;
                height: 80px !important;
            }

            .btn-prev div,
            .btn-next div {
                border-width: 15px !important;
            }
        }

        @media (max-width: 576px) {
            .thumb {
                width: 60px !important;
                height: 60px !important;
            }

            .carousel-inner h4 {
                font-size: 1.2rem;
            }

            .carousel-inner p {
                font-size: 0.9rem;
            }
        }

        /* ===== BUTTON STYLES ===== */
        .btn-selengkapnya {
            display: inline-block;
            background-color: #F9D70B;
            color: #fff;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            padding: 10px 30px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .btn-selengkapnya:hover {
            background-color: #e6c507;
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }

        /* ===== KALKULATOR TANI STYLES ===== */
        .kalkulator-img {
            max-height: 480px;
            width: auto;
            object-fit: cover;
        }

        #kalkulator-tani select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%232B8D4C' viewBox='0 0 16 16'%3E%3Cpath d='M8 11.5l-5-5h10l-5 5z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        #kalkulator-tani select:hover {
            border-color: #2B8D4C !important;
            box-shadow: 0 2px 8px rgba(43, 141, 76, 0.15);
        }

        #kalkulator-tani select:focus {
            box-shadow: 0 0 0 3px rgba(43, 141, 76, 0.2);
            outline: none;
            border-color: #2B8D4C !important;
        }

        /* Custom Dropdown Options Style */
        #kalkulator-tani select option {
            padding: 12px;
            background-color: #fff;
            color: #333;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        #kalkulator-tani select option:hover {
            background: linear-gradient(90deg, #EAF7EE 0%, #F9F9E6 100%);
            color: #2B8D4C;
        }

        #kalkulator-tani select option:checked {
            background: linear-gradient(90deg, #2B8D4C 0%, #D5D44B 100%);
            color: white;
            font-weight: 600;
        }

        #kalkulator-tani select option:first-child {
            color: #999;
            font-style: italic;
        }

        /* Input Focus State */
        #kalkulator-tani input:hover {
            border-color: #2B8D4C !important;
            box-shadow: 0 2px 8px rgba(43, 141, 76, 0.15);
        }

        #kalkulator-tani input:focus {
            box-shadow: 0 0 0 3px rgba(43, 141, 76, 0.2);
            outline: none;
            border-color: #2B8D4C !important;
        }

        #kalkulator-tani .input-group-text {
            background-color: #f8f9fa;
            color: #2B8D4C;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        #kalkulator-tani input:focus + .input-group-text {
            border-color: #2B8D4C !important;
            background-color: #EAF7EE;
        }

        /* Form Animation */
        #kalkulator-tani .form-select,
        #kalkulator-tani .form-control {
            transition: all 0.3s ease;
        }

        #kalkulator-tani .form-select:hover,
        #kalkulator-tani .form-control:hover {
            transform: translateY(-2px);
        }

        @media (max-width: 992px) {
            .kalkulator-img {
                max-height: 350px;
                margin-top: 20px;
            }

            #kalkulator-tani .col-lg-6 {
                order: 2;
            }

            #kalkulator-tani .col-lg-6:first-child {
                order: 1;
            }
        }

        @media (max-width: 576px) {
            .kalkulator-img {
                max-height: 250px;
            }

            #kalkulator-tani h4 {
                font-size: 1.2rem;
            }

            #kalkulator-tani .form-label {
                font-size: 0.9rem;
            }
        }

        /* ===== HASIL PUPUK SECTION STYLES ===== */
        .hasil-pupuk-section {
            background-color: #ffffff;
        }

        .hasil-banner {
            position: relative;
            height: 220px;
            overflow: hidden;
        }

        .hasil-banner .banner-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .banner-text h2 {
            font-size: 1.8rem;
            line-height: 1.5;
            color: white;
        }

        .hasil-card {
            background-color: #FFED64;
            border-radius: 20px;
            box-shadow: 0px 6px 0px #EAE175;
            transition: all 0.3s ease;
            height: 100%;
        }

        .hasil-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
        }

        .icon-benefit {
            width: 50px;
            height: 50px;
            object-fit: contain;
        }

        .hasil-card h5 {
            font-size: 1.05rem;
        }

        .hasil-card p {
            font-size: 0.95rem;
        }

        @media (max-width: 768px) {
            .hasil-banner {
                height: 160px;
            }

            .banner-text h2 {
                font-size: 1.3rem;
            }

            .icon-benefit {
                width: 40px;
                height: 40px;
            }

            .hasil-card {
                margin-bottom: 1rem;
            }

            .hasil-card h5 {
                font-size: 1rem;
            }

            .hasil-card p {
                font-size: 0.85rem;
            }
        }

        @media (max-width: 576px) {
            .hasil-banner {
                height: 120px;
            }

            .banner-text h2 {
                font-size: 1rem;
                padding: 0 1rem;
            }

            .icon-benefit {
                width: 35px;
                height: 35px;
            }
        }

        /* ===== GALERI SECTION RESPONSIVE ===== */
        @media (max-width: 992px) {
            #anima-3 .col-lg-6:first-child {
                margin-bottom: 2rem;
            }

            #anima-3 h1 {
                font-size: 1.5rem;
            }

            #anima-3 .row.g-3 img {
                margin-top: 0 !important;
            }
        }

        @media (max-width: 576px) {
            #anima-3 h5 {
                font-size: 1rem;
            }

            #anima-3 h1 {
                font-size: 1.2rem;
            }

            #anima-3 h1 img {
                height: 1.2em !important;
            }

            #anima-3 p {
                font-size: 0.9rem;
            }
        }

        /* ===== TESTIMONI RESPONSIVE ===== */
        @media (max-width: 992px) {
            .container-fluid[style*="background-color: #2B8D4C"] .col-lg-3 {
                margin-bottom: 1.5rem;
            }
        }

        @media (max-width: 576px) {
            .container-fluid[style*="background-color: #2B8D4C"] h1 {
                font-size: 1.5rem;
            }

            .container-fluid[style*="background-color: #2B8D4C"] .p-4 {
                padding: 1.5rem !important;
            }

            .container-fluid[style*="background-color: #2B8D4C"] .p-4 p {
                font-size: 0.9rem;
            }
        }

        /* ===== FOOTER RESPONSIVE ===== */
        @media (max-width: 992px) {
            .footer .d-flex.flex-lg-row {
                text-align: center;
            }

            .footer img {
                width: 80px !important;
                height: auto !important;
            }

            .footer .small {
                font-size: 0.8rem;
                text-align: center;
            }
        }

        @media (max-width: 576px) {
            .footer a {
                font-size: 0.9rem;
                display: block;
                margin-bottom: 0.5rem;
            }

            .footer .d-flex:last-child {
                justify-content: center;
                margin-top: 1rem;
            }

            .footer img {
                width: 60px !important;
                margin-bottom: 0.5rem;
            }
        }

        /* ===== HERO SECTION RESPONSIVE ===== */
        @media (max-width: 768px) {
            .container-fluid.py-5[style*="background-image"] h1 {
                font-size: 2rem !important;
            }

            .container-fluid.py-5[style*="background-image"] p {
                font-size: 0.9rem;
            }

            .container-fluid.py-5[style*="background-image"] .container {
                padding: 2rem 1rem !important;
            }
        }

        @media (max-width: 576px) {
            .container-fluid.py-5[style*="background-image"] h1 {
                font-size: 1.5rem !important;
            }

            .container-fluid.py-5[style*="background-image"] .my-5 {
                margin-top: 2rem !important;
                margin-bottom: 2rem !important;
            }
        }

        /* ===== GENERAL SECTION SPACING ===== */
        @media (max-width: 768px) {
            .container.my-5.py-5,
            .container-fluid.py-5 {
                padding-top: 2rem !important;
                padding-bottom: 2rem !important;
            }

            .my-5 {
                margin-top: 2rem !important;
                margin-bottom: 2rem !important;
            }

            h3, h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <!-- ============================================ -->
    <!-- NAVBAR + HERO SECTION -->
    <!-- ============================================ -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top px-3" style="width:100%; background-color: #FFFFFF;">
        <a href="#" class="navbar-brand p-0 d-flex flex-row align-items-center">
            <img src="asset/img/Logo.png" alt="Logo" class="me-3" style="height: 40px;">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars" style="color: #2B8D4C;"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="#" class="nav-item nav-link active" style="color: #2B8D4C;">Beranda</a>
                <a href="shop" class="nav-item nav-link" style="color: #2B8D4C;">Shop</a>

                <!-- Dropdown Tentang Kami -->
                <div class="nav-item dropdown position-static">
                    <a href="#" class="nav-link dropdown-toggle" id="tentangKamiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #2B8D4C;">
                        Tentang Kami
                    </a>

                    <div class="dropdown-menu w-100 mt-0 border-0 shadow-lg p-4" aria-labelledby="tentangKamiDropdown" style="background-color:#fff;">
                        <div class="container d-flex flex-row align-items-start flex-wrap">
                            <div class="col-lg-3 col-md-12 mb-3 d-flex align-items-start justify-content-center">
                                <h4 class="fw-bold mb-0" style="color:#2B8D4C;">TENTANG<br>KAMI</h4>
                            </div>

                            <div style="width:1px; background-color:#2B8D4C; height:auto; margin:0 30px;"></div>

                            <div class="col-lg-6 col-md-12 d-flex flex-column justify-content-start">
                                <a href="profil-perusahaan" class="d-block py-2 fw-semibold text-link">Sekilas Pramudita Pupuk Nusantara</a>
                                <a href="visi-misi" class="d-block py-2 fw-semibold text-link">Visi & Misi</a>
                                <a href="tim-kami" class="d-block py-2 fw-semibold text-link">Jangkauan Pengguna</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="galeri" class="nav-item nav-link" style="color: #2B8D4C;">Galeri</a>
                <a href="produk" class="nav-item nav-link" style="color: #2B8D4C;">Produk</a>
                <a href="kontak" class="nav-item nav-link" style="color: #2B8D4C;">Kontak</a>
            </div>

            <a href="login" class="nav-item nav-link d-flex align-items-center" style="color: #2B8D4C;">
                <img src="asset/img/userlog.png" alt="User" style="height: 22px; width: 22px; object-fit: contain;">
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container-fluid py-5" style="width:100%; background-image: url('asset/img/Banner1.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 text-white animated slideInLeft">Pupuk Silika</h1>
                    <p class="text-white animated slideInLeft mb-4 pb-2">
                        Pupuk Silika mengandung silikon aktif yang memperkuat tanaman, meningkatkan ketahanan terhadap hama dan penyakit, serta mendukung panen yang lebih melimpah dan berkualitas.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================ -->
    <!-- PRODUK KAMI SECTION -->
    <!-- ============================================ -->
    <div class="container my-5 py-5">
        <h3 class="text-center fw-bold" style="color: #2B8D4C;">PRODUK KAMI</h3>
        <div class="d-flex justify-content-center align-items-center mb-4">
            <div style="width: 100px; height: 2px; background-color: #2B8D4C; margin: 0 10px;"></div>
        </div>

        <div id="produkCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner text-center">
                <!-- ITEM 1 -->
                <div class="carousel-item active">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-5">
                            <img src="asset/img/produk1.png" class="img-fluid" alt="Silika V-0D01" style="max-width: 300px;">
                        </div>
                        <div class="col-md-5 text-md-start text-center mt-4 mt-md-0">
                            <h4 class="fw-bold" style="color: #2B8D4C;">Silika V-0D01</h4>
                            <p style="color: #2B8D4C;">
                                Mengandung silika dalam bentuk larutan, mudah diserap daun melalui penyemprotan.
                            </p>
                            <a href="#" class="btn-selengkapnya mt-2">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- ITEM 2 -->
                <div class="carousel-item">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-5">
                            <img src="asset/img/produk2.png" class="img-fluid" alt="Silika Plus" style="max-width: 300px;">
                        </div>
                        <div class="col-md-5 text-md-start text-center mt-4 mt-md-0">
                            <h4 class="fw-bold" style="color: #2B8D4C;">Silika Plus</h4>
                            <p style="color: #2B8D4C;">
                                Kombinasi silika aktif dan nutrisi mikro untuk pertumbuhan optimal tanaman.
                            </p>
                            <a href="#" class="btn-selengkapnya mt-2">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- ITEM 3 -->
                <div class="carousel-item">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-5">
                            <img src="asset/img/produk3.png" class="img-fluid" alt="Silika Premium" style="max-width: 300px;">
                        </div>
                        <div class="col-md-5 text-md-start text-center mt-4 mt-md-0">
                            <h4 class="fw-bold" style="color: #2B8D4C;">Silika Premium</h4>
                            <p style="color: #2B8D4C;">
                                Diformulasikan khusus untuk meningkatkan ketahanan tanaman terhadap penyakit.
                            </p>
                            <a href="#" class="btn-selengkapnya mt-2">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- NAVIGATION PREVIEW -->
            <div class="d-flex justify-content-center align-items-center mt-5 position-relative">
                <!-- Panah kiri -->
                <button class="btn btn-prev" type="button" data-bs-target="#produkCarousel" data-bs-slide="prev" style="background: none; border: none;">
                    <div style="width: 0; height: 0; border-top: 25px solid transparent; border-bottom: 25px solid transparent; border-right: 25px solid #FFED64;"></div>
                </button>

                <!-- Thumbnail preview -->
                <div class="d-flex mx-3 gap-3">
                    <div class="thumb bg-secondary bg-opacity-10 rounded" data-bs-target="#produkCarousel" data-bs-slide-to="0" style="width: 120px; height: 120px; cursor: pointer;">
                        <img src="asset/img/produk1.png" class="w-100 h-100 p-3" style="object-fit: contain;">
                    </div>
                    <div class="thumb bg-secondary bg-opacity-10 rounded" data-bs-target="#produkCarousel" data-bs-slide-to="1" style="width: 120px; height: 120px; cursor: pointer;">
                        <img src="asset/img/produk2.png" class="w-100 h-100 p-3" style="object-fit: contain;">
                    </div>
                    <div class="thumb bg-secondary bg-opacity-10 rounded" data-bs-target="#produkCarousel" data-bs-slide-to="2" style="width: 120px; height: 120px; cursor: pointer;">
                        <img src="asset/img/produk3.png" class="w-100 h-100 p-3" style="object-fit: contain;">
                    </div>
                </div>

                <!-- Panah kanan -->
                <button class="btn btn-next" type="button" data-bs-target="#produkCarousel" data-bs-slide="next" style="background: none; border: none;">
                    <div style="width: 0; height: 0; border-top: 25px solid transparent; border-bottom: 25px solid transparent; border-left: 25px solid #FFED64;"></div>
                </button>
            </div>
        </div>
    </div>

    <!-- ============================================ -->
    <!-- KALKULATOR TANI SECTION -->
    <!-- ============================================ -->
    <div class="container-fluid py-5" id="kalkulator-tani">
        <div class="container py-5">
            <div class="row align-items-center justify-content-center">
                <!-- Kolom Kiri: Form -->
                <div class="col-lg-6 col-md-10 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center mb-4">
                        <img src="asset/img/Logo.png" alt="Logo PPN" style="height: 40px;" class="me-2">
                        <h4 class="fw-bold mb-0" style="color:#000;">Kalkulator Tani</h4>
                    </div>

                    <form class="p-2">
                        <!-- Jenis Tanaman -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold" style="color:#000;">Jenis Tanaman</label>
                            <select class="form-select border-success border-opacity-50 rounded-3 py-2" style="border: 2px solid #A4C37F;">
                                <option selected>Jenis Tanaman</option>
                                <option>Padi</option>
                                <option>Jagung</option>
                                <option>Kedelai</option>
                            </select>
                        </div>

                        <!-- Jenis Produk -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold" style="color:#000;">Jenis Produk</label>
                            <select class="form-select border-success border-opacity-50 rounded-3 py-2" style="border: 2px solid #A4C37F;">
                                <option selected>Jenis Produk</option>
                                <option>Silika V-0D01</option>
                                <option>Silika Plus</option>
                                <option>Silika Premium</option>
                            </select>
                        </div>

                        <!-- Luas Tanah -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold" style="color:#000;">Luas Tanah</label>
                            <div class="input-group">
                                <input type="number" class="form-control rounded-start-3 py-2" placeholder="Masukan Luas Tanah" style="border: 2px solid #A4C37F;">
                                <span class="input-group-text rounded-end-3" style="border: 2px solid #A4C37F; border-left: none;">M²</span>
                            </div>
                        </div>

                        <!-- Tombol Hitung -->
                        <div class="text-center">
                            <button type="submit" class="btn w-100 py-2 fw-semibold text-white rounded-pill" style="background: linear-gradient(90deg, #2B8D4C 0%, #D5D44B 100%); border:none;">
                                Hitung
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Kolom Kanan: Gambar -->
                <div class="col-lg-6 col-md-10 text-center">
                    <div class="position-relative">
                        <img src="asset/img/KalkulatorBanner.png" alt="Kalkulator Tani" class="img-fluid rounded kalkulator-img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================ -->
    <!-- HASIL PEMAKAIAN PUPUK SILIKA SECTION -->
    <!-- ============================================ -->
    <section class="hasil-pupuk-section">
        <!-- Banner Daun -->
        <div class="hasil-banner position-relative">
            <img src="asset/img/HeadBanner.png" alt="Banner Daun" class="w-100 banner-img">
            <div class="banner-text position-absolute top-50 start-50 translate-middle text-center">
                <h2 class="fw-semibold text-white">
                    Hasil Pemakaian Pupuk Silika <br> Pramudita Pupuk Nusantara
                </h2>
            </div>
        </div>

        <!-- Konten Kartu -->
        <div class="container py-5">
            <div class="row g-4 justify-content-center">
                <!-- Card 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="hasil-card p-4 text-center">
                        <img src="asset/img/IconBenefit.png" alt="Icon" class="icon-benefit mb-3">
                        <h5 class="fw-bold mb-2" style="color:#2B8D4C;">Memperkuat Struktur Tanaman</h5>
                        <p class="mb-0 text-dark">Meningkatkan ketahanan batang dan daun agar tidak mudah rebah.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="hasil-card p-4 text-center">
                        <img src="asset/img/IconBenefit.png" alt="Icon" class="icon-benefit mb-3">
                        <h5 class="fw-bold mb-2" style="color:#2B8D4C;">Meningkatkan Ketahanan terhadap Hama dan Penyakit</h5>
                        <p class="mb-0 text-dark">Tanaman lebih tahan terhadap serangan jamur, bakteri, dan serangga.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="hasil-card p-4 text-center">
                        <img src="asset/img/IconBenefit.png" alt="Icon" class="icon-benefit mb-3">
                        <h5 class="fw-bold mb-2" style="color:#2B8D4C;">Mengurangi Stres Akibat Cuaca Ekstrem</h5>
                        <p class="mb-0 text-dark">Efektif membantu tanaman menghadapi kekeringan atau kelebihan air.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="hasil-card p-4 text-center">
                        <img src="asset/img/IconBenefit.png" alt="Icon" class="icon-benefit mb-3">
                        <h5 class="fw-bold mb-2" style="color:#2B8D4C;">Meningkatkan Efisiensi Fotosintesis</h5>
                        <p class="mb-0 text-dark">Daun lebih tegak dan optimal menangkap sinar matahari.</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="hasil-card p-4 text-center">
                        <img src="asset/img/IconBenefit.png" alt="Icon" class="icon-benefit mb-3">
                        <h5 class="fw-bold mb-2" style="color:#2B8D4C;">Meningkatkan Hasil dan Kualitas Panen</h5>
                        <p class="mb-0 text-dark">Buah lebih besar, lebih padat, dan tahan lama saat disimpan.</p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="hasil-card p-4 text-center">
                        <img src="asset/img/IconBenefit.png" alt="Icon" class="icon-benefit mb-3">
                        <h5 class="fw-bold mb-2" style="color:#2B8D4C;">Memperbaiki Struktur dan Kesehatan Tanah</h5>
                        <p class="mb-0 text-dark">Membantu aerasi dan penyerapan nutrisi tanah jadi lebih baik.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- GALERI SECTION -->
    <!-- ============================================ -->
    <div class="container-fluid py-5" id="anima-3">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" src="asset/img/Galeri1.png" alt="">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" src="asset/img/Galeri2.png" style="margin-top: 25%;" alt="">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" src="asset/img/Galeri3.png" alt="">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-100 wow zoomIn" src="asset/img/Galeri4.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h5 class="section-title ff-secondary text-start fu-normal" style="color: #2B8D4C;">Galeri</h5>
                    <h1>
                        Selamat datang di
                        <img src="asset/img/Logo.png" alt="Logo" class="me-2" style="height: 1.5em;">
                    </h1>
                    <p style="text-align: justify;">
                        PT. Pramudita Pupuk Nusantara berkomitmen untuk memberikan kontribusi nyata dalam kemajuan pertanian Indonesia melalui inovasi pupuk berkualitas tinggi. Kami memastikan hanya produk terbaik yang dihasilkan untuk mendukung kesuburan tanah, meningkatkan hasil panen, dan menjaga keberlanjutan pertanian Anda.
                    </p>
                    <a href="galeri" class="btn-selengkapnya mt-2">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================ -->
    <!-- TESTIMONI SECTION -->
    <!-- ============================================ -->
    <div class="container-fluid py-5" style="background-color: #2B8D4C;">
        <div class="container py-5">
            <div class="text-start mb-5">
                <h5 class="fw-normal text-white">Testimoni</h5>
                <h1 class="fw-semibold text-white">Pupuk Silika Pramudita Pupuk Nusantara</h1>
            </div>

            <div class="row g-4">
                <!-- Testimoni 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="p-4 h-100" style="background-color: #FFED64; border-radius: 10px; color: #333;">
                        <div class="d-flex align-items-center mb-3">
                            <div style="width: 40px; height: 40px; background-color: #333; border-radius: 50%;"></div>
                            <h6 class="ms-2 fw-bold m-0">Slamet</h6>
                        </div>
                        <p>Sejak rutin pakai pupuk silika, tanaman padi saya lebih kokoh dan tidak gampang rebah.
                            Hasil panen naik sekitar 20% dibanding musim sebelumnya. Hemat biaya pestisida juga!</p>
                        <div class="mt-4">
                            <div style="font-size: 22px;">✒️</div>
                            <small class="text-muted">Petani Sayur - Desa Karangrau</small>
                        </div>
                    </div>
                </div>

                <!-- Testimoni 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="p-4 h-100" style="background-color: #FFED64; border-radius: 10px; color: #333;">
                        <div class="d-flex align-items-center mb-3">
                            <div style="width: 40px; height: 40px; background-color: #333; border-radius: 50%;"></div>
                            <h6 class="ms-2 fw-bold m-0">Slamet</h6>
                        </div>
                        <p>Dulu sering gagal panen karena cuaca ekstrem. Sekarang dengan silika, tanaman lebih kuat
                            meskipun hujan deras atau panas. Lahan saya jadi lebih subur juga.</p>
                        <div class="mt-4">
                            <div style="font-size: 22px;">✒️</div>
                            <small class="text-muted">Petani Sayur - Desa Karangrau</small>
                        </div>
                    </div>
                </div>

                <!-- Testimoni 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="p-4 h-100" style="background-color: #FFED64; border-radius: 10px; color: #333;">
                        <div class="d-flex align-items-center mb-3">
                            <div style="width: 40px; height: 40px; background-color: #333; border-radius: 50%;"></div>
                            <h6 class="ms-2 fw-bold m-0">Slamet</h6>
                        </div>
                        <p>Pupuk silika bukan sekadar pelengkap, tapi solusi untuk meningkatkan daya tahan tanaman
                            tanpa ketergantungan pada pestisida berlebihan. Saya selalu rekomendasikan ke mitra tani saya.</p>
                        <div class="mt-4">
                            <div style="font-size: 22px;">✒️</div>
                            <small class="text-muted">Petani Sayur - Desa Karangrau</small>
                        </div>
                    </div>
                </div>

                <!-- Testimoni 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="p-4 h-100" style="background-color: #FFED64; border-radius: 10px; color: #333;">
                        <div class="d-flex align-items-center mb-3">
                            <div style="width: 40px; height: 40px; background-color: #333; border-radius: 50%;"></div>
                            <h6 class="ms-2 fw-bold m-0">Slamet</h6>
                        </div>
                        <p>Tanaman cabai saya lebih tahan penyakit sejak pakai pupuk silika. Buahnya besar-besar dan tidak mudah busuk.
                            Panen jadi lebih banyak dan tahan lama di pasar.</p>
                        <div class="mt-4">
                            <div style="font-size: 22px;">✒️</div>
                            <small class="text-muted">Petani Sayur - Desa Karangrau</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================ -->
    <!-- FOOTER SECTION -->
    <!-- ============================================ -->
    <div class="container-fluid text-light footer pt-5" style="background-color: #1B5930;">
        <div class="container py-4">
            <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center mb-3 mb-lg-0">
                    <img src="asset/img/Logo.png" alt="Logo" width="110" height="50" class="me-2">
                    <img src="asset/img/Logo2.png" alt="Logo" width="100" height="50" class="me-2">
                    <img src="asset/img/Logo3.png" alt="Logo" width="200" height="50" class="me-2">
                </div>
                <p class="m-0 small">Copyright @PramuditaPupuknusantara 2025 - All Right Reserved</p>
            </div>
            <hr style="border: 1px solid rgba(255,255,255,0.3);">
            <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center">
                <div class="mb-3 mb-lg-0">
                    <a href="#" class="text-white text-decoration-none me-3">Beranda</a>
                    <a href="#" class="text-white text-decoration-none me-3">Hubungi Kami</a>
                    <a href="#" class="text-white text-decoration-none">Kantor Kami</a>
                </div>
                <div class="d-flex">
                    <a href="#" class="text-white me-3"><i class="fab fa-whatsapp fa-lg"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-tiktok fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================ -->
    <!-- JAVASCRIPT LIBRARIES -->
    <!-- ============================================ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="asset/js/anima.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- ============================================ -->
    <!-- CUSTOM JAVASCRIPT -->
    <!-- ============================================ -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myCarousel = document.querySelector('#carouselMenu');
            var carousel = new bootstrap.Carousel(myCarousel, {
                interval: 1300,
                ride: 'carousel'
            });
        });
    </script>

</body>

</html>