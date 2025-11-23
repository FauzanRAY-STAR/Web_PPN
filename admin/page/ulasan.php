<?php
include(__DIR__ . '/../../config/koneksi.php');
$produkList = mysqli_query($conn, "SELECT nama, gambar FROM produk ORDER BY nama ASC");

// ============================================
// PAGINATION, SEARCH & SORTING LOGIC
// ============================================

// Ambil parameter dari URL
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$search = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'DESC'; // DESC atau ASC

// Limit per halaman
$limit = 7;
$offset = ($page - 1) * $limit;

// Query dengan filter search
$whereClause = "";
if (!empty($search)) {
    $whereClause = "WHERE nama LIKE '%$search%' 
                    OR produk LIKE '%$search%' 
                    OR alamat LIKE '%$search%' 
                    OR ulasan LIKE '%$search%'";
}

// Query untuk menghitung total data
$countQuery = "SELECT COUNT(*) as total FROM ulasan $whereClause";
$countResult = mysqli_query($conn, $countQuery);
$totalData = mysqli_fetch_assoc($countResult)['total'];
$totalPages = ceil($totalData / $limit);

// Query data dengan pagination
$sql = "SELECT * FROM ulasan 
        $whereClause 
        ORDER BY id $sort 
        LIMIT $limit OFFSET $offset";
$res = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Testimoni</title>

  <!-- Favicon -->
  <link href="../../asset/img/LogoIco.ico" rel="icon">

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../../asset/style/ulasan.css">
</head>

<body>
  <div class="d-flex">
  <?php include('../template/sidebar.php'); ?>

    <div class="main">
      <div class="header-section">Testimoni</div>

      <!-- SEARCH BAR -->
      <div class="search-bar-top">
        <div class="left-col">
          <div class="search-box">
            <i class="bi bi-search"></i>
            <input type="text" placeholder="Search testimoni...">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimoni - PPN</title>

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../asset/style/ulasan.css">
    
    <style>
      /* Alert default */
      .alert-info {
        display: flex;
        flex-wrap: wrap;         /* izinkan isi turun baris */
        align-items: center;
        gap: 0.35rem;            /* jarak antar elemen */
        word-wrap: break-word;
        overflow-wrap: break-word;

        background-color: #FFFBE6 !important;
        border-color: #ffea00ff !important;
        color: #B4A21E !important;
      }


      /* Ikon di kiri */
      .alert-info i {
        font-size: 1.1rem;
      }

      /* Teks di dalam alert */
      .alert-info strong,
      .alert-info span {
        word-break: break-word;
        max-width: 100%;
      }

      /* Mobile */
      @media (max-width: 576px) {
        .alert-info {
          font-size: 14px;
          padding: 0.75rem;
        }

        .alert-info i {
          margin-bottom: 0.25rem;
        }
      }

      /* ==================================
        SEARCH BAR RESPONSIF
        ================================== */
      @media (max-width: 768px) {
        .search-bar-top {
          flex-direction: column;
          gap: 1rem;
        }
        
        .search-bar-top .left-col,
        .search-bar-top .right-col {
          width: 100%;
        }
        
        .search-bar-top form {
          width: 100%;
        }
        
        .search-box {
          flex: 1;
        }
      }
      
      /* FIX RESPONSIVE AGAR TIDAK TUMPANG TINDIH */
      .table-responsive {
          width: 100%;
          overflow-x: auto;
          -webkit-overflow-scrolling: touch;
      }

      /* Pastikan tabel minimum width agar tidak mepet */
      .table {
          min-width: 1000px; /* bisa disesuaikan */
      }

      /* Kolom review tetap rapi saat layar sempit */
      .review-text {
          white-space: normal !important;
          word-wrap: break-word;
      }

      /* Agar header tidak melipat */
      .table th {
          white-space: nowrap;
      }

      /* Style scroll biar halus */
      .table-responsive::-webkit-scrollbar {
          height: 8px;
      }
      .table-responsive::-webkit-scrollbar-thumb {
          background: #c1c1c1;
          border-radius: 10px;
      }

    /* ==================================
        PAGINATION FIXES
        ================================== */
      
      /* Pagination wrapper responsif */
      .pagination-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 1.5rem;
        gap: 1rem;
        flex-wrap: wrap;
      }

      @media (max-width: 576px) {
        .pagination-wrapper {
          flex-direction: column;
          align-items: stretch;
        }
        
        .pagination-wrapper .text-muted {
          text-align: center;
          order: 2;
          margin-top: 1rem;
        }
        
        .pagination-buttons {
          order: 1;
          justify-content: center !important;
        }
      }

      /* Style untuk tombol pagination */
      .pagination-buttons {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
        justify-content: center;
      }

      .page-btn {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        border: 2px solid #4E8E55;
        transition: all 0.3s ease;
        text-decoration: none;
      }

      /* Halaman aktif - HIJAU dengan teks putih */
      .page-btn.active {
        background-color: #4E8E55;
        color: white !important;
        border-color: #4E8E55;
      }

      /* Halaman tidak aktif - PUTIH dengan border hijau dan teks hijau */
      .page-btn.inactive {
        background-color: white;
        color: #4E8E55 !important;
        border-color: #4E8E55;
      }

      .page-btn.inactive:hover {
        background-color: #f0f7f1;
        transform: translateY(-2px);
      }

      /* Tombol prev/next */
      .page-btn.nav-btn {
        background-color: #D6C72A;
        border-color: #D6C72A;
        color: white !important;
      }

      .page-btn.nav-btn:hover:not(:disabled) {
        background-color: #c4b525;
        transform: translateY(-2px);
      }

      .page-btn.nav-btn:disabled {
        background-color: #6c757d;
        border-color: #6c757d;
        opacity: 0.5;
        cursor: not-allowed;
      }

      /* Ellipsis */
      .page-ellipsis {
        display: flex;
        align-items: center;
        padding: 0 8px;
        color: #6c757d;
      }
    </style>
  </head>

  <body>
    <div class="d-flex">
      <?php include('../template/sidebar.php'); ?>

      <div class="main">
        <div class="header-section">Testimoni</div>

        <!-- SEARCH BAR -->
        <div class="search-bar-top">
          <div class="left-col">
            <form method="GET" action="" class="d-flex gap-2">
              <div class="search-box">
                <input type="text" 
                      name="search" 
                      placeholder="Search testimoni..." 
                      value="<?= htmlspecialchars($search) ?>">
              </div>
              
              <!-- Button Search -->
              <button type="submit" 
                      class="search-btn" 
                      style="background-color: #4E8E55;">
                <i class="bi bi-search"></i>
              </button>
              
              <!-- Button Sort -->
              <button type="button" 
                      class="search-btn" 
                      style="background-color: #4E8E55;" 
                      id="btnSort"
                      data-sort="<?= $sort ?>">
                <i class="bi bi-sort-<?= $sort == 'ASC' ? 'up' : 'down' ?>"></i>
              </button>
            </form>
          </div>
          <div class="right-col">
            <button class="search-btn" style="background-color: #4E8E55;"><i class="bi bi-plus"></i></button>
          </div>
        </div>

        <!-- INFO HASIL PENCARIAN -->
        <?php if(!empty($search)) : ?>
        <div class="alert alert-info d-flex align-items-center">
          <i class="bi bi-info-circle me-2"></i>
          Menampilkan <strong class="mx-1"><?= $totalData ?></strong> hasil untuk 
          "<strong><?= htmlspecialchars($search) ?></strong>"
        </div>
        <?php endif; ?>

        <!-- TABEL TESTIMONI -->
        <div class="table-responsive">
          <table class="table align-middle table-bordered">
            <thead style="background-color: #f8f9fa;">
              <tr class="text-center">
                <th>Nama Pembeli</th>
                <th>Nama Produk</th>
                <th>Alamat</th>
                <th> Foto </th>
                <th>Review</th>
                <th>Nilai</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody id="tblBody">
            <?php if(mysqli_num_rows($res) > 0) : ?>
              <?php while($row = mysqli_fetch_assoc($res)) : ?>
              <tr>
                <td><?= htmlspecialchars($row['nama']) ?></td>
                <td><?= htmlspecialchars($row['produk']) ?></td>
                <td><?= htmlspecialchars($row['alamat']) ?></td>
                <td class="text-center">
  <img src="../../asset/img/testimoni/<?= htmlspecialchars($row['gambar']) ?>" 
       width="60" 
       height="60"
       class="img-thumbnail img-review-thumbnail"
       style="cursor: pointer; object-fit: cover; transition: transform 0.2s;"
       data-img-full="../../asset/img/testimoni/<?= htmlspecialchars($row['gambar']) ?>"
       data-nama="<?= htmlspecialchars($row['nama']) ?>"
       alt="Testimoni"
       title="Klik untuk memperbesar">
</td>
                <?php
                $ulasan = $row['ulasan'];
                $ulimit = 100;

                if (mb_strlen($ulasan) > $ulimit) {
                    $text = mb_substr($ulasan, 0, $ulimit);
                    $text = mb_substr($text, 0, mb_strrpos($text, ' ')); // potong sampai spasi terakhir
                    $ulasan = $text . "...";
                }
                ?>
                <td>
                  <div class="review-text">
                    <?= nl2br(htmlspecialchars($ulasan))  ?>
                  </div>
                </td>
                <td class="text-center">
                  <div class="rating-container mb-1">
                    <?php 
                    for($i = 1; $i <= 5; $i++) {
                        if($i <= $row['nilai']) {
                            echo '<i class="bi bi-star-fill text-warning"></i>';
                        } else {
                            echo '<i class="bi bi-star text-muted"></i>';
                        }
                    }
                    ?>
                  </div>
                  <small class="text-muted"><?= $row['nilai'] ?>/5</small>
                </td>
                <td class="text-center">
                  <span class="badge <?= $row['status'] == 'Ditampilkan' ? 'bg-success' : 'bg-danger' ?>">
                    <?= $row['status'] ?>
                  </span>
                </td>
                <td class="text-center">
                  <div class="d-flex justify-content-center gap-1">
                    <button class="btn btn-danger btn-sm btnHapus"
                            data-id="<?= $row['id'] ?>"
                            title="Hapus">
                      <i class="bi bi-trash"></i>
                    </button>

                    <button class="btn btn-warning btn-sm btnEdit text-white"
                            data-id="<?= $row['id'] ?>"
                            data-nama="<?= htmlspecialchars($row['nama']) ?>"
                            data-produk="<?= htmlspecialchars($row['produk']) ?>"
                            data-alamat="<?= htmlspecialchars($row['alamat']) ?>"
                            data-ulasan="<?= htmlspecialchars($row['ulasan']) ?>"
                            data-nilai="<?= $row['nilai'] ?>"
                            data-gambar="<?= htmlspecialchars($row['gambar']) ?>"
                            data-status="<?= $row['status'] ?>"
                            title="Edit">
                      <i class="bi bi-pencil"></i>
                    </button>
                  </div>
                </td>
              </tr>
              <?php endwhile; ?>
            <?php else : ?>
              <tr>
                <td colspan="8" class="text-center py-5">
                  <i class="bi bi-inbox fs-1 text-muted"></i>
                  <p class="mt-3 text-muted">
                    <?= !empty($search) ? 'Tidak ada hasil yang ditemukan' : 'Belum ada testimoni' ?>
                  </p>
                </td>
              </tr>
            <?php endif; ?>
            </tbody>
          </table>
        </div>

        <!-- PAGINATION - RESPONSIVE -->
        <?php if($totalData > $limit) : ?>
        <div class="pagination-wrapper">
          <!-- Info Halaman -->
          <div class="text-muted small">
            Menampilkan <?= ($offset + 1) ?> - <?= min($offset + $limit, $totalData) ?> dari <?= $totalData ?> data
          </div>
          
          <!-- Pagination Buttons -->
          <div class="pagination-buttons">
            <!-- Previous Button -->
            <?php if($page > 1) : ?>
            <a href="?page=<?= $page - 1 ?><?= !empty($search) ? '&search=' . urlencode($search) : '' ?>&sort=<?= $sort ?>" 
              class="page-btn nav-btn"
              title="Previous">
              <i class="bi bi-chevron-left"></i>
            </a>
            <?php else : ?>
            <button class="page-btn nav-btn" disabled title="Previous">
              <i class="bi bi-chevron-left"></i>
            </button>
            <?php endif; ?>

            <!-- Page Numbers -->
            <?php
            // Jika total halaman <= 3 → tampilkan semuanya
            if ($totalPages <= 3) {
                for ($i = 1; $i <= $totalPages; $i++) {
                    echo '<a href="?page='.$i.'" class="page-btn '.($i==$page?'active':'inactive').'">'.$i.'</a>';
                }
            } else {

                // Hitung 3 angka utama
                $start = max(1, $page - 1);
                $end   = min($totalPages, $page + 1);

                // Jika posisi jauh dari awal, tampilkan "..."
                if ($start > 2) {
                    echo '<span class="page-ellipsis">...</span>';
                }

                // Angka utama (3 atau kurang)
                for ($i = $start; $i <= $end; $i++) {
                    echo '<a href="?page='.$i.'" class="page-btn '.($i==$page?'active':'inactive').'">'.$i.'</a>';
                }

                // Jika posisi jauh dari akhir, tampilkan "..."
                if ($end < $totalPages - 1) {
                    echo '<span class="page-ellipsis">...</span>';
                }
            }
            ?>

            <!-- Next Button -->
            <?php if($page < $totalPages) : ?>
            <a href="?page=<?= $page + 1 ?><?= !empty($search) ? '&search=' . urlencode($search) : '' ?>&sort=<?= $sort ?>" 
              class="page-btn nav-btn"
              title="Next">
              <i class="bi bi-chevron-right"></i>
            </a>
            <?php else : ?>
            <button class="page-btn nav-btn" disabled title="Next">
              <i class="bi bi-chevron-right"></i>
            </button>
            <?php endif; ?>
          </div>
        </div>

        <?php elseif($totalData > 0) : ?>
        <!-- Info jika data kurang dari 7 -->
        <div class="text-center text-muted small mt-3">
          Menampilkan semua <?= $totalData ?> data
        </div>
        <?php endif; ?>
      </div>
    </div>

    <!-- TAMBAHKAN MODAL LIGHTBOX INI SEBELUM PENUTUP </body> -->
<div class="modal fade" id="imageModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-body p-0 position-relative">
        <!-- Close Button -->
        <button type="button" 
                class="btn-close btn-close-white position-absolute top-0 end-0 m-3 z-3" 
                data-bs-dismiss="modal"
                style="filter: drop-shadow(0 0 5px rgba(0,0,0,0.5));">
        </button>
        
        <!-- Image Container -->
        <div class="text-center p-3">
          <img id="modalImage" 
               src="" 
               class="img-fluid rounded shadow-lg" 
               style="max-height: 80vh; object-fit: contain;"
               alt="Review Image">
          
          <!-- Caption -->
          <div class="mt-3 text-white" style="text-shadow: 0 2px 4px rgba(0,0,0,0.8);">
            <h5 class="mb-1">📷 Foto Testimoni</h5>
            <p class="mb-0" id="modalCaption">Testimoni dari pelanggan</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- MODAL TESTIMONI (TAMBAH & EDIT) -->
    <div class="modal fade" id="testimoniModal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content p-4 rounded-4 border-0 shadow-sm">
          
          <div class="d-flex justify-content-between align-items-start mb-3">
            <div class="d-flex align-items-center gap-2">
              <img src="../../asset/img/logo.png" alt="Logo" width="100">
              <div class="vr" style="height: 35px; width: 2px; background-color: #000;"></div>
              <h5 class="fw-bold mb-0" id="modalTitle">Tambah Testimoni</h5>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <form id="formTestimoni" enctype="multipart/form-data">
            <input type="hidden" id="editId" name="id">

            <label class="fw-semibold mb-1">Nama Pembeli</label>
            <input type="text" class="form-control border-success mb-3"
                  placeholder="Masukan Nama Pembeli" id="namaPembeli" 
                  name="nama" required>

            <label class="fw-semibold mb-1">Nama Produk</label>
            <select class="form-control border-success mb-3" id="namaProduk" name="produk" required>
                <?php 
                mysqli_data_seek($produkList, 0);
                while ($p = mysqli_fetch_assoc($produkList)) : 
                ?>
                    <option value="<?= htmlspecialchars($p['nama']) ?>"
                            data-custom-properties='{"img": "<?= '../../asset/img/' . $p['gambar'] ?>"}'>
                        <?= htmlspecialchars($p['nama']) ?>
                    </option>
                <?php endwhile; ?>
            </select>

            <label class="fw-semibold mb-1">Alamat</label>
            <input type="text" class="form-control border-success mb-3"
                  placeholder="Masukan Alamat" id="alamat" 
                  name="alamat" required>

            <label class="fw-semibold mb-1">Review</label>
            <textarea class="form-control border-success mb-3"
                      placeholder="Masukan Review" id="reviewInput" 
                      name="ulasan" rows="4" required></textarea>

            <label class="fw-semibold mb-1">Nilai</label>
            <select name="nilai" id="form_nilai" class="form-select mb-3" style="max-width:120px;" required>
              <option value="5">5</option>
              <option value="4">4</option>
              <option value="3">3</option>
              <option value="2">2</option>
              <option value="1">1</option>
            </select>

            <label class="fw-semibold mb-1" id="labelGambar">Unggah Gambar</label>
            <input type="file" class="form-control border-success mb-3"
                  id="gambarInput" name="gambar" accept="image/*">
            <small class="text-muted d-none mb-3 d-block" id="infoGambarLama"></small>

            <label class="fw-semibold mb-1">Status</label>
            <div class="form-check mt-2 mb-4">
              <input class="form-check-input" type="checkbox" id="statusInput" name="status">
              <label class="form-check-label">Tampilkan</label>
            </div>

          </form>

          <button class="btn w-100 text-white fw-semibold" id="btnSimpanTestimoni"
            style="background: linear-gradient(90deg, #4E8E55, #D6C72A); border-radius: 12px;">
            Simpan
          </button>

        </div>
      </div>
    </div>

    <!-- MODAL HAPUS -->
    <div class="modal fade" id="hapusTestimoniModal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4 rounded-4 text-center border-0 shadow-sm">
          <img src="../../asset/img/logo.png" alt="Logo" width="120" class="mb-3">
          <i class="bi bi-exclamation-triangle-fill text-danger fs-1"></i>
          <h5 class="fw-semibold mt-3 mb-4">Apakah Anda yakin untuk menghapus testimoni ini?</h5>
          <button class="btn text-white w-100 fw-semibold" id="btnKonfirmasiHapusTestimoni"
            style="background-color: #C0392B; border-radius: 12px;">Hapus</button>
        </div>
      </div>
    </div>

    <!-- MODAL NOTIFIKASI -->
    <div class="modal fade" id="notifModal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content notif-card text-center p-4 rounded-4 border-0 shadow">
          <img src="../../asset/img/logo.png" alt="Logo" width="90" class="mb-3">
          <i id="notifIcon" class="bi fs-1 mb-3"></i>
          <h5 id="notifText" class="fw-semibold"></h5>
        </div>
      </div>
    </div>

    <style>
      .notif-card {
        background: #fff;
        animation: fadeScale 0.3s ease;
      }
      @keyframes fadeScale {
        from {opacity: 0; transform: scale(0.9);}
        to {opacity: 1; transform: scale(1);}
      }
      .shadow {
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      const testimoniModal = new bootstrap.Modal(document.getElementById('testimoniModal'));
      const hapusTestimoniModal = new bootstrap.Modal(document.getElementById('hapusTestimoniModal'));
      const notifModal = new bootstrap.Modal(document.getElementById('notifModal'));
      const notifText = document.getElementById('notifText');
      const notifIcon = document.getElementById('notifIcon');

      let currentChoices = null;
      let isEditMode = false;

      const imageModal = new bootstrap.Modal(document.getElementById('imageModal'));
  const modalImage = document.getElementById('modalImage');
  const modalCaption = document.getElementById('modalCaption');

  // Event listener untuk semua thumbnail gambar
  document.querySelectorAll('.img-review-thumbnail').forEach(img => {
    img.addEventListener('click', function() {
      const imgSrc = this.getAttribute('data-img-full');
      const namaPembeli = this.getAttribute('data-nama');
      
      // Reset loading state
      modalImage.classList.remove('loaded');
      modalImage.src = '';
      
      // Set gambar dan caption
      modalImage.src = imgSrc;
      modalCaption.textContent = `Testimoni dari ${namaPembeli}`;
      
      // Tambah class loaded setelah gambar dimuat
      modalImage.onload = function() {
        modalImage.classList.add('loaded');
      };
      
      // Tampilkan modal
      imageModal.show();
    });
  });
  
  // Optional: Close modal saat klik di luar gambar
  document.getElementById('imageModal').addEventListener('click', function(e) {
    if (e.target === this || e.target.classList.contains('modal-body')) {
      imageModal.hide();
    }
  });
  
  // Keyboard navigation: ESC untuk close
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && imageModal._isShown) {
      imageModal.hide();
    }
  });

      // Inisialisasi Choices.js
      document.addEventListener('DOMContentLoaded', function () {
        const produkSelect = document.getElementById('namaProduk');

        currentChoices = new Choices(produkSelect, {
            searchPlaceholderValue: 'Cari produk...',
            itemSelectText: '',
            callbackOnCreateTemplates: function (template) {
                return {
                    option: (classNames, data) => {
                        const props = data.customProperties;
                        return template(`
                            <div class="d-flex align-items-center gap-2">
                                <img src="${props?.img || ''}" width="30" height="30" style="object-fit:cover; border-radius:4px;">
                                <span>${data.label}</span>
                            </div>
                        `);
                    },
                    item: (classNames, data) => {
                        const props = data.customProperties;
                        return template(`
                            <div class="d-flex align-items-center gap-2">
                                <img src="${props?.img || ''}" width="30" height="30" style="object-fit:cover; border-radius:4px;">
                                <span>${data.label}</span>
                            </div>
                        `);
                    }
                };
            }
        });
      });

      // Tombol Sort
      document.getElementById('btnSort').addEventListener('click', function() {
        const currentSort = this.getAttribute('data-sort');
        const newSort = currentSort === 'DESC' ? 'ASC' : 'DESC';
        const search = new URLSearchParams(window.location.search).get('search') || '';
        const page = new URLSearchParams(window.location.search).get('page') || 1;
        
        window.location.href = `?page=${page}&sort=${newSort}${search ? '&search=' + search : ''}`;
      });

      // Tombol Tambah
      document.querySelector('.bi-plus').closest('button').addEventListener('click', () => {
        isEditMode = false;
        document.getElementById('formTestimoni').reset();
        document.getElementById('editId').value = '';
        if (currentChoices) currentChoices.setChoiceByValue('');
        document.getElementById('modalTitle').textContent = 'Tambah Testimoni';
        document.getElementById('gambarInput').setAttribute('required', 'required');
        document.getElementById('labelGambar').textContent = 'Unggah Gambar';
        document.getElementById('infoGambarLama').classList.add('d-none');
        testimoniModal.show();
      });

      // Tombol Edit
      document.querySelectorAll('.btnEdit').forEach(btn => {
        btn.addEventListener('click', function() {
            isEditMode = true;
            const id = this.getAttribute('data-id');
            const nama = this.getAttribute('data-nama');
            const produk = this.getAttribute('data-produk');
            const alamat = this.getAttribute('data-alamat');
            const ulasan = this.getAttribute('data-ulasan');
            const nilai = this.getAttribute('data-nilai');
            const status = this.getAttribute('data-status');
            const gambar = this.getAttribute('data-gambar');

            document.getElementById('editId').value = id;
            document.getElementById('namaPembeli').value = nama;
            document.getElementById('alamat').value = alamat;
            document.getElementById('reviewInput').value = ulasan;
            document.getElementById('form_nilai').value = nilai;
            document.getElementById('statusInput').checked = (status === 'Ditampilkan');

            if (currentChoices) currentChoices.setChoiceByValue(produk);

            document.getElementById('modalTitle').textContent = 'Edit Testimoni';
            document.getElementById('gambarInput').removeAttribute('required');
            document.getElementById('labelGambar').textContent = 'Unggah Gambar Baru (Opsional)';
            
            const infoGambar = document.getElementById('infoGambarLama');
            infoGambar.textContent = `📷 Gambar saat ini: ${gambar}`;
            infoGambar.classList.remove('d-none');

            testimoniModal.show();
        });
      });

      // Simpan
      document.getElementById('btnSimpanTestimoni').addEventListener('click', () => {
        const nama = document.getElementById("namaPembeli").value.trim();
        const produk = document.getElementById("namaProduk").value.trim();
        const alamat = document.getElementById("alamat").value.trim();
        const ulasan = document.getElementById("reviewInput").value.trim();
        const nilai = document.getElementById("form_nilai").value.trim();
        const gambar = document.getElementById("gambarInput").files.length > 0;

        if (!nama || !produk || !alamat || !ulasan || !nilai) {
            notifIcon.className = 'bi bi-x-circle-fill text-danger fs-1 mb-3';
            notifText.textContent = "Semua field wajib diisi!";
            notifModal.show();
            return;
        }

        if (!isEditMode && !gambar) {
            notifIcon.className = 'bi bi-x-circle-fill text-danger fs-1 mb-3';
            notifText.textContent = "Gambar wajib diupload!";
            notifModal.show();
            return;
        }

        const form = document.getElementById('formTestimoni');
        const formData = new FormData(form);

        let url = '../action/ulasan_add.php';
        if (isEditMode) url = '../action/ulasan_edit.php';

        fetch(url, {
            method: 'POST',
            body: formData
        })
        .then(res => res.text())
        .then(result => {
            testimoniModal.hide();
            notifIcon.className = 'bi bi-check-circle-fill text-success fs-1 mb-3';
            notifText.textContent = isEditMode ? "Berhasil mengupdate testimoni!" : "Berhasil menambahkan testimoni!";
            notifModal.show();
            setTimeout(() => location.reload(), 1500);
        })
        .catch(err => {
            console.error(err);
            notifIcon.className = 'bi bi-x-circle-fill text-danger fs-1 mb-3';
            notifText.textContent = "Gagal menyimpan testimoni!";
            notifModal.show();
        });
      });

      // Hapus
      let hapusId = null;
      document.querySelectorAll('.btnHapus').forEach(btn => {
        btn.addEventListener('click', function() {
            hapusId = this.getAttribute('data-id');
            hapusTestimoniModal.show();
        });
      });

      document.getElementById('btnKonfirmasiHapusTestimoni').addEventListener('click', () => {
        if (hapusId === null) {
            notifIcon.className = 'bi bi-x-circle-fill text-danger fs-1 mb-3';
            notifText.textContent = "ID testimoni tidak ditemukan!";
            notifModal.show();
            return;
        }

        fetch(`../action/ulasan_hapus.php?id=${hapusId}`, {
            method: 'GET'
        })
        .then(res => res.text())
        .then(result => {
            hapusTestimoniModal.hide();
            setTimeout(() => {
                notifIcon.className = 'bi bi-check-circle-fill text-success fs-1 mb-3';
                notifText.textContent = "Berhasil menghapus testimoni!";
                notifModal.show();
                setTimeout(() => location.reload(), 1500);
            }, 400);
        })
        .catch(err => {
            console.error(err);
            hapusTestimoniModal.hide();
            notifIcon.className = 'bi bi-x-circle-fill text-danger fs-1 mb-3';
            notifText.textContent = "Gagal menghapus testimoni!";
            notifModal.show();
        });
      });
    </script>
  </body>
</html>