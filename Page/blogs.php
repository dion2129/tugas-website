<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Simple Blog</title>
  <!-- Bootstrap 5 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <header class="bg-dark py-3 mb-4">
    <div class="container">
      <h1 class="text-white text-center">Eternal Clinic Blog</h1>
    </div>
  </header>

  <main class="container">
    <!-- Hero Section -->
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-3">
        <h1 class="display-5 fw-bold">Welcome to the Eternal Clinic Blog</h1>
        <p class="col-md-8 fs-4">We are here to provide the best health services for you and your family. Get information, doctor schedules, and trusted medical services directly from our website.</p>
        <a class="btn btn-primary btn-lg" href="blogs-detail.php">Read more</a>
      </div>
    </div>

    <!-- Blog Posts -->
    <div class="row">
      <!-- Main Content -->
      <div class="col-md-8">
        <article class="mb-4">
          <h2>Get to Know Abadi Clinic Better</h2>
          <p class="text-muted">Posted on May 20, 2025 by <a href="#">Group 3</a></p>
          <p>As part of the transparency and education efforts to the community, Abadi Clinic opens its doors for educational visits. 
          This activity aims to introduce the medical service system, patient registration flow, and information technology that we use to support fast and efficient services.
          </p>
          <a href="blogs-detail2.php" class="btn btn-sm btn-outline-primary">Read more</a>
        </article>

        <article class="mb-4">
          <h2>Modern Services at Abadi Clinic</h2>
          <p class="text-muted">Posted on May 20, 2025 by <a href="#">Group 3</a></p>
          <p>Abadi Clinic presents digital-based service innovations, such as online registration and monitoring of patient medical records. 
          With this system, the service process becomes faster, more accurate, and more convenient for patients.</p>
          <a href="blogs-detail2.php" class="btn btn-sm btn-outline-primary">Read more</a>
        </article>
      </div>

      <!-- Sidebar -->
      <div class="col-md-4">
        <div class="p-3 mb-3 bg-light rounded">
          <h4 class="fst-italic">About</h4>
          <p>This simple blog was created to share information and tips about health. Please customize it according to your needs!</p>
        </div>

        <div class="p-3">
          <h4 class="fst-italic">Document Archive</h4>
          <ol class="list-unstyled">
            <li><a href="#">Jan 2025</a></li>
            <li><a href="#">Feb 2025</a></li>
            <li><a href="#">March 2025</a></li>
          </ol>
        </div>
      </div>
    </div>
  </main>

  <footer class="bg-dark text-white text-center py-3 mt-4">
    <p class="mb-0">&copy; Eternal Clinic Blog.</p>
  </footer>

  <!-- Bootstrap 5 JS CDN (for interactivity like dropdowns, modals) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
