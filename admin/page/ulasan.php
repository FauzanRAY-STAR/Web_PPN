<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testimoni - PPN</title>

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
          </div>
          <button class="search-btn" style="background-color: #4E8E55;"><i class="bi bi-sort-down"></i></button>
        </div>
        <div class="right-col">
          <button class="search-btn" style="background-color: #4E8E55;"><i class="bi bi-plus"></i></button>
        </div>
      </div>

      <!-- TABEL TESTIMONI -->
      <div class="table-responsive">
        <table class="table align-middle table-bordered">
          <thead>
            <tr class="text-center">
              <th>Nama Pembeli</th>
              <th>Nama Produk</th>
              <th>Alamat</th>
              <th>Foto</th>
              <th>Review</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Adi Tani</td>
              <td>Maxi-D</td>
              <td>Kab. Bandung</td>
              <td class="text-center">
                <img src="../../asset/img/Testimoni1.png" alt="Foto Adi">
              </td>
              <td>Setelah pakai Maxi-D, tanaman jagung saya tumbuh lebih cepat dan subur!</td>
              <td class="text-success fw-semibold text-center">Ditampilkan</td>
              <td class="text-center">
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <button class="btn btn-danger btn-sm rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-trash"></i>
                  </button>
                  <button class="btn btn-warning btn-sm rounded-circle d-flex align-items-center justify-content-center text-white">
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
                <img src="../../asset/img/Testimoni2.png" alt="Foto Rina">
              </td>
              <td>Daun padi jadi lebih kuat, nggak gampang rebah. Keren banget produknya!</td>
              <td class="text-danger fw-semibold text-center">Disembunyikan</td>
              <td class="text-center">
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <button class="btn btn-danger btn-sm rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-trash"></i>
                  </button>
                  <button class="btn btn-warning btn-sm rounded-circle d-flex align-items-center justify-content-center text-white">
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
                <img src="../../asset/img/Testimoni3.png" alt="Foto Bambang">
              </td>
              <td>Bagus buat padi, tapi kemasannya agak susah dibuka!</td>
              <td class="text-danger fw-semibold text-center">Disembunyikan</td>
              <td class="text-center">
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <button class="btn btn-danger btn-sm rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-trash"></i>
                  </button>
                  <button class="btn btn-warning btn-sm rounded-circle d-flex align-items-center justify-content-center text-white">
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
                <img src="../../asset/img/Testimoni4.png" alt="Foto Sari">
              </td>
              <td>Produknya bagus tapi agak susah didapat di toko sekitar sini.</td>
              <td class="text-danger fw-semibold text-center">Disembunyikan</td>
              <td class="text-center">
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <button class="btn btn-danger btn-sm rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-trash"></i>
                  </button>
                  <button class="btn btn-warning btn-sm rounded-circle d-flex align-items-center justify-content-center text-white">
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
        <button class="btn btn-warning rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-chevron-left text-white" ></i>
        </button>
        <button class="btn btn-success rounded-circle d-flex align-items-center justify-content-center fw-semibold text-white">
          1
        </button>
        <button class="btn btn-warning rounded-circle d-flex align-items-center justify-content-center" style>
          <i class="bi bi-chevron-right text-white"></i>
        </button>
      </div>
    </div>
  </div>
</body>
</html>
