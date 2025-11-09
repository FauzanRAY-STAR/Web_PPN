<?php include($_SERVER['DOCUMENT_ROOT'] . '/WEB_PPN/config/config.php'); ?>

<!-- ============================================ -->
<!-- FOOTER SECTION -->
<!-- ============================================ -->

<!-- Favicon -->
<link href="<?= $base_url ?>asset/img/LogoIco.ico" rel="icon">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css?family=Heebo&display=swap" rel="stylesheet">

<!-- Icon Font Stylesheets -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link rel="stylesheet" href="<?= $base_url ?>asset/style/footer.css">

<!-- FOOTER -->
<div class="footer w-100" style="background-color:#2B8D4C; margin:0; padding:0;">
  <div class="footer-container text-center w-100 m-0 p-0">

    <!-- Baris atas -->
    <div class="footer-top py-4 m-0">
      <div class="footer-logos d-flex justify-content-center align-items-center gap-3 flex-wrap">
        <img src="<?= $base_url ?>asset/img/Logo.png" alt="Logo PPN" height="50">
        <img src="<?= $base_url ?>asset/img/Logo2.png" alt="Logo Telkom University" height="50">
        <img src="<?= $base_url ?>asset/img/Logo3.png" alt="Logo Software Engineering" height="50">
      </div>

      <p class="footer-copy mt-3 mb-0 text-white">
        &copy; Pramudita Pupuk Nusantara 2025 - All Rights Reserved
      </p>
    </div>

    <hr class="m-0" style="border-color: rgba(255,255,255,0.3);">

    <!-- Baris bawah -->
    <div class="footer-bottom d-flex flex-column flex-md-row justify-content-between align-items-center py-3 px-4">
      <div class="footer-links d-flex gap-3 mb-3 mb-md-0">
        <a href="<?= $base_url ?>page/beranda.php" class="text-white text-decoration-none">Beranda</a>
        <a href="<?= $base_url ?>kontak" class="text-white text-decoration-none">Hubungi Kami</a>
        <a href="<?= $base_url ?>kantor" class="text-white text-decoration-none">Kantor Kami</a>
      </div>

      <div class="footer-social d-flex gap-3">
        <a href="#" class="text-white"><i class="fab fa-whatsapp"></i></a>
        <a href="#" class="text-white"><i class="fab fa-facebook"></i></a>
        <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
        <a href="#" class="text-white"><i class="fab fa-tiktok"></i></a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
