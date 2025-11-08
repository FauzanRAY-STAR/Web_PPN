<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Produk - PPN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <style>

/* CSS */
.search-bar-top {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 1rem;
}

.left-col {
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.search-box {
  display: flex;
  align-items: center;
  background: #f5f5f5;
  border-radius: 8px;
  padding: 0.4rem 0.8rem;
  width: 220px; /* biar tidak terlalu panjang */
}

.search-box i {
  color: #888;
  margin-right: 0.4rem;
}

.search-box input {
  border: none;
  outline: none;
  background: transparent;
  width: 100%;
}

.search-btn {
  background-color: #007bff;
  border: none;
  color: white;
  padding: 0.45rem 0.75rem;
  border-radius: 6px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
}

.search-btn i {
  font-size: 1rem;
}

.search-btn:hover {
  background-color: #0056b3;
}


    body {
      background-color: #f4f5f7;
      font-family: 'Inter', sans-serif;
      overflow-x: hidden;
    }

    /* SIDEBAR */
.sidebar {
  background: #fff;
  border-right: 1px solid #ddd;
  width: 250px;
  transition: width 0.3s ease;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  height: 100vh;
  position: fixed;
  border-top-right-radius: 20px;
  border-bottom-right-radius: 20px;
  box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15); 
}


    .sidebar.minimized {
      width: 80px;
    }

    .sidebar .logo {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 16px;
      border-bottom: 1px solid #ddd;
    }

    .logo-full {
      height: 36px;
    }

    .logo-icon {
      height: 32px;
      display: none;
    }

    .sidebar.minimized .logo-full {
      display: none;
    }

    .sidebar.minimized .logo-icon {
      display: block !important;
    }

    /* TOGGLE BUTTON (no animation) */
    #toggleSidebar {
      background: none;
      border: none;
      padding: 0;
    }

    #toggleSidebar img {
      width: 20px;
      height: 20px;
    }

    /* SEARCH BOX STYLE */
    .search-box {
      display: flex;
      align-items: center;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 10px;
      padding: 6px 10px;
      gap: 8px;
      height: 40px;
    }

    .search-box i {
      font-size: 1rem;
      color: #777;
    }

    .search-box input {
      border: none;
      outline: none;
      font-size: 0.9rem;
      flex: 1;
      color: #555;
      background: none;
    }

    .search-box input::placeholder {
      color: #888;
    }

    /* Sidebar search behavior */
    .sidebar .search-container {
      padding: 12px 20px;
    }

    .search-icon-only {
      display: none;
      justify-content: center;
      align-items: center;
      height: 40px;
      width: 40px;
      border: 1px solid #ccc;
      border-radius: 10px;
      background-color: #fff;
      color: #777;
    }

    .sidebar.minimized .search-box {
      display: none;
    }

    .sidebar.minimized .search-icon-only {
      display: flex;
    }

    /* MENU */
    .menu-item {
      display: flex;
      align-items: center;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 6px;
      transition: background 0.2s;
      margin-bottom: 4px;
    }

    .menu-item:hover {
      background-color: #f3f7ee;
    }

.menu-item.active {
  background-color: #F9D70B;
  color: white;
  font-weight: 500;
  box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}


    .menu-item i {
      margin-right: 12px;
      font-size: 1.1rem;
      color: #444;
    }

    .sidebar.minimized .menu-item {
      justify-content: center;
      padding: 12px;
    }

    .sidebar.minimized .menu-item span {
      display: none;
    }

    /* FOOTER */
    .sidebar-footer {
      border-top: 1px solid #ddd;
      padding: 12px 20px;
      font-size: 0.9rem;
      display: flex;
      align-items: center;
      margin-top: auto;
    }

    .sidebar-footer img {
      width: 28px;
      height: 28px;
      margin-right: 10px;
    }

    .sidebar.minimized .sidebar-footer span {
      display: none;
    }

    /* MAIN */
    .main {
      margin-left: 250px;
      flex: 1;
      padding: 20px;
      transition: margin-left 0.3s ease;
    }

    .sidebar.minimized ~ .main {
      margin-left: 80px;
    }

    .header-section {
      background: url('../../asset/img/HeadBanner.png') center/cover;
      border-radius: 12px;
      padding: 20px;
      color: white;
      font-weight: 600;
      font-size: 1.3rem;
      margin-bottom: 20px;
    }

    /* MAIN SEARCH + BUTTONS */
    .search-bar-top {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 20px;
    }

    .search-bar-top .search-box {
      flex: 1;
    }

    .search-btn {
      background-color: #4E8E55;
      color: #fff;
      border: none;
      height: 40px;
      width: 40px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .search-btn i {
      font-size: 1.1rem;
    }

    .search-btn:hover {
      opacity: 0.9;
    }

    /* PRODUCT CARD */
    .product-card {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background: white;
      padding: 10px 16px;
      border-radius: 10px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
      margin-bottom: 10px;
      box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.1), 0px 2px 8px rgba(0, 0, 0, 0.06);
    }

    .product-info {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .product-info img {
      width: 60px;
      height: 60px;
      object-fit: contain;
      border-radius: 8px;
    }

    .action-btns button {
      border: none;
      border-radius: 6px;
      padding: 6px 10px;
      color: white;
      margin-left: 6px;
      transition: transform 0.1s;
    }

    .action-btns button:hover {
      transform: scale(1.05);
    }

    .btn-delete { background-color: #D01111; }
    .btn-edit { background-color: #F9D70B; color: white; }

    .pagination {
      justify-content: center;
      margin-top: 20px;
    }
  </style>
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
        <div class="menu-item active"><i class="bi bi-box-seam" style="color: white;"></i><span>Manajemen Produk</span></div>
        <div class="menu-item"><i class="bi bi-journal-text"></i><span>Logbook</span></div>
        <div class="menu-item"><i class="bi bi-chat-dots"></i><span>Testimoni</span></div>
        <div class="menu-item"><i class="bi bi-image"></i><span>Galeri</span></div>
        <div class="menu-item"><i class="bi bi-question-circle"></i><span>FAQ</span></div>
      </div>

      <!-- FOOTER -->
      <div class="sidebar-footer">
        <img src="../asset/img/userlog.png" alt="Admin">
        <span>Administrator</span>
      </div>
    </div>

    <!-- MAIN -->
    <div class="main">
      <div class="header-section">Manajemen Produk</div>

      <!-- MAIN SEARCH -->
<!-- HTML -->
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
  ["name" => "Maxi-D", "img" => "produk1.png"],
  ["name" => "TerraNusa Silika", "img" => "produk2.png"],
  ["name" => "TeraNusa Probiotik", "img" => "produk3.png"],
  ["name" => "TeraTusa Hama", "img" => "produk4.png"],
  ["name" => "Maxi-B", "img" => "produk5.png"]
];
foreach ($products as $p) {
  echo "
  <div class='product-card'>
    <div class='product-info'>
      <img src='../../asset/img/{$p['img']}' alt='{$p['name']}'>
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

  

  <script>
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggleSidebar');
    toggleBtn.addEventListener('click', () => {
      sidebar.classList.toggle('minimized');
    });
  </script>
</body>
</html>
