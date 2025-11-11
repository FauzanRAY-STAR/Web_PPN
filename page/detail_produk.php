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
        background-color: #f6f7f9;
    }

    /* Semua section full-width */
    .hero-section,
    .main-product,
    .detail-section,
    .benefits-section,
    .usage-section {
        width: 100%;
        padding: 3rem 0;
    }

    /* Konten di dalam section */
    .hero-content,
    .detail-content,
    .benefits-grid,
    .usage-category,
    .usage-item {
        max-width: 1200px;
        margin: 0 auto;
        padding-left: 40px;
        padding-right: 40px;
    }

    /* Hero Section */
    .hero-section {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 3rem 0;
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
        letter-spacing: 1px;
    }

    /* ===== MAIN PRODUCT (gambar + deskripsi) ===== */
    .main-product {
        display: flex;
        flex-wrap: wrap;
        gap: 2.5rem;
        align-items: center;
        justify-content: center;
        max-width: 1200px;
        margin: 0 auto 3rem auto;
        padding: 3rem 50px;
        background: transparent; 
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
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    .product-description {
        flex: 1 1 400px;
        font-size: 1.05rem;
        line-height: 1.7;
    }

    .product-title {
        font-weight: 700;
        font-size: 1.5rem;
        color: #28a745;
        margin-bottom: 1rem;
    }

.order-btn, .order-btn-bottom {
    background: linear-gradient(90deg, #2B8D4C 0%, #D5D44B 100%);
    color: white;
    border: none;
    padding: 12px 35px;
    cursor: pointer;
    border-radius: 50px; 
    margin-top: 15px;
    font-weight: 600;
    letter-spacing: 0.3px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(43, 141, 76, 0.3);
}

.order-btn:hover, .order-btn-bottom:hover {
    filter: brightness(1.1);
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(43, 141, 76, 0.4);
}


    /* ===== CARD WRAPPER UNTUK SECTION ===== */
    .detail-section,
    .benefits-section,
    .usage-section {
        background: #ffffff;
        max-width: 1200px;
        margin: 0 auto 3rem auto;
        border-radius: 16px;
        padding: 3rem 50px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.05);
    }

    /* Section Title */
    .section-title {
        font-weight: 700;
        font-size: 1.6rem;
        color: #28a745;
        text-align: center;
        margin-bottom: 2rem;
        letter-spacing: 0.5px;
    }

    .detail-content {
        font-size: 1.05rem;
        line-height: 1.7;
        text-align: justify;
    }

    /* Benefits Grid */
    .benefits-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-bottom: 3rem;
    }
    .benefit-card {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        transition: 0.3s;
    }
    .benefit-card:hover {
        background-color: #e9f9ed;
        transform: translateY(-3px);
    }
    .benefit-icon {
        font-size: 1.5rem;
        color: #fff200ff;
    }

    /* Usage Section */
    .usage-category {
        margin-bottom: 2.5rem;
    }
    .usage-subtitle {
        font-weight: bold;
        margin-bottom: 0.5rem;
        color: #333;
    }
    .usage-item {
        margin-bottom: 0.75rem;
        line-height: 1.6;
    }
    .dosage {
        font-weight: bold;
        color: #28a745;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 1.5rem;
        }
        .main-product {
            flex-direction: column;
            text-align: center;
            padding: 2rem 25px;
        }
        .product-description {
            padding-top: 1rem;
        }
        .benefits-grid {
            gap: 1rem;
        }
        .detail-section,
        .benefits-section,
        .usage-section {
            padding: 2rem 25px;
        }
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

        <!-- Main Product Section -->
<section class="main-product">
    <div class="product-image-container">
        <div class="product-image-wrapper">
            <img src="../asset/img/produk2.png" alt="MAXI-D Pupuk Daun" class="product-image">
        </div>
    </div>
    <div class="product-description">
        <h2 class="product-title">MAXI-D Pupuk Daun untuk Fase Vegetatif</h2>
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

            <div class="usage-category">
                <h4 class="usage-subtitle">Tanaman Palawija (Padi & jagung)</h4>
                <div class="usage-item">
                    <span class="dosage">6 - 10 tutup</span>
                    <p>"Termasuk Maxi-D" dilarutkan kedalam <strong>15 liter air</strong> (sesuai dengan umur tanaman)</p>
                </div>
                <div class="usage-item">
                    <p>Penyemprotan pertama saat tanaman berumur <strong>15 hari</strong> setelah tanam</p>
                </div>
                <div class="usage-item">
                    <p><strong>Sekali</strong> untuk padi dan <strong>1 minggu</strong> sekali untuk jagung  <strong>2 kali aplikasi</strong></p>
                </div>
            </div>


            <button class="order-btn-bottom">Pesan Sekarang</button>
        </section>
    </div>

    <!-- WA -->
    <?php include ('../admin/template/whatsapp_float.php'); ?>

    <!-- Footer -->
    <?php include '../admin/template/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../asset/js/detail_produk.js"></script>

</body>
</html>
