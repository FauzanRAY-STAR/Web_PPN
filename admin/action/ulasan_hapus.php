<?php
include("../../config/koneksi.php"); // Perbaiki dari database.php ke koneksi.php

// Validasi ID
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID tidak valid");
}

$id = mysqli_real_escape_string($conn, $_GET['id']); // Escape untuk keamanan

// Ambil nama file gambar sebelum dihapus
$result = mysqli_query($conn, "SELECT gambar FROM ulasan WHERE id='$id'");

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $gambar = $row['gambar'];
    
    // Hapus data dari database
    $delete = mysqli_query($conn, "DELETE FROM ulasan WHERE id='$id'");
    
    if ($delete) {
        // Hapus file gambar jika ada
        $filePath = "../../asset/img/testimoni/" . $gambar;
        if ($gambar != "" && file_exists($filePath)) {
            unlink($filePath);
        }
        
        echo "success"; // Return success untuk AJAX
    } else {
        echo "error: " . mysqli_error($conn);
    }
} else {
    echo "error: Data tidak ditemukan";
}

exit;
?>