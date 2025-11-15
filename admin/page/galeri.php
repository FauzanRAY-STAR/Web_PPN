<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galeri - PPN Admin</title>
  
  <!-- Favicon -->
  <link href="/WEB_PPN/asset/img/LogoIco.ico" rel="icon">

  <!-- Google Fonts - Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="/WEB_PPN/asset/style/galeri_admin.css">
  
  <style>
    /* === Global Poppins Font === */
    * {
      font-family: 'Poppins', sans-serif;
    }

    body {
      font-family: 'Poppins', sans-serif;
      font-weight: 400;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
    }

    button {
      font-family: 'Poppins', sans-serif;
      font-weight: 500;
    }

    label {
      font-family: 'Poppins', sans-serif;
      font-weight: 500;
    }

    input, textarea, select {
      font-family: 'Poppins', sans-serif;
      font-weight: 400;
    }

    .fw-semibold {
      font-weight: 600 !important;
    }

    .fw-bold {
      font-weight: 700 !important;
    }

    .gallery-card {
      position: relative;
      cursor: pointer;
      transition: transform 0.2s, outline 0.3s;
      border-radius: 12px;
      overflow: hidden;
      aspect-ratio: 16/9;
    }
    
    .gallery-card:hover {
      transform: scale(1.02);
    }
    
    .gallery-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      border-radius: 12px;
    }
    
    .check-icon {
      position: absolute;
      bottom: 10px;
      right: 10px;
      width: 32px;
      height: 32px;
      background-color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition: opacity 0.3s ease;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
      pointer-events: none;
    }
    
    .check-icon i {
      font-size: 28px;
      color: #007bff;
    }
    
    .gallery-card[data-selected="true"] .check-icon {
      opacity: 1;
    }
    
    .gallery-card[data-selected="true"] {
      outline: 3px solid #007bff;
      outline-offset: -3px;
    }

    .modal-content {
      border-radius: 20px;
      border: none;
      font-family: 'Poppins', sans-serif;
    }

    .modal-body input[type="text"],
    .modal-body input[type="date"],
    .modal-body textarea,
    .modal-body select {
      border: 1px solid #E3E3E3;
      border-radius: 10px;
      padding: 8px 12px;
      font-size: 14px;
      outline: none;
      width: 100%;
      font-family: 'Poppins', sans-serif;
      font-weight: 400;
    }

    .modal-body label {
      font-weight: 500;
      margin-top: 10px;
      font-family: 'Poppins', sans-serif;
    }

    .gradient-btn {
      background: linear-gradient(90deg, #4E8E55 0%, #B3D134 100%);
      border: none;
      color: #fff;
      border-radius: 10px;
      font-weight: 600;
      transition: 0.3s;
      font-family: 'Poppins', sans-serif;
    }

    .gradient-btn:hover {
      opacity: 0.9;
    }

    .notif-card {
      background: #fff;
      animation: fadeScale 0.3s ease;
      font-family: 'Poppins', sans-serif;
    }

    @keyframes fadeScale {
      from {opacity: 0; transform: scale(0.9);}
      to {opacity: 1; transform: scale(1);}
    }

    .form-check-input {
      width: 16px;
      height: 16px;
    }

    .form-check-label {
      margin-bottom: 0;
      font-family: 'Poppins', sans-serif;
      font-weight: 500;
    }

    .header-section {
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
    }

    .btn-action {
      font-family: 'Poppins', sans-serif;
      font-weight: 500;
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
        <button class="btn-primary-tab" id="btnPilih">PILIH</button>
        <button class="btn-outline" id="btnPilihSemua">PILIH SEMUA</button>
      </div>
    </div>
    
    <div class="right-col d-flex gap-2">
      <button class="btn-action btn-tambah" id="btnTambah">
        TAMBAH
      </button>
      <button class="btn-action btn-hapus" id="btnHapus">
        HAPUS
      </button>
    </div>
  </div>

  <!-- GALLERY GRID -->
  <div class="gallery-grid" id="galleryGrid">
    <!-- Data akan dimuat dari database via AJAX -->
  </div>
</div>

<!-- ====================== -->
<!-- MODAL TAMBAH / EDIT -->
<div class="modal fade" id="galeriModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-4 rounded-4 border-0 shadow-sm">
      <!-- HEADER -->
      <div class="d-flex justify-content-between align-items-start mb-3">
        <div class="d-flex align-items-center gap-2">
          <img src="/WEB_PPN/asset/img/logo.png" alt="Logo" width="100">
          <div class="vr" style="height: 35px; width: 2px; background-color: #000;"></div>
          <h5 class="fw-bold mb-0" id="modalTitle">Galeri</h5>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- FORM -->
      <input type="hidden" id="galeriId">
      
      <label class="fw-semibold mb-1">Judul</label>
      <input type="text" class="form-control border-success mb-3" placeholder="Masukkan Judul" id="judulInput">

      <label class="fw-semibold mb-1">Deskripsi</label>
      <textarea class="form-control border-success mb-3" placeholder="Masukkan Deskripsi" id="deskripsiInput" rows="3"></textarea>

      <label class="fw-semibold mb-1">Unggah Gambar</label>
      <input type="file" class="form-control border-success mb-3" id="gambarInput" accept="image/*">
      <small class="text-muted">Format: JPG, PNG, GIF (Max 5MB)</small>
      <div id="previewContainer" class="mt-2 mb-3" style="display:none;">
        <img id="previewImg" src="" alt="Preview" style="max-width: 100%; max-height: 200px; border-radius: 8px;">
      </div>

      <div class="form-check mt-2 mb-4">
        <input class="form-check-input" type="checkbox" id="tampilkanInput" checked>
        <label class="form-check-label" for="tampilkanInput">Tampilkan</label>
      </div>

      <button class="btn w-100 text-white fw-semibold" id="btnSimpan"
        style="background: linear-gradient(90deg, #4E8E55, #D6C72A); border-radius: 12px;">
        Simpan
      </button>
    </div>
  </div>
</div>

<!-- MODAL HAPUS -->
<div class="modal fade" id="hapusModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-4 rounded-4 text-center">
      <img src="/WEB_PPN/asset/img/logo.png" alt="Logo" width="120" class="mb-3">
      <i class="bi bi-exclamation-triangle-fill text-danger fs-1"></i>
      <h5 class="fw-semibold mt-3 mb-4">Apakah Anda yakin ingin menghapus <span id="deleteCount">data</span> ini?</h5>
      <button class="btn text-white w-100 fw-semibold" id="btnKonfirmasiHapus"
        style="background-color: #C0392B; border-radius: 12px;">Hapus</button>
    </div>
  </div>
</div>

<!-- MODAL NOTIFIKASI -->
<div class="modal fade" id="notifModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content notif-card text-center p-4 rounded-4 border-0 shadow">
      <img src="/WEB_PPN/asset/img/logo.png" alt="Logo" width="90" class="mb-3">
      <i id="notifIcon" class="bi fs-1 mb-3"></i>
      <h5 id="notifText" class="fw-semibold"></h5>
    </div>
  </div>
</div>

<!-- SCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  let isPilihMode = true;
  let selectedIds = [];
  let editingId = null;
  
  // Modals
  const galeriModal = new bootstrap.Modal(document.getElementById('galeriModal'));
  const hapusModal = new bootstrap.Modal(document.getElementById('hapusModal'));
  const notifModal = new bootstrap.Modal(document.getElementById('notifModal'));
  const notifText = document.getElementById('notifText');
  const notifIcon = document.getElementById('notifIcon');

  // Load galeri data
  function loadGaleri() {
    fetch('/WEB_PPN/admin/proses/proses_galeri.php?action=get_all')
      .then(response => response.json())
      .then(data => {
        const galleryGrid = document.getElementById('galleryGrid');
        galleryGrid.innerHTML = '';
        
        if (data.success && data.data.length > 0) {
          data.data.forEach(item => {
            const card = document.createElement('div');
            card.className = 'gallery-card';
            card.setAttribute('data-selected', 'false');
            card.setAttribute('data-id', item.id);
            card.innerHTML = `
              <img src="/WEB_PPN/asset/img/${item.gambar}" alt="${item.judul}">
              <div class="check-icon">
                <i class="bi bi-check-circle-fill"></i>
              </div>
            `;
            
            card.addEventListener('click', (e) => {
              if (isPilihMode) {
                const isSelected = card.getAttribute('data-selected') === 'true';
                card.setAttribute('data-selected', !isSelected);
                updateSelectedIds();
              } else if (e.target.closest('.check-icon') === null) {
                editGaleri(item.id);
              }
            });
            
            galleryGrid.appendChild(card);
          });
        } else {
          galleryGrid.innerHTML = '<p class="text-center text-muted">Tidak ada data galeri</p>';
        }
      })
      .catch(error => console.error('Error:', error));
  }

  function updateSelectedIds() {
    selectedIds = [];
    document.querySelectorAll('.gallery-card[data-selected="true"]').forEach(card => {
      selectedIds.push(card.getAttribute('data-id'));
    });
  }

  // Tabs - Mode PILIH
  document.getElementById('btnPilih').addEventListener('click', function() {
    isPilihMode = true;
    this.classList.remove('btn-outline'); 
    this.classList.add('btn-primary-tab');
    document.getElementById('btnPilihSemua').classList.remove('btn-primary-tab');
    document.getElementById('btnPilihSemua').classList.add('btn-outline');
    
    document.querySelectorAll('.gallery-card').forEach(card => {
      card.setAttribute('data-selected', 'false');
    });
    selectedIds = [];
  });
  
  // Tabs - Mode PILIH SEMUA
  document.getElementById('btnPilihSemua').addEventListener('click', function() {
    isPilihMode = false;
    this.classList.remove('btn-outline'); 
    this.classList.add('btn-primary-tab');
    document.getElementById('btnPilih').classList.remove('btn-primary-tab');
    document.getElementById('btnPilih').classList.add('btn-outline');
    
    document.querySelectorAll('.gallery-card').forEach(card => {
      card.setAttribute('data-selected', 'true');
    });
    updateSelectedIds();
  });

  // Tombol Tambah
  document.getElementById('btnTambah').addEventListener('click', () => {
    editingId = null;
    document.getElementById('modalTitle').textContent = 'Tambah Galeri';
    document.getElementById('galeriId').value = '';
    document.getElementById('judulInput').value = '';
    document.getElementById('deskripsiInput').value = '';
    document.getElementById('gambarInput').value = '';
    document.getElementById('tampilkanInput').checked = true;
    document.getElementById('previewContainer').style.display = 'none';
    galeriModal.show();
  });

  // Edit Galeri
  function editGaleri(id) {
    fetch(`/WEB_PPN/admin/proses/proses_galeri.php?action=get&id=${id}`)
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          const item = data.data;
          editingId = id;
          document.getElementById('modalTitle').textContent = 'Edit Galeri';
          document.getElementById('galeriId').value = item.id;
          document.getElementById('judulInput').value = item.judul;
          document.getElementById('deskripsiInput').value = item.deskripsi;
          document.getElementById('tampilkanInput').checked = item.status === 'Ditampilkan';
          
          if (item.gambar) {
            document.getElementById('previewImg').src = `/WEB_PPN/asset/img/${item.gambar}`;
            document.getElementById('previewContainer').style.display = 'block';
          }
          
          galeriModal.show();
        }
      })
      .catch(error => console.error('Error:', error));
  }

  // Preview gambar
  document.getElementById('gambarInput').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function(event) {
        document.getElementById('previewImg').src = event.target.result;
        document.getElementById('previewContainer').style.display = 'block';
      };
      reader.readAsDataURL(file);
    }
  });

  // Simpan Galeri
  document.getElementById('btnSimpan').addEventListener('click', () => {
    const formData = new FormData();
    formData.append('action', editingId ? 'update' : 'create');
    formData.append('id', document.getElementById('galeriId').value);
    formData.append('judul', document.getElementById('judulInput').value);
    formData.append('deskripsi', document.getElementById('deskripsiInput').value);
    formData.append('status', document.getElementById('tampilkanInput').checked ? 'Ditampilkan' : 'Disembunyikan');
    
    const gambarFile = document.getElementById('gambarInput').files[0];
    if (gambarFile) {
      formData.append('gambar', gambarFile);
    }

    fetch('/WEB_PPN/admin/proses/proses_galeri.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      galeriModal.hide();
      setTimeout(() => {
        if (data.success) {
          notifIcon.className = 'bi bi-check-circle-fill text-success fs-1 mb-3';
          notifText.textContent = editingId ? "Galeri berhasil diperbarui!" : "Galeri berhasil ditambahkan!";
          loadGaleri();
        } else {
          notifIcon.className = 'bi bi-x-circle-fill text-danger fs-1 mb-3';
          notifText.textContent = data.message || "Gagal menyimpan galeri!";
        }
        notifModal.show();
        setTimeout(() => notifModal.hide(), 1600);
      }, 400);
    })
    .catch(error => {
      console.error('Error:', error);
      notifIcon.className = 'bi bi-x-circle-fill text-danger fs-1 mb-3';
      notifText.textContent = "Terjadi kesalahan!";
      notifModal.show();
      setTimeout(() => notifModal.hide(), 1600);
    });
  });

  // Tombol Hapus
  document.getElementById('btnHapus').addEventListener('click', () => {
    updateSelectedIds();
    if (selectedIds.length === 0) {
      notifIcon.className = 'bi bi-exclamation-circle-fill text-warning fs-1 mb-3';
      notifText.textContent = "Pilih gambar terlebih dahulu!";
      notifModal.show();
      setTimeout(() => notifModal.hide(), 1500);
      return;
    }
    document.getElementById('deleteCount').textContent = selectedIds.length > 1 ? `${selectedIds.length} data` : 'data ini';
    hapusModal.show();
  });

  // Konfirmasi Hapus
  document.getElementById('btnKonfirmasiHapus').addEventListener('click', () => {
    const formData = new FormData();
    formData.append('action', 'delete');
    formData.append('ids', JSON.stringify(selectedIds));

    fetch('/WEB_PPN/admin/proses/proses_galeri.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      hapusModal.hide();
      setTimeout(() => {
        if (data.success) {
          notifIcon.className = 'bi bi-check-circle-fill text-success fs-1 mb-3';
          notifText.textContent = "Data galeri berhasil dihapus!";
          loadGaleri();
          selectedIds = [];
        } else {
          notifIcon.className = 'bi bi-x-circle-fill text-danger fs-1 mb-3';
          notifText.textContent = data.message || "Gagal menghapus data!";
        }
        notifModal.show();
        setTimeout(() => notifModal.hide(), 1500);
      }, 400);
    })
    .catch(error => {
      console.error('Error:', error);
      notifIcon.className = 'bi bi-x-circle-fill text-danger fs-1 mb-3';
      notifText.textContent = "Terjadi kesalahan!";
      notifModal.show();
      setTimeout(() => notifModal.hide(), 1500);
    });
  });

  // Load data on page load
  document.addEventListener('DOMContentLoaded', loadGaleri);
</script>

</body>
</html>
