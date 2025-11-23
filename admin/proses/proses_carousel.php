<?php
header('Content-Type: application/json');

// Mulai session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include koneksi
require_once('../../config/koneksi.php');

// Gunakan $conn
if (!$conn) {
    echo json_encode(['success' => false, 'message' => 'Database connection error']);
    exit;
}

$action = $_GET['action'] ?? $_POST['action'] ?? '';

// =============================================
// CREATE CAROUSEL
// =============================================
if ($action === 'create' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = trim($_POST['judul'] ?? '');
    $deskripsi = trim($_POST['deskripsi'] ?? '');
    $urutan = intval($_POST['urutan'] ?? 0);
    $status = $_POST['status'] ?? 'Aktif';
    
    if (empty($judul)) {
        echo json_encode(['success' => false, 'message' => 'Judul harus diisi']);
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
            echo json_encode(['success' => false, 'message' => 'Ukuran file terlalu besar (Max 5MB)']);
            exit;
        }

        $filename = 'carousel_' . time() . '_' . uniqid() . '.' . $ext;
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
        $stmt = $conn->prepare("INSERT INTO carousel (judul, deskripsi, gambar, urutan, status) VALUES (?, ?, ?, ?, ?)");
        if (!$stmt) {
            throw new Exception($conn->error);
        }
        
        $stmt->bind_param("sssis", $judul, $deskripsi, $gambar, $urutan, $status);
        
        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Carousel berhasil ditambahkan']);
        } else {
            throw new Exception($stmt->error);
        }
        $stmt->close();
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

// =============================================
// READ - Get All Carousel
// =============================================
elseif ($action === 'get_all' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    try {
        $result = $conn->query("SELECT id, judul, deskripsi, gambar, urutan, status, tanggal FROM carousel ORDER BY urutan ASC, tanggal DESC");
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

// =============================================
// READ - Get Single Carousel
// =============================================
elseif ($action === 'get' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = intval($_GET['id'] ?? 0);
    
    if ($id <= 0) {
        echo json_encode(['success' => false, 'message' => 'ID tidak valid']);
        exit;
    }
    
    try {
        $stmt = $conn->prepare("SELECT id, judul, deskripsi, gambar, urutan, status FROM carousel WHERE id = ?");
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

// =============================================
// UPDATE CAROUSEL
// =============================================
elseif ($action === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id'] ?? 0);
    $judul = trim($_POST['judul'] ?? '');
    $deskripsi = trim($_POST['deskripsi'] ?? '');
    $urutan = intval($_POST['urutan'] ?? 0);
    $status = $_POST['status'] ?? 'Aktif';
    
    if ($id <= 0 || empty($judul)) {
        echo json_encode(['success' => false, 'message' => 'Data tidak lengkap']);
        exit;
    }

    try {
        // Get existing image
        $stmt = $conn->prepare("SELECT gambar FROM carousel WHERE id = ?");
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

        // Handle new image upload
        if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
            $file = $_FILES['gambar'];
            $allowed = ['jpg', 'jpeg', 'png', 'gif'];
            $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
            
            if (!in_array($ext, $allowed)) {
                echo json_encode(['success' => false, 'message' => 'Format file tidak didukung']);
                exit;
            }

            if ($file['size'] > 5 * 1024 * 1024) {
                echo json_encode(['success' => false, 'message' => 'Ukuran file terlalu besar (Max 5MB)']);
                exit;
            }

            // Delete old image
            if ($gambar && file_exists($_SERVER['DOCUMENT_ROOT'] . '/WEB_PPN/asset/img/' . $gambar)) {
                unlink($_SERVER['DOCUMENT_ROOT'] . '/WEB_PPN/asset/img/' . $gambar);
            }

            // Upload new image
            $filename = 'carousel_' . time() . '_' . uniqid() . '.' . $ext;
            $upload_path = $_SERVER['DOCUMENT_ROOT'] . '/WEB_PPN/asset/img/' . $filename;
            
            if (!move_uploaded_file($file['tmp_name'], $upload_path)) {
                echo json_encode(['success' => false, 'message' => 'Gagal upload file']);
                exit;
            }
            $gambar = $filename;
        }

        // Update database
        $stmt = $conn->prepare("UPDATE carousel SET judul = ?, deskripsi = ?, gambar = ?, urutan = ?, status = ? WHERE id = ?");
        if (!$stmt) {
            throw new Exception($conn->error);
        }
        
        $stmt->bind_param("sssisi", $judul, $deskripsi, $gambar, $urutan, $status, $id);
        
        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Carousel berhasil diperbarui']);
        } else {
            throw new Exception($stmt->error);
        }
        $stmt->close();
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

// =============================================
// DELETE CAROUSEL
// =============================================
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
            
            // Get image filename
            $stmt = $conn->prepare("SELECT gambar FROM carousel WHERE id = ?");
            if (!$stmt) {
                throw new Exception($conn->error);
            }
            
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            $stmt->close();

            // Delete image file
            if ($row && $row['gambar']) {
                $file_path = $_SERVER['DOCUMENT_ROOT'] . '/WEB_PPN/asset/img/' . $row['gambar'];
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }

            // Delete from database
            $stmt = $conn->prepare("DELETE FROM carousel WHERE id = ?");
            if (!$stmt) {
                throw new Exception($conn->error);
            }
            
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->close();
        }
        
        echo json_encode(['success' => true, 'message' => 'Data carousel berhasil dihapus']);
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

// =============================================
// GET ACTIVE CAROUSEL (untuk frontend)
// =============================================
elseif ($action === 'get_active' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    try {
        $result = $conn->query("SELECT id, judul, deskripsi, gambar, urutan FROM carousel WHERE status = 'Aktif' ORDER BY urutan ASC");
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

else {
    echo json_encode(['success' => false, 'message' => 'Action tidak valid']);
}
?>