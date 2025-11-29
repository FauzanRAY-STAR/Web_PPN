<?php
include __DIR__ . '/../config/config.php';
include __DIR__ . '/../config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami </title>

    <!-- Favicon -->
    <link href="asset/img/LogoIco.ico" rel="icon">

    <!-- Google Fonts - Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/Web_PPN/asset/style/tentang_kami.css?v=1">
    <!-- Custom Poppins Styling -->
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }

        .fw-bold {
            font-weight: 700 !important;
        }

        .fw-semibold {
            font-weight: 600 !important;
        }

        .fw-normal {
            font-weight: 400 !important;
        }

        .fw-light {
            font-weight: 300 !important;
        }

        /* Hero Section Styling */
        .hero-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            letter-spacing: 1px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
        }

        /* Section Titles */
        .section-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        /* Intro Text */
        .intro-text {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            line-height: 1.8;
            font-size: 1.1rem;
        }

        /* About Text */
        .about-text {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            line-height: 1.8;
            font-size: 1rem;
        }

        /* Stat Cards */
        .stat-number {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 2.5rem;
        }

        .stat-label {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 0.95rem;
        }

        /* Value Cards */
        .value-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 1.2rem;
        }

        .value-desc {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            line-height: 1.6;
            font-size: 0.95rem;
        }

        /* CTA Section */
        .cta-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
        }

        .cta-text {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            line-height: 1.6;
            font-size: 1.05rem;
        }

        .cta-button {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
    </style>

</head>

<body>

    <?php include __DIR__ . '/../admin/template/navbar.php'; ?>

    <div class="main-content">
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <div class="hero-divider left"></div>
                <div class="hero-text-wrapper">
                    <h1 class="hero-title fw-bold">PT Pramudita Pupuk Nusantara</h1>
                    <div class="hero-underline"></div>
                </div>
                <div class="hero-divider right"></div>
            </div>
        </section>

        <!-- Introduction Text -->
        <section class="intro-section">
            <div class="intro-content">
                <p class="intro-text fw-normal">
                    Di tengah tantangan global dalam sektor pertanian—mulai dari perubahan iklim, degradasi lahan, rendahnya produktivitas petani, hingga krisis ketahanan pangan—PT Pramudita Pupuk Nusantara hadir sebagai jawaban untuk membangun sistem pertanian Indonesia yang lebih tangguh, modern, dan berkelanjutan.
                </p>
            </div>
        </section>

        <!-- Video Section -->
        <section class="video-section">
            <div class="video-container">
                <div class="video-wrapper">
                    <div class="company-video" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                        <iframe
                            src="https://www.youtube.com/embed/s5yg3wwdEzI"
                            title="YouTube video"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                        </iframe>
                    </div>
                    <div class="video-overlay">
                        <div class="play-button">
                            <svg viewBox="0 0 24 24" fill="white">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="about-section">
            <div class="about-header">
                <h2 class="section-title fw-bold">Tentang Kami</h2>
                <div class="title-decoration"></div>
            </div>

            <div class="about-content">
                <div class="about-text-wrapper">
                    <p class="about-text fw-normal">
                        PT Pramudita Pupuk Nusantara adalah perusahaan perorangan yang bergerak dalam bidang produksi, distribusi, dan pemasaran pupuk, dengan cakupan layanan menyeluruh dari hulu ke hilir. Kami tidak hanya memproduksi pupuk, tetapi juga melakukan edukasi pertanian, pembinaan petani, hingga pendampingan dampak penggunaan produk kami di lapangan. Dengan demikian, kami mampu memberikan solusi pertanian terpadu yang aplikatif, efisien, dan relevan terhadap kondisi petani Indonesia saat ini.
                    </p>
                </div>

                <!-- Stats Cards -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon">🌾</div>
                        <div class="stat-number fw-bold" data-target="1000">10</div>
                        <div class="stat-label fw-semibold">Petani Mitra</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">🏭</div>
                        <div class="stat-number fw-bold" data-target="50">5</div>
                        <div class="stat-label fw-semibold">Produk Unggulan</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">🌍</div>
                        <div class="stat-number fw-bold" data-target="100">20</div>
                        <div class="stat-label fw-semibold">Wilayah Distribusi</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">⭐</div>
                        <div class="stat-number fw-bold" data-target="15">2</div>
                        <div class="stat-label fw-semibold">Tahun Pengalaman</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Values Section -->
        <section class="values-section">
            <div class="values-header">
                <h2 class="section-title fw-bold">Nilai-Nilai Kami</h2>
                <div class="title-decoration"></div>
            </div>

            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon-wrapper">
                        <div class="value-icon">🎯</div>
                    </div>
                    <h3 class="value-title fw-bold">Inovasi</h3>
                    <p class="value-desc fw-normal">Mengembangkan solusi pertanian terkini dengan teknologi modern</p>
                </div>
                <div class="value-card">
                    <div class="value-icon-wrapper">
                        <div class="value-icon">🤝</div>
                    </div>
                    <h3 class="value-title fw-bold">Kolaborasi</h3>
                    <p class="value-desc fw-normal">Bekerja sama dengan petani untuk kesuksesan bersama</p>
                </div>
                <div class="value-card">
                    <div class="value-icon-wrapper">
                        <div class="value-icon">🌱</div>
                    </div>
                    <h3 class="value-title fw-bold">Berkelanjutan</h3>
                    <p class="value-desc fw-normal">Membangun pertanian yang ramah lingkungan dan berkelanjutan</p>
                </div>
                <div class="value-card">
                    <div class="value-icon-wrapper">
                        <div class="value-icon">💪</div>
                    </div>
                    <h3 class="value-title fw-bold">Integritas</h3>
                    <p class="value-desc fw-normal">Komitmen penuh terhadap kualitas dan kepuasan pelanggan</p>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="cta-content">
                <h2 class="cta-title fw-bold">Mari Bergabung Bersama Kami</h2>
                <p class="cta-text fw-semibold">Menjadi bagian dari revolusi pertanian Indonesia yang lebih modern dan berkelanjutan</p>
                <a href="https://api.whatsapp.com/send/?phone=6281234567890&text&type=phone_number&app_absent=0" class="cta-button fw-semibold" style="display: inline-block; text-decoration: none;">
                    Hubungi Kami
                </a>

            </div>
        </section>
        <!-- Tambahkan sebelum tag penutup </div> dari main-content, setelah CTA Section -->

        <!-- Location Section -->
        <section class="location-section py-5">
            <div class="container">
                <div class="row">
                    <!-- Left Column - Contact Info -->
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <div class="contact-card p-4" style="background: linear-gradient(135deg, #155724 0%, #28A745 100%); border-radius: 20px; color: white; height: 100%;">
                            <!-- Header -->
                            <div class="mb-4">
                                <h5 class="fw-normal" style="color: #FFED64; font-size: 1rem; letter-spacing: 1px;">Lokasi</h5>
                                <h2 class="fw-bold mb-0" style="font-size: 2rem; line-height: 1.3;">Temukan kami di sini</h2>
                            </div>

                            <!-- Office Address -->
                            <div class="mb-4">
                                <h5 class="fw-bold mb-3" style="font-size: 1.2rem;">
                                    <i class="bi bi-building me-2"></i>Hubungi Kami
                                </h5>
                                <div class="d-flex mb-2">
                                    <i class="bi bi-geo-alt-fill me-3" style="color: #FFED64; font-size: 1.2rem; min-width: 20px;"></i>
                                    <p class="mb-0" style="line-height: 1.7;">
                                        Jalan HOS Notosuwiryo Gang 1 No.10,<br>
                                        RT.01/RW.14, Kruwet, Teluk, Kec. Purwokerto Sel.,<br>
                                        Kabupaten Banyumas, Jawa Tengah 53145
                                    </p>
                                </div>
                            </div>

                            <!-- Pesan Sekarang -->
                            <div class="mb-4">
                                <h5 class="fw-bold mb-3" style="font-size: 1.2rem;">
                                    <i class="bi bi-cart3 me-2"></i>Pesan Sekarang !
                                </h5>
                                <a href="./halaman_produk.php" class="btn btn-light px-4 py-2 rounded-pill fw-semibold" style="transition: all 0.3s;">
                                    <i class="bi bi-box-seam me-2"></i>Pupuk Pramudita Nusantara
                                </a>

                            </div>

                            <!-- Social Media -->

                        </div>
                    </div>

                    <!-- Right Column - Map -->
                    <div class="col-lg-7">
                        <div class="map-container" style="border-radius: 20px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.15); height: 100%; min-height: 500px; position: relative;">
                            <div id="map" style="width: 100%; height: 100%; min-height: 500px;"></div>

                            <!-- Map Legend -->
                            <div class="map-legend" style="position: absolute; bottom: 20px; left: 20px; background: white; padding: 15px 20px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); z-index: 1000;">
                                <div class="d-flex align-items-center mb-2">
                                    <div style="width: 12px; height: 12px; background: #2B8D4C; border-radius: 50%; margin-right: 10px;"></div>
                                    <small class="fw-semibold">Kantor Pusat</small>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div style="width: 12px; height: 12px; background: #FFED64; border-radius: 50%; margin-right: 10px;"></div>
                                    <small class="fw-semibold">Lokasi Konsumen</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Leaflet CSS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

        <!-- Leaflet JS -->
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

        <style>
            /* Social Link Hover Effect */
            .social-link:hover {
                background: rgba(255, 255, 255, 0.3) !important;
                transform: translateY(-3px);
            }

            /* Map Marker Custom */
            .custom-marker {
                background: none;
                border: none;
            }

            /* Responsive */
            @media (max-width: 991px) {
                .contact-card {
                    margin-bottom: 2rem;
                }
            }
        </style>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Initialize Map centered on Purwokerto
                const map = L.map('map').setView([-7.4246, 109.2379], 12);

                // Add OpenStreetMap tiles
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '© OpenStreetMap contributors',
                    maxZoom: 19
                }).addTo(map);

                // Custom Icons
                const officeIcon = L.divIcon({
                    className: 'custom-marker',
                    html: `<div style="background: #2B8D4C; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 10px rgba(43,141,76,0.4); border: 3px solid white;">
                <i class="bi bi-building" style="color: white; font-size: 18px;"></i>
               </div>`,
                    iconSize: [40, 40],
                    iconAnchor: [20, 40],
                    popupAnchor: [0, -40]
                });

                const customerIcon = L.divIcon({
                    className: 'custom-marker',
                    html: `<div style="background: #FFED64; width: 35px; height: 35px; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 3px 8px rgba(255,237,100,0.4); border: 3px solid white;">
                <i class="bi bi-person-check-fill" style="color: #2B8D4C; font-size: 16px;"></i>
               </div>`,
                    iconSize: [35, 35],
                    iconAnchor: [17.5, 35],
                    popupAnchor: [0, -35]
                });

                // Office Location
                const officeMarker = L.marker([-7.4246, 109.2379], {
                    icon: officeIcon
                }).addTo(map);
                officeMarker.bindPopup(`
        <div style="padding: 10px; min-width: 200px;">
            <h6 class="fw-bold mb-2" style="color: #2B8D4C;">
                <i class="bi bi-building me-2"></i>Kantor Pusat
            </h6>
            <p class="mb-1" style="font-size: 0.85rem; line-height: 1.5;">
                Jl. HOS Notosuwiryo Gang 1 No.10<br>
                Purwokerto Selatan, Banyumas<br>
                Jawa Tengah 53145
            </p>
            <a href="https://maps.google.com/?q=-7.4246,109.2379" target="_blank" class="btn btn-sm btn-success mt-2 w-100">
                <i class="bi bi-map me-1"></i>Buka di Google Maps
            </a>
        </div>
    `);

                // Customer Locations (Sample data - spread around Purwokerto area)
                const customerLocations = [{
                        lat: -7.4180,
                        lng: 109.2450,
                        name: 'Pak Budi',
                        area: 'Purwokerto Utara',
                        product: 'Silika V-0D01'
                    },
                    {
                        lat: -7.4310,
                        lng: 109.2280,
                        name: 'Bu Siti',
                        area: 'Purwokerto Barat',
                        product: 'Tera Nusa Maxi-D'
                    },
                    {
                        lat: -7.4200,
                        lng: 109.2500,
                        name: 'Pak Ahmad',
                        area: 'Purwokerto Timur',
                        product: 'Tera Nusa Hama'
                    },
                    {
                        lat: -7.4350,
                        lng: 109.2450,
                        name: 'Pak Joko',
                        area: 'Kembaran',
                        product: 'Silika V-0D01'
                    },
                    {
                        lat: -7.4150,
                        lng: 109.2300,
                        name: 'Bu Ani',
                        area: 'Sokaraja',
                        product: 'Tera Nusa Maxi-B'
                    },
                    {
                        lat: -7.4280,
                        lng: 109.2520,
                        name: 'Pak Dedi',
                        area: 'Purwokerto Selatan',
                        product: 'Tera Nusa Silika Cair'
                    },
                    {
                        lat: -7.4100,
                        lng: 109.2400,
                        name: 'Bu Ratna',
                        area: 'Purwokerto Utara',
                        product: 'Tera Nusa Maxi-D'
                    },
                    {
                        lat: -7.4380,
                        lng: 109.2350,
                        name: 'Pak Hendra',
                        area: 'Banyumas',
                        product: 'Silika V-0D01'
                    },
                    {
                        lat: -7.4220,
                        lng: 109.2180,
                        name: 'Bu Dewi',
                        area: 'Sokaraja Barat',
                        product: 'Tera Nusa Hama'
                    },
                    {
                        lat: -7.4320,
                        lng: 109.2580,
                        name: 'Pak Agus',
                        area: 'Purwokerto Timur',
                        product: 'Tera Nusa Maxi-B'
                    }
                ];

                // Add customer markers
                customerLocations.forEach(function(customer) {
                    const marker = L.marker([customer.lat, customer.lng], {
                        icon: customerIcon
                    }).addTo(map);
                    marker.bindPopup(`
            <div style="padding: 10px; min-width: 180px;">
                <h6 class="fw-bold mb-2" style="color: #2B8D4C;">
                    <i class="bi bi-person-circle me-2"></i>${customer.name}
                </h6>
                <p class="mb-1" style="font-size: 0.85rem;">
                    <i class="bi bi-geo-alt text-muted me-1"></i>${customer.area}
                </p>
                <p class="mb-0" style="font-size: 0.85rem;">
                    <i class="bi bi-box-seam text-success me-1"></i><strong>Produk:</strong><br>
                    <span class="badge bg-success mt-1">${customer.product}</span>
                </p>
            </div>
        `);
                });

                // Add zoom control position
                map.zoomControl.setPosition('topright');

                // Fit bounds to show all markers
                const group = L.featureGroup([officeMarker, ...customerLocations.map(c => L.marker([c.lat, c.lng]))]);
                map.fitBounds(group.getBounds().pad(0.1));
            });
        </script>
    </div>


    <!-- WA -->
    <?php include __DIR__ . '/../admin/template/whatsapp_float.php'; ?>

    <!-- Footer -->
    <?php include __DIR__ . '/../admin/template/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../asset/js/tentang_kami.js"></script>
</body>

</html>