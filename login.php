<?php
session_start();

// Include koneksi database
require_once 'config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');

if (empty($username) || empty($password)) {
    $_SESSION['login_error'] = 'Username dan password harus diisi.';
    header('Location: index.php');
    exit;
}

// Query untuk mencari user berdasarkan username atau email
$stmt = $conn->prepare("SELECT * FROM admin_users WHERE username = ? OR email = ? LIMIT 1");
$stmt->bind_param("ss", $username, $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && md5($password) === $user['password']) {
    // Update last_login
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

    // Redirect setelah login
    header('Location: admin/page/produk.php');
    exit;
} else {
    $_SESSION['login_error'] = 'Username atau password salah.';
    header('Location: index.php');
    exit;
}
?>