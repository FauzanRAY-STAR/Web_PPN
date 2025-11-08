<?php

date_default_timezone_set('Asia/Jakarta');

include '../../config/koneksi.php';

$mod = $_GET['mod'];

switch ($mod) {
    case 'produk':
        $kategori = $_POST['kategori'];
        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];
        $harga = $_POST['harga'];
        $status = $_POST['status'];

        $baru = isset($_POST['baru']) ? $_POST['baru'] : '';
        $laris = isset($_POST['laris']) ? $_POST['laris'] : '';
        $promo = isset($_POST['promo']) ? $_POST['promo'] : '';
        $bonus = isset($_POST['bonus']) ? $_POST['bonus'] : '';
        $habis = isset($_POST['habis']) ? $_POST['habis'] : '';
        $atribut_tersedia = array($baru, $laris, $promo, $bonus, $habis);
        $filter_atribut = array_filter($atribut_tersedia, function($value) {
            return !empty($value);
        });
        $atribut = implode(' ', $filter_atribut);

        if ($status === 'Aktif') {
            if (isset($_POST['pajang'])) {
                $status = 'Dipajang';
            }
        }

        $lokasi = "../../asset/img/";
        $nama_gambar = $_FILES["gambar"]["name"];
        $nama_gambar_kecil = $_FILES["gambar_kecil"]["name"];
        move_uploaded_file($_FILES['gambar']['tmp_name'], $lokasi.$nama_gambar);
        move_uploaded_file($_FILES['gambar_kecil']['tmp_name'], $lokasi.$nama_gambar_kecil);

        $query = "INSERT INTO produk (kategori, nama, deskripsi, harga, gambar, gambar_kecil, tanggal, atribut, status)
                  VALUES ('$kategori', '$nama', '$deskripsi', '$harga', '$nama_gambar', '$nama_gambar_kecil', NOW(), '$atribut', '$status')";
        break;

    case 'ulasan':
        $nama = $_POST['nama'];
        $ulasan = $_POST['ulasan'];
        $nilai = $_POST['nilai'];
        $status = $_POST['status'];
        $nama_gambar = 'Logo Ganyeum.png';

        if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] != UPLOAD_ERR_NO_FILE) {
            if ($_FILES['gambar']['error'] == UPLOAD_ERR_OK) {
                $lokasi = "../../asset/img/";
                $nama_gambar = $_FILES["gambar"]["name"];
                move_uploaded_file($_FILES['gambar']['tmp_name'], $lokasi.$nama_gambar);
            }
        }

        $query = "INSERT INTO ulasan (nama, ulasan, nilai, gambar, tanggal, status)
                  VALUES ('$nama', '$ulasan', '$nilai', '$nama_gambar', NOW(), '$status')";
        break;
    
    case 'galeri':
        $deskripsi = $_POST['deskripsi'];
        $status = $_POST['status'];

        $lokasi = "../../asset/img/";
        $nama_gambar = $_FILES["gambar"]["name"];
        move_uploaded_file($_FILES['gambar']['tmp_name'], $lokasi.$nama_gambar);

        $query = "INSERT INTO galeri (deskripsi, gambar, tanggal, status)
                  VALUES ('$deskripsi', '$nama_gambar', NOW(), '$status')";
        break;

    case 'diskon':
        $id_produk = $_POST['id_produk'];
        $diskon = $_POST['diskon'];
        $tanggal_mulai = $_POST['tanggal_mulai'];
        $tanggal_selesai = $_POST['tanggal_selesai'];
        $status = "Direncanakan";

        $tanggal_waktu_mulai = new DateTime($_POST['tanggal_mulai']);
        $tanggal_waktu_selesai = new DateTime($_POST['tanggal_selesai']);
        $tanggal_sekarang = new DateTime();
        if ($tanggal_sekarang >= $tanggal_waktu_mulai && $tanggal_sekarang <= $tanggal_waktu_selesai) {
            $status = "Berjalan";
        } else if ($tanggal_sekarang > $tanggal_waktu_selesai) {
            $status = "Selesai";
        }

        $query = "INSERT INTO diskon (id_produk, diskon, tanggal_mulai, tanggal_selesai, status)
                  VALUES ('$id_produk', '$diskon', '$tanggal_mulai', '$tanggal_selesai', '$status')";
        break;
}

mysqli_query($conn, $query);
header('Location: ../' .$mod);
exit;

?>