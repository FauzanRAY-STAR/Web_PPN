<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galeri - PPN</title>
  
  <!-- Favicon -->
  <link href="/WEB_PPN/asset/img/LogoIco.ico" rel="icon">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="/WEB_PPN/asset/style/style_admin.css">
  
  <style>
    .filter-tabs {
      display: flex;
      gap: 16px; /* jarak antar tombol */
      margin-bottom: 20px;
    }
    
    .filter-tabs button {
      font-weight: 600;
      border: none;
      cursor: pointer;
      border-radius: 20px;
      padding: 10px 24px;
      font-size: 14px;
      transition: all 0.2s ease;
    }
    
    /* Tombol putih dengan teks biru */
    .btn-outline {
      background-color: #fff;
      color: #1976FF;
      box-shadow: 0 2px 5px rgba(0,0,0,0.15);
    }
    
    .btn-outline:hover {
      background-color: #f5f7fa;
    }
    
    /* Tombol biru dengan teks putih */
    .btn-primary-tab {
      background-color: #1976FF;
      color: #fff;
      box-shadow: 0 3px 6px rgba(0,0,0,0.2);
    }
    
    .btn-primary-tab:hover {
      background-color: #1668e3;
    }
    
    /* Tombol Tambah & Hapus */
    .btn-action {
      font-weight: 600;
      border: none;
      cursor: pointer;
      border-radius: 20px;
      padding: 10px 28px;
      font-size: 14px;
      transition: all 0.2s ease;
      box-shadow: 0 2px 5px rgba(0,0,0,0.15);
      background-color: #fff;
    }
    
    .btn-tambah {
      color: #28a745;
    }
    
    .btn-tambah:hover {
      background-color: #f5f7fa;
    }
    
    .btn-hapus {
      color: #dc3545;
    }
    
    .btn-hapus:hover {
      background-color: #f5f7fa;
    }
    
    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      gap: 15px;
      margin-bottom: 20px;
    }
    
    .gallery-card {
      background: white;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s;
      cursor: pointer;
    }
    
    .gallery-card:hover {
      transform: translateY(-5px);
    }
    
    .gallery-card img {
      width: 100%;
      height: 150px;
      object-fit: cover;
    }
  </style>
</head>
<body>

<?php include('../template/sidebar.php'); ?>

<!-- MAIN CONTENT -->
<div class="main">
  <div class="header-section">Galeri</div>

  <!-- FILTER TABS & BUTTONS -->
  <div class="search-bar-top">
    <div class="left-col">
      <div class="filter-tabs">
        <button class="btn-outline" id="btnPilih">PILIH</button>
        <button class="btn-primary-tab" id="btnPilihSemua">PILIH SEMUA</button>
      </div>
    </div>
    
    <div class="right-col d-flex gap-2">
      <button class="btn-action btn-tambah" data-bs-toggle="modal" data-bs-target="#tambahDataModal">
        TAMBAH
      </button>
      <button class="btn-action btn-hapus" id="btnHapus">
        HAPUS
      </button>
    </div>
  </div>

  <!-- GALLERY GRID -->
  <div class="gallery-grid">
    <?php 
    // Ambil semua gambar dari folder asset/img yang merupakan gambar galeri
    $galeri_images = ['Galeri1.png', 'Galeri2.png', 'Galeri3.png', 'Galeri4.png'];
    
    foreach($galeri_images as $img){
      if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/WEB_PPN/asset/img/' . $img)){
    ?>
    <div class="gallery-card">
      <img src="/WEB_PPN/asset/img/<?php echo $img; ?>" alt="<?php echo $img; ?>">
    </div>
    <?php 
      }
    } 
    ?>
  </div>
</div>

<!-- Modal Tambah Data -->
<div class="modal fade" id="tambahDataModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="tambahDataModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 fw-bolder" id="tambahDataModalLabel">Tambah Galeri</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="text-muted">
          Untuk menambahkan gambar ke galeri, upload file gambar ke folder:<br>
          <code>/WEB_PPN/asset/img/</code>
        </p>
        <p class="text-muted">
          Format nama file: <code>Galeri1.png</code>, <code>Galeri2.png</code>, dst.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // Filter tabs functionality
  document.getElementById('btnPilih').addEventListener('click', function() {
    // Tombol PILIH menjadi aktif (biru)
    this.classList.remove('btn-outline');
    this.classList.add('btn-primary-tab');
    
    // Tombol PILIH SEMUA menjadi tidak aktif (putih)
    document.getElementById('btnPilihSemua').classList.remove('btn-primary-tab');
    document.getElementById('btnPilihSemua').classList.add('btn-outline');
  });
  
  document.getElementById('btnPilihSemua').addEventListener('click', function() {
    // Tombol PILIH SEMUA menjadi aktif (biru)
    this.classList.remove('btn-outline');
    this.classList.add('btn-primary-tab');
    
    // Tombol PILIH menjadi tidak aktif (putih)
    document.getElementById('btnPilih').classList.remove('btn-primary-tab');
    document.getElementById('btnPilih').classList.add('btn-outline');
  });
</script>

</body>
</html>
