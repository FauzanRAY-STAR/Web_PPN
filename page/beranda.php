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
    <link rel="stylesheet" href="asset/style/ulasan_beranda.css">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }

        .fw-bold {
            font-weight: 700 !important;
        }

        .fw-semibold {
            font-weight: 600 !important;
        }

        .fw-normal {
            font-weight: 400 !important;
        }

        .fw-light {
            font-weight: 300 !important;
        }

        /* ============================================ */
        /* FADE IN ANIMATION - DARI BAWAH KE ATAS */
        /* ============================================ */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(60px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-section {
            opacity: 0;
            animation: fadeInUp 0.5s ease-out forwards;
        }

        /* Delay untuk setiap section */
        .fade-in-section:nth-of-type(1) {
            animation-delay: 0.1s;
        }

        .fade-in-section:nth-of-type(2) {
            animation-delay: 0.3s;
        }

        .fade-in-section:nth-of-type(3) {
            animation-delay: 0.5s;
        }

        .fade-in-section:nth-of-type(4) {
            animation-delay: 0.7s;
        }

        .fade-in-section:nth-of-type(5) {
            animation-delay: 0.9s;
        }

        .fade-in-section:nth-of-type(6) {
            animation-delay: 1.1s;
        }

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
            width: 5%;
            opacity: 1 !important;
            transition: all 0.3s ease;
            z-index: 100 !important;
            pointer-events: auto !important;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            opacity: 1 !important;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 60px !important;
            height: 60px !important;
            border-radius: 50% !important;
            padding: 0 !important;
            transition: all 0.3s ease !important;
            background-image: none !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            cursor: pointer !important;
            position: relative !important;
        }

        .carousel-control-prev-icon::before {
            content: "‹" !important;
            font-size: 48px !important;
            color: white !important;
            font-weight: bold !important;
            line-height: 1 !important;
            display: block !important;
        }

        .carousel-control-next-icon::before {
            content: "›" !important;
            font-size: 48px !important;
            color: white !important;
            font-weight: bold !important;
            line-height: 1 !important;
            display: block !important;
        }

        .carousel-control-prev:hover .carousel-control-prev-icon,
        .carousel-control-next:hover .carousel-control-next-icon {
            background-color: rgba(43, 141, 76, 1) !important;
            transform: scale(1.2) !important;
            box-shadow: 0 4px 15px rgba(43, 141, 76, 0.5) !important;
        }

        .carousel-control-prev,
        .carousel-control-next {
            background: none !important;
            border: none !important;
            cursor: pointer !important;
        }

        .carousel-indicators {
            bottom: 30px;
            z-index: 10;
        }

        .carousel-indicators button {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin: 0 5px;
            background-color: rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease;
        }

        .carousel-indicators button.active {
            background-color: #FFED64;
            transform: scale(1.2);
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

        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            padding: 20px;
        }

        .btn-close-popup:hover {
            background: rgba(255, 255, 255, 0.5) !important;
            transform: rotate(90deg);
        }

        @media (max-width: 768px) {
            .popup-content {
                max-width: 95% !important;
            }

            .popup-body {
                padding: 20px !important;
            }

            .hasil-section .display-4 {
                font-size: 2.5rem !important;
            }
        }

        .thumb.active {
            border-color: #2B8D4C !important;
            background-color: rgba(43, 141, 76, 0.05) !important;
        }

        .thumb:hover {
            border-color: #FFED64 !important;
            transform: scale(1.05);
        }

        .carousel-item {
            transition: transform 0.6s ease-in-out;
        }
    </style>
</head>

<body>

    <?php include('admin/template/navbar.php'); ?>

    <!-- ============================================ -->
    <!-- HERO CAROUSEL SECTION -->
    <!-- ============================================ -->
    <div class="fade-in-section">
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

                <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" style="pointer-events: auto !important;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next" style="pointer-events: auto !important;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        <?php else: ?>
            <div class="hero-empty">
                <div class="container">
                    <i class="bi bi-images" style="font-size: 5rem; opacity: 0.5;"></i>
                    <h2 class="mt-3">Tidak ada carousel tersedia</h2>
                    <p class="mb-0">Silakan hubungi administrator untuk menambahkan carousel</p>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <?php
    $query_produk = "SELECT * FROM produk WHERE status = 'Dipajang' ORDER BY tanggal DESC LIMIT 5";
    $result_produk = mysqli_query($conn, $query_produk);
    ?>

    <!-- ============================================ -->
    <!-- PRODUK KAMI SECTION -->
    <!-- ============================================ -->
    <div class="fade-in-section container my-5 py-5">
        <h3 class="text-center fw-bold" style="color: #2B8D4C;">PRODUK KAMI</h3>
        <div class="d-flex justify-content-center align-items-center mb-4">
            <div style="width: 100px; height: 2px; background-color: #2B8D4C; margin: 0 10px;"></div>
        </div>

        <?php if ($result_produk && mysqli_num_rows($result_produk) > 0): ?>
            <div id="produkCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner text-center" style="min-height: 450px;">
                    <?php
                    $index = 0;
                    while ($produk = mysqli_fetch_assoc($result_produk)):
                        $active_class = ($index === 0) ? 'active' : '';
                    ?>
                        <div class="carousel-item <?= $active_class ?>">
                            <div class="row align-items-center justify-content-center" style="min-height: 400px;">
                                <div class="col-md-5 d-flex align-items-center justify-content-center">
                                    <div style="width: 300px; height: 300px; display: flex; align-items: center; justify-content: center;">
                                        <img src="asset/img/<?= htmlspecialchars($produk['gambar']) ?>"
                                            class="img-fluid"
                                            alt="<?= htmlspecialchars($produk['nama']) ?>"
                                            style="max-width: 300px; max-height: 300px; width: auto; height: auto; object-fit: contain;"
                                            onerror="this.src='asset/img/placeholder.png'">
                                    </div>
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
                                                switch ($atribut) {
                                                    case 'Baru':
                                                        $badge_class = 'bg-primary';
                                                        break;
                                                    case 'Laris':
                                                        $badge_class = 'bg-warning text-dark';
                                                        break;
                                                    case 'Promo':
                                                        $badge_class = 'bg-success';
                                                        break;
                                                    case 'Bonus':
                                                        $badge_class = 'bg-info text-dark';
                                                        break;
                                                    case 'Habis':
                                                        $badge_class = 'bg-danger';
                                                        break;
                                                }
                                            ?>
                                                <span class="badge <?= $badge_class ?> me-1">
                                                    <?= htmlspecialchars($atribut) ?>
                                                </span>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>

                                    <p style="color: #2B8D4C; min-height: 60px;">
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

                <div class="d-flex justify-content-center align-items-center mt-4 position-relative" style="height: 150px;">
                    <button class="btn btn-prev" type="button" data-bs-target="#produkCarousel" data-bs-slide="prev"
                        style="background: none; border: none; cursor: pointer; transition: transform 0.3s;"
                        onmouseover="this.style.transform='scale(1.1)'"
                        onmouseout="this.style.transform='scale(1)'">
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
                                style="width: 120px; height: 120px; cursor: pointer; border: 3px solid <?= $active_thumb ? '#2B8D4C' : 'transparent' ?>; transition: all 0.3s ease; display: flex; align-items: center; justify-content: center;">
                                <img src="asset/img/<?= htmlspecialchars($produk['gambar_kecil'] ?? $produk['gambar']) ?>"
                                    class="p-3"
                                    style="max-width: 100%; max-height: 100%; object-fit: contain;"
                                    alt="<?= htmlspecialchars($produk['nama']) ?>"
                                    onerror="this.src='asset/img/placeholder.png'">
                            </div>
                        <?php
                            $thumb_index++;
                        endwhile;
                        ?>
                    </div>

                    <button class="btn btn-next" type="button" data-bs-target="#produkCarousel" data-bs-slide="next"
                        style="background: none; border: none; cursor: pointer; transition: transform 0.3s;"
                        onmouseover="this.style.transform='scale(1.1)'"
                        onmouseout="this.style.transform='scale(1)'">
                        <div style="width: 0; height: 0; border-top: 25px solid transparent; border-bottom: 25px solid transparent; border-left: 25px solid #FFED64;"></div>
                    </button>
                </div>
            </div>

        <?php else: ?>
            <div class="text-center py-5" style="min-height: 400px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                <p class="text-muted">Belum ada produk yang dipajang saat ini.</p>
                <a href="produk" class="btn btn-success mt-3">Lihat Semua Produk</a>
            </div>
        <?php endif; ?>
    </div>

    <!-- ============================================ -->
    <!-- KALKULATOR TANI SECTION -->
    <!-- ============================================ -->
    <div class="fade-in-section container-fluid py-5" id="kalkulator-tani">
        <div class="container py-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center mb-4">
                        <img src="asset/img/Logo.png" alt="Logo PPN" style="height: 40px;" class="me-2">
                        <div class="vr" style="height: 35px; width: 2px; background-color: #000; margin: 10px;"></div>
                        <h4 class="fw-bold mb-0" style="color:#000;">Kalkulator Tani</h4>
                    </div>

                    <form id="formKalkulator" class="p-2" method="POST" action="">
                        <div class="mb-4">
                            <label class="form-label fw-semibold" style="color:#000;">Jenis Tanaman</label>
                            <select name="jenis_tanaman" class="form-select border-success border-opacity-50 rounded-3 py-2" style="border: 2px solid #A4C37F;" required>
                                <option value="" selected>Pilih Jenis Tanaman</option>
                                <option value="Padi">Padi</option>
                                <option value="Jagung">Jagung</option>
                                <option value="Kedelai">Kedelai</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold" style="color:#000;">Jenis Produk</label>
                            <select name="jenis_produk" class="form-select border-success border-opacity-50 rounded-3 py-2" style="border: 2px solid #A4C37F;" required>
                                <option value="" selected>Pilih Jenis Produk</option>
                                <?php
                                $queryProduk = "SELECT id, nama, gambar FROM produk ORDER BY nama ASC";
                                $resultProduk = mysqli_query($conn, $queryProduk);

                                if ($resultProduk && mysqli_num_rows($resultProduk) > 0) {
                                    while ($produk = mysqli_fetch_assoc($resultProduk)) {
                                        echo '<option value="' . htmlspecialchars($produk['nama']) . '" data-gambar="' . htmlspecialchars($produk['gambar']) . '">' . htmlspecialchars($produk['nama']) . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold" style="color:#000;">Luas Tanah</label>
                            <div class="input-group">
                                <input type="number" name="luas_tanah" class="form-control rounded-start-3 py-2" placeholder="Masukan Luas Tanah" style="border: 2px solid #A4C37F;" required min="1" step="0.01">
                                <span class="input-group-text rounded-end-3" style="border: 2px solid #A4C37F; border-left: none;">M²</span>
                            </div>
                        </div>

                        <button type="submit" name="hitung" class="btn w-100 py-2 fw-semibold text-white rounded-pill" style="background: linear-gradient(90deg, #2B8D4C 0%, #D5D44B 100%); border:none;">
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

    <?php
    function hitungKebutuhanPupuk($input)
    {
        define('BAU_TO_M2', 7140);

        $jenis_tanaman = isset($input['jenis_tanaman']) ? $input['jenis_tanaman'] : '';
        $jenis_produk = isset($input['jenis_produk']) ? $input['jenis_produk'] : '';
        $luas_lahan_m2 = isset($input['luas_lahan']) ? floatval($input['luas_lahan']) : 0;
        $luas_lahan_bau = $luas_lahan_m2 / BAU_TO_M2;

        $umur_tanaman_hst = isset($input['umur_tanaman']) ? intval($input['umur_tanaman']) : null;
        $musim = isset($input['musim']) ? $input['musim'] : null;
        $status_hama = isset($input['status_hama']) ? $input['status_hama'] : 'Preventif';
        $kebiasaan_urea = isset($input['kebiasaan_urea']) ? floatval($input['kebiasaan_urea']) : null;
        $kebiasaan_phonska = isset($input['kebiasaan_phonska']) ? floatval($input['kebiasaan_phonska']) : null;

        $total_kebutuhan = array(
            'silika_5kg_bungkus' => 0,
            'maxi_d_1L_botol' => 0,
            'maxi_b_1L_botol' => 0,
            'hama_1_5L_botol' => 0,
            'silika_cair_0_5L_botol' => 0
        );

        if (in_array(strtolower($jenis_tanaman), ['padi', 'jagung'])) {
            if (strtolower($jenis_tanaman) === 'padi') {
                $total_kebutuhan['silika_5kg_bungkus'] = $luas_lahan_bau * 8;
            }

            $total_kebutuhan['maxi_d_1L_botol'] = $luas_lahan_bau / 0.5;
            $total_kebutuhan['maxi_b_1L_botol'] = $luas_lahan_bau / 0.5;
            $total_kebutuhan['hama_1_5L_botol'] = $luas_lahan_bau / 0.25;
            $total_kebutuhan['silika_cair_0_5L_botol'] = $luas_lahan_bau / 0.5;
        }

        $pengurangan_pupuk = null;

        if (strtolower($jenis_tanaman) === 'padi' && $musim && ($kebiasaan_urea || $kebiasaan_phonska)) {
            $pengurangan_pupuk = array(
                'urea_lama_kg' => $kebiasaan_urea,
                'urea_baru_kg' => null,
                'phonska_lama_kg' => $kebiasaan_phonska,
                'phonska_baru_kg' => null
            );

            if (strtolower($musim) === 'penghujan') {
                $pengurangan_pupuk['urea_baru_kg'] = $kebiasaan_urea ? $kebiasaan_urea * 0.5 : null;
                $pengurangan_pupuk['phonska_baru_kg'] = $kebiasaan_phonska ? $kebiasaan_phonska * 0.5 : null;
            } elseif (strtolower($musim) === 'kemarau') {
                $pengurangan_pupuk['urea_baru_kg'] = $kebiasaan_urea ? $kebiasaan_urea * 0.7 : null;
                $pengurangan_pupuk['phonska_baru_kg'] = $kebiasaan_phonska ? $kebiasaan_phonska * 0.7 : null;
            }
        }

        $rekomendasi_semprot = null;

        if ($umur_tanaman_hst !== null) {
            if (strtolower($jenis_tanaman) === 'padi') {
                $dosis_hama = ($status_hama === 'Ada Serangan') ? '7-10 tutup (serangan hama)' : '5 tutup';

                if ($umur_tanaman_hst <= 15) {
                    $rekomendasi_semprot = array(
                        'jadwal_terdekat' => '15 HST',
                        'dosis_per_tangki_16L' => array('MAXI D: 6 tutup', 'HAMA: ' . $dosis_hama, 'SILIKA CAIR: 3-5 tutup'),
                        'catatan' => 'Digunakan berbarengan dalam tangki 16 Liter'
                    );
                } elseif ($umur_tanaman_hst <= 30) {
                    $rekomendasi_semprot = array(
                        'jadwal_terdekat' => '30 HST',
                        'dosis_per_tangki_16L' => array('MAXI D: 8 tutup', 'HAMA: ' . $dosis_hama, 'SILIKA CAIR: 3-5 tutup'),
                        'catatan' => 'Digunakan berbarengan dalam tangki 16 Liter'
                    );
                } elseif ($umur_tanaman_hst <= 45) {
                    $rekomendasi_semprot = array(
                        'jadwal_terdekat' => '45 HST',
                        'dosis_per_tangki_16L' => array('MAXI B: 8 tutup', 'HAMA: ' . $dosis_hama, 'SILIKA CAIR: 3-5 tutup'),
                        'catatan' => 'Digunakan berbarengan dalam tangki 16 Liter'
                    );
                } elseif ($umur_tanaman_hst <= 70) {
                    $rekomendasi_semprot = array(
                        'jadwal_terdekat' => '70 HST',
                        'dosis_per_tangki_16L' => array('MAXI B: 10 tutup', 'HAMA: ' . $dosis_hama, 'SILIKA CAIR: 3-5 tutup'),
                        'catatan' => 'Digunakan berbarengan dalam tangki 16 Liter'
                    );
                } else {
                    $rekomendasi_semprot = array(
                        'jadwal_terdekat' => 'Selesai',
                        'dosis_per_tangki_16L' => array(),
                        'catatan' => 'Jadwal semprot Padi telah selesai (> 70 HST)'
                    );
                }
            } elseif (strtolower($jenis_tanaman) === 'jagung') {
                $dosis_hama = ($status_hama === 'Ada Serangan') ? '7-10 tutup (serangan hama)' : '5 tutup';

                if ($umur_tanaman_hst <= 20) {
                    $rekomendasi_semprot = array(
                        'jadwal_terdekat' => 'Fase Awal (0-20 HST)',
                        'dosis_per_tangki_16L' => array('MAXI D: 7 tutup', 'HAMA: ' . $dosis_hama),
                        'catatan' => 'Fase Awal Jagung'
                    );
                } elseif ($umur_tanaman_hst <= 40) {
                    $rekomendasi_semprot = array(
                        'jadwal_terdekat' => 'Fase Pertumbuhan (21-40 HST)',
                        'dosis_per_tangki_16L' => array('MAXI B: 8 tutup', 'HAMA: ' . $dosis_hama),
                        'catatan' => 'Fase Pertumbuhan Jagung'
                    );
                } else {
                    $rekomendasi_semprot = array(
                        'jadwal_terdekat' => 'Fase Pembungaan/Pembuahan (> 40 HST)',
                        'dosis_per_tangki_16L' => array('MAXI B: 10 tutup', 'HAMA: ' . $dosis_hama),
                        'catatan' => 'Fase Pembuahan Jagung'
                    );
                }
            }
        }

        return array(
            'input' => array(
                'jenis_tanaman' => $jenis_tanaman,
                'jenis_produk' => $jenis_produk,
                'luas_lahan_bau' => round($luas_lahan_bau, 4),
                'luas_lahan_m2' => $luas_lahan_m2,
                'umur_tanaman_hst' => $umur_tanaman_hst,
                'musim' => $musim,
                'status_hama' => $status_hama,
                'kebiasaan_urea_kg' => $kebiasaan_urea,
                'kebiasaan_phonska_kg' => $kebiasaan_phonska
            ),
            'total_kebutuhan_produk_1_musim' => array(
                'silika_5kg_bungkus' => round($total_kebutuhan['silika_5kg_bungkus'], 2),
                'maxi_d_1L_botol' => round($total_kebutuhan['maxi_d_1L_botol'], 2),
                'maxi_b_1L_botol' => round($total_kebutuhan['maxi_b_1L_botol'], 2),
                'hama_1_5L_botol' => round($total_kebutuhan['hama_1_5L_botol'], 2),
                'silika_cair_0_5L_botol' => round($total_kebutuhan['silika_cair_0_5L_botol'], 2)
            ),
            'pengurangan_pupuk_tabur' => $pengurangan_pupuk,
            'rekomendasi_semprot_saat_ini' => $rekomendasi_semprot
        );
    }

    function hitungProdukSpesifik($jenis_tanaman, $jenis_produk, $luas_tanah_bau)
    {
        $kebutuhan_produk = 0;
        $satuan_produk = "";
        $keterangan_tambahan = "";

        $produk_lower = strtolower($jenis_produk);

        if ((stripos($produk_lower, 'silika') !== false &&
                (stripos($produk_lower, '5kg') !== false || stripos($produk_lower, '5 kg') !== false ||
                    stripos($produk_lower, '5-kg') !== false || stripos($produk_lower, 'padat') !== false)) ||
            stripos($produk_lower, 'silika v') !== false
        ) {
            $kebutuhan_produk = $luas_tanah_bau * 8;
            $satuan_produk = "bungkus (@ 5kg)";
            $keterangan_tambahan = "Sebelum tanam atau pada saat pemupukan pertama (10-15 HST). Total 40 kg/Bau";
        } elseif (
            stripos($produk_lower, 'maxi d') !== false || stripos($produk_lower, 'maxi-d') !== false ||
            stripos($produk_lower, 'maxid') !== false || stripos($produk_lower, 'tera nusa maxi d') !== false ||
            (stripos($produk_lower, 'maxi') !== false && stripos($produk_lower, 'd') !== false)
        ) {
            $kebutuhan_produk = $luas_tanah_bau / 0.5;
            $satuan_produk = "botol (@ 1 Liter)";
            $keterangan_tambahan = "Aplikasi: 15 HST (6 tutup) & 30 HST (8 tutup). Dosis per tangki semprot 16 liter";
        } elseif (
            stripos($produk_lower, 'maxi b') !== false || stripos($produk_lower, 'maxi-b') !== false ||
            stripos($produk_lower, 'maxib') !== false || stripos($produk_lower, 'tera nusa maxi b') !== false ||
            (stripos($produk_lower, 'maxi') !== false && stripos($produk_lower, 'b') !== false)
        ) {
            $kebutuhan_produk = $luas_tanah_bau / 0.5;
            $satuan_produk = "botol (@ 1 Liter)";
            $keterangan_tambahan = "Aplikasi: 45 HST (8 tutup) & 70 HST/Nyckor (10 tutup). Dosis per tangki semprot 16 liter";
        } elseif (
            stripos($produk_lower, 'hama') !== false || stripos($produk_lower, 'pestisida') !== false ||
            stripos($produk_lower, 'pengendali') !== false
        ) {
            $kebutuhan_produk = $luas_tanah_bau / 0.25;
            $satuan_produk = "botol (@ ½ Liter)";
            $keterangan_tambahan = "Preventif atau pencegahan: 5 tutup/tangki. Untuk serangan hama, dosis bisa ditingkatkan";
        } elseif (
            stripos($produk_lower, 'silika cair') !== false || stripos($produk_lower, 'cair') !== false ||
            (stripos($produk_lower, 'silika') !== false && stripos($produk_lower, 'liquid') !== false)
        ) {
            $kebutuhan_produk = $luas_tanah_bau / 0.5;
            $satuan_produk = "botol (@ ½ Liter)";
            $keterangan_tambahan = "Aplikasi: 15, 30, 45, 70 HST. Dosis 3-5 tutup per tangki semprot 16 liter";
        } else {
            $kebutuhan_produk = $luas_tanah_bau * 2;
            $satuan_produk = "unit";
            $keterangan_tambahan = "Perhitungan estimasi. Hubungi admin untuk dosis spesifik produk ini.";
        }

        return array(
            'kebutuhan_produk' => round($kebutuhan_produk, 2),
            'satuan_produk' => $satuan_produk,
            'keterangan_tambahan' => $keterangan_tambahan
        );
    }

    $showPopup = false;
    $hasil_data = array();

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['hitung'])) {
        $showPopup = true;

        $jenis_tanaman = htmlspecialchars($_POST['jenis_tanaman']);
        $jenis_produk = htmlspecialchars($_POST['jenis_produk']);
        $luas_tanah_m2 = floatval($_POST['luas_tanah']);

        if ($luas_tanah_m2 <= 0) {
            $luas_tanah_m2 = 0;
        }

        $luas_tanah_bau = $luas_tanah_m2 / 7140;

        $queryGambarProduk = "SELECT gambar FROM produk WHERE nama = ?";
        $stmtGambar = mysqli_prepare($conn, $queryGambarProduk);
        mysqli_stmt_bind_param($stmtGambar, "s", $jenis_produk);
        mysqli_stmt_execute($stmtGambar);
        $resultGambar = mysqli_stmt_get_result($stmtGambar);
        $gambar_produk = "produk1.png";
        if ($rowGambar = mysqli_fetch_assoc($resultGambar)) {
            $gambar_produk = $rowGambar['gambar'];
        }
        mysqli_stmt_close($stmtGambar);

        $hasil_hitung = hitungProdukSpesifik($jenis_tanaman, $jenis_produk, $luas_tanah_bau);

        $kebutuhan_produk = $hasil_hitung['kebutuhan_produk'];
        $satuan_produk = $hasil_hitung['satuan_produk'];
        $keterangan_tambahan = $hasil_hitung['keterangan_tambahan'];

        $kebutuhan_display = rtrim(rtrim(number_format($kebutuhan_produk, 2, '.', ','), '0'), '.');
        $luas_tanah_bau_display = round($luas_tanah_bau, 4);

        $hasil_data = array(
            'jenis_tanaman' => $jenis_tanaman,
            'jenis_produk' => $jenis_produk,
            'luas_tanah_m2' => $luas_tanah_m2,
            'luas_tanah_bau' => $luas_tanah_bau_display,
            'kebutuhan_produk' => $kebutuhan_display,
            'satuan_produk' => $satuan_produk,
            'keterangan_tambahan' => $keterangan_tambahan,
            'gambar_produk' => $gambar_produk
        );
    }
    ?>

    <!-- POPUP HASIL KALKULATOR -->
    <?php if ($showPopup): ?>
        <div id="popupHasil" class="popup-overlay" style="display: flex;">
            <div class="popup-content" style="background: white; border-radius: 20px; max-width: 600px; width: 90%; max-height: 90vh; overflow-y: auto; position: relative; box-shadow: 0 10px 40px rgba(0,0,0,0.3);">
                <div class="popup-header" style="background: linear-gradient(90deg, #2B8D4C 0%, #D5D44B 100%); padding: 20px; border-radius: 20px 20px 0 0; position: relative;">
                    <div class="d-flex align-items-center gap-2">
                        <img src="asset/img/Logo.png" alt="Logo" style="height: 50px;">
                        <div class="vr" style="height: 40px; width: 2px; background-color: #fff;"></div>
                        <h4 class="fw-bold mb-0 text-white">Hasil Perhitungan</h4>
                    </div>
                    <button type="button" class="btn-close-popup" onclick="closePopup()" style="position: absolute; top: 20px; right: 20px; background: rgba(255,255,255,0.3); border: none; width: 35px; height: 35px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.3s;">
                        <i class="bi bi-x-lg text-white"></i>
                    </button>
                </div>

                <div class="popup-body" style="padding: 30px;">
                    <div class="info-section" style="display: grid; gap: 15px; margin-bottom: 25px;">
                        <div class="info-item" style="display: flex; align-items: center; gap: 15px; padding: 15px; background: #f8f9fa; border-radius: 10px;">
                            <i class="bi bi-flower1" style="font-size: 24px; color: #2B8D4C;"></i>
                            <div>
                                <small class="text-muted d-block">Jenis Tanaman</small>
                                <div class="fw-semibold"><?= $hasil_data['jenis_tanaman'] ?></div>
                            </div>
                        </div>
                        <div class="info-item" style="display: flex; align-items: center; gap: 15px; padding: 15px; background: #f8f9fa; border-radius: 10px;">
                            <i class="bi bi-box-seam" style="font-size: 24px; color: #2B8D4C;"></i>
                            <div>
                                <small class="text-muted d-block">Jenis Produk</small>
                                <div class="fw-semibold"><?= $hasil_data['jenis_produk'] ?></div>
                            </div>
                        </div>
                        <div class="info-item" style="display: flex; align-items: center; gap: 15px; padding: 15px; background: #f8f9fa; border-radius: 10px;">
                            <i class="bi bi-rulers" style="font-size: 24px; color: #2B8D4C;"></i>
                            <div>
                                <small class="text-muted d-block">Luas Tanah</small>
                                <div class="fw-semibold"><?= number_format($hasil_data['luas_tanah_m2'], 0, ',', '.') ?> M²</div>
                                <small class="text-muted">(≈ <?= $hasil_data['luas_tanah_bau'] ?> Bau)</small>
                            </div>
                        </div>
                    </div>

                    <div class="hasil-section" style="background: linear-gradient(135deg, #f0f9f4 0%, #e8f5e9 100%); padding: 30px; border-radius: 15px; text-align: center; margin-bottom: 20px;">
                        <h5 class="fw-bold mb-4" style="color: #2B8D4C;">Kebutuhan Produk</h5>
                        <div class="d-flex align-items-center justify-content-center gap-4 mb-3">
                            <img src="asset/img/<?= $hasil_data['gambar_produk'] ?>" alt="Produk" style="height:120px; object-fit:contain;">
                            <div class="text-center">
                                <div class="display-4 fw-bold" style="color: #2B8D4C;">
                                    <?= $hasil_data['kebutuhan_produk'] ?>
                                </div>
                                <div class="fs-5 fw-semibold mt-2" style="color: #1a5c30;">
                                    <?= $hasil_data['satuan_produk'] ?>
                                </div>
                            </div>
                        </div>

                        <?php if (!empty($hasil_data['keterangan_tambahan'])): ?>
                            <div class="alert alert-info mb-0 mt-3" style="background: rgba(43, 141, 76, 0.1); border: 1px solid rgba(43, 141, 76, 0.3); border-radius: 10px;">
                                <i class="bi bi-info-circle me-2"></i>
                                <small><?= $hasil_data['keterangan_tambahan'] ?></small>
                            </div>
                        <?php endif; ?>
                    </div>

                    <button type="button" class="btn w-100 py-3 fw-semibold text-white rounded-pill" style="background: linear-gradient(90deg, #2B8D4C 0%, #D5D44B 100%); border:none; font-size: 16px;" onclick="window.location.href='page/shop.php'">
                        <i class="bi bi-cart-plus me-2"></i>Pesan Sekarang
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- ============================================ -->
    <!-- HASIL PEMAKAIAN PUPUK SILIKA SECTION -->
    <!-- ============================================ -->
    <section class="fade-in-section hasil-pupuk-section">
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
    <div class="fade-in-section container-fluid py-5" id="anima-3">
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

    <?php
    $queryTestimoni = "SELECT u.*, p.gambar as gambar_produk FROM ulasan u LEFT JOIN produk p ON u.produk = p.nama WHERE u.status = 'Ditampilkan' ORDER BY u.id DESC";
    $resultTestimoni = mysqli_query($conn, $queryTestimoni);
    $jumlahTestimoni = mysqli_num_rows($resultTestimoni);
    ?>

    <!-- ============================================ -->
    <!-- TESTIMONI SECTION -->
    <!-- ============================================ -->
    <div class="fade-in-section container-fluid py-5" style="background-color: #2B8D4C;">
        <div class="container py-5">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div>
                    <h5 class="fw-normal text-white mb-2">Testimoni</h5>
                    <h1 class="fw-semibold text-white mb-0">Pupuk Silika Pramudita Pupuk Nusantara</h1>
                </div>

                <?php if ($jumlahTestimoni > 3) : ?>
                    <div class="d-flex gap-2">
                        <button class="btn btn-light rounded-circle scroll-btn" id="scrollLeft" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-chevron-left fw-bold"></i>
                        </button>
                        <button class="btn btn-light rounded-circle scroll-btn" id="scrollRight" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-chevron-right fw-bold"></i>
                        </button>
                    </div>
                <?php endif; ?>
            </div>

            <?php if ($jumlahTestimoni > 0) : ?>

                <div class="testimoni-scroll-container" id="testimoniContainer">
                    <div class="testimoni-scroll-wrapper">
                        <?php
                        $modalIndex = 1;
                        while ($testimoni = mysqli_fetch_assoc($resultTestimoni)) :
                        ?>
                            <div class="testimoni-scroll-item">
                                <div class="p-4 h-100 testimoni-card" style="background-color: #FFED64; border-radius: 15px; color: #333; cursor: pointer; display: flex; flex-direction: column;" data-bs-toggle="modal" data-bs-target="#testimoniModal<?= $modalIndex ?>">

                                    <div class="d-flex align-items-center mb-3">
                                        <img src="asset/img/testimoni/<?= htmlspecialchars($testimoni['gambar']) ?>" alt="<?= htmlspecialchars($testimoni['nama']) ?>" style="width: 45px; height: 45px; border-radius: 50%; object-fit: cover; border: 2px solid #333;" onerror="this.src='asset/img/default-avatar.png'">
                                        <h6 class="ms-2 fw-bold m-0"><?= htmlspecialchars($testimoni['nama']) ?></h6>
                                    </div>

                                    <p class="review-preview" style="font-size: 0.95rem; line-height: 1.5; margin-bottom: 1rem; flex-grow: 1; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">
                                        <?= htmlspecialchars($testimoni['ulasan']) ?>
                                    </p>

                                    <div class="mt-auto">
                                        <div class="mb-2">
                                            <?php
                                            for ($i = 1; $i <= 5; $i++) {
                                                if ($i <= $testimoni['nilai']) {
                                                    echo '<i class="bi bi-star-fill text-warning"></i>';
                                                } else {
                                                    echo '<i class="bi bi-star text-warning"></i>';
                                                }
                                            }
                                            ?>
                                        </div>
                                        <small class="text-muted d-block" style="font-size: 0.85rem; margin-bottom: 0.3rem;">
                                            <i class="bi bi-box-seam"></i> <?= htmlspecialchars($testimoni['produk']) ?>
                                        </small>
                                        <small class="text-muted d-block" style="font-size: 0.85rem;">
                                            <i class="bi bi-geo-alt"></i> <?= htmlspecialchars($testimoni['alamat']) ?>
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Detail Testimoni -->
                            <div class="modal fade" id="testimoniModal<?= $modalIndex ?>" tabindex="-1" aria-labelledby="modalLabel<?= $modalIndex ?>" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content border-0" style="border-radius: 20px; overflow: hidden;">

                                        <!-- HEADER MODAL -->
                                        <div class="modal-header border-0 position-relative" style="background: linear-gradient(135deg, #2B8D4C 0%, #1a5c30 100%); padding: 1.5rem 2rem;">
                                            <div class="d-flex align-items-center gap-2">
                                                <div style="width: 40px; height: 40px; background-color: rgba(255,255,255,0.2); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                                    <i class="bi bi-chat-quote-fill text-white fs-5"></i>
                                                </div>
                                                <h5 class="modal-title text-white fw-bold mb-0">Detail Testimoni</h5>
                                            </div>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" style="filter: brightness(0) invert(1);"></button>
                                        </div>

                                        <div class="modal-body p-4">
                                            <!-- Profile Section -->
                                            <div class="d-flex align-items-center mb-4">
                                                <img src="asset/img/testimoni/<?= htmlspecialchars($testimoni['gambar']) ?>"
                                                    alt="<?= htmlspecialchars($testimoni['nama']) ?>"
                                                    style="width: 70px; height: 70px; border-radius: 50%; object-fit: cover; border: 3px solid #2B8D4C; box-shadow: 0 4px 12px rgba(43,141,76,0.2);"
                                                    onerror="this.src='asset/img/default-avatar.png'">
                                                <div class="ms-3 flex-grow-1">
                                                    <h5 class="fw-bold mb-1"><?= htmlspecialchars($testimoni['nama']) ?></h5>
                                                    <div class="d-flex align-items-center gap-2 text-muted">
                                                        <i class="bi bi-geo-alt-fill" style="color: #2B8D4C;"></i>
                                                        <small><?= htmlspecialchars($testimoni['alamat']) ?></small>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Rating Section -->
                                            <div class="text-center mb-4 py-3" style="background-color: #f8f9fa; border-radius: 12px;">
                                                <div class="mb-2">
                                                    <?php
                                                    for ($i = 1; $i <= 5; $i++) {
                                                        if ($i <= $testimoni['nilai']) {
                                                            echo '<i class="bi bi-star-fill text-warning fs-4"></i>';
                                                        } else {
                                                            echo '<i class="bi bi-star text-muted fs-4"></i>';
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                                <small class="text-muted fw-semibold">Rating: <?= $testimoni['nilai'] ?>/5</small>
                                            </div>

                                            <!-- Produk Section -->
                                            <div class="mb-4">
                                                <label class="text-muted small mb-2 fw-semibold">Produk yang Digunakan</label>
                                                <div class="d-flex align-items-center p-3 rounded-3" style="background: linear-gradient(135deg, #FFED64 0%, #ffd700 100%); box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                                                    <!-- Gambar Produk -->
                                                    <?php if (!empty($testimoni['gambar_produk'])) : ?>
                                                        <img src="asset/img/<?= htmlspecialchars($testimoni['gambar_produk']) ?>"
                                                            alt="<?= htmlspecialchars($testimoni['produk']) ?>"
                                                            style="width: 50px; height: 50px; border-radius: 8px; object-fit: cover; border: 2px solid #2B8D4C; box-shadow: 0 2px 6px rgba(0,0,0,0.15);"
                                                            onerror="this.src='asset/img/default-product.png'">
                                                    <?php else : ?>
                                                        <div style="width: 50px; height: 50px; border-radius: 8px; background-color: #2B8D4C; display: flex; align-items: center; justify-content: center; border: 2px solid #1a5c30;">
                                                            <i class="bi bi-box-seam text-white fs-5"></i>
                                                        </div>
                                                    <?php endif; ?>

                                                    <div class="ms-3 flex-grow-1">
                                                        <div class="fw-bold" style="color: #2B8D4C; font-size: 1.1rem;">
                                                            <?= htmlspecialchars($testimoni['produk']) ?>
                                                        </div>
                                                        <small class="text-muted">
                                                            <i class="bi bi-check-circle-fill" style="color: #2B8D4C;"></i> Produk Terverifikasi
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Review Section -->
                                            <div class="mb-3">
                                                <label class="text-muted small mb-2 fw-semibold">
                                                    <i class="bi bi-chat-left-text"></i> Ulasan Lengkap
                                                </label>
                                                <div class="p-3 rounded-3" style="background-color: #f8f9fa; border-left: 4px solid #2B8D4C;">
                                                    <p class="mb-0" style="text-align: justify; line-height: 1.8; color: #495057;">
                                                        <?= nl2br(htmlspecialchars($testimoni['ulasan'])) ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Footer Modal -->
                                        <div class="modal-footer border-0 pt-0 pb-4 px-4">
                                            <button type="button" class="btn btn-lg w-100 fw-semibold" data-bs-dismiss="modal" style="background-color: #2B8D4C; color: white; border-radius: 12px; transition: all 0.3s;">
                                                <i class="bi bi-x-circle me-2"></i>Tutup
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                            $modalIndex++;
                        endwhile;
                        ?>
                    </div>
                </div>

                <!-- Indicator Dots (Optional) -->
                <?php if ($jumlahTestimoni > 3) : ?>
                    <div class="text-center mt-4">
                        <small class="text-white">
                            <i class="bi bi-arrow-left-right"></i> Geser untuk melihat testimoni lainnya
                        </small>
                    </div>
                <?php endif; ?>

            <?php else : ?>
                <!-- Jika tidak ada testimoni sama sekali -->
                <div class="alert alert-warning text-center" role="alert">
                    <i class="bi bi-exclamation-triangle fs-1"></i>
                    <h4 class="mt-3">Belum Ada Testimoni</h4>
                    <p class="mb-0">Testimoni akan ditampilkan setelah ada yang ditambahkan dan diaktifkan.</p>
                </div>
            <?php endif; ?>

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
            // Initialize hero carousel dengan interval 5 detik
            var heroCarousel = document.querySelector('#heroCarousel');
            if (heroCarousel) {
                var carousel = new bootstrap.Carousel(heroCarousel, {
                    interval: 5000,
                    ride: 'carousel',
                    pause: 'hover',
                    wrap: true,
                    keyboard: true
                });

                // Force manual control untuk tombol prev/next dengan multiple event types
                var prevBtn = document.querySelector('#heroCarousel .carousel-control-prev');
                var nextBtn = document.querySelector('#heroCarousel .carousel-control-next');

                if (prevBtn) {
                    prevBtn.style.pointerEvents = 'auto';
                    prevBtn.style.cursor = 'pointer';

                    prevBtn.addEventListener('click', function(e) {
                        e.stopPropagation();
                        e.preventDefault();
                        carousel.prev();
                        console.log('Prev clicked');
                    }, true);

                    prevBtn.addEventListener('mousedown', function(e) {
                        e.stopPropagation();
                    }, true);
                }

                if (nextBtn) {
                    nextBtn.style.pointerEvents = 'auto';
                    nextBtn.style.cursor = 'pointer';

                    nextBtn.addEventListener('click', function(e) {
                        e.stopPropagation();
                        e.preventDefault();
                        carousel.next();
                        console.log('Next clicked');
                    }, true);

                    nextBtn.addEventListener('mousedown', function(e) {
                        e.stopPropagation();
                    }, true);
                }

                // Keyboard navigation
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'ArrowLeft') {
                        carousel.prev();
                    } else if (e.key === 'ArrowRight') {
                        carousel.next();
                    }
                });

                // Swipe gesture support untuk mobile
                let touchStartX = 0;
                let touchEndX = 0;

                heroCarousel.addEventListener('touchstart', function(e) {
                    touchStartX = e.changedTouches[0].screenX;
                }, {
                    passive: true
                });

                heroCarousel.addEventListener('touchend', function(e) {
                    touchEndX = e.changedTouches[0].screenX;
                    handleSwipe();
                }, {
                    passive: true
                });

                function handleSwipe() {
                    if (touchEndX < touchStartX - 50) {
                        carousel.next();
                    }
                    if (touchEndX > touchStartX + 50) {
                        carousel.prev();
                    }
                }
            }

            // Initialize produk carousel dengan interval 5 detik
            var produkCarousel = document.querySelector('#produkCarousel');
            if (produkCarousel) {
                var carouselProduk = new bootstrap.Carousel(produkCarousel, {
                    interval: 5000,
                    ride: 'carousel',
                    pause: 'hover',
                    wrap: true,
                    keyboard: true
                });

                // Manual control untuk tombol prev/next produk
                var prevBtnProduk = document.querySelector('#produkCarousel .carousel-control-prev');
                var nextBtnProduk = document.querySelector('#produkCarousel .carousel-control-next');

                if (prevBtnProduk) {
                    prevBtnProduk.style.pointerEvents = 'auto';
                    prevBtnProduk.style.cursor = 'pointer';

                    prevBtnProduk.addEventListener('click', function(e) {
                        e.stopPropagation();
                        e.preventDefault();
                        carouselProduk.prev();
                    }, true);
                }

                if (nextBtnProduk) {
                    nextBtnProduk.style.pointerEvents = 'auto';
                    nextBtnProduk.style.cursor = 'pointer';

                    nextBtnProduk.addEventListener('click', function(e) {
                        e.stopPropagation();
                        e.preventDefault();
                        carouselProduk.next();
                    }, true);
                }

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

                // Swipe gesture support untuk produk carousel
                let touchStartXProduk = 0;
                let touchEndXProduk = 0;

                produkCarousel.addEventListener('touchstart', function(e) {
                    touchStartXProduk = e.changedTouches[0].screenX;
                }, {
                    passive: true
                });

                produkCarousel.addEventListener('touchend', function(e) {
                    touchEndXProduk = e.changedTouches[0].screenX;
                    handleSwipeProduk();
                }, {
                    passive: true
                });

                function handleSwipeProduk() {
                    if (touchEndXProduk < touchStartXProduk - 50) {
                        carouselProduk.next();
                    }
                    if (touchEndXProduk > touchStartXProduk + 50) {
                        carouselProduk.prev();
                    }
                }
            }

            // Kalkulator Tani - Close popup function
            window.closePopup = function() {
                const popupHasil = document.getElementById('popupHasil');
                if (popupHasil) {
                    popupHasil.style.display = 'none';
                }
            };

            // Testimoni Horizontal Scroll Buttons
            const scrollLeftBtn = document.getElementById('scrollLeft');
            const scrollRightBtn = document.getElementById('scrollRight');
            const testimoniContainer = document.getElementById('testimoniContainer');

            if (scrollLeftBtn && scrollRightBtn && testimoniContainer) {
                scrollLeftBtn.addEventListener('click', function() {
                    testimoniContainer.scrollBy({
                        left: -340,
                        behavior: 'smooth'
                    });
                });

                scrollRightBtn.addEventListener('click', function() {
                    testimoniContainer.scrollBy({
                        left: 340,
                        behavior: 'smooth'
                    });
                });

                // Auto hide/show scroll buttons based on scroll position
                testimoniContainer.addEventListener('scroll', function() {
                    const maxScroll = testimoniContainer.scrollWidth - testimoniContainer.clientWidth;

                    if (testimoniContainer.scrollLeft <= 0) {
                        scrollLeftBtn.style.opacity = '0.5';
                        scrollLeftBtn.style.cursor = 'not-allowed';
                    } else {
                        scrollLeftBtn.style.opacity = '1';
                        scrollLeftBtn.style.cursor = 'pointer';
                    }

                    if (testimoniContainer.scrollLeft >= maxScroll - 5) {
                        scrollRightBtn.style.opacity = '0.5';
                        scrollRightBtn.style.cursor = 'not-allowed';
                    } else {
                        scrollRightBtn.style.opacity = '1';
                        scrollRightBtn.style.cursor = 'pointer';
                    }
                });

                // Initial state
                if (testimoniContainer.scrollLeft <= 0) {
                    scrollLeftBtn.style.opacity = '0.5';
                    scrollLeftBtn.style.cursor = 'not-allowed';
                }
            }
        });
    </script>

    <!-- WA Float Button -->
    <?php include('admin/template/whatsapp_float.php'); ?>

    <!-- Footer -->
    <?php include('admin/template/footer.php'); ?>

</body>

</html>