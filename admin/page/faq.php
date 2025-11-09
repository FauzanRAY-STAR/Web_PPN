<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQ - PPN</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../../asset/style/faq.css">
</head>

<body>
  <div class="d-flex">
  <?php include('../template/sidebar.php'); ?>

    <div class="main">
      <div class="header-section">Frequently Asked Questions</div>

      <!-- SEARCH BAR -->
      <div class="search-bar-top">
        <div class="left-col">
          <div class="search-box">
            <i class="bi bi-search"></i>
            <input type="text" placeholder="Search">
          </div>
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
              <th>Judul</th>
              <th>Deskripsi</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Apa keunggulan pupuk silika dibandin</td>
              <td>Pupuk silika tidak hanya pupuk, tapi pupuk yang ojan suka..</td>
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
