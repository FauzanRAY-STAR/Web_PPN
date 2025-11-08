<?php 
include("../config/koneksi.php"); 

// if (empty($_SESSION['username'])) {
//     header('Location: ../');
// }
// ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ganyeum Admin | Galeri</title>

    <!-- Favicon -->
    <link href="../asset/img/Logo.ico" rel="icon">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- CSS -->
    <link href="../asset/style/style_admin.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <?php include('template/header.php') ?>

    <!-- Konten -->
    <div class="container-fluid text-white" style="background-color: #314662;">
        <div class="row d-flex pb-2">
            <div class="col text-center pt-4">
                <h4>Daftar Galeri</h4>
            </div>
            <div class="col-auto ml-auto pt-3">
                <button type="button" class="btn btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#tambahDataModal">Tambah Galeri</button>
            </div>
        </div>
    </div>
    <div class="container-tabel">
        <table class="tabel-data">
            <tr>
                <th>No</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>

            <?php 
				$no = 1; 
				$data = mysqli_query($conn, "SELECT * FROM galeri");
				while($r = mysqli_fetch_array($data)){
                    $tanggal_waktu = new DateTime($r['tanggal']);
                    $tanggal = $tanggal_waktu->format('d-m-Y');
			?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $r['deskripsi']; ?></td>
                <td><img src="../asset/img/<?php echo $r['gambar']; ?>" width="100px"></td>
                <td><?php echo $tanggal; ?></td>
                <td><?php echo $r['status']; ?></td>
                <td width="100">
                    <div class="gap-2 d-grid">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ubahDataModal<?= $r['id'] ?>">Ubah</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusDataModal<?= $r['id'] ?>">Hapus</button>
                    </div>
                </td>
            </tr>
            
            <!-- Modal Edit Data -->
            <form id="form-data" method="POST" action="action/ubah.php?mod=<?= $_GET['mod'] ?>" enctype="multipart/form-data">
                <div class="modal fade" id="ubahDataModal<?= $r['id'] ?>" data-bs-backdrop="static" tabindex="-1" aria-labelledby="ubahDataModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bolder" id="ubahDataModalLabel">Ubah Galeri</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="id" value="<?= $r['id'] ?>">
                                <div class="form-group mb-3">
                                    <label class="form-label mb-1" for="deskripsi">Deskripsi</label>
                                    <span class="form-text">(Opsional)</span>
                                    <textarea class="form-control" name="deskripsi" id="deskripsi"><?= $r['deskripsi'] ?></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="status">Status</label>
                                    <div class="container">
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <input class="form-check-input" type="radio" value="Aktif" name="status" id="aktif" <?php if ($r['status'] === "Aktif") { echo "checked"; }?>>
                                                <label class="form-check-label form-label" for="aktif">Aktif</label>
                                            </div>
                                            <div class="form-group col-6">
                                                <input class="form-check-input" type="radio" value="Non-aktif" name="status" id="non-aktif" <?php if ($r['status'] === "Non-aktif") { echo "checked"; }?>>
                                                <label class="form-check-label form-label" for="non-aktif">Non-aktif</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-1" for="gambar">Gambar</label>
                                    <input type="file" class="form-control" id="gambar" name="gambar" accept=".jpg, .jpeg, .png, .gif">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-success">Ubah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Modal Hapus Data -->
            <div class="modal fade" id="hapusDataModal<?= $r['id'] ?>" data-bs-backdrop="static" tabindex="-1" aria-labelledby="hapusDataModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 fw-bolder" id="hapusDataModalLabel">Konfirmasi Penghapusan</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Apakah Anda yakin ingin menghapus data galeri ini?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <a href="action/hapus.php?mod=<?= $_GET['mod'] ?>&id=<?= $r['id'] ?>" class="btn btn-danger">Hapus</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php $no++; 
				} 
			?>
        </table>
    </div>

    <!-- Modal tambah data -->
    <form id="form-data" method="POST" action="action/tambah.php?mod=<?= $_GET['mod'] ?>" enctype="multipart/form-data">
        <div class="modal fade" id="tambahDataModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="tambahDataModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-bolder" id="tambahDataModalLabel">Tambah Galeri</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label class="form-label mb-1" for="deskripsi">Deskripsi</label>
                            <span class="form-text">(Opsional)</span>
                            <textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="status">Status</label>
                            <div class="container">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <input class="form-check-input" type="radio" value="Aktif" name="status" id="aktif">
                                        <label class="form-check-label form-label" for="aktif">Aktif</label>
                                    </div>
                                    <div class="form-group col-6">
                                        <input class="form-check-input" type="radio" value="Non-aktif" name="status" id="non-aktif" checked>
                                        <label class="form-check-label form-label" for="non-aktif">Non-aktif</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-1" for="gambar">Gambar</label>
                            <input required type="file" class="form-control" id="gambar" name="gambar" accept=".jpg, .jpeg, .png, .gif">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Footer -->
    <?php include('template/footer.php') ?>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
