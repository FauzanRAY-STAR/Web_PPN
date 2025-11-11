<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQ Pupuk Silika</title>
  <!-- Bootstrap Icons -->
   
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="asset/style/page_faq.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>

<?php
    include('admin/template/navbar.php');
    ?>


<section class="faq-section">

  <!-- background kuning -->
  <div class="faq-bg"></div>

  <div class="faq-wrapper">
    <h1 class="faq-title">FAQ</h1>

    <div class="faq-content">

      <!-- KIRI -->
      <div class="faq-left">
        <img src="asset/img/Galeri2.png" alt="Pupuk Silika" class="faq-img">
        <p class="faq-desc">
          Pupuk silika bukan sekadar pelengkap, tapi solusi untuk meningkatkan daya tahan tanaman tanpa ketergantungan pada pestisida berlebihan.
          Tertarik mencoba atau butuh konsultasi dosis? Chat WhatsApp sekarang!
        </p>
      </div>

      <!-- KANAN -->
      <div class="faq-right">

        <div class="faq-item">
          <button class="faq-question">
            <span>Apa keunggulan Pupuk Silika dibandingkan pupuk pelengkap lainnya?</span>
            <i class="bi bi-chevron-down icon"></i>
          </button>
          <div class="faq-answer">
            <p>
              Pupuk Silika tidak hanya menyuplai nutrisi, tetapi juga berperan penting dalam memperkuat dinding sel tanaman (physical barrier),
              membuat tanaman lebih tegak dan lebih tahan terhadap serangan hama dan penyakit, bahkan di cuaca ekstrem.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            <span>Bagaimana cara mengaplikasikan Pupuk Silika Pramudita ini pada tanaman padi/sayuran?</span>
            <i class="bi bi-chevron-down icon"></i>
          </button>
          <div class="faq-answer">
            <p>
              Larutkan pupuk silika sesuai dosis anjuran dalam air, lalu semprotkan secara merata pada daun tanaman atau campurkan ke dalam tanah.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            <span>Apakah Pupuk Silika ini dapat dicampur dengan pupuk kimia (NPK) yang sudah saya gunakan?</span>
            <i class="bi bi-chevron-down icon"></i>
          </button>
          <div class="faq-answer">
            <p>
              Bisa, Pupuk Silika kompatibel dengan sebagian besar pupuk kimia dan organik. Namun, sebaiknya lakukan uji coba kecil terlebih dahulu.
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<script src="asset/js/faq.js"></script>

<!-- WA -->
<?php include ('admin/template/whatsapp_float.php'); ?>

<!-- Footer -->
<?php
include('admin/template/footer.php');
?>
</body>
</html>
