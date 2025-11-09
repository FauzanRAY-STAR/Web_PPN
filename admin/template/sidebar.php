<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar - PPN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../../asset/style/sidebar.css">
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
        <div class="menu-item" data-link="manajemen-produk.php"><i class="bi bi-box-seam"></i><span>Manajemen Produk</span></div>
        <div class="menu-item" data-link="logbook.php"><i class="bi bi-journal-text"></i><span>Logbook</span></div>
        <div class="menu-item" data-link="testimoni.php"><i class="bi bi-chat-dots"></i><span>Testimoni</span></div>
        <div class="menu-item" data-link="galeri.php"><i class="bi bi-image"></i><span>Galeri</span></div>
        <div class="menu-item" data-link="faq.php"><i class="bi bi-question-circle"></i><span>FAQ</span></div>
      </div>

      <!-- FOOTER -->
      <div class="sidebar-footer">
        <img src="../../asset/img/userlog.png" alt="Admin">
        <span>Administrator</span>
      </div>
    </div>
  </div>

  <script>
    // Sidebar toggle
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggleSidebar');
    toggleBtn.addEventListener('click', () => {
      sidebar.classList.toggle('minimized');
    });

    // Menu aktif dinamis + tersimpan setelah reload
    const menuItems = document.querySelectorAll('.menu-item');

    // Ambil menu aktif terakhir dari localStorage
    const activeIndex = localStorage.getItem('activeMenuIndex');
    if (activeIndex !== null && menuItems[activeIndex]) {
      menuItems[activeIndex].classList.add('active');
    }

    // Tambahkan event click ke semua menu
    menuItems.forEach((item, index) => {
      item.addEventListener('click', () => {
        // Hapus semua 'active'
        menuItems.forEach(i => i.classList.remove('active'));
        // Tambah class active ke menu yang diklik
        item.classList.add('active');
        // Simpan index aktif
        localStorage.setItem('activeMenuIndex', index);
        // Jika ada link, arahkan ke halaman tersebut
        const link = item.getAttribute('data-link');
        if (link) window.location.href = link;
      });
    });
  </script>
</body>
</html>
