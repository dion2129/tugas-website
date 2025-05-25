<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blogs</title>
  <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../plugins/node_modules/bootstrap-icons/font/bootstrap-icons.css">
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
  include "../component/header.php"
?>


  <main class="container">
    <!-- Hero Section -->
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-3">
        <h1 class="display-5 fw-bold">Selemat Datang Di Blog Klinik Abadi</h1>
        <p class="col-md-8 fs-4">Kami hadir untuk memberikan layanan kesehatan terbaik bagi Anda dan keluarga. Dapatkan informasi, jadwal dokter, dan layanan medis terpercaya langsung dari website kami.</p>
        <a class="btn btn-primary btn-lg" href="blogs-detail.php">Selengkapnya</a>
      </div>
    </div>

    <!-- Blog Posts -->
    <div class="row">
      <!-- Main Content -->
      <div class="col-md-8">
        <article class="mb-4">
          <h2>Mengenal Lebih Dekat Klinik Abadi</h2>
          <p class="text-muted">Diposting pada 20 Mei 2025 oleh <a href="#">Kelompok 3</a></p>
          <p>Sebagai bagian dari upaya transparansi dan edukasi kepada masyarakat, Klinik Abadi membuka pintunya untuk kunjungan edukatif. 
          Kegiatan ini bertujuan memperkenalkan sistem pelayanan medis, alur registrasi pasien, serta teknologi informasi yang kami gunakan dalam mendukung pelayanan yang cepat dan efisien.
          </p>
          <a href="blogs-detail2.php" class="btn btn-sm btn-outline-primary">Selengkapnya</a>
        </article>

        <article class="mb-4">
          <h2>Pelayanan Modern di Klinik Abadi</h2>
          <p class="text-muted">Diposting pada 20 Mei 2025 oleh <a href="#">Kelompok 3</a></p>
          <p>Klinik Abadi menghadirkan inovasi layanan berbasis digital, seperti pendaftaran online dan pemantauan rekam medis pasien. 
          Dengan sistem ini, proses pelayanan menjadi lebih cepat, akurat, dan nyaman bagi pasien.</p>
          <a href="blogs-detail2.php" class="btn btn-sm btn-outline-primary">Selengkapnya</a>
        </article>
      </div>

      <!-- Sidebar -->
      <div class="col-md-4">
        <div class="p-3 mb-3 bg-light rounded">
          <h4 class="fst-italic">About</h4>
          <p>Blog sederhana ini dibuat untuk berbagi informasi dan tips seputar kesehatan. Silakan sesuaikan sesuai kebutuhan Anda!</p>
        </div>

        <div class="p-3">
          <h4 class="fst-italic">Arsip Dokumen</h4>
          <ol class="list-unstyled">
            <li><a href="#">Januari 2025</a></li>
            <li><a href="#">Februari 2025</a></li>
            <li><a href="#">Maret 2025</a></li>
          </ol>
        </div>
      </div>
    </div>
  </main>

  <footer class="bg-dark text-white text-center py-3 mt-4">
    <p class="mb-0">&copy; Blog Klinik Abadi.</p>
  </footer>

  <!-- Bootstrap 5 JS CDN (for interactivity like dropdowns, modals) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
