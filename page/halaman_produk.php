<?php
// START SESSION DI SINI - SEBELUM ADA OUTPUT APAPUN!
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include config jika belum
if (!isset($base_url)) {
    include($_SERVER['DOCUMENT_ROOT'] . '/WEB_PPN/config/config.php');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTPPN Produk</title>
    
    <!-- Favicon -->
    <link href="asset/img/LogoIco.ico" rel="icon">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Heebo&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheets -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="asset/style/style.css" rel="stylesheet">
    
    <style>
        body {
            overflow-x: hidden;
            background-color: #ffffff;
            font-family: 'Heebo', sans-serif;
        }

        /* Fix dropdown nggak muncul */
        .navbar {
            overflow: visible !important;
            position: relative !important;
            z-index: 1000 !important;
        }

        .container, .container-fluid {
            overflow: visible !important;
        }

        /* ===== PRODUK TITLE WITH LINES ===== */
        .produk-title-container {
            position: relative;
            padding: 80px 0 60px 0;
        }

        .produk-title-line {
            position: relative;
            display: inline-block;
            color: #2B8D4C;
            font-weight: 700;
            font-size: 2.5rem;
        }

        .produk-title-line::before,
        .produk-title-line::after {
            content: '';
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 140px;
            height: 2px;
        }

        .produk-title-line::before {
            left: -160px;
            background: linear-gradient(to right, transparent, #2B8D4C);
            box-shadow: -148px 0 0 0 #2B8D4C;
        }

        .produk-title-line::after {
            right: -160px;
            background: linear-gradient(to left, transparent, #2B8D4C);
            box-shadow: 148px 0 0 0 #2B8D4C;
        }

        /* ===== PRODUCT CARD STYLES ===== */
        .product-card {
            background: #ffffff;
            border: 2px solid #e0e0e0;
            border-radius: 15px;
            padding: 20px 15px;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            max-width: 233px;
            height: 270px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin: 0 auto;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(43, 141, 76, 0.15);
            border-color: #2B8D4C;
        }

        .product-image-wrapper {
            height: 110px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        .product-image {
            max-width: 100%;
            max-height: 110px;
            object-fit: contain;
        }

        .product-name {
            font-size: 0.95rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 12px;
            padding-top: 12px;
            border-top: 2px solid #1B5930;
        }

        .btn-selengkapnya {
            display: inline-block;
            background: linear-gradient(135deg, #F9D70B 0%, #E6C507 100%);
            color: #333;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            padding: 8px 25px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(249, 215, 11, 0.3);
            font-size: 0.85rem;
        }

        .btn-selengkapnya:hover {
            background: linear-gradient(135deg, #E6C507 0%, #D4B507 100%);
            color: #333;
            box-shadow: 0 6px 14px rgba(249, 215, 11, 0.5);
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

<?php include('admin/template/navbar.php'); ?>

<div class="container-fluid" style="background-color: #ffffff;">
    <div class="container">
        <div class="text-center produk-title-container">
            <h1 class="produk-title-line">PRODUK</h1>
        </div>

        <div class="row g-4 pb-5">
            <?php
            $produk = [
                ['id' => 1, 'img' => 'asset/img/Produk1.png', 'nama' => 'mAXI-d'],
                ['id' => 2, 'img' => 'asset/img/produk2.png', 'nama' => 'SILIKA'],
                ['id' => 3, 'img' => 'asset/img/produk3.png', 'nama' => 'Pengendali Hama'],
                ['id' => 4, 'img' => 'asset/img/produk4.png', 'nama' => 'Probiotik'],
                ['id' => 5, 'img' => 'asset/img/produk5.png', 'nama' => 'mAXI'],
            ];

            foreach ($produk as $p):
            ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="<?= $p['img'] ?>" alt="<?= $p['nama'] ?>" class="product-image">
                    </div>
                    <h5 class="product-name"><?= $p['nama'] ?></h5>
                    <a href="page/detail_produk.php?id=<?= $p['id'] ?>" class="btn-selengkapnya">Selengkapnya</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include('admin/template/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>