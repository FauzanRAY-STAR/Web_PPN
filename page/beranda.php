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
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheets -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="asset/style/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="asset/style/style.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/style/fab.css">
    <link rel="stylesheet" href="asset/style/beranda.css">

    <!-- Custom CSS for Poppins Font -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            font-weight: 400; /* Default font weight */
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600; /* Semi-bold for headings */
        }
        .fw-bold {
            font-weight: 700 !important; /* Bold for emphasized text */
        }
        .fw-semibold {
            font-weight: 600 !important; /* Semi-bold */
        }
        .fw-normal {
            font-weight: 400 !important; /* Normal */
        }
        .fw-light {
            font-weight: 300 !important; /* Light */
        }
    </style>
</head>

<body>
    
    <?php
    include('admin/template/navbar.php');
    ?>

   <!-- Hero Section Carousel -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner">
    <!-- Slide 1 -->
    <div class="carousel-item active">
        <div class="d-flex align-items-center" style="height: 100vh; background: url('asset/img/Banner1.png') center/cover no-repeat; position: relative;">
            <!-- Overlay gelap -->
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.4);"></div>
            
            <div class="container text-center text-lg-start" style="position: relative; z-index: 2;">
                <h1 class="display-3 text-white fw-bold" style="text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6); letter-spacing: 1px;">Pupuk Silika</h1>
                <p class="text-white mb-4" style="text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5); font-size: 1.1rem; line-height: 1.6;">
                    Pupuk Silika mengandung silikon aktif yang memperkuat tanaman, meningkatkan ketahanan terhadap hama dan penyakit, serta mendukung panen yang lebih melimpah dan berkualitas.
                </p>
            </div>
        </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
        <div class="d-flex align-items-center" style="height: 100vh; background: url('asset/img/Banner2.png') center/cover no-repeat; position: relative;">
            <!-- Overlay gelap -->
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.4);"></div>
            
            <div class="container text-center text-lg-start" style="position: relative; z-index: 2;">
                <h1 class="display-3 text-white fw-bold" style="text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6); letter-spacing: 1px;">Tera Nusa Maxi-D</h1>
                <p class="text-white mb-4" style="text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5); font-size: 1.1rem; line-height: 1.6;">
                    Kombinasi silika aktif dan nutrisi mikro untuk pertumbuhan optimal tanaman.
                </p>
            </div>
        </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
        <div class="d-flex align-items-center" style="height: 100vh; background: url('asset/img/Banner3.png') center/cover no-repeat; position: relative;">
            <!-- Overlay gelap -->
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.4);"></div>
            
            <div class="container text-center text-lg-start" style="position: relative; z-index: 2;">
                <h1 class="display-3 text-white fw-bold" style="text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6); letter-spacing: 1px;">Silika Premium</h1>
                <p class="text-white mb-4" style="text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5); font-size: 1.1rem; line-height: 1.6;">
                    Diformulasikan khusus untuk meningkatkan ketahanan tanaman terhadap penyakit.
                </p>
            </div>
        </div>
    </div>
</div>


    <!-- Indicators (optional) -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
    </div>

    <!-- Overlay klik kiri/kanan -->
    <div style="position: absolute; top: 0; left: 0; width: 50%; height: 100%; cursor: pointer;" id="carouselPrev"></div>
    <div style="position: absolute; top: 0; right: 0; width: 50%; height: 100%; cursor: pointer;" id="carouselNext"></div>
</div>

<script>
    const heroCarousel = document.querySelector('#heroCarousel');
    const carousel = new bootstrap.Carousel(heroCarousel);

    // Klik sisi kiri → prev
    document.querySelector('#carouselPrev').addEventListener('click', () => {
        carousel.prev();
    });

    // Klik sisi kanan → next
    document.querySelector('#carouselNext').addEventListener('click', () => {
        carousel.next();
    });
</script>


<?php
// page/beranda.php - SECTION PRODUK KAMI YANG DIUPDATE (Dynamic from Database)
include('config/koneksi.php');

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
                <!-- ITEM <?= $index + 1 ?> -->
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
                            
                            <!-- Atribut/Badge -->
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
                            
                            <!-- Link ke Detail Produk -->
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
            <!-- Panah kiri -->
            <button class="btn btn-prev" type="button" data-bs-target="#produkCarousel" data-bs-slide="prev" style="background: none; border: none;">
                <div style="width: 0; height: 0; border-top: 25px solid transparent; border-bottom: 25px solid transparent; border-right: 25px solid #FFED64;"></div>
            </button>

            <!-- Thumbnail preview -->
            <div class="d-flex mx-3 gap-3" id="thumbnailContainer">
                <?php 
                mysqli_data_seek($result_produk, 0); // Reset pointer
                $thumb_index = 0;
                while ($produk = mysqli_fetch_assoc($result_produk)): 
                    $active_thumb = ($thumb_index === 0) ? 'active' : '';
                ?>
                    <div class="thumb bg-secondary bg-opacity-10 rounded <?= $active_thumb ?>" 
                         data-bs-target="#produkCarousel" 
                         data-bs-slide-to="<?= $thumb_index ?>" 
                         style="width: 120px; height: 120px; cursor: pointer; border: 3px solid transparent; transition: all 0.3s ease;">
                        <img src="asset/img/<?= htmlspecialchars($produk['gambar_kecil']) ?>" 
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

            <!-- Panah kanan -->
            <button class="btn btn-next" type="button" data-bs-target="#produkCarousel" data-bs-slide="next" style="background: none; border: none;">
                <div style="width: 0; height: 0; border-top: 25px solid transparent; border-bottom: 25px solid transparent; border-left: 25px solid #FFED64;"></div>
            </button>
        </div>
    </div>
    
    <?php else: ?>
    <!-- Jika tidak ada produk -->
    <div class="text-center py-5">
        <p class="text-muted">Belum ada produk yang dipajang saat ini.</p>
        <a href="produk" class="btn btn-success mt-3">Lihat Semua Produk</a>
    </div>
    <?php endif; ?>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.getElementById('produkCarousel');
        const thumbs = document.querySelectorAll('.thumb');
        
        if (carousel && thumbs.length > 0) {
            carousel.addEventListener('slide.bs.carousel', function(e) {
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
    });
</script>

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
                    <div class="vr" style="height: 35px; width: 2px; background-color: #000; margin: 10px;"></div>
                    <h4 class="fw-bold mb-0" style="color:#000;">Kalkulator Tani</h4>
                </div>

                <!-- FORM KALKULATOR -->
                <form id="formKalkulator" class="p-2">
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
                    <button type="submit" class="btn w-100 py-2 fw-semibold text-white rounded-pill" style="background: linear-gradient(90deg, #2B8D4C 0%, #D5D44B 100%); border:none;">
                        Hitung
                    </button>
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
    <img src="asset/img/produk1.png" alt="Produk" 
        class="me-3" 
        style="height:80px; object-fit:contain; display:block;">
    <span style="font-weight:500; font-size:1.25rem; line-height:1;">5kg</span>
    </div>


    <button id="btnPesanSekarang" type="button" class="btn w-100 py-2 fw-semibold text-white rounded-pill" style="background: linear-gradient(90deg, #2B8D4C 0%, #D5D44B 100%); border:none;" onclick="window.location.href='<?= $base_url ?>page/shop.php'">
        Pesan Sekarang
    </button>

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

    <!-- Konten Kartu - Overlapping Banner -->
    <div class="container cards-container">
        <div class="row g-4 justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="hasil-card-modern">
                    <div class="card-icon-wrapper">
                        <img src="asset/img/IconBenefit.png" alt="Icon" class="icon-benefit">
                    </div>
                    <h5 class="card-title">Memperkuat Struktur Tanaman</h5>
                    <p class="card-description">Meningkatkan ketahanan batang dan daun agar tidak mudah rebah.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="hasil-card-modern">
                    <div class="card-icon-wrapper">
                        <img src="asset/img/IconBenefit.png" alt="Icon" class="icon-benefit">
                    </div>
                    <h5 class="card-title">Meningkatkan Ketahanan terhadap Hama dan Penyakit</h5>
                    <p class="card-description">Tanaman lebih tahan terhadap serangan jamur, bakteri, dan serangga.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="hasil-card-modern">
                    <div class="card-icon-wrapper">
                        <img src="asset/img/IconBenefit.png" alt="Icon" class="icon-benefit">
                    </div>
                    <h5 class="card-title">Mengurangi Stres Akibat Cuaca Ekstrem</h5>
                    <p class="card-description">Efektif membantu tanaman menghadapi kekeringan atau kelebihan air.</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="hasil-card-modern">
                    <div class="card-icon-wrapper">
                        <img src="asset/img/IconBenefit.png" alt="Icon" class="icon-benefit">
                    </div>
                    <h5 class="card-title">Meningkatkan Efisiensi Fotosintesis</h5>
                    <p class="card-description">Daun lebih tegak dan optimal menangkap sinar matahari.</p>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="hasil-card-modern">
                    <div class="card-icon-wrapper">
                        <img src="asset/img/IconBenefit.png" alt="Icon" class="icon-benefit">
                    </div>
                    <h5 class="card-title">Meningkatkan Hasil dan Kualitas Panen</h5>
                    <p class="card-description">Buah lebih besar, lebih padat, dan tahan lama saat disimpan.</p>
                </div>
            </div>

            <!-- Card 6 -->
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

    <?php
// ============================================
// QUERY TESTIMONI - Ambil 4 random yang ditampilkan
// ============================================
// Pastikan koneksi database sudah ada ($conn)
// include('config/koneksi.php'); // Uncomment jika belum di-include

$queryTestimoni = "
    SELECT u.*, p.gambar as gambar_produk 
    FROM ulasan u 
    LEFT JOIN produk p ON u.produk = p.nama 
    WHERE u.status = 'Ditampilkan' 
    ORDER BY RAND() 
    LIMIT 4
";
$resultTestimoni = mysqli_query($conn, $queryTestimoni);

// Hitung jumlah testimoni yang tersedia
$jumlahTestimoni = mysqli_num_rows($resultTestimoni);
?>

<!-- ============================================ -->
<!-- TESTIMONI SECTION -->
<!-- ============================================ -->
<div class="container-fluid py-5" style="background-color: #2B8D4C;">
    <div class="container py-5">
        <div class="text-start mb-5">
            <h5 class="fw-normal text-white">Testimoni</h5>
            <h1 class="fw-semibold text-white">Pupuk Silika Pramudita Pupuk Nusantara</h1>
        </div>

        <?php if($jumlahTestimoni > 0) : ?>
        <div class="row g-4">
            <?php 
            $modalIndex = 1;
            while($testimoni = mysqli_fetch_assoc($resultTestimoni)) : 
            ?>
            <!-- Testimoni Card -->
            <div class="col-lg-3 col-md-6">
                <div class="p-4 h-100 testimoni-card" 
                     style="background-color: #FFED64; border-radius: 10px; color: #333; cursor: pointer;" 
                     data-bs-toggle="modal" 
                     data-bs-target="#testimoniModal<?= $modalIndex ?>">
                    
                    <!-- Header dengan Foto -->
                    <div class="d-flex align-items-center mb-3">
                        <img src="asset/img/testimoni/<?= htmlspecialchars($testimoni['gambar']) ?>" 
                             alt="<?= htmlspecialchars($testimoni['nama']) ?>"
                             style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; border: 2px solid #333;"
                             onerror="this.src='asset/img/default-avatar.png'">
                        <h6 class="ms-2 fw-bold m-0"><?= htmlspecialchars($testimoni['nama']) ?></h6>
                    </div>
                    
                    <!-- Review (Potong jika terlalu panjang) -->
                    <p style="min-height: 120px;">
                        <?php 
                        $ulasan = htmlspecialchars($testimoni['ulasan']);
                        // Potong di 150 karakter atau di akhir kata terdekat
                        if (strlen($ulasan) > 150) {
                            $ulasan = substr($ulasan, 0, 150);
                            $lastSpace = strrpos($ulasan, ' ');
                            $ulasan = substr($ulasan, 0, $lastSpace) . '...';
                        }
                        echo $ulasan;
                        ?>
                    </p>
                    
                    <!-- Footer dengan Rating & Info -->
                    <div class="mt-auto">
                        <!-- Rating Bintang -->
                        <div class="mb-2">
                            <?php 
                            for($i = 1; $i <= 5; $i++) {
                                if($i <= $testimoni['nilai']) {
                                    echo '<i class="bi bi-star-fill text-warning"></i>';
                                } else {
                                    echo '<i class="bi bi-star text-warning"></i>';
                                }
                            }
                            ?>
                        </div>
                        <small class="text-muted d-block" style="font-size: 0.85rem;">
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
                        
                        <!-- HEADER MODAL - Design Lebih Rapi -->
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
                            <!-- Profile Section - Lebih Compact -->
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
                            
                            <!-- Rating Section - Centered dan Compact -->
                            <div class="text-center mb-4 py-3" style="background-color: #f8f9fa; border-radius: 12px;">
                                <div class="mb-2">
                                    <?php 
                                    for($i = 1; $i <= 5; $i++) {
                                        if($i <= $testimoni['nilai']) {
                                            echo '<i class="bi bi-star-fill text-warning fs-4"></i>';
                                        } else {
                                            echo '<i class="bi bi-star text-muted fs-4"></i>';
                                        }
                                    }
                                    ?>
                                </div>
                                <small class="text-muted fw-semibold">Rating: <?= $testimoni['nilai'] ?>/5</small>
                            </div>
                            
                            <!-- Produk Section - Dengan Gambar Produk -->
                            <div class="mb-4">
                                <label class="text-muted small mb-2 fw-semibold">Produk yang Digunakan</label>
                                <div class="d-flex align-items-center p-3 rounded-3" style="background: linear-gradient(135deg, #FFED64 0%, #ffd700 100%); box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                                    <!-- Gambar Produk -->
                                    <?php if(!empty($testimoni['gambar_produk'])) : ?>
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
            
            <?php 
            // Jika data testimoni kurang dari 4, tampilkan placeholder
            $remaining = 4 - $jumlahTestimoni;
            for($i = 0; $i < $remaining; $i++) : 
            ?>
            <div class="col-lg-3 col-md-6">
                <div class="p-4 h-100" 
                     style="background-color: #FFED64; border-radius: 10px; color: #333; opacity: 0.5; border: 2px dashed #ccc;">
                    <div class="d-flex align-items-center mb-3">
                        <div style="width: 40px; height: 40px; background-color: #ddd; border-radius: 50%;"></div>
                        <h6 class="ms-2 fw-bold m-0 text-muted">Belum Ada Testimoni</h6>
                    </div>
                    <p class="text-muted" style="min-height: 120px;">Testimoni akan muncul di sini setelah ditambahkan.</p>
                </div>
            </div>
            <?php endfor; ?>
        </div>
        
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

<!-- ============================================ -->
<!-- CUSTOM STYLES -->
<!-- ============================================ -->
<style>
/* Hover effect untuk testimoni card */
.testimoni-card {
    transition: all 0.3s ease;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: column;
}

.testimoni-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 24px rgba(0,0,0,0.25);
}

/* Style untuk rating bintang */
.bi-star-fill, .bi-star {
    font-size: 16px;
    margin-right: 3px;
}

/* Modal backdrop enhancement */
.modal-backdrop {
    background-color: rgba(0, 0, 0, 0.7);
}

/* Modal animation */
.modal.fade .modal-dialog {
    transition: transform 0.3s ease-out;
}

/* Button hover effect */
.modal-footer .btn:hover {
    background-color: #1a5c30 !important;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(43,141,76,0.3);
}

/* Close button enhancement */
.btn-close:hover {
    transform: scale(1.1);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .testimoni-card {
        margin-bottom: 1rem;
    }
    
    .modal-dialog {
        margin: 1rem;
    }
    
    .modal-body {
        padding: 1.5rem !important;
    }
}

/* Card text truncation */
.testimoni-card p {
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 5;
    -webkit-box-orient: vertical;
}

/* Label styling */
label.small {
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-size: 0.75rem;
}
</style>

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


    document.addEventListener('DOMContentLoaded', function() {
    const kalkulatorForm = document.getElementById('formKalkulator');
    const popupHasil = document.getElementById('popupHasil');
    const btnPesanSekarang = document.getElementById('btnPesanSekarang');

    kalkulatorForm.addEventListener('submit', function(e) {
        e.preventDefault(); // cegah reload

        const jenisTanaman = kalkulatorForm.querySelectorAll('select')[0].value;
        const jenisProduk = kalkulatorForm.querySelectorAll('select')[1].value;
        const luasTanah = kalkulatorForm.querySelector('input[type="number"]').value;

        document.getElementById('hasilJenisTanaman').textContent = jenisTanaman;
        document.getElementById('hasilJenisProduk').textContent = jenisProduk;
        document.getElementById('hasilLuasTanah').textContent = luasTanah;

        // tampilkan popup di tengah layar
        popupHasil.style.display = 'block';
        popupHasil.style.top = '50%';
        popupHasil.style.left = '50%';
        popupHasil.style.transform = 'translate(-50%, -50%)';
    });

    // Tutup popup saat klik Pesan Sekarang
    btnPesanSekarang.addEventListener('click', function() {
        popupHasil.style.display = 'none';
    });

    // Tutup popup kalau klik di luar
    window.addEventListener('click', function(e) {
        if (popupHasil.style.display === 'block' && !popupHasil.contains(e.target) && !kalkulatorForm.contains(e.target)) {
            popupHasil.style.display = 'none';
        }
    });
});

</script>

<!-- WA -->
<?php include ('admin/template/whatsapp_float.php'); ?>


<!-- Footer -->
<?php
include('admin/template/footer.php');
?>

</body>

</html>
