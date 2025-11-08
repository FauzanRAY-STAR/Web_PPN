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
    <link rel="stylesheet" href="asset/style/beranda.css">
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