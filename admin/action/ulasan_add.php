<?php
include("../../config/koneksi.php");

$nama = $_POST['nama'];
$produk = $_POST['produk'];
$alamat = $_POST['alamat'];
$ulasan = $_POST['ulasan'];
$nilai = $_POST['nilai'];
$status = isset($_POST['status']) ? 'Ditampilkan' : 'Disembunyikan';

// Upload gambar dengan nama unik
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

if ($gambar != "") {
    // Ambil ekstensi file
    $ext = pathinfo($gambar, PATHINFO_EXTENSION);

    // Buat nama baru unik
    $namaBaru = uniqid('testi_') . '.' . $ext;

    // Simpan file
    move_uploaded_file($tmp, "../../asset/img/testimoni/" . $namaBaru);
} else {
    $namaBaru = ""; // Jika tidak upload gambar
}

$query = "INSERT INTO ulasan(nama, produk, alamat, ulasan, nilai, gambar, status)
          VALUES('$nama', '$produk', '$alamat', '$ulasan', '$nilai', '$namaBaru', '$status')";

mysqli_query($conn, $query);

header("Location: ../page/ulasan.php");
exit;
?>
