
  <!-- Favicon -->
  <link href="/WEB_PPN/asset/img/LogoIco.ico" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css?family=Heebo&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Icon Fonts -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="/WEB_PPN/asset/style/sidebar.css">

<!-- SIDEBAR -->
<div id="sidebar" class="sidebar">
  <div class="logo d-flex justify-content-between align-items-center p-2">
    <img src="/WEB_PPN/asset/img/Logo.png" alt="PPN Logo" class="logo-full">
    <button class="btn btn-sm" id="toggleSidebar" style="background: none; border: none; padding: 0;">
      <img src="/WEB_PPN/asset/img/Sidebar.png" alt="Toggle Sidebar" style="width: 20px; height: 20px;">
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
    <div class="menu-item" data-link="/WEB_PPN/admin/page/produk.php">
      <i class="bi bi-box-seam"></i><span>Manajemen Produk</span>
    </div>
    <div class="menu-item" data-link="/WEB_PPN/admin/page/logbook.php">
      <i class="bi bi-journal-text"></i><span>Logbook</span>
    </div>
    <div class="menu-item" data-link="/WEB_PPN/admin/page/ulasan.php">
      <i class="bi bi-chat-dots"></i><span>Testimoni</span>
    </div>
    <div class="menu-item" data-link="/WEB_PPN/admin/page/galeri.php">
      <i class="bi bi-image"></i><span>Galeri</span>
    </div>
    <div class="menu-item" data-link="/WEB_PPN/admin/page/faq.php">
      <i class="bi bi-question-circle"></i><span>FAQ</span>
    </div>
  </div>

  <!-- FOOTER -->
  <div class="sidebar-footer position-relative" id="footerDropdown">
    <div class="d-flex align-items-center gap-2 footer-toggle" style="cursor: pointer;">
      <img src="/WEB_PPN/asset/img/userlog.png" alt="Admin">
      <span>Administrator</span>
    </div>

    <!-- Dropup Menu -->
    <div class="dropup-menu bg-white shadow rounded-3 p-2 position-absolute" 
         style="bottom: 50px; left: 0; right: 0; text-align: center; display: none;">
      <button class="btn btn-danger w-100 py-1" id="logoutBtn">
        <i class="bi bi-box-arrow-right"></i> Logout
      </button>
    </div>
  </div>
</div>

<!-- Sidebar Script -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggleSidebar');
    const menuItems = document.querySelectorAll('.menu-item');
    const footerToggle = document.querySelector('.footer-toggle');
    const dropupMenu = document.querySelector('.dropup-menu');

    // 🔹 Selalu reset agar tidak ada menu aktif otomatis
    localStorage.removeItem('activeMenuIndex');

    // Pastikan semua menu tidak aktif saat awal load
    menuItems.forEach(i => i.classList.remove('active'));

    // Sidebar toggle
    toggleBtn.addEventListener('click', () => {
      sidebar.classList.toggle('minimized');
      document.querySelector('.main')?.classList.toggle('sidebar-minimized');
    });

    // Menu item click
    menuItems.forEach((item, index) => {
      item.addEventListener('click', () => {
        // Hapus semua active
        menuItems.forEach(i => i.classList.remove('active'));

        // Tambahkan active ke menu yang diklik
        item.classList.add('active');

        // Simpan index menu (opsional, tapi nggak akan dipakai lagi karena kita reset tiap load)
        localStorage.setItem('activeMenuIndex', index);

        // Arahkan ke halaman tujuan
        const link = item.getAttribute('data-link');
        if (link) window.location.href = link;
      });
    });

    // Dropup toggle
    footerToggle.addEventListener('click', () => {
      dropupMenu.style.display =
        dropupMenu.style.display === 'none' || dropupMenu.style.display === ''
          ? 'block'
          : 'none';
    });

    // Tutup dropup kalau klik di luar
    document.addEventListener('click', (e) => {
      if (!document.getElementById('footerDropdown').contains(e.target)) {
        dropupMenu.style.display = 'none';
      }
    });

    // Logout button
    document.getElementById('logoutBtn').addEventListener('click', () => {
      window.location.href = '/WEB_PPN/logout.php';
    });
  });
</script>

