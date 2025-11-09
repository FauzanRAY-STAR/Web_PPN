<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - PT Pramudita Pupuk Nusantara</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../asset/style/tentang_kami.css">

    <style>
        /* Navbar dropdown muncul */
        .navbar {
            overflow: visible !important;
            position: relative;
        }

        /* Full-width main content */
        .main-content {
            width: 100%;
            margin: 0;
            padding: 0;
        }

        /* Semua section full-width */
        .hero-section,
        .intro-section,
        .video-section,
        .about-section,
        .values-section,
        .cta-section {
            width: 100%;
            padding-left: 0;
            padding-right: 0;
        }

        /* Atur konten di dalam section tetap rapi */
        .hero-content,
        .intro-content,
        .video-container,
        .about-content,
        .values-grid,
        .cta-content {
            max-width: 1400px;
            margin: 0 auto;
            padding-left: 20px;
            padding-right: 20px;
        }

        /* Optional: hilangkan margin auto yang bikin putih di kiri-kanan */
        .intro-content,
        .about-text-wrapper,
        .video-container {
            width: 100%;
        }
    </style>
</head>
<body>

    <?php include '../admin/template/navbar.php'; ?>

    <div class="main-content">
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-content">
                <div class="hero-divider left"></div>
                <div class="hero-text-wrapper">
                    <h1 class="hero-title">PT Pramudita Pupuk Nusantara</h1>
                    <div class="hero-underline"></div>
                </div>
                <div class="hero-divider right"></div>
            </div>
        </section>

        <!-- Introduction Text -->
        <section class="intro-section">
            <div class="intro-content">
                <p class="intro-text">
                    Di tengah tantangan global dalam sektor pertanian—mulai dari perubahan iklim, degradasi lahan, rendahnya produktivitas petani, hingga krisis ketahanan pangan—PT Pramudita Pupuk Nusantara hadir sebagai jawaban untuk membangun sistem pertanian Indonesia yang lebih tangguh, modern, dan berkelanjutan.
                </p>
            </div>
        </section>

        <!-- Video Section -->
        <section class="video-section">
            <div class="video-container">
                <div class="video-wrapper">
                    <div class="company-video" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                        <iframe 
                            src="https://www.youtube.com/embed/iGkdUqwvf28" 
                            title="YouTube video" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                        </iframe>
                    </div>
                    <div class="video-overlay">
                        <div class="play-button">
                            <svg viewBox="0 0 24 24" fill="white">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="about-section">
            <div class="about-header">
                <h2 class="section-title">Tentang Kami</h2>
                <div class="title-decoration"></div>
            </div>
            
            <div class="about-content">
                <div class="about-text-wrapper">
                    <p class="about-text">
                        PT Pramudita Pupuk Nusantara adalah perusahaan perorangan yang bergerak dalam bidang produksi, distribusi, dan pemasaran pupuk, dengan cakupan layanan menyeluruh dari hulu ke hilir. Kami tidak hanya memproduksi pupuk, tetapi juga melakukan edukasi pertanian, pembinaan petani, hingga pendampingan dampak penggunaan produk kami di lapangan. Dengan demikian, kami mampu memberikan solusi pertanian terpadu yang aplikatif, efisien, dan relevan terhadap kondisi petani Indonesia saat ini.
                    </p>
                </div>

                <!-- Stats Cards -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon">🌾</div>
                        <div class="stat-number" data-target="1000">0</div>
                        <div class="stat-label">Petani Mitra</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">🏭</div>
                        <div class="stat-number" data-target="50">0</div>
                        <div class="stat-label">Produk Unggulan</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">🌍</div>
                        <div class="stat-number" data-target="100">0</div>
                        <div class="stat-label">Wilayah Distribusi</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">⭐</div>
                        <div class="stat-number" data-target="15">0</div>
                        <div class="stat-label">Tahun Pengalaman</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Values Section -->
        <section class="values-section">
            <div class="values-header">
                <h2 class="section-title">Nilai-Nilai Kami</h2>
                <div class="title-decoration"></div>
            </div>
            
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon-wrapper">
                        <div class="value-icon">🎯</div>
                    </div>
                    <h3 class="value-title">Inovasi</h3>
                    <p class="value-desc">Mengembangkan solusi pertanian terkini dengan teknologi modern</p>
                </div>
                <div class="value-card">
                    <div class="value-icon-wrapper">
                        <div class="value-icon">🤝</div>
                    </div>
                    <h3 class="value-title">Kolaborasi</h3>
                    <p class="value-desc">Bekerja sama dengan petani untuk kesuksesan bersama</p>
                </div>
                <div class="value-card">
                    <div class="value-icon-wrapper">
                        <div class="value-icon">🌱</div>
                    </div>
                    <h3 class="value-title">Berkelanjutan</h3>
                    <p class="value-desc">Membangun pertanian yang ramah lingkungan dan berkelanjutan</p>
                </div>
                <div class="value-card">
                    <div class="value-icon-wrapper">
                        <div class="value-icon">💪</div>
                    </div>
                    <h3 class="value-title">Integritas</h3>
                    <p class="value-desc">Komitmen penuh terhadap kualitas dan kepuasan pelanggan</p>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="cta-content">
                <h2 class="cta-title">Mari Bergabung Bersama Kami</h2>
                <p class="cta-text">Menjadi bagian dari revolusi pertanian Indonesia yang lebih modern dan berkelanjutan</p>
                <button class="cta-button">Hubungi Kami</button>
            </div>
        </section>
    </div>

    <?php include '../admin/template/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../asset/js/tentang_kami.js"></script>
</body>
</html>
