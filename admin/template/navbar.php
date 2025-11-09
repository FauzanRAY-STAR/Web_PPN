<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Navbar | PTPPN</title>

  <!-- Favicon -->
  <link href="../../asset/img/LogoIco.ico" rel="icon" />

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Heebo&display=swap" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Icon Fonts -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Custom CSS -->
   <link rel="stylesheet" href="../../asset/style/navbar.css">
</head>

<body>
  <!-- ============================================ -->
  <!-- NAVBAR -->
  <!-- ============================================ -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid">
      <!-- LOGO -->
      <a href="#" class="navbar-brand d-flex align-items-center">
        <img src="../../asset/img/Logo.png" alt="Logo" />
      </a>

      <!-- TOGGLER -->
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="fa fa-bars" style="color: #2b8d4c"></span>
      </button>

      <!-- NAV LINKS -->
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
          <li class="nav-item"><a href="#" class="nav-link active">Beranda</a></li>
          <li class="nav-item"><a href="../../shop" class="nav-link">Shop</a></li>

          <!-- Dropdown Tentang Kami -->
          <li class="nav-item dropdown position-static">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              id="tentangKamiDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Tentang Kami
            </a>

            <div
              class="dropdown-menu w-100 mt-0 p-4"
              aria-labelledby="tentangKamiDropdown"
              style="background-color: #fff"
            >
              <div class="container">
                <div class="col-lg-3 col-md-12 mb-3 text-center text-lg-start">
                  <h4 class="fw-bold mb-0" style="color: #2b8d4c">
                    TENTANG<br />KAMI
                  </h4>
                </div>

                <div class="dropdown-divider-vert"></div>

                <div class="col-lg-6 col-md-12">
                  <a href="../../profil-perusahaan" class="d-block py-2 fw-semibold text-link"
                    >Sekilas Pramudita Pupuk Nusantara</a
                  >
                  <a href="../../visi-misi" class="d-block py-2 fw-semibold text-link">Visi & Misi</a>
                  <a href="../../tim-kami" class="d-block py-2 fw-semibold text-link">Jangkauan Pengguna</a>
                </div>
              </div>
            </div>
          </li>

          <li class="nav-item"><a href="../../galeri" class="nav-link">Galeri</a></li>
          <li class="nav-item"><a href="../../produk" class="nav-link">Produk</a></li>
          <li class="nav-item"><a href="../../kontak" class="nav-link">Kontak</a></li>
        </ul>

        <!-- ICON USER -->
        <a href="../../login" class="nav-link d-flex align-items-center ms-lg-3">
          <img src="../../asset/img/userlog.png" alt="User" height="22" width="22" />
        </a>
      </div>
    </div>
  </nav>

  <!-- ============================================ -->
  <!-- JAVASCRIPT -->
  <!-- ============================================ -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
