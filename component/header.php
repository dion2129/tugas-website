<div class="container-fluid bg-light py-2">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 text-center text-md-start text-muted">
        <small>Opening Hours: Saturday to Tuesday - 8am to 10pm</small>
      </div>
      <div class="col-md-6 text-center text-md-end">
        <a href="#" class="text-dark me-2"><i class="bi bi-facebook"></i></a>
        <a href="#" class="text-dark me-2"><i class="bi bi-twitter"></i></a>
        <a href="#" class="text-dark me-2"><i class="bi bi-google"></i></a>
        <a href="#" class="text-dark me-2"><i class="bi bi-instagram"></i></a>
        <a href="#" class="text-dark"><i class="bi bi-pinterest"></i></a>
      </div>
    </div>
  </div>
</div>

<div class="container py-4">
  <div class="row align-items-center">
    <div class="col-lg-4">
      <div class="d-flex align-items-center">
        <i class="bi bi-hospital fs-1 me-2"></i>
        <h4 class="mb-0">Medic</h4>
      </div>
      <!-- <a href="index.html">
        <img src="../Assets/images/logo.png" class="img-fluid" alt="logo">
      </a> -->
    </div>
    <div class="col-lg-8 text-info">
      <div class="row text-center text-lg-start">
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="d-flex align-items-center">
            <i class="bi bi-envelope me-2 fs-4 px-3"></i>
            <div>
              <strong class="text-dark">Email</strong><br />
              <a class="text-muted" href="#"
                >Klinik_Abadi@gmail.com</a
              >
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="d-flex align-items-center">
            <i class="bi bi-telephone me-2 fs-4 px-3"></i>
            <div>
              <strong class="text-dark">Call Now</strong><br />
              <span class="text-muted">+ 0812 3456 7890</span>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb3 mt-2">
          <a href="appointment.php" class="btn btn-primary">Appointment</a>
        </div>
      </div>
    </div>
  </div>
</div>

<nav class="text-dark navbar navbar-expand-lg navbar-dark bg-info">
  <div class="container">
    <a class="navbar-brand d-lg-none" href="#">Menu</a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarLinks"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarLinks">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 p-2 fs-5 font-danger">
        <li class="nav-item">
          <a class="nav-link text-white fw-bold active" href="index.php"
            >Home</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="Gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="team.php">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="appointment.php">Appointment</a>
        </li>

        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle text-white"
            href="#"
            id="blogDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Blogs
          </a>
          <ul class="dropdown-menu fade" aria-labelledby="blogDropdown">
            <li><a class="dropdown-item" href="blogs.php">Blog</a></li>
            <li>
              <a class="dropdown-item" href="blogs-detail2.php">Blog Details</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="contact.html">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
  document.querySelectorAll(".navbar .dropdown").forEach(function (dropdown) {
    const trigger = dropdown.querySelector('[data-bs-toggle="dropdown"]');
    const bsDropdown = new bootstrap.Dropdown(trigger);

    dropdown.addEventListener("mouseenter", () => {
      bsDropdown.show();
    });
    dropdown.addEventListener("mouseleave", () => {
      bsDropdown.hide();
    });
  });

document.addEventListener("DOMContentLoaded", function() {
  // 1. Dapatkan path URL saat ini
  const currentLocation = window.location.pathname;

  // 2. Pilih semua link di dalam navbar
  const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

  // 3. Loop melalui setiap link
  navLinks.forEach(link => {
    const linkLocation = new URL(link.href).pathname;

    // 4. Hapus kelas 'active' dan 'fw-bold' terlebih dahulu (reset)
    link.classList.remove('active', 'fw-bold');
    link.removeAttribute('aria-current'); // Hapus atribut aksesibilitas

    // 5. Bandingkan path link dengan path saat ini
    // Kita cek apakah path saat ini SAMA DENGAN path link
    // Atau jika path saat ini adalah '/' (halaman utama) dan link adalah 'index.html'
    if ((linkLocation === currentLocation) || 
        (currentLocation === '/' && linkLocation.includes('index.html'))) {
      
      // 6. Jika cocok, tambahkan kelas 'active' dan 'fw-bold'
      link.classList.add('active', 'fw-bold');
      link.setAttribute('aria-current', 'page'); // Tambah atribut aksesibilitas

      // 7. [Opsional] Jika link ada di dalam dropdown, buat dropdown-nya juga aktif
      const parentDropdown = link.closest('.nav-item.dropdown');
      if (parentDropdown) {
        const dropdownToggle = parentDropdown.querySelector('.dropdown-toggle');
        if (dropdownToggle) {
          dropdownToggle.classList.add('active', 'fw-bold');
        }
      }
    }
  });

  // Kasus Khusus: Jika tidak ada yang cocok (misalnya di halaman utama '/'), 
  // dan ada link Home ke '/index.html', aktifkan link Home.
  const homeLink = document.querySelector('.navbar-nav .nav-link[href*="index.html"]');
  const isActive = document.querySelector('.navbar-nav .nav-link.active');
  if (!isActive && homeLink && currentLocation === '/') {
       homeLink.classList.add('active', 'fw-bold');
       homeLink.setAttribute('aria-current', 'page');
  }
});



</script>


