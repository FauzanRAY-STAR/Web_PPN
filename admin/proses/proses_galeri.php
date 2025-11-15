<?php
header('Content-Type: application/json');

// Mulai session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include koneksi
require_once('../../config/koneksi.php');

// Gunakan $conn (bukan $koneksi)
if (!$conn) {
    echo json_encode(['success' => false, 'message' => 'Database connection error']);
    exit;
}

$action = $_GET['action'] ?? $_POST['action'] ?? '';

// CREATE
if ($action === 'create' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = trim($_POST['judul'] ?? '');
    $deskripsi = trim($_POST['deskripsi'] ?? '');
    $status = $_POST['status'] ?? 'Ditampilkan';
    
    if (empty($judul) || empty($deskripsi)) {
        echo json_encode(['success' => false, 'message' => 'Judul dan deskripsi harus diisi']);
        exit;
    }

    $gambar = '';
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
        $file = $_FILES['gambar'];
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        
        if (!in_array($ext, $allowed)) {
            echo json_encode(['success' => false, 'message' => 'Format file tidak didukung']);
            exit;
        }

        if ($file['size'] > 5 * 1024 * 1024) {
            echo json_encode(['success' => false, 'message' => 'Ukuran file terlalu besar']);
            exit;
        }

        $filename = 'galeri_' . time() . '_' . uniqid() . '.' . $ext;
        $upload_path = $_SERVER['DOCUMENT_ROOT'] . '/WEB_PPN/asset/img/' . $filename;
        
        if (!move_uploaded_file($file['tmp_name'], $upload_path)) {
            echo json_encode(['success' => false, 'message' => 'Gagal upload file']);
            exit;
        }
        $gambar = $filename;
    } else {
        echo json_encode(['success' => false, 'message' => 'Gambar harus diupload']);
        exit;
    }

    try {
        $stmt = $conn->prepare("INSERT INTO galeri (judul, deskripsi, gambar, status) VALUES (?, ?, ?, ?)");
        if (!$stmt) {
            throw new Exception($conn->error);
        }
        
        $stmt->bind_param("ssss", $judul, $deskripsi, $gambar, $status);
        
        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Galeri berhasil ditambahkan']);
        } else {
            throw new Exception($stmt->error);
        }
        $stmt->close();
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

// READ - Get all
elseif ($action === 'get_all' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    try {
        $result = $conn->query("SELECT id, judul, deskripsi, gambar, status, tanggal FROM galeri ORDER BY tanggal DESC");
        if (!$result) {
            throw new Exception($conn->error);
        }
        
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        
        echo json_encode(['success' => true, 'data' => $data]);
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

// READ - Get single
elseif ($action === 'get' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = intval($_GET['id'] ?? 0);
    
    if ($id <= 0) {
        echo json_encode(['success' => false, 'message' => 'ID tidak valid']);
        exit;
    }
    
    try {
        $stmt = $conn->prepare("SELECT id, judul, deskripsi, gambar, status FROM galeri WHERE id = ?");
        if (!$stmt) {
            throw new Exception($conn->error);
        }
        
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($row = $result->fetch_assoc()) {
            echo json_encode(['success' => true, 'data' => $row]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Data tidak ditemukan']);
        }
        $stmt->close();
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

// UPDATE
elseif ($action === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id'] ?? 0);
    $judul = trim($_POST['judul'] ?? '');
    $deskripsi = trim($_POST['deskripsi'] ?? '');
    $status = $_POST['status'] ?? 'Ditampilkan';
    
    if ($id <= 0 || empty($judul) || empty($deskripsi)) {
        echo json_encode(['success' => false, 'message' => 'Data tidak lengkap']);
        exit;
    }

    try {
        $stmt = $conn->prepare("SELECT gambar FROM galeri WHERE id = ?");
        if (!$stmt) {
            throw new Exception($conn->error);
        }
        
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        
        if (!$row) {
            echo json_encode(['success' => false, 'message' => 'Data tidak ditemukan']);
            exit;
        }
        
        $gambar = $row['gambar'];
        $stmt->close();

        if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
            $file = $_FILES['gambar'];
            $allowed = ['jpg', 'jpeg', 'png', 'gif'];
            $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
            
            if (!in_array($ext, $allowed)) {
                echo json_encode(['success' => false, 'message' => 'Format file tidak didukung']);
                exit;
            }

            if ($file['size'] > 5 * 1024 * 1024) {
                echo json_encode(['success' => false, 'message' => 'Ukuran file terlalu besar']);
                exit;
            }

            if ($gambar && file_exists($_SERVER['DOCUMENT_ROOT'] . '/WEB_PPN/asset/img/' . $gambar)) {
                unlink($_SERVER['DOCUMENT_ROOT'] . '/WEB_PPN/asset/img/' . $gambar);
            }

            $filename = 'galeri_' . time() . '_' . uniqid() . '.' . $ext;
            $upload_path = $_SERVER['DOCUMENT_ROOT'] . '/WEB_PPN/asset/img/' . $filename;
            
            if (!move_uploaded_file($file['tmp_name'], $upload_path)) {
                echo json_encode(['success' => false, 'message' => 'Gagal upload file']);
                exit;
            }
            $gambar = $filename;
        }

        $stmt = $conn->prepare("UPDATE galeri SET judul = ?, deskripsi = ?, gambar = ?, status = ? WHERE id = ?");
        if (!$stmt) {
            throw new Exception($conn->error);
        }
        
        $stmt->bind_param("ssssi", $judul, $deskripsi, $gambar, $status, $id);
        
        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Galeri berhasil diperbarui']);
        } else {
            throw new Exception($stmt->error);
        }
        $stmt->close();
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

// DELETE
elseif ($action === 'delete' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $ids = json_decode($_POST['ids'] ?? '[]', true);
    
    if (empty($ids) || !is_array($ids)) {
        echo json_encode(['success' => false, 'message' => 'Tidak ada data yang dipilih']);
        exit;
    }

    try {
        foreach ($ids as $id) {
            $id = intval($id);
            if ($id <= 0) continue;
            
            $stmt = $conn->prepare("SELECT gambar FROM galeri WHERE id = ?");
            if (!$stmt) {
                throw new Exception($conn->error);
            }
            
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            $stmt->close();

            if ($row && $row['gambar']) {
                $file_path = $_SERVER['DOCUMENT_ROOT'] . '/WEB_PPN/asset/img/' . $row['gambar'];
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }

            $stmt = $conn->prepare("DELETE FROM galeri WHERE id = ?");
            if (!$stmt) {
                throw new Exception($conn->error);
            }
            
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->close();
        }
        
        echo json_encode(['success' => true, 'message' => 'Data berhasil dihapus']);
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

else {
    echo json_encode(['success' => false, 'message' => 'Action tidak valid']);
}
?>