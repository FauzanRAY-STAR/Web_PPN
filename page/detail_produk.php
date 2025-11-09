<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk - PT Pramudita Pupuk Nusantara</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../asset/style/detail_produk.css">

    <style>
        /* Navbar dropdown muncul */
        .navbar {
            overflow: visible !important;
            position: relative;
            z-index: 1000;
        }

        /* Full-width main content */
        .main-content {
            width: 100%;
            margin: 0;
            padding: 0;
        }

        /* Semua section full-width */
        .hero-section,
        .product-header,
        .main-product,
        .detail-section,
        .benefits-section,
        .usage-section {
            width: 100%;
            padding-left: 0;
            padding-right: 0;
        }

        /* Konten di dalam section tetap rapi */
        .hero-content,
        .product-title-wrapper,
        .product-image-container,
        .product-description,
        .detail-content,
        .benefits-grid,
        .usage-category,
        .usage-item {
            max-width: 1400px;
            margin: 0 auto;
            padding-left: 20px;
            padding-right: 20px;
        }

        /* Hero Section */
        .hero-section {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 2rem 0;
        }
        .hero-divider {
            flex: 1;
            height: 2px;
            background: #28a745;
            margin: 0 1rem;
        }
        .hero-title {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
        }

        /* Product Section */
        .main-product {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            margin-bottom: 3rem;
        }
        .product-image-container {
            flex: 1 1 400px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .product-image {
            max-width: 100%;
            height: auto;
        }
        .product-description {
            flex: 1 1 400px;
        }
        .order-btn, .order-btn-bottom {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 25px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 15px;
        }
        .order-btn:hover, .order-btn-bottom:hover {
            background-color: #218838;
        }

        /* Benefits Grid */
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1rem;
            margin-bottom: 3rem;
        }
        .benefit-card {
            display: flex;
            align-items: flex-start;
            gap: 0.5rem;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }
        .benefit-icon {
            font-size: 1.5rem;
            color: #28a745;
        }

        /* Usage Section */
        .usage-category {
            margin-bottom: 2rem;
        }
        .usage-subtitle {
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        .usage-item {
            margin-bottom: 0.5rem;
        }
        .dosage {
            font-weight: bold;
            color: #28a745;
        }
    </style>
</head>
<body>

    <?php include '../admin/template/navbar.php'; ?>

    <div class="main-content">
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-divider left"></div>
            <h1 class="hero-title">PRODUK</h1>
            <div class="hero-divider right"></div>
        </section>

        <!-- Product Header -->
        <section class="product-header">
            <div class="product-title-wrapper">
                <h2 class="product-title">MAXI-D Pupuk Daun untuk Fase Vegetatif</h2>
            </div>
        </section>

        <!-- Main Product Section -->
        <section class="main-product">
            <div class="product-image-container">
                <div class="product-image-wrapper">
                    <img src="../asset/img/produk2.png" alt="MAXI-D Pupuk Daun" class="product-image">
                </div>
            </div>
            <div class="product-description">
                <p class="product-text">
                    Terra Nusa Maxi D diformulasikan khusus untuk mendukung 
                    pertumbuhan tanaman pada fase vegetatif.
                </p>
                <button class="order-btn">Pesan Sekarang</button>
            </div>
        </section>

        <!-- Detail Produk -->
        <section class="detail-section">
            <h3 class="section-title">KEUNGGULAN PRODUK</h3>
            <div class="detail-content">
                <p class="detail-description">
                    Terra Nusa Maxi-D diformulasikan khusus untuk mendukung pertumbuhan tanaman pada fase vegetatif, 
                    yaitu fase awal yang sangat memerlukan kekuatan dan kualitas pertumbuhan tanaman. Mengandung nitrogen 
                    tinggi yang dikorelasikan dengan unsur hara mikro lainnya secara sinergis menciptakan keseimbangan 
                    pertumbuhan daun yang hijau, lebat, dan sehat, serta merangsang pertumbuhan akar dan batang secara optimal.
                </p>
            </div>
        </section>

        <!-- Manfaat & Keunggulan -->
        <section class="benefits-section">
            <h3 class="section-title">MANFAAT & KEUNGGULAN</h3>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">✓</div>
                    <p>Memperbanyak jumlah anakan produktif padi</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">✓</div>
                    <p>Memicu pertumbuhan dan menghijaukan panen</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">✓</div>
                    <p>Meningkatkan daya tahan tanaman terhadap serangan hama dan penyakit</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">✓</div>
                    <p>Mempercepat panen pada tanaman semusim</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">✓</div>
                    <p>Memperpanjang masa umur tanaman</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">✓</div>
                    <p>Meningkatkan frekuensi panen</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">✓</div>
                    <p>Meningkatkan dan menjaga kesuburan tanah</p>
                </div>
            </div>
        </section>

        <!-- Aturan Pakai -->
        <section class="usage-section">
            <h3 class="section-title">ATURAN PAKAI</h3>
            
            <div class="usage-category">
                <h4 class="usage-subtitle">Tanaman Sayuran & Tanaman Hias</h4>
                <div class="usage-item">
                    <span class="dosage">4 - 6 tutup</span>
                    <p>"Termasuk Maxi-D" dilarutkan kedalam <strong>15 liter air</strong> (sesuai dengan umur tanaman)</p>
                </div>
                <div class="usage-item">
                    <p>Penyemprotan pertama saat tanaman berumur <strong>10 sd 15 hari</strong> setelah tanam</p>
                </div>
                <div class="usage-item">
                    <p>Ulangi penyemprotan setiap <strong>1 minggu</strong></p>
                </div>
            </div>

            <!-- Bisa lanjutkan kategori lainnya sama seperti sebelumnya -->

            <button class="order-btn-bottom">Pesan Sekarang</button>
        </section>
    </div>

    <?php include '../admin/template/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../asset/js/detail_produk.js"></script>
</body>
</html>
