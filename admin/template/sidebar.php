<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar - PPN</title>

  <!-- Favicon -->
  <link href="/WEB_PPN/asset/img/LogoIco.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="/WEB_PPN/asset/style/sidebar.css">
</head>

<body>
  <div class="d-flex">
    <!-- ====================== SIDEBAR ====================== -->
    <div id="sidebar" class="sidebar">
      <!-- Logo & Toggle -->
      <div class="logo d-flex justify-content-between align-items-center p-2">
        <img src="/WEB_PPN/asset/img/Logo.png" alt="PPN Logo" class="logo-full">
        <button class="btn" id="toggleSidebar">
          <img src="/WEB_PPN/asset/img/Sidebar.png" alt="Toggle Sidebar">
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
        <div class="menu-item" data-link="/WEB_PPN/admin/page/manajemen-produk.php">
          <i class="bi bi-box-seam"></i><span>Manajemen Produk</span>
        </div>
        <div class="menu-item" data-link="/WEB_PPN/admin/page/logbook.php">
          <i class="bi bi-journal-text"></i><span>Logbook</span>
        </div>
        <div class="menu-item" data-link="/WEB_PPN/admin/page/testimoni.php">
          <i class="bi bi-chat-dots"></i><span>Testimoni</span>
        </div>
        <div class="menu-item" data-link="/WEB_PPN/admin/page/galeri.php">
          <i class="bi bi-image"></i><span>Galeri</span>
        </div>
        <div class="menu-item" data-link="/WEB_PPN/admin/page/faq.php">
          <i class="bi bi-question-circle"></i><span>FAQ</span>
        </div>
      </div>

      <!-- Footer -->
      <div class="sidebar-footer">
        <img src="/WEB_PPN/asset/img/userlog.png" alt="Admin">
        <span>Administrator</span>
      </div>
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
</body>
</html>
