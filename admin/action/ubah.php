<?php

include '../../config/koneksi.php';

$mod = $_GET['mod'];
$id = $_POST['id'];

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

        if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] != UPLOAD_ERR_NO_FILE && isset($_FILES['gambar_kecil']) && $_FILES['gambar_kecil']['error'] != UPLOAD_ERR_NO_FILE) {
            if ($_FILES['gambar']['error'] == UPLOAD_ERR_OK && $_FILES['gambar_kecil']['error'] == UPLOAD_ERR_OK) {
                $result = mysqli_query($conn, "SELECT * FROM " .$mod. " WHERE id=$id");
                $row = mysqli_fetch_assoc($result);
                unlink("../../asset/img/" .$row['gambar']);
                unlink("../../asset/img/" .$row['gambar_kecil']);
                
                $lokasi = "../../asset/img/";
                $nama_gambar = $_FILES["gambar"]["name"];
                $nama_gambar_kecil = $_FILES["gambar_kecil"]["name"];
                move_uploaded_file($_FILES['gambar']['tmp_name'], $lokasi.$nama_gambar);
                move_uploaded_file($_FILES['gambar_kecil']['tmp_name'], $lokasi.$nama_gambar_kecil);
        
                $query = "UPDATE produk SET kategori='" .$kategori. "', nama='" .$nama. "', deskripsi='" .$deskripsi. "', harga='" .$harga. "', 
                          gambar='" .$nama_gambar. "', gambar_kecil='" .$nama_gambar_kecil. "', atribut='" .$atribut. "', status='" .$status. "' WHERE id='" .$id. "'";
            }
        }
        else if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] != UPLOAD_ERR_NO_FILE && isset($_FILES['gambar_kecil']) && $_FILES['gambar_kecil']['error'] == UPLOAD_ERR_NO_FILE) {
            if ($_FILES['gambar']['error'] == UPLOAD_ERR_OK) {
                $result = mysqli_query($conn, "SELECT * FROM " .$mod. " WHERE id=$id");
                $row = mysqli_fetch_assoc($result);
                unlink("../../asset/img/" .$row['gambar']);
                
                $lokasi = "../../asset/img/";
                $nama_gambar = $_FILES["gambar"]["name"];
                move_uploaded_file($_FILES['gambar']['tmp_name'], $lokasi.$nama_gambar);
        
                $query = "UPDATE produk SET kategori='" .$kategori. "', nama='" .$nama. "', deskripsi='" .$deskripsi. "', harga='" .$harga. "', 
                          gambar='" .$nama_gambar. "', atribut='" .$atribut. "', status='" .$status. "' WHERE id='" .$id. "'";
            }
        }
        else if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == UPLOAD_ERR_NO_FILE && isset($_FILES['gambar_kecil']) && $_FILES['gambar_kecil']['error'] != UPLOAD_ERR_NO_FILE) {
            if ($_FILES['gambar_kecil']['error'] == UPLOAD_ERR_OK) {
                $result = mysqli_query($conn, "SELECT * FROM " .$mod. " WHERE id=$id");
                $row = mysqli_fetch_assoc($result);
                unlink("../../asset/img/" .$row['gambar_kecil']);
                
                $lokasi = "../../asset/img/";
                $nama_gambar_kecil = $_FILES["gambar_kecil"]["name"];
                move_uploaded_file($_FILES['gambar_kecil']['tmp_name'], $lokasi.$nama_gambar_kecil);
        
                $query = "UPDATE produk SET kategori='" .$kategori. "', nama='" .$nama. "', deskripsi='" .$deskripsi. "', harga='" .$harga. "', 
                          gambar_kecil='" .$nama_gambar_kecil. "', atribut='" .$atribut. "', status='" .$status. "' WHERE id='" .$id. "'";
            }
        }
        else {
            $query = "UPDATE produk SET kategori='" .$kategori. "', nama='" .$nama. "', deskripsi='" .$deskripsi. "', harga='" .$harga. "', 
                      atribut='" .$atribut. "', status='" .$status. "' WHERE id='" .$id. "'";
        }
        break;

    case 'ulasan':
        $nama = $_POST['nama'];
        $ulasan = $_POST['ulasan'];
        $nilai = $_POST['nilai'];
        $status = $_POST['status'];
        $nama_gambar = 'Logo Ganyeum.png';

        if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] != UPLOAD_ERR_NO_FILE) {
            if ($_FILES['gambar']['error'] == UPLOAD_ERR_OK) {
                $result = mysqli_query($conn, "SELECT * FROM " .$mod. " WHERE id=$id");
                $row = mysqli_fetch_assoc($result);
                if ($row['gambar'] != $nama_gambar) {
                    unlink("../../asset/img/" .$row['gambar']);
                }
                
                $lokasi = "../../asset/img/";
                $nama_gambar = $_FILES["gambar"]["name"];
                move_uploaded_file($_FILES['gambar']['tmp_name'], $lokasi.$nama_gambar);

                $query = "UPDATE ulasan SET nama='" .$nama. "', ulasan='" .$ulasan. "', nilai='" .$nilai. "', 
                          gambar='" .$nama_gambar. "', status='" .$status. "' WHERE id='" .$id. "'";
            }
        }
        else {
            $query = "UPDATE ulasan SET nama='" .$nama. "', ulasan='" .$ulasan. "', nilai='" .$nilai. "', 
                      status='" .$status. "' WHERE id='" .$id. "'";
        }
        break;

    case 'galeri':
        $deskripsi = $_POST['deskripsi'];
        $status = $_POST['status'];

        if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] != UPLOAD_ERR_NO_FILE) {
            if ($_FILES['gambar']['error'] == UPLOAD_ERR_OK) {
                $result = mysqli_query($conn, "SELECT * FROM " .$mod. " WHERE id=$id");
                $row = mysqli_fetch_assoc($result);
                unlink("../../asset/img/" .$row['gambar']);
                
                $lokasi = "../../asset/img/";
                $nama_gambar = $_FILES["gambar"]["name"];
                move_uploaded_file($_FILES['gambar']['tmp_name'], $lokasi.$nama_gambar);

                $query = "UPDATE galeri SET deskripsi='" .$deskripsi. "', gambar='" .$nama_gambar. "', status='" .$status. "' WHERE id='" .$id. "'";
            }
        }
        else {
            $query = "UPDATE galeri SET deskripsi='" .$deskripsi. "', status='" .$status. "' WHERE id='" .$id. "'";
        }
        break;

    case 'diskon':
        $id_produk = $_POST['id_produk'];
        $diskon = $_POST['diskon'];
        $tanggal_mulai = $_POST['tanggal_mulai'];
        $tanggal_selesai = $_POST['tanggal_selesai'];
        $status = $_POST['status'];

        $tanggal_waktu_mulai = new DateTime($_POST['tanggal_mulai']);
        $tanggal_waktu_selesai = new DateTime($_POST['tanggal_selesai']);
        $tanggal_sekarang = new DateTime();
        if ($status === 'Direncanakan' && $tanggal_sekarang >= $tanggal_waktu_mulai && $tanggal_sekarang <= $tanggal_waktu_selesai) {
            $status = "Berjalan";
        } else if ($status === 'Berjalan' && $tanggal_sekarang > $tanggal_waktu_selesai) {
            $status = "Selesai";
        }

        $query = "UPDATE diskon SET id_produk='" .$id_produk. "', diskon='" .$diskon. "', tanggal_mulai='" .$tanggal_mulai. "', 
                  tanggal_selesai='" .$tanggal_selesai. "', status='" .$status. "' WHERE id='" .$id. "'";
        break;
}

mysqli_query($conn, $query);
header('Location: ../' .$mod);
exit;

?>