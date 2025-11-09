<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi & Misi - PT Pramudita Pupuk Nusantara</title>
    <link rel="stylesheet" href="../asset/style/visi_misi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Navbar dropdown muncul */
        .navbar {
            overflow: visible !important;
            position: relative;
            z-index: 1000;
        }

        /* Full-width sections */
        section {
            width: 100%;
            padding-left: 0;
            padding-right: 0;
        }

        /* Konten tetap rapi */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding-left: 20px;
            padding-right: 20px;
        }
    </style>
</head>
<body>

    <?php include '../admin/template/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title" data-aos="fade-up">Visi & Misi</h1>
            <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="100">Membangun Masa Depan Pertanian Indonesia</p>
        </div>
        <div class="scroll-indicator">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- Visi Section -->
    <section class="visi-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Visi Kami</span>
                <h2 class="section-title">Menjadi Perusahaan Pupuk Terdepan</h2>
            </div>
            
            <div class="visi-card" data-aos="fade-up" data-aos-delay="200">
                <div class="visi-icon">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="visi-content">
                    <p class="visi-text">
                        Menjadi perusahaan pupuk nasional yang inovatif dan berkelanjutan guna mendukung pertanian dan peternakan berkelanjutan melalui produk berkualitas, peningkatan produktivitas pertanian, kesejahteraan petani, dan menjadi solusi pertanian masa depan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Misi Section -->
    <section class="misi-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Misi Kami</span>
                <h2 class="section-title">Komitmen untuk Indonesia</h2>
            </div>

            <div class="misi-grid">
                <div class="misi-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="misi-number">01</div>
                    <div class="misi-icon"><i class="fas fa-seedling"></i></div>
                    <h3 class="misi-title">Solusi Pertanian Terjangkau</h3>
                    <p class="misi-description">Memberikan solusi pertanian Indonesia yang terjangkau, mudah diakses, dan membantu petani meningkatkan hasil panen, kualitas tanaman, serta kesejahteraan petani.</p>
                </div>
                <div class="misi-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="misi-number">02</div>
                    <div class="misi-icon"><i class="fas fa-leaf"></i></div>
                    <h3 class="misi-title">Pupuk Efektif & Efisien</h3>
                    <p class="misi-description">Menyediakan pupuk efektif, dan efisien untuk mendukung pertumbuhan tanaman optimal, sekaligus menjaga kualitas tanah dan lingkungan.</p>
                </div>
                <div class="misi-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="misi-number">03</div>
                    <div class="misi-icon"><i class="fas fa-flask"></i></div>
                    <h3 class="misi-title">Inovasi Pupuk Organik</h3>
                    <p class="misi-description">Mengembangkan dan memproduksi pupuk serta suplemen organik dan hayati berkualitas tinggi yang mendukung pertumbuhan tanaman dan ternak secara optimal.</p>
                </div>
                <div class="misi-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="misi-number">04</div>
                    <div class="misi-icon"><i class="fas fa-hands-helping"></i></div>
                    <h3 class="misi-title">Kontribusi Nyata</h3>
                    <p class="misi-description">Memberikan kontribusi nyata terhadap ketahanan pangan dan kesejahteraan masyarakat Indonesia melalui pertanian dan peternakan yang sehat, produktif, dan berdaya saing.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Nilai Perusahaan</span>
                <h2 class="section-title">Prinsip yang Kami Pegang</h2>
            </div>

            <div class="values-grid">
                <div class="value-item" data-aos="zoom-in" data-aos-delay="100">
                    <i class="fas fa-lightbulb"></i>
                    <h4>Inovasi</h4>
                </div>
                <div class="value-item" data-aos="zoom-in" data-aos-delay="200">
                    <i class="fas fa-award"></i>
                    <h4>Kualitas</h4>
                </div>
                <div class="value-item" data-aos="zoom-in" data-aos-delay="300">
                    <i class="fas fa-heart"></i>
                    <h4>Integritas</h4>
                </div>
                <div class="value-item" data-aos="zoom-in" data-aos-delay="400">
                    <i class="fas fa-recycle"></i>
                    <h4>Berkelanjutan</h4>
                </div>
            </div>
        </div>
    </section>

    <?php include '../admin/template/footer.php'; ?>

    <script src="../asset/js/visi_misi.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
