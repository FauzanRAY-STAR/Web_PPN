<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTPPN Galeri</title>
    
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

    <!-- Galeri Start -->
    <div class="container-fluid py-5 mt-4">
        <div class="container">
            <div class="text-center wow fadeInUp" style="color: #2D3468;">
                <h1 class="mb-5">Galeri Kami</h1>
            </div>

            <!-- Gallery cards start -->
            
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <?php
                    include('config/koneksi.php');
                    $no = 1; 
                    $data = mysqli_query($conn, "SELECT * FROM galeri");
                    while($r = mysqli_fetch_array($data)){
                        if ($r["status"] === 'Aktif') {
                ?>

                <div class="col">
                    <div class="card h-100">
                        <img src="asset/img/<?= $r['gambar']; ?>" class="card-img-top" data-bs-toggle="modal" data-bs-target="#galeriModal<?= $r['id']; ?>">
                    </div>
                </div>
                
                <!-- Modal Lihat Galeri -->
                <div class="modal fade" id="galeriModal<?= $r['id'] ?>" tabindex="-1" aria-labelledby="galeriModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bolder" id="galeriModalLabel">Galeri Ganyeum</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="asset/img/<?= $r['gambar']; ?>" class="card-img-top mb-3" data-bs-toggle="modal" data-bs-target="#galeriModal<?= $r['id']; ?>">
                                <p><?= $r['deskripsi']; ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

                <?php 
                        }
                    $no++; 
                    } 
                ?>
            </div>
            <!-- Gallery cards end -->
        </div>
    </div>
    <!-- Galeri End -->
     
    <!-- Footer Start -->
    <div class="container-fluid text-light footer mt-5 pt-5" style="background-color: #2D3468;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-12 text-center">
                    <p class="text-white mb-0">&copy; 2024 Ganyeum</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Floating IG Button -->
    <div class="gfab-container" style="z-index: 1050;">
        <a href="#">
            <div class="gfab gfab-38">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="#ffffff" d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
                </svg>
            </div>
        </a>
        <a href="https://www.instagram.com/ganyeum.yo/" target="_blank">
            <div class="gfab">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="#ffffff" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                </svg>
            </div>
        </a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="asset/style/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
