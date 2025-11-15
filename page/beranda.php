<?php
include('config/koneksi.php');

// Query untuk mengambil carousel aktif
$query_carousel = "SELECT * FROM carousel WHERE status = 'Aktif' ORDER BY urutan ASC";
$result_carousel = mysqli_query($conn, $query_carousel);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTPPN</title>
    
    <link href="asset/img/LogoIco.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="asset/style/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/style/style.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/style/fab.css">
    <link rel="stylesheet" href="asset/style/beranda.css">

    <style>
        * { font-family: 'Poppins', sans-serif; }
        body { font-family: 'Poppins', sans-serif; font-weight: 400; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Poppins', sans-serif; font-weight: 600; }
        .fw-bold { font-weight: 700 !important; }
        .fw-semibold { font-weight: 600 !important; }
        .fw-normal { font-weight: 400 !important; }
        .fw-light { font-weight: 300 !important; }

        /* Hero Carousel Styling */
        .hero-carousel-item {
            height: 100vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            align-items: center;
        }

        .hero-title {
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
            letter-spacing: 1px;
        }

        .hero-description {
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
            font-size: 1.1rem;
            line-height: 1.6;
        }

        /* Carousel Controls */
        .carousel-control-prev,
        .carousel-control-next {
            width: 50%;
            opacity: 0;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            opacity: 0.1;
        }

        .carousel-indicators {
            bottom: 30px;
        }

        .carousel-indicators button {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin: 0 5px;
        }

        /* Empty State */
        .hero-empty {
            height: 100vh;
            background: linear-gradient(135deg, #2B8D4C 0%, #1B5930 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
    </style>
</head>

<body>
    
<?php include('admin/template/navbar.php'); ?>

<!-- ============================================ -->
<!-- HERO CAROUSEL SECTION (DYNAMIC FROM DATABASE) -->
<!-- ============================================ -->
<?php if ($result_carousel && mysqli_num_rows($result_carousel) > 0): ?>
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php 
        $index = 0;
        while ($carousel = mysqli_fetch_assoc($result_carousel)): 
            $active_class = ($index === 0) ? 'active' : '';
        ?>
        <div class="carousel-item <?= $active_class ?>">
            <div class="hero-carousel-item" style="background-image: url('asset/img/<?= htmlspecialchars($carousel['gambar']) ?>');">
                <div class="hero-overlay"></div>
                <div class="hero-content">
                    <div class="container text-center text-lg-start">
                        <h1 class="display-3 text-white fw-bold hero-title">
                            <?= htmlspecialchars($carousel['judul']) ?>
                        </h1>
                        <?php if (!empty($carousel['deskripsi'])): ?>
                        <p class="text-white mb-4 hero-description">
                            <?= htmlspecialchars($carousel['deskripsi']) ?>
                        </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            $index++;
        endwhile; 
        ?>
    </div>

    <!-- Carousel Indicators -->
    <?php if (mysqli_num_rows($result_carousel) > 1): ?>
    <div class="carousel-indicators">
        <?php 
        mysqli_data_seek($result_carousel, 0);
        $btn_index = 0;
        while ($carousel = mysqli_fetch_assoc($result_carousel)): 
            $active_btn = ($btn_index === 0) ? 'active' : '';
        ?>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="<?= $btn_index ?>" class="<?= $active_btn ?>" aria-label="Slide <?= $btn_index + 1 ?>"></button>
        <?php 
            $btn_index++;
        endwhile; 
        ?>
    </div>
    <?php endif; ?>

    <!-- Carousel Controls (Click Areas) -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="visually-hidden">Next</span>
    </button>
</div>

<?php else: ?>
<!-- Empty State jika tidak ada carousel aktif -->
<div class="hero-empty">
    <div class="container">
        <i class="bi bi-images" style="font-size: 5rem; opacity: 0.5;"></i>
        <h2 class="mt-3">Tidak ada carousel tersedia</h2>
        <p class="mb-0">Silakan hubungi administrator untuk menambahkan carousel</p>
    </div>
</div>
<?php endif; ?>

<?php
// Query untuk mengambil produk yang dipajang (maksimal 5 produk)
$query_produk = "SELECT * FROM produk WHERE status = 'Dipajang' ORDER BY tanggal DESC LIMIT 5";
$result_produk = mysqli_query($conn, $query_produk);
?>

<!-- ============================================ -->
<!-- PRODUK KAMI SECTION (DYNAMIC) -->
<!-- ============================================ -->
<div class="container my-5 py-5">
    <h3 class="text-center fw-bold" style="color: #2B8D4C;">PRODUK KAMI</h3>
    <div class="d-flex justify-content-center align-items-center mb-4">
        <div style="width: 100px; height: 2px; background-color: #2B8D4C; margin: 0 10px;"></div>
    </div>

    <?php if ($result_produk && mysqli_num_rows($result_produk) > 0): ?>
    <div id="produkCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner text-center">
            <?php 
            $index = 0;
            while ($produk = mysqli_fetch_assoc($result_produk)): 
                $active_class = ($index === 0) ? 'active' : '';
            ?>
                <div class="carousel-item <?= $active_class ?>">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-5">
                            <img src="asset/img/<?= htmlspecialchars($produk['gambar']) ?>" 
                                 class="img-fluid" 
                                 alt="<?= htmlspecialchars($produk['nama']) ?>" 
                                 style="max-width: 300px;"
                                 onerror="this.src='asset/img/placeholder.png'">
                        </div>
                        <div class="col-md-5 text-md-start text-center mt-4 mt-md-0">
                            <h4 class="fw-bold" style="color: #2B8D4C;">
                                <?= htmlspecialchars($produk['nama']) ?>
                            </h4>
                            
                            <?php if (!empty($produk['atribut'])): ?>
                                <div class="mb-2">
                                    <?php 
                                    $atribut_array = explode(' ', $produk['atribut']);
                                    foreach ($atribut_array as $atribut):
                                        $badge_class = '';
                                        switch($atribut) {
                                            case 'Baru': $badge_class = 'bg-primary'; break;
                                            case 'Laris': $badge_class = 'bg-warning text-dark'; break;
                                            case 'Promo': $badge_class = 'bg-success'; break;
                                            case 'Bonus': $badge_class = 'bg-info text-dark'; break;
                                            case 'Habis': $badge_class = 'bg-danger'; break;
                                        }
                                    ?>
                                        <span class="badge <?= $badge_class ?> me-1">
                                            <?= htmlspecialchars($atribut) ?>
                                        </span>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            
                            <p style="color: #2B8D4C;">
                                <?= htmlspecialchars($produk['deskripsi']) ?>
                            </p>
                            
                            <a href="page/detail_produk.php?id=<?= $produk['id'] ?>" 
                               class="btn-selengkapnya mt-2">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            <?php 
                $index++;
            endwhile; 
            ?>
        </div>

        <!-- NAVIGATION PREVIEW -->
        <div class="d-flex justify-content-center align-items-center mt-5 position-relative">
            <button class="btn btn-prev" type="button" data-bs-target="#produkCarousel" data-bs-slide="prev" style="background: none; border: none;">
                <div style="width: 0; height: 0; border-top: 25px solid transparent; border-bottom: 25px solid transparent; border-right: 25px solid #FFED64;"></div>
            </button>

            <div class="d-flex mx-3 gap-3" id="thumbnailContainer">
                <?php 
                mysqli_data_seek($result_produk, 0);
                $thumb_index = 0;
                while ($produk = mysqli_fetch_assoc($result_produk)): 
                    $active_thumb = ($thumb_index === 0) ? 'active' : '';
                ?>
                    <div class="thumb bg-secondary bg-opacity-10 rounded <?= $active_thumb ?>" 
                         data-bs-target="#produkCarousel" 
                         data-bs-slide-to="<?= $thumb_index ?>" 
                         style="width: 120px; height: 120px; cursor: pointer; border: 3px solid transparent; transition: all 0.3s ease;">
                        <img src="asset/img/<?= htmlspecialchars($produk['gambar_kecil'] ?? $produk['gambar']) ?>" 
                             class="w-100 h-100 p-3" 
                             style="object-fit: contain;"
                             alt="<?= htmlspecialchars($produk['nama']) ?>"
                             onerror="this.src='asset/img/placeholder.png'">
                    </div>
                <?php 
                    $thumb_index++;
                endwhile; 
                ?>
            </div>

            <button class="btn btn-next" type="button" data-bs-target="#produkCarousel" data-bs-slide="next" style="background: none; border: none;">
                <div style="width: 0; height: 0; border-top: 25px solid transparent; border-bottom: 25px solid transparent; border-left: 25px solid #FFED64;"></div>
            </button>
        </div>
    </div>
    
    <?php else: ?>
    <div class="text-center py-5">
        <p class="text-muted">Belum ada produk yang dipajang saat ini.</p>
        <a href="produk" class="btn btn-success mt-3">Lihat Semua Produk</a>
    </div>
    <?php endif; ?>
</div>

<!-- ============================================ -->
<!-- KALKULATOR TANI SECTION -->
<!-- ============================================ -->
<div class="container-fluid py-5" id="kalkulator-tani">
    <div class="container py-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-10 mb-5 mb-lg-0">
                <div class="d-flex align-items-center mb-4">
                    <img src="asset/img/Logo.png" alt="Logo PPN" style="height: 40px;" class="me-2">
                    <div class="vr" style="height: 35px; width: 2px; background-color: #000; margin: 10px;"></div>
                    <h4 class="fw-bold mb-0" style="color:#000;">Kalkulator Tani</h4>
                </div>

                <form id="formKalkulator" class="p-2">
                    <div class="mb-4">
                        <label class="form-label fw-semibold" style="color:#000;">Jenis Tanaman</label>
                        <select class="form-select border-success border-opacity-50 rounded-3 py-2" style="border: 2px solid #A4C37F;">
                            <option selected>Jenis Tanaman</option>
                            <option>Padi</option>
                            <option>Jagung</option>
                            <option>Kedelai</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold" style="color:#000;">Jenis Produk</label>
                        <select class="form-select border-success border-opacity-50 rounded-3 py-2" style="border: 2px solid #A4C37F;">
                            <option selected>Jenis Produk</option>
                            <option>Silika V-0D01</option>
                            <option>Silika Plus</option>
                            <option>Silika Premium</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold" style="color:#000;">Luas Tanah</label>
                        <div class="input-group">
                            <input type="number" class="form-control rounded-start-3 py-2" placeholder="Masukan Luas Tanah" style="border: 2px solid #A4C37F;">
                            <span class="input-group-text rounded-end-3" style="border: 2px solid #A4C37F; border-left: none;">M²</span>
                        </div>
                    </div>

                    <button type="submit" class="btn w-100 py-2 fw-semibold text-white rounded-pill" style="background: linear-gradient(90deg, #2B8D4C 0%, #D5D44B 100%); border:none;">
                        Hitung
                    </button>
                </form>
            </div>

            <div class="col-lg-6 col-md-10 text-center">
                <div class="position-relative">
                    <img src="asset/img/KalkulatorBanner.png" alt="Kalkulator Tani" class="img-fluid rounded kalkulator-img">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- POPUP HASIL KALKULATOR -->
<div id="popupHasil" style="display:none; position: fixed; top: 50px; left: 50px; background-color: #fff; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.3); padding: 20px; width: 350px; z-index: 1050;">
    <div class="d-flex justify-content-between align-items-start mb-3">
        <div class="d-flex align-items-center gap-2">
            <img src="asset/img/logo.png" alt="Logo" width="100">
            <div class="vr" style="height: 35px; width: 2px; background-color: #000;"></div>
            <h5 class="fw-bold mb-0">Hasil</h5>
        </div>
    </div>

    <div class="mb-2"><strong>Jenis Tanaman:</strong> <span id="hasilJenisTanaman"></span></div>
    <div class="mb-2"><strong>Jenis Produk:</strong> <span id="hasilJenisProduk"></span></div>
    <div class="mb-3"><strong>Luas Tanah:</strong> <span id="hasilLuasTanah"></span> M²</div>

    <div class="d-flex align-items-center justify-content-center mb-3">
        <img src="asset/img/produk1.png" alt="Produk" class="me-3" style="height:80px; object-fit:contain; display:block;">
        <span style="font-weight:500; font-size:1.25rem; line-height:1;">5kg</span>
    </div>

    <button id="btnPesanSekarang" type="button" class="btn w-100 py-2 fw-semibold text-white rounded-pill" style="background: linear-gradient(90deg, #2B8D4C 0%, #D5D44B 100%); border:none;" onclick="window.location.href='page/shop.php'">
        Pesan Sekarang
    </button>
</div>

<!-- ============================================ -->
<!-- HASIL PEMAKAIAN PUPUK SILIKA SECTION -->
<!-- ============================================ -->
<section class="hasil-pupuk-section">
    <div class="hasil-banner position-relative">
        <img src="asset/img/HeadBanner.png" alt="Banner Daun" class="w-100 banner-img">
        <div class="banner-text position-absolute top-50 start-50 translate-middle text-center">
            <h2 class="fw-semibold text-white">
                Hasil Pemakaian Pupuk Silika <br> Pramudita Pupuk Nusantara
            </h2>
        </div>
    </div>

    <div class="container cards-container">
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="hasil-card-modern">
                    <div class="card-icon-wrapper">
                        <img src="asset/img/IconBenefit.png" alt="Icon" class="icon-benefit">
                    </div>
                    <h5 class="card-title">Memperkuat Struktur Tanaman</h5>
                    <p class="card-description">Meningkatkan ketahanan batang dan daun agar tidak mudah rebah.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="hasil-card-modern">
                    <div class="card-icon-wrapper">
                        <img src="asset/img/IconBenefit.png" alt="Icon" class="icon-benefit">
                    </div>
                    <h5 class="card-title">Meningkatkan Ketahanan terhadap Hama dan Penyakit</h5>
                    <p class="card-description">Tanaman lebih tahan terhadap serangan jamur, bakteri, dan serangga.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="hasil-card-modern">
                    <div class="card-icon-wrapper">
                        <img src="asset/img/IconBenefit.png" alt="Icon" class="icon-benefit">
                    </div>
                    <h5 class="card-title">Mengurangi Stres Akibat Cuaca Ekstrem</h5>
                    <p class="card-description">Efektif membantu tanaman menghadapi kekeringan atau kelebihan air.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="hasil-card-modern">
                    <div class="card-icon-wrapper">
                        <img src="asset/img/IconBenefit.png" alt="Icon" class="icon-benefit">
                    </div>
                    <h5 class="card-title">Meningkatkan Efisiensi Fotosintesis</h5>
                    <p class="card-description">Daun lebih tegak dan optimal menangkap sinar matahari.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="hasil-card-modern">
                    <div class="card-icon-wrapper">
                        <img src="asset/img/IconBenefit.png" alt="Icon" class="icon-benefit">
                    </div>
                    <h5 class="card-title">Meningkatkan Hasil dan Kualitas Panen</h5>
                    <p class="card-description">Buah lebih besar, lebih padat, dan tahan lama saat disimpan.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="hasil-card-modern">
                    <div class="card-icon-wrapper">
                        <img src="asset/img/IconBenefit.png" alt="Icon" class="icon-benefit">
                    </div>
                    <h5 class="card-title">Memperbaiki Struktur dan Kesehatan Tanah</h5>
                    <p class="card-description">Membantu aerasi dan penyerapan nutrisi tanah jadi lebih baik.</p>
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
            <div class="col-lg-3 col-md-6">
                <div class="p-4 h-100 testimoni-card" style="background-color: #FFED64; border-radius: 10px; color: #333; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#testimoniModal1">
                    <div class="d-flex align-items-center mb-3">
                        <div style="width: 40px; height: 40px; background-color: #333; border-radius: 50%;"></div>
                        <h6 class="ms-2 fw-bold m-0">Asep Alexander</h6>
                    </div>
                    <p>Sejak rutin pakai pupuk silika, tanaman padi saya lebih kokoh dan tidak gampang rebah.
                        Hasil panen naik sekitar 20% dibanding musim sebelumnya. Hemat biaya pestisida juga!</p>
                    <div class="mt-4">
                        <div style="font-size: 22px;">✒️</div>
                        <small class="text-muted">Tera Nusa Maxi-D - Purwokerto Timur</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="p-4 h-100 testimoni-card" style="background-color: #FFED64; border-radius: 10px; color: #333; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#testimoniModal2">
                    <div class="d-flex align-items-center mb-3">
                        <div style="width: 40px; height: 40px; background-color: #333; border-radius: 50%;"></div>
                        <h6 class="ms-2 fw-bold m-0">Budi Santoso</h6>
                    </div>
                    <p>Dulu sering gagal panen karena cuaca ekstrem. Sekarang dengan silika, tanaman lebih kuat
                        meskipun hujan deras atau panas. Lahan saya jadi lebih subur juga.</p>
                    <div class="mt-4">
                        <div style="font-size: 22px;">✒️</div>
                        <small class="text-muted">Silika V-0D01 - Desa Karangrau</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="p-4 h-100 testimoni-card" style="background-color: #FFED64; border-radius: 10px; color: #333; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#testimoniModal3">
                    <div class="d-flex align-items-center mb-3">
                        <div style="width: 40px; height: 40px; background-color: #333; border-radius: 50%;"></div>
                        <h6 class="ms-2 fw-bold m-0">Dr. Agung Wijaya</h6>
                    </div>
                    <p>Pupuk silika bukan sekadar pelengkap, tapi solusi untuk meningkatkan daya tahan tanaman
                        tanpa ketergantungan pada pestisida berlebihan. Saya selalu rekomendasikan ke mitra tani saya.</p>
                    <div class="mt-4">
                        <div style="font-size: 22px;">✒️</div>
                        <small class="text-muted">Tera Nusa Silika - IPB University</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="p-4 h-100 testimoni-card" style="background-color: #FFED64; border-radius: 10px; color: #333; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#testimoniModal4">
                    <div class="d-flex align-items-center mb-3">
                        <div style="width: 40px; height: 40px; background-color: #333; border-radius: 50%;"></div>
                        <h6 class="ms-2 fw-bold m-0">Ibu Siti Aminah</h6>
                    </div>
                    <p>Tanaman cabai saya lebih tahan penyakit sejak pakai pupuk silika. Buahnya besar-besar dan tidak mudah busuk.
                        Panen jadi lebih banyak dan tahan lama di pasar.</p>
                    <div class="mt-4">
                        <div style="font-size: 22px;">✒️</div>
                        <small class="text-muted">Tera Nusa Hama - Bandung</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL TESTIMONI 1 -->
<div class="modal fade" id="testimoniModal1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius: 20px; border: none;">
            <div class="modal-body p-0">
                <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close" style="z-index: 10;"></button>
                <div class="bg-white p-5" style="border-radius: 20px;">
                    <div class="d-flex align-items-center mb-4">
                        <img src="asset/img/logo.png" alt="Logo" style="height: 50px;">
                        <div class="ms-3" style="border-left: 3px solid #333; padding-left: 15px;">
                            <h4 class="mb-0 fw-bold">Testimoni</h4>
                        </div>
                    </div>

                    <div class="text-center mb-4">
                        <img src="asset/img/Testimoni1.png" alt="Testimoni" class="img-fluid" style="max-height: 400px; border-radius: 15px; object-fit: cover;">
                    </div>

                    <div class="text-center mb-3">
                        <h3 class="fw-bold mb-1">Asep Alexander</h3>
                        <h5 class="fw-semibold mb-2" style="color: #2B8D4C;">Tera Nusa Maxi-D</h5>
                        <p class="text-muted mb-0">Purwokerto Timur</p>
                    </div>

                    <p class="text-justify" style="line-height: 1.8; font-size: 1rem;">
                        Sejak rutin pakai pupuk silika, tanaman padi saya lebih kokoh dan tidak gampang rebah. Hasil panen naik sekitar 20% dibanding musim sebelumnya. Hemat biaya pestisida juga!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL TESTIMONI 2 -->
<div class="modal fade" id="testimoniModal2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius: 20px; border: none;">
            <div class="modal-body p-0">
                <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close" style="z-index: 10;"></button>
                <div class="bg-white p-5" style="border-radius: 20px;">
                    <div class="d-flex align-items-center mb-4">
                        <img src="asset/img/logo.png" alt="Logo" style="height: 50px;">
                        <div class="ms-3" style="border-left: 3px solid #333; padding-left: 15px;">
                            <h4 class="mb-0 fw-bold">Testimoni</h4>
                        </div>
                    </div>

                    <div class="text-center mb-4">
                        <img src="asset/img/Testimoni2.png" alt="Testimoni" class="img-fluid" style="max-height: 400px; border-radius: 15px; object-fit: cover;">
                    </div>

                    <div class="text-center mb-3">
                        <h3 class="fw-bold mb-1">Budi Santoso</h3>
                        <h5 class="fw-semibold mb-2" style="color: #2B8D4C;">Silika V-0D01</h5>
                        <p class="text-muted mb-0">Desa Karangrau</p>
                    </div>

                    <p class="text-justify" style="line-height: 1.8; font-size: 1rem;">
                        Dulu sering gagal panen karena cuaca ekstrem. Sekarang dengan silika, tanaman lebih kuat meskipun hujan deras atau panas. Lahan saya jadi lebih subur juga.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL TESTIMONI 3 -->
<div class="modal fade" id="testimoniModal3" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius: 20px; border: none;">
            <div class="modal-body p-0">
                <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close" style="z-index: 10;"></button>
                <div class="bg-white p-5" style="border-radius: 20px;">
                    <div class="d-flex align-items-center mb-4">
                        <img src="asset/img/logo.png" alt="Logo" style="height: 50px;">
                        <div class="ms-3" style="border-left: 3px solid #333; padding-left: 15px;">
                            <h4 class="mb-0 fw-bold">Testimoni</h4>
                        </div>
                    </div>

                    <div class="text-center mb-4">
                        <img src="asset/img/Testimoni3.png" alt="Testimoni" class="img-fluid" style="max-height: 400px; border-radius: 15px; object-fit: cover;">
                    </div>

                    <div class="text-center mb-3">
                        <h3 class="fw-bold mb-1">Dr. Agung Wijaya</h3>
                        <h5 class="fw-semibold mb-2" style="color: #2B8D4C;">Tera Nusa Silika</h5>
                        <p class="text-muted mb-0">IPB University</p>
                    </div>

                    <p class="text-justify" style="line-height: 1.8; font-size: 1rem;">
                        Pupuk silika bukan sekadar pelengkap, tapi solusi untuk meningkatkan daya tahan tanaman tanpa ketergantungan pada pestisida berlebihan. Saya selalu rekomendasikan ke mitra tani saya.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL TESTIMONI 4 -->
<div class="modal fade" id="testimoniModal4" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius: 20px; border: none;">
            <div class="modal-body p-0">
                <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close" style="z-index: 10;"></button>
                <div class="bg-white p-5" style="border-radius: 20px;">
                    <div class="d-flex align-items-center mb-4">
                        <img src="asset/img/logo.png" alt="Logo" style="height: 50px;">
                        <div class="ms-3" style="border-left: 3px solid #333; padding-left: 15px;">
                            <h4 class="mb-0 fw-bold">Testimoni</h4>
                        </div>
                    </div>

                    <div class="text-center mb-4">
                        <img src="asset/img/Testimoni4.png" alt="Testimoni" class="img-fluid" style="max-height: 400px; border-radius: 15px; object-fit: cover;">
                    </div>

                    <div class="text-center mb-3">
                        <h3 class="fw-bold mb-1">Ibu Siti Aminah</h3>
                        <h5 class="fw-semibold mb-2" style="color: #2B8D4C;">Tera Nusa Hama</h5>
                        <p class="text-muted mb-0">Bandung</p>
                    </div>

                    <p class="text-justify" style="line-height: 1.8; font-size: 1rem;">
                        Tanaman cabai saya lebih tahan penyakit sejak pakai pupuk silika. Buahnya besar-besar dan tidak mudah busuk. Panen jadi lebih banyak dan tahan lama di pasar.
                    </p>
                </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- ============================================ -->
<!-- CUSTOM JAVASCRIPT -->
<!-- ============================================ -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize hero carousel
        var heroCarousel = document.querySelector('#heroCarousel');
        if (heroCarousel) {
            var carousel = new bootstrap.Carousel(heroCarousel, {
                interval: 5000,
                ride: 'carousel',
                pause: 'hover'
            });
        }

        // Initialize produk carousel
        var produkCarousel = document.querySelector('#produkCarousel');
        if (produkCarousel) {
            var carouselProduk = new bootstrap.Carousel(produkCarousel, {
                interval: 4000,
                ride: 'carousel'
            });

            // Thumbnail active state sync
            const thumbs = document.querySelectorAll('.thumb');
            
            produkCarousel.addEventListener('slide.bs.carousel', function(e) {
                thumbs.forEach(thumb => thumb.classList.remove('active'));
                
                if (thumbs[e.to]) {
                    thumbs[e.to].classList.add('active');
                }
            });
            
            thumbs.forEach((thumb, index) => {
                thumb.addEventListener('click', function() {
                    thumbs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        }

        // Kalkulator Tani
        const kalkulatorForm = document.getElementById('formKalkulator');
        const popupHasil = document.getElementById('popupHasil');
        const btnPesanSekarang = document.getElementById('btnPesanSekarang');

        if (kalkulatorForm) {
            kalkulatorForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const jenisTanaman = kalkulatorForm.querySelectorAll('select')[0].value;
                const jenisProduk = kalkulatorForm.querySelectorAll('select')[1].value;
                const luasTanah = kalkulatorForm.querySelector('input[type="number"]').value;

                if (!luasTanah || jenisTanaman === 'Jenis Tanaman' || jenisProduk === 'Jenis Produk') {
                    alert('Mohon lengkapi semua data!');
                    return;
                }

                document.getElementById('hasilJenisTanaman').textContent = jenisTanaman;
                document.getElementById('hasilJenisProduk').textContent = jenisProduk;
                document.getElementById('hasilLuasTanah').textContent = luasTanah;

                // Show popup centered
                popupHasil.style.display = 'block';
                popupHasil.style.top = '50%';
                popupHasil.style.left = '50%';
                popupHasil.style.transform = 'translate(-50%, -50%)';
            });
        }

        // Close popup
        if (popupHasil) {
            window.addEventListener('click', function(e) {
                if (popupHasil.style.display === 'block' && 
                    !popupHasil.contains(e.target) && 
                    !kalkulatorForm.contains(e.target)) {
                    popupHasil.style.display = 'none';
                }
            });
        }
    });
</script>

<!-- WA Float Button -->
<?php include('admin/template/whatsapp_float.php'); ?>

<!-- Footer -->
<?php include('admin/template/footer.php'); ?>

</body>
</html>