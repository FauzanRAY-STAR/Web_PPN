<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testimoni - PPN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <style>

/* CSS */
.search-bar-top {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 1rem;
}

.left-col {
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.search-box {
  display: flex;
  align-items: center;
  background: #f5f5f5;
  border-radius: 8px;
  padding: 0.4rem 0.8rem;
  width: 220px; /* biar tidak terlalu panjang */
}

.search-box i {
  color: #888;
  margin-right: 0.4rem;
}

.search-box input {
  border: none;
  outline: none;
  background: transparent;
  width: 100%;
}

.search-btn {
  background-color: #007bff;
  border: none;
  color: white;
  padding: 0.45rem 0.75rem;
  border-radius: 6px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
}

.search-btn i {
  font-size: 1rem;
}

.search-btn:hover {
  background-color: #0056b3;
}


    body {
      background-color: #f4f5f7;
      font-family: 'Inter', sans-serif;
      overflow-x: hidden;
    }


    /* SEARCH BOX STYLE */
    .search-box {
      display: flex;
      align-items: center;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 10px;
      padding: 6px 10px;
      gap: 8px;
      height: 40px;
    }

    .search-box i {
      font-size: 1rem;
      color: #777;
    }

    .search-box input {
      border: none;
      outline: none;
      font-size: 0.9rem;
      flex: 1;
      color: #555;
      background: none;
    }

    .search-box input::placeholder {
      color: #888;
    }

    /* Sidebar search behavior */
    .sidebar .search-container {
      padding: 12px 20px;
    }

    .search-icon-only {
      display: none;
      justify-content: center;
      align-items: center;
      height: 40px;
      width: 40px;
      border: 1px solid #ccc;
      border-radius: 10px;
      background-color: #fff;
      color: #777;
    }

    .sidebar.minimized .search-box {
      display: none;
    }

    .sidebar.minimized .search-icon-only {
      display: flex;
    }



    .header-section {
      background: url('../../asset/img/HeadBanner.png') center/cover;
      border-radius: 12px;
      padding: 20px;
      color: white;
      font-weight: 600;
      font-size: 1.3rem;
      margin-bottom: 20px;
    }

    /* MAIN SEARCH + BUTTONS */
    .search-bar-top {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 20px;
    }

    .search-bar-top .search-box {
      flex: 1;
    }

    .search-btn {
      background-color: #4E8E55;
      color: #fff;
      border: none;
      height: 40px;
      width: 40px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .search-btn i {
      font-size: 1.1rem;
    }

    .search-btn:hover {
      opacity: 0.9;
    }

    /* PRODUCT CARD */
    .product-card {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background: white;
      padding: 10px 16px;
      border-radius: 10px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
      margin-bottom: 10px;
      box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.1), 0px 2px 8px rgba(0, 0, 0, 0.06);
    }

    .product-info {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .product-info img {
      width: 60px;
      height: 60px;
      object-fit: contain;
      border-radius: 8px;
    }

    .action-btns button {
      border: none;
      border-radius: 6px;
      padding: 6px 10px;
      color: white;
      margin-left: 6px;
      transition: transform 0.1s;
    }

    .action-btns button:hover {
      transform: scale(1.05);
    }

    .btn-delete { background-color: #D01111; }
    .btn-edit { background-color: #F9D70B; color: white; }

    .pagination {
      justify-content: center;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <div class="d-flex">
<?php
    include('../template/sidebar.php');
    ?>
    <div class="main">
  <div class="header-section">Testimoni</div>

  <!-- SEARCH BAR -->
  <div class="search-bar-top">
    <div class="left-col">
      <div class="search-box">
        <i class="bi bi-search"></i>
        <input type="text" placeholder="Search testimoni...">
      </div>
      <button class="search-btn"><i class="bi bi-sort-down"></i></button>
    </div>

    <div class="right-col">
      <button class="search-btn"><i class="bi bi-plus"></i></button>
    </div>
  </div>

  <!-- TABEL TESTIMONI -->
  <div class="table-responsive">
    <table class="table align-middle table-bordered">
      <thead style="background-color: #4E8E55; color: white;">
<thead>
  <tr class="text-center" style="background-color: #4E8E55; color: white;">
    <th>Nama Pembeli</th>
    <th>Nama Produk</th>
    <th>Alamat</th>
    <th>Foto</th>
    <th>Review</th>
    <th>Status</th>
    <th>Aksi</th>
  </tr>
</thead>

      <tbody style="background-color: white;">
        <tr>
          <td>Adi Tani</td>
          <td>Maxi-D</td>
          <td>Kab. Bandung</td>
          <td class="text-center">
            <img src="../../asset/img/Testimoni1.png" alt="Foto Adi" style="width: 50px; height: 50px; border-radius: 8px; object-fit: cover;">
          </td>
          <td>Setelah pakai Maxi-D, tanaman jagung saya tumbuh lebih cepat dan subur!</td>
          <td class="text-success fw-semibold text-center">Ditampilkan</td>
          <td class="text-center">
  <div class="d-flex justify-content-center align-items-center gap-2">
    <button class="btn btn-danger btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
      <i class="bi bi-trash"></i>
    </button>
    <button class="btn btn-warning btn-sm rounded-circle d-flex align-items-center justify-content-center text-white" style="width: 32px; height: 32px;">
      <i class="bi bi-pencil"></i>
    </button>
  </div>
</td>
        </tr>

        <tr>
          <td>Rina Agustina</td>
          <td>TeraNusa Silika</td>
          <td>Sleman, Yogyakarta</td>
          <td class="text-center">
            <img src="../../asset/img/Testimoni2.png" alt="Foto Rina" style="width: 50px; height: 50px; border-radius: 8px; object-fit: cover;">
          </td>
          <td>Daun padi jadi lebih kuat, nggak gampang rebah. Keren banget produknya!</td>
          <td class="text-danger fw-semibold text-center">Disembunyikan</td>
          <td class="text-center">
  <div class="d-flex justify-content-center align-items-center gap-2">
    <button class="btn btn-danger btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
      <i class="bi bi-trash"></i>
    </button>
    <button class="btn btn-warning btn-sm rounded-circle d-flex align-items-center justify-content-center text-white" style="width: 32px; height: 32px;">
      <i class="bi bi-pencil"></i>
    </button>
  </div>
</td>
        </tr>

        <tr>
          <td>Bambang</td>
          <td>TeraNusa Probiotik</td>
          <td>Sidoarjo, Jawa Timur</td>
          <td class="text-center">
            <img src="../../asset/img/Testimoni3.png" alt="Foto Bambang" style="width: 50px; height: 50px; border-radius: 8px; object-fit: cover;">
          </td>
          <td>Bagus buat padi, tapi kemasannya agak susah dibuka!</td>
          <td class="text-danger fw-semibold text-center">Disembunyikan</td>
          <td class="text-center">
  <div class="d-flex justify-content-center align-items-center gap-2">
    <button class="btn btn-danger btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
      <i class="bi bi-trash"></i>
    </button>
    <button class="btn btn-warning btn-sm rounded-circle d-flex align-items-center justify-content-center text-white" style="width: 32px; height: 32px;">
      <i class="bi bi-pencil"></i>
    </button>
  </div>
</td>
        </tr>

        <tr>
          <td>Sari Pratama</td>
          <td>TeraTusa Hama</td>
          <td>Cilacap, Jawa Tengah</td>
          <td class="text-center">
            <img src="../../asset/img/Testimoni4.png" alt="Foto Sari" style="width: 50px; height: 50px; border-radius: 8px; object-fit: cover;">
          </td>
          <td>Produknya bagus tapi agak susah didapat di toko sekitar sini.</td>
          <td class="text-danger fw-semibold text-center">Disembunyikan</td>
          <td class="text-center">
  <div class="d-flex justify-content-center align-items-center gap-2">
    <button class="btn btn-danger btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
      <i class="bi bi-trash"></i>
    </button>
    <button class="btn btn-warning btn-sm rounded-circle d-flex align-items-center justify-content-center text-white" style="width: 32px; height: 32px;">
      <i class="bi bi-pencil"></i>
    </button>
  </div>
</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- PAGINATION -->
  <div class="d-flex justify-content-center mt-4 gap-2">
    <button class="btn btn-warning rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
      <i class="bi bi-chevron-left" style="color: white;"></i>
    </button>
    <button class="btn btn-success rounded-circle d-flex align-items-center justify-content-center fw-semibold text-white" style="width: 32px; height: 32px;">
      1
    </button>
    <button class="btn btn-warning rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
      <i class="bi bi-chevron-right" style="color: white;"></i>
    </button>
  </div>
</div>

<style>
/* === TABEL TESTIMONI === */
.table-responsive {
  overflow-x: auto; /* Scroll horizontal kalau tabel kepanjangan */
  border-radius: 10px;
  box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.1);
}

/* Header tabel hijau dengan teks putih */
.table thead tr {
  background-color: #4E8E55 !important;
  color: white !important;
}

.table thead th {
  background-color: #4E8E55 !important;
  color: white !important;
  text-align: center;
  vertical-align: middle;
}

/* Isi tabel */
.table th,
.table td {
  vertical-align: middle;
  white-space: nowrap; /* biar teks panjang bisa di-scroll horizontal */
}

/* Foto di kolom foto */
.table img {
  width: 50px;
  height: 50px;
  object-fit: cover;
  border-radius: 8px;
}

/* Tombol aksi */
.table td .btn {
  width: 32px;
  height: 32px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
}

/* Spasi antar tombol */
.table td .d-flex {
  gap: 8px;
}

</style>

  

  <script>
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggleSidebar');
    toggleBtn.addEventListener('click', () => {
      sidebar.classList.toggle('minimized');
    });
  </script>
</body>
</html>
