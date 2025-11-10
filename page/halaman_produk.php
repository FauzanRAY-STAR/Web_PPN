<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
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
    <link href="asset/style/halaman_produk.css" rel="stylesheet">
    
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

<!-- Tombol WhatsApp Floating -->
<a href="https://wa.me/6281234567890" target="_blank" id="whatsapp-float">
  <i class="bi bi-whatsapp"></i>
</a>

<style>
#whatsapp-float {
  position: fixed;
  bottom: 25px; 
  right: 25px; 
  width: 60px;
  height: 60px;
  background-color: #25D366;
  color: white;
  border-radius: 50%;
  box-shadow: 0 4px 10px rgba(0,0,0,0.3);
  z-index: 1000;
  transition: all 0.3s ease;
  text-decoration: none;
}

#whatsapp-float i {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-48%, -52%); 
  font-size: 32px;
}

#whatsapp-float:hover {
  transform: scale(1.1);
  background-color: #1ebe57;
  color: #fff;
}
</style>


<?php include('admin/template/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>