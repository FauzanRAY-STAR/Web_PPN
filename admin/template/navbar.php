<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - PPN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../asset/style/style_admin.css">
</head>

<body>
  <div class="d-flex">
    <!-- SIDEBAR -->
    <div id="sidebar" class="sidebar">
      <div class="logo">
        <img src="../../asset/img/Logo.png" alt="PPN Logo" class="logo-full">
        <button class="btn btn-sm" id="toggleSidebar" style="background: none; border: none; padding: 0;">
          <img src="../../asset/img/Sidebar.png" alt="Toggle Sidebar" style="width: 20px; height: 20px;">
        </button>
      </div>

      <!-- SEARCH -->
      <div class="search-container">
        <div class="search-box">
          <i class="bi bi-search"></i>
          <input type="text" placeholder="Search">
        </div>
        <div class="search-icon-only">
          <i class="bi bi-search"></i>
        </div>
      </div>

      <!-- MENU -->
      <div class="p-3">
        <p class="text-secondary small fw-semibold">Menu</p>
        <div class="menu-item <?php echo (isset($_GET['mod']) && $_GET['mod'] == 'produk') ? 'active' : ''; ?>">
          <i class="bi bi-box-seam <?php echo (isset($_GET['mod']) && $_GET['mod'] == 'produk') ? 'text-white' : ''; ?>"></i>
          <span><a href="?mod=produk" class="text-decoration-none text-dark">Manajemen Produk</a></span>
        </div>
        <div class="menu-item <?php echo (isset($_GET['mod']) && $_GET['mod'] == 'ulasan') ? 'active' : ''; ?>">
          <i class="bi bi-chat-dots <?php echo (isset($_GET['mod']) && $_GET['mod'] == 'ulasan') ? 'text-white' : ''; ?>"></i>
          <span><a href="?mod=ulasan" class="text-decoration-none text-dark">Testimoni</a></span>
        </div>
        <div class="menu-item <?php echo (isset($_GET['mod']) && $_GET['mod'] == 'galeri') ? 'active' : ''; ?>">
          <i class="bi bi-image <?php echo (isset($_GET['mod']) && $_GET['mod'] == 'galeri') ? 'text-white' : ''; ?>"></i>
          <span><a href="?mod=galeri" class="text-decoration-none text-dark">Galeri</a></span>
        </div>
        <div class="menu-item <?php echo (isset($_GET['mod']) && $_GET['mod'] == 'diskon') ? 'active' : ''; ?>">
          <i class="bi bi-percent <?php echo (isset($_GET['mod']) && $_GET['mod'] == 'diskon') ? 'text-white' : ''; ?>"></i>
          <span><a href="?mod=diskon" class="text-decoration-none text-dark">Diskon</a></span>
        </div>
        <div class="menu-item">
          <i class="bi bi-box-arrow-right"></i>
          <span><a href="?mod=logout" class="text-decoration-none text-dark">Logout</a></span>
        </div>
      </div>

      <!-- FOOTER -->
      <div class="sidebar-footer">
        <img src="../asset/img/userlog.png" alt="Admin">
        <span>Administrator</span>
      </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main">
