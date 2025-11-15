<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard FAQ</title>

  <!-- Favicon -->
  <link href="../../asset/img/LogoIco.ico" rel="icon">

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../../asset/style/faq.css">
</head>

<body>
  <div class="d-flex">
<?php
include '../../config/koneksi.php';

// Fetch FAQ data
$query = "SELECT * FROM faq ORDER BY tanggal DESC";
$result = mysqli_query($conn, $query);
$faqs = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<?php include('../template/sidebar.php'); ?>

    <div class="main">
      <div class="header-section">Frequently Asked Questions</div>

      <!-- SEARCH BAR -->
      <div class="search-bar-top">
        <div class="left-col">
          <div class="search-box">
            <i class="bi bi-search"></i>
            <input type="text" placeholder="Search" id="searchInput">
          </div>
        </div>
        <div class="right-col">
          <button class="search-btn" id="btnTambah" style="background-color: #4E8E55;">
            <i class="bi bi-plus"></i>
          </button>
        </div>
      </div>

      <!-- TABEL FAQ -->
      <div class="table-responsive">
        <table class="table align-middle table-bordered">
          <thead>
            <tr class="text-center">
              <th>Judul</th>
              <th>Deskripsi</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody id="faqTableBody">
            <?php foreach ($faqs as $faq): ?>
            <tr data-id="<?php echo $faq['id']; ?>">
              <td><?php echo htmlspecialchars($faq['judul']); ?></td>
              <td><?php echo htmlspecialchars($faq['deskripsi']); ?></td>
              <td class="text-center">
                <span class="badge <?php echo $faq['status'] == 'Ditampilkan' ? 'bg-success' : 'bg-secondary'; ?> fw-semibold">
                  <?php echo $faq['status']; ?>
                </span>
              </td>
              <td class="text-center">
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <button class="btn btn-danger btn-sm rounded-circle d-flex align-items-center justify-content-center btnHapus" data-id="<?php echo $faq['id']; ?>">
                    <i class="bi bi-trash"></i>
                  </button>
                  <button class="btn btn-warning btn-sm rounded-circle d-flex align-items-center justify-content-center text-white btnEdit" data-id="<?php echo $faq['id']; ?>" data-judul="<?php echo htmlspecialchars($faq['judul']); ?>" data-deskripsi="<?php echo htmlspecialchars($faq['deskripsi']); ?>" data-status="<?php echo $faq['status']; ?>">
                    <i class="bi bi-pencil"></i>
                  </button>
                </div>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- MODAL TAMBAH / EDIT -->
<div class="modal fade" id="faqModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-4 rounded-4 border-0 shadow-sm">
      <!-- HEADER MODAL -->
      <div class="d-flex justify-content-between align-items-start mb-3">
        <div class="d-flex align-items-center gap-2">
          <img src="../../asset/img/logo.png" alt="Logo" width="100">
          <div class="vr" style="height: 35px; width: 2px; background-color: #000;"></div>
          <h5 class="fw-bold mb-0">FAQ</h5>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- FORM BODY -->
      <label class="fw-semibold mb-1">Judul</label>
      <input type="text" class="form-control border-success mb-3" placeholder="Masukan Nama" id="judulInput">

      <label class="fw-semibold mb-1">Deskripsi</label>
      <textarea class="form-control border-success mb-3" placeholder="Masukan Review" id="deskripsiInput" rows="4"></textarea>

      <label class="fw-semibold mb-1">Status</label>
      <div class="form-check mt-2 mb-4">
        <input class="form-check-input" type="checkbox" id="statusInput">
        <label class="form-check-label">Tampilkan</label>
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
        <img src="../../asset/img/logo.png" alt="Logo" width="120" class="mb-3">
        <i class="bi bi-exclamation-triangle-fill text-danger fs-1"></i>
        <h5 class="fw-semibold mt-3 mb-4">Apakah Anda yakin untuk menghapus?</h5>
        <button class="btn text-white w-100 fw-semibold" id="btnKonfirmasiHapus"
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

  <!-- STYLE TAMBAHAN -->
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

  <!-- SCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const faqModal = new bootstrap.Modal(document.getElementById('faqModal'));
    const hapusModal = new bootstrap.Modal(document.getElementById('hapusModal'));
    const notifModal = new bootstrap.Modal(document.getElementById('notifModal'));
    const notifText = document.getElementById('notifText');
    const notifIcon = document.getElementById('notifIcon');
    let editId = null;

    // Tambah FAQ
    document.getElementById('btnTambah').addEventListener('click', () => {
      editId = null;
      document.getElementById('judulInput').value = '';
      document.getElementById('deskripsiInput').value = '';
      document.getElementById('statusInput').checked = false;
      faqModal.show();
    });

    // Edit FAQ
    document.querySelectorAll('.btnEdit').forEach(btn => {
      btn.addEventListener('click', () => {
        editId = btn.getAttribute('data-id');
        document.getElementById('judulInput').value = btn.getAttribute('data-judul');
        document.getElementById('deskripsiInput').value = btn.getAttribute('data-deskripsi');
        document.getElementById('statusInput').checked = btn.getAttribute('data-status') === 'Ditampilkan';
        faqModal.show();
      });
    });

    // Simpan FAQ
    document.getElementById('btnSimpan').addEventListener('click', () => {
      const judul = document.getElementById('judulInput').value;
      const deskripsi = document.getElementById('deskripsiInput').value;
      const status = document.getElementById('statusInput').checked ? 'on' : '';

      if (!judul || !deskripsi) {
        notifIcon.className = 'bi bi-x-circle-fill text-danger fs-1 mb-3';
        notifText.textContent = "Judul dan deskripsi harus diisi!";
        notifModal.show();
        setTimeout(() => notifModal.hide(), 1600);
        return;
      }

      const formData = new FormData();
      formData.append('judul', judul);
      formData.append('deskripsi', deskripsi);
      formData.append('status', status);
      if (editId) {
        formData.append('id', editId);
      }

      const url = editId ? '../action/ubah.php?mod=faq' : '../action/tambah.php?mod=faq';

      fetch(url, {
        method: 'POST',
        body: formData
      })
      .then(response => {
        if (response.ok) {
          faqModal.hide();
          notifIcon.className = 'bi bi-check-circle-fill text-success fs-1 mb-3';
          notifText.textContent = editId ? "Berhasil mengubah!" : "Berhasil menambah!";
          notifModal.show();
          setTimeout(() => {
            notifModal.hide();
            location.reload();
          }, 1600);
        } else {
          throw new Error('Network response was not ok.');
        }
      })
      .catch(error => {
        console.error('Error:', error);
        notifIcon.className = 'bi bi-x-circle-fill text-danger fs-1 mb-3';
        notifText.textContent = "Gagal menyimpan!";
        notifModal.show();
        setTimeout(() => notifModal.hide(), 1600);
      });
    });

    // Tombol Hapus
    document.querySelectorAll('.btnHapus').forEach(btn => {
      btn.addEventListener('click', () => {
        const id = btn.getAttribute('data-id');
        document.getElementById('btnKonfirmasiHapus').setAttribute('data-id', id);
        hapusModal.show();
      });
    });

    // Konfirmasi Hapus
    document.getElementById('btnKonfirmasiHapus').addEventListener('click', () => {
      const id = document.getElementById('btnKonfirmasiHapus').getAttribute('data-id');
      fetch(`../action/hapus.php?mod=faq&id=${id}`)
      .then(response => {
        if (response.ok) {
          hapusModal.hide();
          notifIcon.className = 'bi bi-check-circle-fill text-success fs-1 mb-3';
          notifText.textContent = "Berhasil dihapus!";
          notifModal.show();
          setTimeout(() => {
            notifModal.hide();
            location.reload();
          }, 1500);
        } else {
          throw new Error('Network response was not ok.');
        }
      })
      .catch(error => {
        console.error('Error:', error);
        notifIcon.className = 'bi bi-x-circle-fill text-danger fs-1 mb-3';
        notifText.textContent = "Gagal menghapus!";
        notifModal.show();
        setTimeout(() => notifModal.hide(), 1600);
      });
    });

    // Search functionality
    document.getElementById('searchInput').addEventListener('input', function() {
      const searchTerm = this.value.toLowerCase();
      const rows = document.querySelectorAll('#faqTableBody tr');

      rows.forEach(row => {
        const judul = row.cells[0].textContent.toLowerCase();
        const deskripsi = row.cells[1].textContent.toLowerCase();
        if (judul.includes(searchTerm) || deskripsi.includes(searchTerm)) {
          row.style.display = '';
        } else {
          row.style.display = 'none';
        }
      });
    });
  </script>
</body>


</html>
