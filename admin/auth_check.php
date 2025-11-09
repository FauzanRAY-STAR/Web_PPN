<?php
// admin/auth_check.php
session_start();

// Jika belum login atau bukan admin -> redirect ke homepage
if (empty($_SESSION['user']) || empty($_SESSION['user']['is_admin'])) {
    // Optional: simpan pesan
    $_SESSION['login_error'] = 'Silakan login terlebih dahulu.';
    header('Location: /'); // sesuaikan ke halaman utama yang berisi modal login
    exit;
}
