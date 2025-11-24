<?php
session_start();

// Include koneksi database
require_once 'config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Ambil URL tujuan (halaman sebelumnya)
$redirect = $_POST['redirect_to'] ?? 'index.php';

$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');

if (empty($username) || empty($password)) {
    $_SESSION['login_error'] = 'Username dan password harus diisi.';
    header('Location: ' . $redirect);
    exit;
}

// Query user
$stmt = $conn->prepare("SELECT * FROM admin_users WHERE username = ? OR email = ? LIMIT 1");
$stmt->bind_param("ss", $username, $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Validasi
if ($user && md5($password) === $user['password']) {

    // Update last login
    $updateStmt = $conn->prepare("UPDATE admin_users SET last_login = NOW() WHERE id = ?");
    $updateStmt->bind_param("i", $user['id']);
    $updateStmt->execute();

    // Set session
    $_SESSION['user'] = [
        'id' => $user['id'],
        'username' => $user['username'],
        'email' => $user['email'],
        'nama_lengkap' => $user['nama_lengkap'],
        'is_admin' => (bool)$user['is_admin']
    ];

    // Jika admin → arahkan ke admin dashboard
    if ($user['is_admin']) {
        header('Location: admin/page/produk.php');
        exit;
    }

    // Selain admin → balik ke halaman sebelumnya
    header('Location: ' . $redirect);
    exit;

} else {
    $_SESSION['login_error'] = 'Username atau password salah.';
    header('Location: ' . $redirect);
    exit;
}
?>
