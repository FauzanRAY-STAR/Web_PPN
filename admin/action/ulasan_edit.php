<?php
include("../../config/koneksi.php");

// Validasi input
if (!isset($_POST['id']) || empty($_POST['id'])) {
    die("ID tidak valid");
}

// Escape semua input untuk keamanan
$id = mysqli_real_escape_string($conn, $_POST['id']);
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$produk = mysqli_real_escape_string($conn, $_POST['produk']);
$alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
$ulasan = mysqli_real_escape_string($conn, $_POST['ulasan']);
$nilai = mysqli_real_escape_string($conn, $_POST['nilai']);
$status = isset($_POST['status']) ? 'Ditampilkan' : 'Disembunyikan';

// Ambil gambar lama
$query = mysqli_query($conn, "SELECT gambar FROM ulasan WHERE id='$id'");

if (mysqli_num_rows($query) == 0) {
    die("Data tidak ditemukan");
}

$row = mysqli_fetch_assoc($query);
$gambarLama = $row['gambar'];
$gambarBaru = $gambarLama;

// Jika ada upload gambar baru
if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
    
    // Validasi tipe file
    $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
    $fileType = $_FILES['gambar']['type'];
    
    if (!in_array($fileType, $allowedTypes)) {
        die("Format file tidak diizinkan. Gunakan JPG, PNG, atau GIF.");
    }
    
    // Validasi ukuran file (max 2MB)
    if ($_FILES['gambar']['size'] > 2097152) {
        die("Ukuran file terlalu besar. Maksimal 2MB.");
    }
    
    // Ambil ekstensi file
    $ext = pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION);
    
    // Nama baru unik
    $namaUnik = uniqid('testi_') . "." . strtolower($ext);
    
    // Path upload
    $uploadPath = "../../asset/img/testimoni/" . $namaUnik;
    
    // Upload file baru
    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadPath)) {
        
        // Hapus gambar lama jika ada dan berbeda
        if ($gambarLama != "" && file_exists("../../asset/img/testimoni/" . $gambarLama)) {
            unlink("../../asset/img/testimoni/" . $gambarLama);
        }
        
        $gambarBaru = $namaUnik;
    } else {
        die("Gagal mengupload file");
    }
}

// Update database
$update = mysqli_query($conn, 
    "UPDATE ulasan SET 
        nama='$nama',
        produk='$produk',
        alamat='$alamat',
        ulasan='$ulasan',
        nilai='$nilai',
        gambar='$gambarBaru',
        status='$status'
    WHERE id='$id'"
);

if ($update) {
    echo "success";
} else {
    echo "error: " . mysqli_error($conn);
}

exit;
?>