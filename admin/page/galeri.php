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
      gap: 10px;
      margin-bottom: 20px;
    }
    
    .filter-tabs button {
      padding: 8px 20px;
      border: none;
      border-radius: 8px;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.3s;
    }
    
    .filter-tabs button.active {
      background-color: #007bff;
      color: white;
    }
    
    .filter-tabs button:not(.active) {
      background-color: white;
      color: #333;
      border: 1px solid #ddd;
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
        <button class="active" id="btnPilih">PILIH</button>
        <button id="btnPilihSemua">PILIH SEMUA</button>
      </div>
    </div>
    
    <div class="right-col d-flex gap-2">
      <button class="search-btn" data-bs-toggle="modal" data-bs-target="#tambahDataModal">
        <i class="bi bi-plus"></i>
      </button>
      <button class="search-btn" style="background-color: #d01111;" id="btnHapus">
        <i class="bi bi-trash"></i>
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
    this.classList.add('active');
    document.getElementById('btnPilihSemua').classList.remove('active');
  });
  
  document.getElementById('btnPilihSemua').addEventListener('click', function() {
    this.classList.add('active');
    document.getElementById('btnPilih').classList.remove('active');
  });
</script>

</body>
</html>
