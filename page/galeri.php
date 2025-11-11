<?php
include('config/koneksi.php');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTPPN Galeri</title>
    
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
    <link rel="stylesheet" href="asset/style/fab.css">
    <link rel="stylesheet" href="asset/style/galeri.css">

</head>
<body>
    <?php include('admin/template/navbar.php'); ?>

   <!-- Galeri -->
<div class="container-fluid py-5 mt-4">
  <div class="container">
    <div class="text-center galeri-title-container" style="color: #1B5930;">
      <h1 class="mb-5 galeri-title-line" style="padding: 0 160px;">Galeri</h1>
    </div>

    <div class="row g-4">
      <!-- Contoh Gambar 1 -->
      <div class="col-md-6">
        <div class="mb-4">
          <img src="asset/img/For PG1.jpg" class="img-fluid rounded-4 shadow gallery-img"
               alt="Kerjasama PT. Pramudita"
               data-title="Kerjasama PT. Pramudita dengan Telkom University"
               data-date="24 Oktober 2025"
               data-desc="Kegiatan kerjasama dalam rangka digitalisasi PT. Pramudita Pupuk Nusantara dengan Telkom University dalam rangka mendukung proses bisnis yang lebih modern dan efisien."
               data-img="asset/img/For PG1.jpg"
               style="width: 100%; object-fit: cover; cursor:pointer;">
        </div>
        <div class="mb-4">
          <img src="asset/img/For PG3.jpg" class="img-fluid rounded-4 shadow gallery-img"
               alt="Program Pertanian Berkelanjutan"
               data-title="Program Pertanian Berkelanjutan"
               data-date="10 Oktober 2025"
               data-desc="Inisiatif ramah lingkungan untuk mendukung pertanian berkelanjutan di wilayah Jawa Barat."
               data-img="asset/img/For PG3.jpg"
               style="width: 100%; object-fit: cover; cursor:pointer;">
        </div>
      </div>

      <!-- Contoh Gambar 2 -->
      <div class="col-md-6">
        <div class="mb-4">
          <img src="asset/img/For PG2.jpg" class="img-fluid rounded-4 shadow gallery-img"
               alt="Inovasi Digitalisasi Pupuk"
               data-title="Inovasi Digitalisasi Pupuk"
               data-date="5 Oktober 2025"
               data-desc="Proyek pengembangan sistem digitalisasi distribusi pupuk untuk efisiensi rantai pasok nasional."
               data-img="asset/img/For PG2.jpg"
               style="width: 100%; object-fit: cover; cursor:pointer;">
        </div>
        <div class="mb-4">
          <img src="asset/img/For PG4.jpg" class="img-fluid rounded-4 shadow gallery-img"
               alt="Kegiatan Sosial PPN"
               data-title="Kegiatan Sosial PPN"
               data-date="20 September 2025"
               data-desc="PT. Pramudita Pupuk Nusantara melaksanakan kegiatan sosial bersama masyarakat sekitar."
               data-img="asset/img/For PG4.jpg"
               style="width: 100%; object-fit: cover; cursor:pointer;">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Popup -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0 rounded-4" style="background-color:#F5FAF6;">
      <div class="modal-header border-0 justify-content-start">
        <img src="asset/img/logo.png" alt="Logo" style="height:40px;">
      </div>
      <div class="modal-body text-center">
        <img id="modalImg" src="" alt="Detail Gambar" class="img-fluid rounded-4 mb-3 shadow" style="max-height:300px; object-fit:cover;">
        <p class="text-muted mb-1" id="modalDate"></p>
        <h5 class="fw-bold mb-2" id="modalTitle"></h5>
        <p class="px-3" id="modalDesc"></p>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS + Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const modal = new bootstrap.Modal(document.getElementById('imageModal'), {
    backdrop: true, 
    keyboard: true
  });

  document.querySelectorAll('.gallery-img').forEach(img => {
    img.addEventListener('click', () => {
      document.getElementById('modalImg').src = img.dataset.img;
      document.getElementById('modalTitle').textContent = img.dataset.title;
      document.getElementById('modalDate').textContent = img.dataset.date;
      document.getElementById('modalDesc').textContent = img.dataset.desc;
      modal.show();
    });
  });
</script>

<!-- WA -->
<?php include ('admin/template/whatsapp_float.php'); ?>

<!-- Footer -->
<?php include('admin/template/footer.php'); ?>

</body>
</html>
