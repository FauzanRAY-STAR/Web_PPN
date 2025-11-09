<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logbook - PPN</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../../asset/style/logbook.css">

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <div class="d-flex">
    <?php
    include('../template/sidebar.php');
    ?>

    <div class="main w-100">
      <!-- Header -->
      <div class="header-section">Logbook</div>

      <!-- Statistik -->
      <div class="row g-3 mb-3">
        <div class="col-md-4 col-lg-3">
          <div class="card-stat">
            <!-- Chart -->
            <canvas id="chartProduk" height="200"></canvas>
            <span class="chart-label">Rekap Bulanan</span>
          </div>
        </div>
        <div class="col-md-2 col-lg-3">
          <div class="card-stat center">
            <p class="label">Produk Terjual</p>
            <h3>4000</h3>
          </div>
        </div>
        <div class="col-md-3 col-lg-3">
          <div class="card-stat center">
            <p class="label">Pendapatan Bulan Ini</p>
            <h3>Rp. 2xx.xxx.x</h3>
          </div>
        </div>
        <div class="col-md-3 col-lg-3">
          <div class="card-stat center">
            <p class="label">Pendapatan Total</p>
            <h3>Rp. 2xx.xxx.x</h3>
          </div>
        </div>
      </div>

      <!-- Search & Button -->
      <div class="search-bar-top mb-3">
        <div class="d-flex gap-2">
          <div class="search-box">
            <i class="bi bi-search"></i>
            <input type="text" placeholder="Cari logbook...">
          </div>
          <button class="btn-filter"><i class="bi bi-funnel"></i></button>
          <button class="btn-sort"><i class="bi bi-sort-down"></i></button>
        </div>
        <button class="btn-add"><i class="bi bi-plus"></i></button>
      </div>

      <!-- Table -->
      <div class="table-wrapper">
        <div class="table-responsive">
          <table class="table table-bordered align-middle text-center">
            <thead>
              <tr>
                <th>Tanggal</th>
                <th>Koordinator</th>
                <th>Alamat</th>
                <th>TNA</th>
                <th>TNH</th>
                <th>TNS</th>
                <th>Cash/DP</th>
                <th>1-Minggu</th>
                <th>1-Bulan</th>
                <th>Jumlah</th>
                <th>Presenter</th>
                <th>Marketing</th>
                <th>Komisi</th>
                <th>Keterangan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>20/10/2025</td>
                <td>Fauzan</td>
                <td>Purwokerto Selatan, Jalan Kucing</td>
                <td>3</td>
                <td>3</td>
                <td></td>
                <td>250.000</td>
                <td>200.000</td>
                <td>200.000</td>
                <td>450.000</td>
                <td>Juned</td>
                <td>Kohar</td>
                <td>45.000</td>
                <td>Lunas</td>
                <td>
                  <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                  <button class="btn btn-warning btn-sm text-white"><i class="bi bi-pencil"></i></button>
                </td>
              </tr>
              <tr>
                <td>19/10/2025</td>
                <td>Chandra</td>
                <td>Tegal Barat, Jalanin dulu</td>
                <td></td>
                <td>2</td>
                <td></td>
                <td>50.000</td>
                <td>50.000</td>
                <td>50.000</td>
                <td>100.000</td>
                <td>Budi</td>
                <td>Kohar</td>
                <td>10.000</td>
                <td>Lunas</td>
                <td>
                  <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                  <button class="btn btn-warning btn-sm text-white"><i class="bi bi-pencil"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

     <!-- Pagination -->
<div class="pagination-wrapper d-flex justify-content-center mt-3 gap-3">
  <button class="btn-page nav" style><i class="bi bi-chevron-left"></i></button>
  <button class="btn-page active">1</button>
  <button class="btn-page nav"><i class="bi bi-chevron-right"></i></button>
</div>



  <script>
    const ctx = document.getElementById('chartProduk');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Oktober'],
        datasets: [
          {
            label: 'TNS',
            data: [25],
            backgroundColor: '#8C8CFF',
            borderRadius: 5,
            barThickness: 30
          },
          {
            label: 'TNT',
            data: [30],
            backgroundColor: '#FFB2A8',
            borderRadius: 5,
            barThickness: 30
          },
          {
            label: 'TNH',
            data: [10],
            backgroundColor: '#74D4E0',
            borderRadius: 5,
            barThickness: 30
          },
          {
            label: 'TNB',
            data: [40],
            backgroundColor: '#FFC56D',
            borderRadius: 5,
            barThickness: 30
          }
        ]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            display: true,
            position: 'bottom',
            labels: {
              usePointStyle: true,
              pointStyle: 'circle',
              padding: 20,
              color: '#555',
              font: { size: 13 }
            }
          },
          tooltip: {
            backgroundColor: 'rgba(0,0,0,0.7)',
            titleColor: '#fff',
            bodyColor: '#fff',
            cornerRadius: 6
          }
        },
        scales: {
          x: {
            grid: { display: false },
            ticks: {
              color: '#666',
              font: { size: 14 }
            }
          },
          y: {
            beginAtZero: true,
            grid: { color: '#f2f2f2' },
            ticks: {
              stepSize: 5,
              color: '#666'
            }
          }
        },
        layout: { padding: 10 }
      }
    });
  </script>
</body>
</html>
