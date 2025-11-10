<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTPPN Produk</title>
    
    <!-- Favicon -->
    <link href="asset/img/LogoIco.ico" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Heebo&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheets -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/style/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="asset/style/style.css" rel="stylesheet">

    <style>
        body {
            overflow-x: hidden;
            background-color: #ffffff;
            font-family: 'Heebo', sans-serif;
        }

        /* ===== PRODUK TITLE WITH LINES ===== */
        .produk-title-container {
            overflow: visible !important;
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
        }

        .produk-title-line::after {
            right: -160px;
            background: linear-gradient(to left, transparent, #2B8D4C);
        }

        /* Dots at the end of lines */
        .produk-title-line::before {
            box-shadow: -148px 0 0 0 #2B8D4C;
        }

        .produk-title-line::after {
            box-shadow: 148px 0 0 0 #2B8D4C;
        }

        /* ===== PRODUCT CARD STYLES ===== */
        .product-card {
            background: #ffffff;
            border: 2px solid #e0e0e0;
            border-radius: 15px;
            padding: 20px 15px 15px 15px;
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
            min-height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
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

        /* ===== RESPONSIVE STYLES ===== */
        @media (max-width: 768px) {
            .produk-title-line {
                padding: 0 100px !important;
                font-size: 2rem;
            }

            .produk-title-line::before,
            .produk-title-line::after {
                width: 80px;
            }

            .produk-title-line::before {
                left: -90px;
                box-shadow: -88px 0 0 0 #2B8D4C;
            }

            .produk-title-line::after {
                right: -90px;
                box-shadow: 88px 0 0 0 #2B8D4C;
            }

            .produk-title-container {
                padding: 60px 0 40px 0;
            }

            .product-card {
                margin-bottom: 20px;
            }
        }

        @media (max-width: 576px) {
            .produk-title-line {
                padding: 0 70px !important;
                font-size: 1.5rem;
            }

            .produk-title-line::before,
            .produk-title-line::after {
                width: 50px;
            }

            .produk-title-line::before {
                left: -60px;
                box-shadow: -58px 0 0 0 #2B8D4C;
            }

            .produk-title-line::after {
                right: -60px;
                box-shadow: 58px 0 0 0 #2B8D4C;
            }

            .product-card {
                max-width: 200px;
                height: 250px;
            }

            .product-image-wrapper {
                height: 100px;
            }

            .product-image {
                max-height: 100px;
            }

            .product-name {
                font-size: 0.9rem;
            }

            .btn-selengkapnya {
                padding: 7px 20px;
                font-size: 0.8rem;
            }
        }
    </style>
</head>
<body>
    <?php include('admin/template/navbar.php'); ?>

    <!-- Produk Section Start -->
    <div class="container-fluid" style="background-color: #ffffff;">
        <div class="container">
            <!-- Title -->
            <div class="text-center produk-title-container" style="overflow: visible;">
                <h1 class="produk-title-line" style="padding: 0 170px;">
                    PRODUK
                </h1>
            </div>

            <!-- Products Grid -->
            <div class="row g-4 pb-5">
                <!-- Product 1: mAXI-d -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-image-wrapper">
                            <img src="asset/img/Produk1.png" alt="mAXI-d" class="product-image">
                        </div>
                        <h5 class="product-name">mAXI-d</h5>
                        <div>
                            <a href="page/detail_produk.php?id=1" class="btn-selengkapnya">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 2: SILIKA -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-image-wrapper">
                            <img src="asset/img/produk2.png" alt="SILIKA" class="product-image">
                        </div>
                        <h5 class="product-name">SILIKA</h5>
                        <div>
                            <a href="page/detail_produk.php?id=2" class="btn-selengkapnya">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 3: Pengendali Hama -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-image-wrapper">
                            <img src="asset/img/produk3.png" alt="Pengendali Hama" class="product-image">
                        </div>
                        <h5 class="product-name">Pengendali Hama</h5>
                        <div>
                            <a href="page/detail_produk.php?id=3" class="btn-selengkapnya">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 4: Probiotik -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-image-wrapper">
                            <img src="asset/img/produk4.png" alt="Probiotik" class="product-image">
                        </div>
                        <h5 class="product-name">Probiotik</h5>
                        <div>
                            <a href="page/detail_produk.php?id=4" class="btn-selengkapnya">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 5: mAXI -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-image-wrapper">
                            <img src="asset/img/produk5.png" alt="mAXI" class="product-image">
                        </div>
                        <h5 class="product-name">mAXI</h5>
                        <div>
                            <a href="page/detail_produk.php?id=5" class="btn-selengkapnya">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Produk Section End -->
     
    <?php include('admin/template/footer.php'); ?>

</body>
</html>
