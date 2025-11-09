<?php
  // Atur base URL sesuai struktur project kamu
  $base_url = "http://localhost/WEB_PPN";
?>

<!-- ====================== STYLESHEET LINK ====================== -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="<?= $base_url ?>/asset/style/sidebar.css">

<!-- ====================== SIDEBAR ====================== -->
<div id="sidebar" class="sidebar">
  <!-- Logo & Toggle -->
  <div class="logo d-flex justify-content-between align-items-center p-2">
    <img src="<?= $base_url ?>/asset/img/Logo.png" alt="PPN Logo" class="logo-full">
    <button class="btn" id="toggleSidebar">
      <img src="<?= $base_url ?>/asset/img/Sidebar.png" alt="Toggle Sidebar">
    </button>
  </div>

  <!-- Search -->
  <div class="search-container">
    <div class="search-box">
      <i class="bi bi-search"></i>
      <input type="text" placeholder="Search...">
    </div>
    <div class="search-icon-only">
      <i class="bi bi-search"></i>
    </div>
  </div>

  <!-- Menu -->
  <div class="p-3">
    <p class="text-secondary small fw-semibold">Menu</p>
    <div class="menu-item" data-link="<?= $base_url ?>/admin/page/manajemen-produk.php">
      <i class="bi bi-box-seam"></i><span>Manajemen Produk</span>
    </div>
    <div class="menu-item" data-link="<?= $base_url ?>/admin/page/logbook.php">
      <i class="bi bi-journal-text"></i><span>Logbook</span>
    </div>
    <div class="menu-item" data-link="<?= $base_url ?>/admin/page/testimoni.php">
      <i class="bi bi-chat-dots"></i><span>Testimoni</span>
    </div>
    <div class="menu-item" data-link="<?= $base_url ?>/admin/page/galeri.php">
      <i class="bi bi-image"></i><span>Galeri</span>
    </div>
    <div class="menu-item" data-link="<?= $base_url ?>/admin/page/faq.php">
      <i class="bi bi-question-circle"></i><span>FAQ</span>
    </div>
  </div>

  <!-- Footer -->
  <div class="sidebar-footer">
    <img src="<?= $base_url ?>/asset/img/userlog.png" alt="Admin">
    <span>Administrator</span>
  </div>
</div>

<!-- ====================== SCRIPT ====================== -->
<script>
  const sidebar = document.getElementById('sidebar');
  const toggleBtn = document.getElementById('toggleSidebar');
  const menuItems = document.querySelectorAll('.menu-item');

  // Sidebar toggle
  toggleBtn.addEventListener('click', () => {
    sidebar.classList.toggle('minimized');
  });

  // Menu aktif disimpan di localStorage
  const activeIndex = localStorage.getItem('activeMenuIndex');
  if (activeIndex !== null && menuItems[activeIndex]) {
    menuItems[activeIndex].classList.add('active');
  }

  menuItems.forEach((item, index) => {
    item.addEventListener('click', () => {
      menuItems.forEach(i => i.classList.remove('active'));
      item.classList.add('active');
      localStorage.setItem('activeMenuIndex', index);
      const link = item.getAttribute('data-link');
      if (link) window.location.href = link;
    });
  });
</script>
