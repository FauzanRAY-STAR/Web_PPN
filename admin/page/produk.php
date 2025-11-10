<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Produk - PPN</title>
  
  <!-- Favicon -->
  <link href="/WEB_PPN/asset/img/LogoIco.ico" rel="icon">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="/WEB_PPN/asset/style/style_admin.css">
</head>
<body>

<?php include('../template/sidebar.php'); ?>

<!-- MAIN CONTENT -->
<div class="main">
  <div class="header-section">Manajemen Produk</div>

  <!-- SEARCH BAR & BUTTONS -->
  <div class="search-bar-top">
    <div class="left-col">
      <div class="search-box">
        <i class="bi bi-search"></i>
        <input type="text" placeholder="Search">
      </div>
      <button class="search-btn"><i class="bi bi-funnel"></i></button>
    </div>
    
    <div class="right-col">
      <button class="search-btn"><i class="bi bi-plus"></i></button>
    </div>
  </div>

  <!-- PRODUCT LIST -->
  <?php
  $products = [
    ["name" => "Maxi-D", "img" => "Produk1.png"],
    ["name" => "TerraNusa Silika", "img" => "produk2.png"],
    ["name" => "TeraNusa Probiotik", "img" => "produk3.png"],
    ["name" => "TeraTusa Hama", "img" => "produk4.png"],
    ["name" => "Maxi-B", "img" => "produk5.png"]
  ];
  
  foreach ($products as $p) {
    echo "
    <div class='product-card'>
      <div class='product-info'>
        <img src='/WEB_PPN/asset/img/{$p['img']}' alt='{$p['name']}'>
        <span class='fw-semibold'>{$p['name']}</span>
      </div>
      <div class='action-btns'>
        <button class='btn-delete'><i class='bi bi-trash'></i></button>
        <button class='btn-edit'><i class='bi bi-pencil'></i></button>
      </div>
    </div>";
  }
  ?>

  <!-- PAGINATION -->
  <div class="d-flex justify-content-center mt-4 gap-2">
    <button class="btn btn-warning rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
      <i class="bi bi-chevron-left" style="color: white;"></i>
    </button>
    <button class="btn btn-success rounded-circle d-flex align-items-center justify-content-center fw-semibold text-white" style="width: 32px; height: 32px;">
      1
    </button>
    <button class="btn btn-warning rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
      <i class="bi bi-chevron-right" style="color: white;"></i>
    </button>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
