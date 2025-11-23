<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carousel - PPN Admin</title>
  
  <link href="/WEB_PPN/asset/img/LogoIco.ico" rel="icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="/WEB_PPN/asset/style/galeri_admin.css">
  
  <style>
    * { font-family: 'Poppins', sans-serif; }
    body { font-weight: 400; }
    h1, h2, h3, h4, h5, h6 { font-weight: 600; }

    .carousel-card {
      position: relative;
      cursor: pointer;
      transition: transform 0.2s, outline 0.3s;
      border-radius: 12px;
      overflow: hidden;
      aspect-ratio: 16/9;
      background: #f8f9fa;
    }
    
    .carousel-card:hover { transform: scale(1.02); }
    
    .carousel-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      border-radius: 12px;
    }
    
    .carousel-overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
      padding: 15px;
      color: white;
    }
    
    .carousel-badge {
      position: absolute;
      top: 10px;
      left: 10px;
      padding: 5px 12px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: 600;
    }
    
    .badge-aktif { background: #28a745; }
    .badge-nonaktif { background: #dc3545; }
    
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
      box-shadow: 0 2px 8px rgba(0,0,0,0.2);
      pointer-events: none;
    }
    
    .check-icon i {
      font-size: 28px;
      color: #007bff;
    }
    
    .carousel-card[data-selected="true"] .check-icon { opacity: 1; }
    .carousel-card[data-selected="true"] {
      outline: 3px solid #007bff;
      outline-offset: -3px;
    }

    .modal-content {
      border-radius: 20px;
      border: none;
    }

    .gradient-btn {
      background: linear-gradient(90deg, #4E8E55 0%, #B3D134 100%);
      border: none;
      color: #fff;
      border-radius: 10px;
      font-weight: 600;
      transition: 0.3s;
    }

    .gradient-btn:hover { opacity: 0.9; }

    .notif-card {
      background: #fff;
      animation: fadeScale 0.3s ease;
    }

    @keyframes fadeScale {
      from {opacity: 0; transform: scale(0.9);}
      to {opacity: 1; transform: scale(1);}
    }

    .urutan-badge {
      position: absolute;
      top: 10px;
      right: 10px;
      background: rgba(255,255,255,0.9);
      color: #333;
      padding: 5px 10px;
      border-radius: 20px;
      font-weight: 600;
      font-size: 12px;
    }
  </style>
</head>
<body>

<?php include('../template/sidebar.php'); ?>

<div class="main">
  <div class="header-section">Foto Beranda</div>

  <div class="search-bar-top">
    <div class="left-col">
      <div class="filter-tabs">
        <button class="btn-primary-tab" id="btnPilih">PILIH</button>
        <button class="btn-outline" id="btnPilihSemua">PILIH SEMUA</button>
      </div>
    </div>
    
    <div class="right-col d-flex gap-2">
      <button class="btn-action btn-tambah" id="btnTambah">TAMBAH</button>
      <button class="btn-action btn-hapus" id="btnHapus">HAPUS</button>
    </div>
  </div>

  <div class="gallery-grid" id="carouselGrid"></div>
</div>

<!-- MODAL TAMBAH/EDIT -->
<div class="modal fade" id="carouselModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-4 rounded-4 border-0 shadow-sm">
      <div class="d-flex justify-content-between align-items-start mb-3">
        <div class="d-flex align-items-center gap-2">
          <img src="/WEB_PPN/asset/img/logo.png" alt="Logo" width="100">
          <div class="vr" style="height: 35px; width: 2px; background-color: #000;"></div>
          <h5 class="fw-bold mb-0" id="modalTitle">Carousel</h5>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <input type="hidden" id="carouselId">
      
      <label class="fw-semibold mb-1">Judul</label>
      <input type="text" class="form-control border-success mb-3" placeholder="Masukkan Judul" id="judulInput">

      <label class="fw-semibold mb-1">Deskripsi</label>
      <textarea class="form-control border-success mb-3" placeholder="Masukkan Deskripsi" id="deskripsiInput" rows="3"></textarea>

      <label class="fw-semibold mb-1">Urutan</label>
      <input type="number" class="form-control border-success mb-3" placeholder="Nomor urutan tampilan" id="urutanInput" min="0" value="0">
      <small class="text-muted">Semakin kecil angka, semakin awal ditampilkan</small>

      <label class="fw-semibold mb-1 mt-3">Unggah Gambar</label>
      <input type="file" class="form-control border-success mb-3" id="gambarInput" accept="image/*">
      <small class="text-muted">Format: JPG, PNG, GIF (Max 5MB) | Rekomendasi: 1920x1080px</small>
      <div id="previewContainer" class="mt-2 mb-3" style="display:none;">
        <img id="previewImg" src="" alt="Preview" style="max-width: 100%; max-height: 200px; border-radius: 8px;">
      </div>

      <div class="form-check mt-2 mb-4">
        <input class="form-check-input" type="checkbox" id="aktifInput" checked>
        <label class="form-check-label" for="aktifInput">Aktif</label>
      </div>

      <button class="btn w-100 text-white fw-semibold gradient-btn" id="btnSimpan">Simpan</button>
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
      <button class="btn text-white w-100 fw-semibold" id="btnKonfirmasiHapus" style="background-color: #C0392B; border-radius: 12px;">Hapus</button>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  let isPilihMode = true;
  let selectedIds = [];
  let editingId = null;
  
  const carouselModal = new bootstrap.Modal(document.getElementById('carouselModal'));
  const hapusModal = new bootstrap.Modal(document.getElementById('hapusModal'));
  const notifModal = new bootstrap.Modal(document.getElementById('notifModal'));
  const notifText = document.getElementById('notifText');
  const notifIcon = document.getElementById('notifIcon');

  function loadCarousel() {
    fetch('/WEB_PPN/admin/proses/proses_carousel.php?action=get_all')
      .then(response => response.json())
      .then(data => {
        const carouselGrid = document.getElementById('carouselGrid');
        carouselGrid.innerHTML = '';
        
        if (data.success && data.data.length > 0) {
          data.data.forEach(item => {
            const card = document.createElement('div');
            card.className = 'carousel-card';
            card.setAttribute('data-selected', 'false');
            card.setAttribute('data-id', item.id);
            
            const statusClass = item.status === 'Aktif' ? 'badge-aktif' : 'badge-nonaktif';
            
            card.innerHTML = `
              <img src="/WEB_PPN/asset/img/${item.gambar}" alt="${item.judul}">
              <div class="carousel-badge ${statusClass}">${item.status}</div>
              <div class="urutan-badge">#${item.urutan}</div>
              <div class="carousel-overlay">
                <h6 class="mb-1 fw-bold">${item.judul}</h6>
                <small>${item.deskripsi ? item.deskripsi.substring(0, 60) + '...' : ''}</small>
              </div>
              <div class="check-icon"><i class="bi bi-check-circle-fill"></i></div>
            `;
            
            card.addEventListener('click', (e) => {
              if (isPilihMode) {
                const isSelected = card.getAttribute('data-selected') === 'true';
                card.setAttribute('data-selected', !isSelected);
                updateSelectedIds();
              } else if (e.target.closest('.check-icon') === null) {
                editCarousel(item.id);
              }
            });
            
            carouselGrid.appendChild(card);
          });
        } else {
          carouselGrid.innerHTML = '<p class="text-center text-muted">Tidak ada data carousel</p>';
        }
      })
      .catch(error => console.error('Error:', error));
  }

  function updateSelectedIds() {
    selectedIds = [];
    document.querySelectorAll('.carousel-card[data-selected="true"]').forEach(card => {
      selectedIds.push(card.getAttribute('data-id'));
    });
  }

  document.getElementById('btnPilih').addEventListener('click', function() {
    isPilihMode = true;
    this.classList.remove('btn-outline'); 
    this.classList.add('btn-primary-tab');
    document.getElementById('btnPilihSemua').classList.remove('btn-primary-tab');
    document.getElementById('btnPilihSemua').classList.add('btn-outline');
    
    document.querySelectorAll('.carousel-card').forEach(card => {
      card.setAttribute('data-selected', 'false');
    });
    selectedIds = [];
  });
  
  document.getElementById('btnPilihSemua').addEventListener('click', function() {
    isPilihMode = false;
    this.classList.remove('btn-outline'); 
    this.classList.add('btn-primary-tab');
    document.getElementById('btnPilih').classList.remove('btn-primary-tab');
    document.getElementById('btnPilih').classList.add('btn-outline');
    
    document.querySelectorAll('.carousel-card').forEach(card => {
      card.setAttribute('data-selected', 'true');
    });
    updateSelectedIds();
  });

  document.getElementById('btnTambah').addEventListener('click', () => {
    editingId = null;
    document.getElementById('modalTitle').textContent = 'Tambah Foto';
    document.getElementById('carouselId').value = '';
    document.getElementById('judulInput').value = '';
    document.getElementById('deskripsiInput').value = '';
    document.getElementById('urutanInput').value = '0';
    document.getElementById('gambarInput').value = '';
    document.getElementById('aktifInput').checked = true;
    document.getElementById('previewContainer').style.display = 'none';
    carouselModal.show();
  });

  function editCarousel(id) {
    fetch(`/WEB_PPN/admin/proses/proses_carousel.php?action=get&id=${id}`)
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          const item = data.data;
          editingId = id;
          document.getElementById('modalTitle').textContent = 'Edit Carousel';
          document.getElementById('carouselId').value = item.id;
          document.getElementById('judulInput').value = item.judul;
          document.getElementById('deskripsiInput').value = item.deskripsi || '';
          document.getElementById('urutanInput').value = item.urutan;
          document.getElementById('aktifInput').checked = item.status === 'Aktif';
          
          if (item.gambar) {
            document.getElementById('previewImg').src = `/WEB_PPN/asset/img/${item.gambar}`;
            document.getElementById('previewContainer').style.display = 'block';
          }
          
          carouselModal.show();
        }
      })
      .catch(error => console.error('Error:', error));
  }

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

  document.getElementById('btnSimpan').addEventListener('click', () => {
    const formData = new FormData();
    formData.append('action', editingId ? 'update' : 'create');
    formData.append('id', document.getElementById('carouselId').value);
    formData.append('judul', document.getElementById('judulInput').value);
    formData.append('deskripsi', document.getElementById('deskripsiInput').value);
    formData.append('urutan', document.getElementById('urutanInput').value);
    formData.append('status', document.getElementById('aktifInput').checked ? 'Aktif' : 'Nonaktif');
    
    const gambarFile = document.getElementById('gambarInput').files[0];
    if (gambarFile) formData.append('gambar', gambarFile);

    fetch('/WEB_PPN/admin/proses/proses_carousel.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      carouselModal.hide();
      setTimeout(() => {
        if (data.success) {
          notifIcon.className = 'bi bi-check-circle-fill text-success fs-1 mb-3';
          notifText.textContent = editingId ? "Foto diperbarui!" : "Foto ditambahkan!";
          loadCarousel();
        } else {
          notifIcon.className = 'bi bi-x-circle-fill text-danger fs-1 mb-3';
          notifText.textContent = data.message || "Gagal menyimpan carousel!";
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

  document.getElementById('btnHapus').addEventListener('click', () => {
    updateSelectedIds();
    if (selectedIds.length === 0) {
      notifIcon.className = 'bi bi-exclamation-circle-fill text-warning fs-1 mb-3';
      notifText.textContent = "Pilih carousel terlebih dahulu!";
      notifModal.show();
      setTimeout(() => notifModal.hide(), 1500);
      return;
    }
    document.getElementById('deleteCount').textContent = selectedIds.length > 1 ? `${selectedIds.length} data` : 'data ini';
    hapusModal.show();
  });

  document.getElementById('btnKonfirmasiHapus').addEventListener('click', () => {
    const formData = new FormData();
    formData.append('action', 'delete');
    formData.append('ids', JSON.stringify(selectedIds));

    fetch('/WEB_PPN/admin/proses/proses_carousel.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      hapusModal.hide();
      setTimeout(() => {
        if (data.success) {
          notifIcon.className = 'bi bi-check-circle-fill text-success fs-1 mb-3';
          notifText.textContent = "Foto berhasil dihapus!";
          loadCarousel();
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

  document.addEventListener('DOMContentLoaded', loadCarousel);
</script>

</body>
</html>