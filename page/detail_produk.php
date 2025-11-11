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
