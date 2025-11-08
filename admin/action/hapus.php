<?php

include "../../config/koneksi.php";

$mod = $_GET['mod'];
$id = $_GET['id'];

switch ($mod) {
    case 'produk': 
        $result = mysqli_query($conn, "SELECT * FROM " .$mod. " WHERE id=$id");
        $row = mysqli_fetch_assoc($result);
        unlink("../../asset/img/" .$row['gambar']);
        unlink("../../asset/img/" .$row['gambar_kecil']);
        
        $query = "DELETE FROM produk WHERE id='" .$id. "'"; 
        break;
    
    case 'ulasan': 
        $result = mysqli_query($conn, "SELECT * FROM " .$mod. " WHERE id=$id");
        $row = mysqli_fetch_assoc($result);
        if ($row['gambar'] != 'Logo Ganyeum.png') {
            unlink("../../asset/img/" .$row['gambar']);
        }
        
        $query = "DELETE FROM ulasan WHERE id='" .$id. "'"; 
        break;

    case 'galeri': 
        $result = mysqli_query($conn, "SELECT * FROM " .$mod. " WHERE id=$id");
        $row = mysqli_fetch_assoc($result);
        unlink("../../asset/img/" .$row['gambar']);
        
        $query = "DELETE FROM galeri WHERE id='" .$id. "'"; 
        break;

    case 'diskon': 
        $query = "DELETE FROM diskon WHERE id='" .$id. "'"; 
        break;
    
}

mysqli_query($conn, $query);
header('Location: ../' .$mod);
exit;

?>