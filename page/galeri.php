<?php
include($_SERVER['DOCUMENT_ROOT'] . '/WEB_PPN/config/config.php');
include($_SERVER['DOCUMENT_ROOT'] . '/WEB_PPN/config/koneksi.php');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri</title>
    
    <link href="asset/img/LogoIco.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/style/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/style/style.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/style/fab.css">
    <link rel="stylesheet" href="asset/style/galeri.css">

    <style>
        * { font-family: 'Poppins', sans-serif; }
        body { font-family: 'Poppins', sans-serif; font-weight: 400; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Poppins', sans-serif; font-weight: 600; }
        .fw-bold { font-weight: 700 !important; }
        .fw-semibold { font-weight: 600 !important; }
        .fw-normal { font-weight: 400 !important; }
        .fw-light { font-weight: 300 !important; }

        /* Galeri Title dengan Garis Rapi */
        .galeri-title-container {
            margin-bottom: 3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 2rem;
            width: 100%;
        }

        .galeri-line {
            flex: 1;
            height: 3px;
            background: #1B5930;
            max-width: 150px;
        }

        .galeri-title-line {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 2.8rem;
            letter-spacing: 0.5px;
            color: #1B5930;
            margin: 0;
            white-space: nowrap;
        }

        /* Gallery Images - Fixed Size 636px × 423px */
        .gallery-item-wrapper {
            margin-bottom: 1.5rem;
            overflow: hidden;
            border-radius: 1rem;
            width: 100%;
            max-width: 636px;
            margin-left: auto;
            margin-right: auto;
        }

        .gallery-img {
            font-family: 'Poppins', sans-serif;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 636px;
            height: 423px;
            max-width: 100%;
            cursor: pointer;
            object-fit: cover;
            display: block;
            border-radius: 1rem;
        }

        .gallery-img:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(27, 89, 48, 0.2) !important;
        }

        /* Column Layout */
        .gallery-column {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Modal Styling */
        .modal-content {
            font-family: 'Poppins', sans-serif;
            background-color: #F5FAF6;
            border-radius: 20px;
        }

        .modal-header {
            font-family: 'Poppins', sans-serif;
            padding: 1.5rem;
            border: none;
        }

        .modal-body {
            font-family: 'Poppins', sans-serif;
            padding: 2rem;
        }

        #modalDate {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            font-size: 0.9rem;
            letter-spacing: 0.3px;
        }

        #modalTitle {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 1.5rem;
            letter-spacing: 0.3px;
            color: #1B5930;
        }

        #modalDesc {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            font-size: 0.95rem;
            line-height: 1.7;
            letter-spacing: 0.2px;
            color: #333;
        }

        #modalImg {
            max-height: 400px;
            object-fit: contain;
            width: 100%;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 5rem 0;
            color: #999;
        }

        .empty-state i {
            font-size: 4rem;
            opacity: 0.3;
            margin-bottom: 1rem;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .gallery-img {
                width: 100%;
                height: auto;
                aspect-ratio: 636 / 423;
            }
            .gallery-item-wrapper {
                max-width: 100%;
            }
        }

        @media (max-width: 768px) {
            .galeri-title-container { gap: 1rem; }
            .galeri-line { max-width: 80px; }
            .galeri-title-line { font-size: 2rem; }
            .gallery-img {
                width: 100%;
                height: auto;
                aspect-ratio: 636 / 423;
            }
        }

        @media (max-width: 576px) {
            .galeri-title-container {
                gap: 0.8rem;
                flex-wrap: wrap;
            }
            .galeri-line {
                max-width: 60px;
                height: 2px;
            }
            .galeri-title-line {
                font-size: 1.5rem;
                width: 100%;
                order: 2;
            }
            .galeri-line:first-child { order: 1; }
            .galeri-line:last-child { order: 3; }
            .gallery-img {
                width: 100%;
                height: auto;
                aspect-ratio: 636 / 423;
            }
        }
    </style>

</head>
<body>
    <?php include('admin/template/navbar.php'); ?>

    <!-- Galeri -->
    <div class="container-fluid py-5 mt-4">
        <div class="container">
            <div class="text-center galeri-title-container">
                <div class="galeri-line"></div>
                <h1 class="galeri-title-line">Galeri</h1>
                <div class="galeri-line"></div>
            </div>

            <div class="row g-4" id="galleryContainer">
                <!-- Data akan dimuat dari database via JavaScript -->
                <div class="col-12 text-center">
                    <div class="spinner-border text-success" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Popup -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 rounded-4">
                <div class="modal-header border-0 justify-content-start">
                    <img src="asset/img/logo.png" alt="Logo" style="height:40px;">
                </div>
                <div class="modal-body text-center">
                    <img id="modalImg" src="" alt="Detail Gambar" class="img-fluid rounded-4 mb-3 shadow">
                    <p class="text-muted mb-1 fw-semibold" id="modalDate"></p>
                    <h5 class="fw-bold mb-2" id="modalTitle"></h5>
                    <p class="px-3 fw-normal" id="modalDesc"></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const modal = new bootstrap.Modal(document.getElementById('imageModal'), {
            backdrop: true, 
            keyboard: true
        });

        // Load gallery data dynamically
        function loadGallery() {
            fetch('admin/proses/proses_galeri.php?action=get_all')
                .then(response => response.json())
                .then(data => {
                    const container = document.getElementById('galleryContainer');
                    container.innerHTML = '';

                    if (data.success && data.data.length > 0) {
                        // Filter hanya yang ditampilkan
                        const displayedItems = data.data.filter(item => item.status === 'Ditampilkan');
                        
                        if (displayedItems.length === 0) {
                            container.innerHTML = `
                                <div class="col-12 empty-state">
                                    <i class="bi bi-images"></i>
                                    <p class="text-muted">Tidak ada galeri untuk ditampilkan</p>
                                </div>
                            `;
                            return;
                        }

                        // Arrange in 2 columns with exact 636x423 size
                        let leftCol = '<div class="col-md-6 gallery-column">';
                        let rightCol = '<div class="col-md-6 gallery-column">';
                        
                        displayedItems.forEach((item, index) => {
                            const date = new Date(item.tanggal).toLocaleDateString('id-ID', {
                                year: 'numeric', 
                                month: 'long', 
                                day: 'numeric'
                            });

                            const itemHtml = `
                                <div class="gallery-item-wrapper">
                                    <img src="asset/img/${item.gambar}" 
                                         class="gallery-img shadow"
                                         alt="${item.judul}"
                                         data-title="${item.judul}"
                                         data-date="${date}"
                                         data-desc="${item.deskripsi || ''}"
                                         data-img="asset/img/${item.gambar}"
                                         onerror="this.src='asset/img/placeholder.png'">
                                </div>
                            `;
                            
                            // Alternate between left and right columns
                            if (index % 2 === 0) {
                                leftCol += itemHtml;
                            } else {
                                rightCol += itemHtml;
                            }
                        });

                        leftCol += '</div>';
                        rightCol += '</div>';
                        
                        container.innerHTML = leftCol + rightCol;

                        // Attach click listeners to images
                        document.querySelectorAll('.gallery-img').forEach(img => {
                            img.addEventListener('click', () => {
                                document.getElementById('modalImg').src = img.dataset.img;
                                document.getElementById('modalTitle').textContent = img.dataset.title;
                                document.getElementById('modalDate').textContent = img.dataset.date;
                                document.getElementById('modalDesc').textContent = img.dataset.desc;
                                modal.show();
                            });
                        });
                    } else {
                        container.innerHTML = `
                            <div class="col-12 empty-state">
                                <i class="bi bi-exclamation-circle"></i>
                                <p class="text-danger">Gagal memuat galeri</p>
                            </div>
                        `;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById('galleryContainer').innerHTML = `
                        <div class="col-12 empty-state">
                            <i class="bi bi-exclamation-triangle"></i>
                            <p class="text-danger">Terjadi kesalahan saat memuat galeri</p>
                        </div>
                    `;
                });
        }

        // Load on page load
        document.addEventListener('DOMContentLoaded', loadGallery);
    </script>

    <!-- WA Float -->
    <?php include('admin/template/whatsapp_float.php'); ?>

    <!-- Footer -->
    <?php include('admin/template/footer.php'); ?>

</body>
</html>