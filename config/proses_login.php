<?php

include("koneksi.php");
session_start();

if ($stmt = $conn->prepare("SELECT * FROM pengguna WHERE username = ? AND password = ?")) {
    $stmt->bind_param("ss", $_POST['username'], md5($_POST['password']));
    
    $stmt->execute();
    
    $result = $stmt->get_result();
    $valid = false;

    while ($r = $result->fetch_assoc()) {
        $_SESSION['nama'] = $r['nama'];
        $_SESSION['username'] = $r['username'];
        $_SESSION['peran'] = $r['peran'];
        $valid = true;
    }

    $stmt->close();
}

if ($valid) {
    header('Location: ../admin/');
}
else {
    if (isset($_GET['gagal'])) {
        $gagal = intval($_GET['gagal']) + 1;
    } else {
        $gagal = 1;
    }

    if ($gagal < 3) {
        header('Location: ../login.php?gagal=' .strval($gagal));
    } else {
        header('Location: ../');
    }
    
}
exit;

?>