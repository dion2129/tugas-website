<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medical Homepage</title>
  <link rel="icon" href="images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../plugins/node_modules/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>

<?php
    include "../component/header.php";
?>
<!-- Carousel Start -->
<div id="carouselExample" class="carousel slide " data-bs-ride="carousel">
  <div class="carousel-inner">

    <!-- Slide 1 -->

    <div class="carousel-item active">
      <img src="../Assets/image/slider/slider-bg-1.jpg" class="d-block" style=" width: 100%;height: 60vh; filter: brightness(50%);" alt="...">
      <div class="carousel-caption d-none d-md-block"">
        <h1 class="fw-bold">Best Medical Services</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae deserunt,<br> eius pariatur minus itaque nostrum.</p>
        <a href="#" class="btn btn-outline-light btn-lg fw-bold">SHOP NOW</a>
      </div>
      </div>
    

    <!-- Slide 2 -->
    <div class="carousel-item">
      <img src="../Assets/image/slider/slider-bg-2.jpg" class="d-block"  style=" width: 100%;height: 60vh; filter: brightness(50%);" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="fw-bold">Trusted Doctors</h1>
        <p>We provide the best care with modern medical equipment and experienced professionals.</p>
        <a href="#" class="btn btn-outline-light btn-lg fw-bold">LEARN MORE</a>
      </div>
    </div>

    <div class="carousel-item">
      <img src="../Assets/image/slider/slider-bg-3.jpg" class="d-block"  style=" width: 100%;height: 60vh; filter: brightness(50%);" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="fw-bold">We care about your health</h1>
        <p>We provide the best care with modern medical equipment and experienced professionals.</p>
        <a href="#" class="btn btn-outline-light btn-lg fw-bold">LEARN MORE</a>
      </div>
    </div>
  </div>

  <!-- Carousel Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel End -->

<!-- Section Info -->
<section class="container my-5">
  <div class="row text-white text-center">

    <!-- Emergency Cases -->
    <div class="col-md-4 p-4" style="background-color: #45bec9;">
      <i class="bi bi-telephone-fill display-4 mb-3"></i>
      <h5 class="text-uppercase">Emergency Cases</h5>
      <h3 class="fw-bold">1-800-700-6200</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
    </div>

    <!-- 24 Hour Service -->
    <div class="col-md-4 p-4" style="background-color: #4dc3cc;">
      <i class="bi bi-stethoscope display-4 mb-3"></i>
      <h5 class="text-uppercase">24 Hour Service</h5>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore dignissimos officia dicta suscipit vel eum</p>
      <a href="#" class="btn btn-outline-light mt-2">Read more</a>
    </div>

    <!-- Working Hours -->
    <div class="col-md-4 p-4" style="background-color: #6fd0d7;">
      <h5 class="text-uppercase">Working Hours</h5>
      <div class="mt-3 text-start">
        <div class="d-flex justify-content-between border-bottom py-1">
          <span>MON - FRI -</span><span>8:00 - 17:00</span>
        </div>
        <div class="d-flex justify-content-between border-bottom py-1">
          <span>MON - FRI -</span><span>8:00 - 17:00</span>
        </div>
        <div class="d-flex justify-content-between py-1">
          <span>MON - FRI -</span><span>8:00 - 17:00</span>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- Best Features Section -->
<div class="container my-5">
  <div class="text-center mb-5">
    <h2><strong>Best Features</strong> of Our Hospital</h2>
    <p class="text-muted">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam magni in at debitis<br>
      nam error officia vero tempora alias? Sunt?
    </p>
  </div>

  <div class="row ">

    <!-- ORTHOPEDICS -->
    <div class="col-md-6 col-lg-6 mb-5 d-flex">
      <div class="mx-auto">
        <img src="../Assets/image/resource/1.png" width="60" class="mb-3" alt="Orthopedics">
        <h5 class="text-uppercase">Orthopedics</h5>
        <p class="text-muted">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo
          quibusdam pariatur ex sunt, est aspernatur at debitis eius vitae vel nostrum dolorem labore
          autem corrupti odit mollitia?
        </p>
      </div>
    </div>

    <!-- DIAGNOSIS -->
    <div class="col-md-6 col-lg-6 mb-5 d-flex">
      <div class="mx-auto">
        <img src="../Assets/image/resource/2.png" width="60" class="mb-3" alt="Diagnostic">
        <h5 class="text-uppercase">Diagnostic</h5>
        <p class="text-muted">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo
          quibusdam pariatur ex sunt, est aspernatur at debitis eius vitae vel nostrum dolorem labore
          autem corrupti odit mollitia?
        </p>
      </div>
    </div>

    <!-- PSYCOLOGY -->
    <div class="col-md-6 col-lg-6 mb-5 d-flex">
      <div class="mx-auto">
        <img src="../Assets/image/resource/3.png" width="60" class="mb-3" alt="Psycology">
        <h5 class="text-uppercase">Psycology</h5>
        <p class="text-muted">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo
          quibusdam pariatur ex sunt, est aspernatur at debitis eius vitae vel nostrum dolorem labore
          autem corrupti odit mollitia?
        </p>
      </div>
    </div>

    <!-- GENERAL TREATMENT -->
    <div class="col-md-6 col-lg-6 mb-5 d-flex">
      <div class="mx-auto">
        <img src="../Assets/image/resource/4.png" width="60" class="mb-3" alt="General Treatment">
        <h5 class="text-uppercase">General Treatment</h5>
        <p class="text-muted">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo
          quibusdam pariatur ex sunt, est aspernatur at debitis eius vitae vel nostrum dolorem labore
          autem corrupti odit mollitia?
        </p>
      </div>
    </div>

  </div>
</div>

<div class="container my-5">
  <!-- Navigation Tabs -->
  <ul class="nav nav-tabs justify-content-center mb-4 border-0" id="serviceTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="dormitory-tab" data-bs-toggle="tab" data-bs-target="#dormitory" type="button" role="tab">Dormitory</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="orthopedic-tab" data-bs-toggle="tab" data-bs-target="#orthopedic" type="button" role="tab">Orthopedic</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="sonogram-tab" data-bs-toggle="tab" data-bs-target="#sonogram" type="button" role="tab">Sonogram</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="xray-tab" data-bs-toggle="tab" data-bs-target="#xray" type="button" role="tab">X-Ray</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="diagnostic-tab" data-bs-toggle="tab" data-bs-target="#diagnostic" type="button" role="tab">Diagnostic</button>
    </li>
  </ul>

  <!-- Tab Content -->
  <div class="tab-content" id="serviceTabContent">

    <!-- Dormitory Tab -->
    <div class="tab-pane fade show active" id="dormitory" role="tabpanel">
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="../Assets/image/services/service-one.jpg" class="img-fluid rounded shadow" alt="Dormitory">
        </div>
        <div class="col-md-6">
          <h3 class="fw-bold mt-4 mt-md-0">DORMITORY</h3>
          <hr class="w-25 border-2">
          <p class="text-muted">
            The implant fixture is first placed, so that it likely to osseointegrate, then a dental prosthetic is added. then a dental prosthetic is added. then a dental prosthetic is added.
          </p>
          <p class="text-muted">
            The implant fixture is first placed, so that it likely to osseointegrate, then a dental prosthetic is added. then a dental prosthetic is added.
          </p>
          <button class="btn btn-info text-white mt-3">READ MORE</button>
        </div>
      </div>
    </div>

     <div class="tab-pane fade show" id="orthopedic" role="tabpanel">
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="../Assets/image/services/service-two.jpg" class="img-fluid rounded shadow" alt="orthopedic">
        </div>
        <div class="col-md-6">
          <h3 class="fw-bold mt-4 mt-md-0">ORTHOPEDIC</h3>
          <hr class="w-25 border-2">
          <p class="text-muted">
            The implant fixture is first placed, so that it likely to osseointegrate, then a dental prosthetic is added. then a dental prosthetic is added. then a dental prosthetic is added.
          </p>
          <p class="text-muted">
            The implant fixture is first placed, so that it likely to osseointegrate, then a dental prosthetic is added. then a dental prosthetic is added.
          </p>
          <button class="btn btn-info text-white mt-3">READ MORE</button>
        </div>
      </div>
    </div>

     <div class="tab-pane fade show" id="sonogram" role="tabpanel">
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="../Assets/image/services/service-three.jpg" class="img-fluid rounded shadow" alt="sonogram">
        </div>
        <div class="col-md-6">
          <h3 class="fw-bold mt-4 mt-md-0">SONOGRAM</h3>
          <hr class="w-25 border-2">
          <p class="text-muted">
            The implant fixture is first placed, so that it likely to osseointegrate, then a dental prosthetic is added. then a dental prosthetic is added. then a dental prosthetic is added.
          </p>
          <p class="text-muted">
            The implant fixture is first placed, so that it likely to osseointegrate, then a dental prosthetic is added. then a dental prosthetic is added.
          </p>
          <button class="btn btn-info text-white mt-3">READ MORE</button>
        </div>
      </div>
    </div>

     <div class="tab-pane fade show" id="xray" role="tabpanel">
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="../Assets/image/services/service-two.jpg" class="img-fluid rounded shadow" alt="xray">
        </div>
        <div class="col-md-6">
          <h3 class="fw-bold mt-4 mt-md-0">X-RAY</h3>
          <hr class="w-25 border-2">
          <p class="text-muted">
            The implant fixture is first placed, so that it likely to osseointegrate, then a dental prosthetic is added. then a dental prosthetic is added. then a dental prosthetic is added.
          </p>
          <p class="text-muted">
            The implant fixture is first placed, so that it likely to osseointegrate, then a dental prosthetic is added. then a dental prosthetic is added.
          </p>
          <button class="btn btn-info text-white mt-3">READ MORE</button>
        </div>
      </div>
    </div>

     <div class="tab-pane fade show" id="diagnostic" role="tabpanel">
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="../Assets/image/services/service-two.jpg" class="img-fluid rounded shadow" alt="diagnostic">
        </div>
        <div class="col-md-6">
          <h3 class="fw-bold mt-4 mt-md-0">DIAGNOSTIC</h3>
          <hr class="w-25 border-2">
          <p class="text-muted">
            The implant fixture is first placed, so that it likely to osseointegrate, then a dental prosthetic is added. then a dental prosthetic is added. then a dental prosthetic is added.
          </p>
          <p class="text-muted">
            The implant fixture is first placed, so that it likely to osseointegrate, then a dental prosthetic is added. then a dental prosthetic is added.
          </p>
          <button class="btn btn-info text-white mt-3">READ MORE</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Services -->

<section class="py-5 bg-light ">
  <div class="container text-center">
    <h2><strong>Provided</strong> Services</h2>
    <p class="text-muted">
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet, qui suscipit atque fugiat officia corporis...
    </p>

        <!-- Slide 1 -->
        <div>
          <div class="row justify-content-center">
            <div class="col-md-4">
              <div class="card border-0 shadow-sm">
                <img src="../Assets/image/gallery/1.jpg" class="card-img-top" alt="Psychology">
                <div class="card-body">
                  <p class="text-muted mb-1">Better Service At Low Cost</p>
                  <h5 class="card-title fw-bold">PSYCOLOGY</h5>
                  <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-none d-md-block">
              <div class="card border-0 shadow-sm">
                <img src="../Assets/image/gallery/2.jpg" class="card-img-top" alt="Dormitory">
                <div class="card-body">
                  <p class="text-muted mb-1">Better Service At Low Cost</p>
                  <h5 class="card-title fw-bold">DORMITORY</h5>
                  <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-none d-lg-block">
              <div class="card border-0 shadow-sm">
                <img src="../Assets/image/gallery/3.jpg" class="card-img-top" alt="Germs Protection">
                <div class="card-body">
                  <p class="text-muted mb-1">Better Service At Low Cost</p>
                  <h5 class="card-title fw-bold">GERMS PROTECTION</h5>
                  <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>
</section>

  <section class="container py-5 text-center text-white">
    <h2 class="fw-bold">
      What <span class="text-white">Our</span> Patients Says
    </h2>

    <!-- Carousel for testimonials -->
    <div id="testimonialCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
      <div class="carousel-inner">

        <!-- Testimonial 1 -->
        <div class="carousel-item active">
          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
              <div class="card border-1">
                <div class="card-body text-center">
                  <img src="../Assets/image/testimonials/1.png" class="rounded-circle mb-3" alt="Amy Adams">
                  <h5 class="card-title">Ahmad</h5>
                  <p class="card-text">
                    Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-5">
              <div class="card shadow-lg border-1">
                <div class="card-body text-center">
                  <img src="../Assets/image/testimonials/2.png" class="rounded-circle mb-3" alt="Amy Adams">
                  <h5 class="card-title">Amy</h5>
                  <p class="card-text">
                    Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="carousel-item">
          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
              <div class="card border-1">
                <div class="card-body text-center">
                  <img src="../Assets/image/testimonials/3.png" class="rounded-circle mb-3" alt="Adam Rose">
                  <h5 class="card-title">Adam</h5>
                  <p class="card-text">
                    Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Carousel controls -->
      <div class="d-flex justify-content-center mt-4">
        <button class="carousel-control-prev position-static" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bg-dark rounded-circle"></span>
        </button>
        <button class="carousel-control-next position-static ms-3" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon bg-dark rounded-circle"></span>
        </button>
      </div>

      <!-- Carousel indicators -->
      <div class="carousel-indicators mt-3">
        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"></button>
      </div>
    </div>
  </section>


<!-- FAQ and Appointment -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-6">
        <h5>FAQ</h5>
        <div class="accordion" id="faqAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">Why should I choose Medical Health?</button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show">
              <div class="accordion-body">We provide best services with expert doctors and modern facilities.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">What are the Centre's visiting hours?</button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse">
              <div class="accordion-body">Our visiting hours are from 8 AM to 6 PM.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <h5>Request Appointment</h5>
        <form>
          <div class="mb-2">
            <input type="text" class="form-control" placeholder="Name">
          </div>
          <div class="mb-2">
            <input type="email" class="form-control" placeholder="Email">
          </div>
          <div class="mb-2">
            <input type="text" class="form-control" placeholder="Phone">
          </div>
          <div class="mb-2">
            <textarea class="form-control" rows="3" placeholder="Your Message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>

    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Footer -->
<?php 
include "../component/Footer.php"
?>
</body>
</html>
