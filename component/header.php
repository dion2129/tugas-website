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
        <img src="images/logo.png" class="img-fluid" alt="logo">
      </a> -->
    </div>
    <div class="col-lg-8 text-info">
      <div class="row text-center text-lg-start">
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="d-flex align-items-center">
            <i class="bi bi-envelope me-2 fs-4 px-3"></i>
            <div>
              <strong class="text-dark">Email</strong><br />
              <a class="text-muted" href="mailto:info@medic.com"
                >info@medic.com</a
              >
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="d-flex align-items-center">
            <i class="bi bi-telephone me-2 fs-4 px-3"></i>
            <div>
              <strong class="text-dark">Call Now</strong><br />
              <span class="text-muted">+ (88017) - 123 - 4567</span>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb3 mt-2">
          <a href="contact.html" class="btn btn-primary">Appointment</a>
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
          <a class="nav-link text-white fw-bold active" href="index.html"
            >Home</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="service.html">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="gallery.html">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="team.html">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="appointment.html">Appointment</a>
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
            <li><a class="dropdown-item" href="blog.html">Blog</a></li>
            <li>
              <a class="dropdown-item" href="blog-details.html">Blog Details</a>
            </li>
            <li class="dropend">
              <a
                class="dropdown-item dropdown-toggle"
                href="#"
                id="submenuDropdown"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Sub Menu
              </a>
              <ul class="dropdown-menu fade" aria-labelledby="submenuDropdown">
                <li>
                  <a class="dropdown-item" href="index.html">Submenu 01</a>
                </li>
                <li>
                  <a class="dropdown-item" href="index.html">Submenu 02</a>
                </li>
              </ul>
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
</script>
