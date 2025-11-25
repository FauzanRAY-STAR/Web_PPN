<?php
if (!isset($base_url)) {
    include($_SERVER['DOCUMENT_ROOT'] . '/WEB_PPN/config/config.php');
}
include($_SERVER['DOCUMENT_ROOT'] . '/WEB_PPN/config/koneksi.php');
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQ Pupuk Silika</title>

  <!-- Favicon -->
    <link href="asset/img/LogoIco.ico" rel="icon">
  
  <!-- Google Fonts - Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
  
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="asset/style/page_faq.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    /* === Global Font Poppins === */
    * {
      font-family: 'Poppins', sans-serif;
    }

    html, body {
      height: 100%;
    }

    body {
      font-family: 'Poppins', sans-serif;
      font-weight: 400;
      display: flex;
      flex-direction: column;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
    }

    p {
      font-family: 'Poppins', sans-serif;
      font-weight: 400;
      line-height: 1.6;
    }

    button {
      font-family: 'Poppins', sans-serif;
      font-weight: 500;
    }

    span {
      font-family: 'Poppins', sans-serif;
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

    /* ============================================ */
    /* FADE IN ANIMATION - DARI BAWAH KE ATAS */
    /* ============================================ */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(60px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-60px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(60px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            max-height: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            max-height: 500px;
            transform: translateY(0);
        }
    }

    .fade-in-section {
        opacity: 0;
        animation: fadeInUp 0.8s ease-out forwards;
    }

    .fade-in-left {
        opacity: 0;
        animation: fadeInLeft 0.8s ease-out forwards;
    }

    .fade-in-right {
        opacity: 0;
        animation: fadeInRight 0.8s ease-out forwards;
    }

    .fade-in-item {
        opacity: 0;
        animation: fadeInUp 0.6s ease-out forwards;
    }

    /* Delay untuk setiap elemen */
    .fade-in-section { animation-delay: 0.1s; }
    .fade-in-left { animation-delay: 0.2s; }
    .fade-in-right { animation-delay: 0.3s; }

    .faq-item:nth-child(1) { animation-delay: 0.4s; }
    .faq-item:nth-child(2) { animation-delay: 0.5s; }
    .faq-item:nth-child(3) { animation-delay: 0.6s; }
    .faq-item:nth-child(4) { animation-delay: 0.7s; }
    .faq-item:nth-child(5) { animation-delay: 0.8s; }
    .faq-item:nth-child(n+6) { animation-delay: 0.9s; }

    /* === Main Content Flex === */
    main, .main-content {
      flex: 1;
    }

    /* === FAQ Section === */
    .faq-section {
      font-family: 'Poppins', sans-serif;
      flex: 1;
    }

    /* === FAQ Title === */
    .faq-title {
      font-family: 'Poppins', sans-serif;
      font-weight: 700;
      font-size: 3.5rem;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: #1B5930;
    }

    /* === FAQ Description === */
    .faq-desc {
      font-family: 'Poppins', sans-serif;
      font-weight: 400;
      line-height: 1.8;
      font-size: 1.1rem;
      color: #333;
    }

    /* === FAQ Question Button === */
    .faq-question {
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      font-size: 1.15rem;
      letter-spacing: 0.3px;
      transition: all 0.3s ease;
      color: #1B5930;
      background: none;
      border: none;
      width: 100%;
      text-align: left;
      padding: 1rem;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-radius: 8px;
    }

    .faq-question:hover {
      font-family: 'Poppins', sans-serif;
      transform: translateX(5px);
      background-color: rgba(27, 89, 48, 0.05);
    }

    .faq-question.active {
      background-color: rgba(27, 89, 48, 0.1);
      color: #2B8D4C;
    }

    .faq-question span {
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      font-size: 1.15rem;
      flex: 1;
    }

    /* === FAQ Answer === */
    .faq-answer {
      font-family: 'Poppins', sans-serif;
      max-height: 0;
      overflow: hidden;
      transition: all 0.3s ease;
      opacity: 0;
    }

    .faq-answer.show {
      max-height: 500px;
      opacity: 1;
      animation: slideDown 0.3s ease-out;
    }

    .faq-answer p {
      font-family: 'Poppins', sans-serif;
      font-weight: 400;
      line-height: 1.9;
      font-size: 1.05rem;
      color: #555;
      padding: 0 1rem 1rem 1rem;
    }

    /* === FAQ Item === */
    .faq-item {
      font-family: 'Poppins', sans-serif;
      margin-bottom: 1.5rem;
      border: 1px solid rgba(27, 89, 48, 0.2);
      border-radius: 10px;
      overflow: hidden;
      background: #fff;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
      animation: fadeInUp 0.6s ease-out forwards;
    }

    .faq-item:hover {
      box-shadow: 0 4px 12px rgba(27, 89, 48, 0.15);
    }

    /* === FAQ Wrapper === */
    .faq-wrapper {
      font-family: 'Poppins', sans-serif;
    }

    /* === FAQ Content === */
    .faq-content {
      font-family: 'Poppins', sans-serif;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3rem;
      align-items: start;
    }

    .faq-left {
      font-family: 'Poppins', sans-serif;
      animation: fadeInLeft 0.8s ease-out forwards;
    }

    .faq-left img {
      width: 100%;
      border-radius: 15px;
      margin-bottom: 2rem;
      box-shadow: 0 8px 20px rgba(27, 89, 48, 0.15);
    }

    .faq-right {
      font-family: 'Poppins', sans-serif;
      animation: fadeInRight 0.8s ease-out forwards;
    }

    /* === FAQ Icon === */
    .icon {
      font-family: 'Poppins', sans-serif;
      font-size: 1.5rem;
      transition: transform 0.3s ease;
    }

    .faq-question.active .icon {
      transform: rotate(180deg);
    }

    /* === Footer Fix === */
    footer {
      margin-top: auto;
    }

    /* === Responsive Typography === */
    @media (max-width: 1024px) {
      .faq-content {
        grid-template-columns: 1fr;
        gap: 2rem;
      }

      .faq-left {
        animation: fadeInUp 0.8s ease-out forwards;
      }

      .faq-right {
        animation: fadeInUp 0.8s ease-out forwards;
        animation-delay: 0.2s;
      }
    }

    @media (max-width: 768px) {
      .faq-title {
        font-size: 2.5rem;
        letter-spacing: 1px;
      }

      .faq-desc {
        font-size: 1rem;
      }

      .faq-question {
        font-size: 1rem;
        padding: 0.8rem;
      }

      .faq-question span {
        font-size: 1rem;
      }

      .faq-answer p {
        font-size: 0.95rem;
        padding: 0 0.8rem 0.8rem 0.8rem;
      }

      .icon {
        font-size: 1.2rem;
      }
    }

    @media (max-width: 576px) {
      .faq-title {
        font-size: 2rem;
        letter-spacing: 0.5px;
      }

      .faq-desc {
        font-size: 0.95rem;
      }

      .faq-question {
        font-size: 0.95rem;
        padding: 0.7rem;
      }

      .faq-question span {
        font-size: 0.9rem;
      }

      .faq-answer p {
        font-size: 0.9rem;
        padding: 0 0.7rem 0.7rem 0.7rem;
      }

      .icon {
        font-size: 1rem;
      }

      .faq-item {
        margin-bottom: 1rem;
      }
    }
  </style>

</head>
<body>

<?php
    include('admin/template/navbar.php');
?>

<section class="faq-section">

  <!-- background kuning -->
  <div class="faq-bg"></div>

  <div class="faq-wrapper fade-in-section">
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
        <?php
        $query = "SELECT * FROM faq WHERE status = 'Ditampilkan' ORDER BY tanggal DESC";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
          while ($faq = mysqli_fetch_assoc($result)) {
        ?>
        <div class="faq-item">
          <button class="faq-question" onclick="toggleFAQ(this)">
            <span><?php echo htmlspecialchars($faq['judul']); ?></span>
            <i class="bi bi-chevron-down icon"></i>
          </button>
          <div class="faq-answer">
            <p><?php echo nl2br(htmlspecialchars($faq['deskripsi'])); ?></p>
          </div>
        </div>
        <?php
          }
        } else {
        ?>
        <div class="faq-item">
          <button class="faq-question" onclick="toggleFAQ(this)">
            <span>Tidak ada FAQ yang ditampilkan saat ini.</span>
            <i class="bi bi-chevron-down icon"></i>
          </button>
          <div class="faq-answer">
            <p>Silakan hubungi admin untuk informasi lebih lanjut.</p>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
</section>

<script>
  // Toggle FAQ Accordion dengan Animasi
  function toggleFAQ(button) {
    const answer = button.nextElementSibling;
    const isActive = button.classList.contains('active');

    // Close all other FAQs
    document.querySelectorAll('.faq-question').forEach(btn => {
      if (btn !== button) {
        btn.classList.remove('active');
        btn.nextElementSibling.classList.remove('show');
      }
    });

    // Toggle current FAQ
    button.classList.toggle('active');
    answer.classList.toggle('show');
  }

  // Smooth scroll animation on page load
  document.addEventListener('DOMContentLoaded', () => {
    // Apply animation delays to FAQ items
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach((item, index) => {
      item.style.animationDelay = `${0.4 + (index * 0.1)}s`;
    });
  });
</script>

<!-- WA -->
<?php include ('admin/template/whatsapp_float.php'); ?>

<!-- Footer -->
<?php
include('admin/template/footer.php');
?>
</body>
</html>