<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medical Homepage - Full Bootstrap</title>
  <link rel="icon" href="../Assets/images/favicon.png" type="image/x-icon">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  </head>
<body>

<?php
  // Pastikan header.php juga sudah disesuaikan agar hanya menggunakan Bootstrap
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

<section class="container gx-0"> <div class="row text-white text-center g-0"> <div class="col-md-4 p-4 p-lg-5 bg-info"> <i class="bi bi-telephone-fill display-4 mb-3"></i>
      <h5 class="text-uppercase">Emergency Cases</h5>
      <h3 class="fw-bold">1-800-700-6200</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
    </div>

    <div class="col-md-4 p-4 p-lg-5 bg-primary"> <i class="bi bi-stethoscope display-4 mb-3"></i>
      <h5 class="text-uppercase">24 Hour Service</h5>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore dignissimos officia dicta suscipit vel eum</p>
      <a href="#" class="btn btn-outline-light mt-2">Read more</a>
    </div>

    <div class="col-md-4 p-4 p-lg-5 bg-secondary"> <h5 class="text-uppercase">Working Hours</h5>
      <div class="mt-3 text-start">
        <div class="d-flex justify-content-between border-bottom border-white border-opacity-50 py-1">
          <span>MON - FRI -</span><span>8:00 - 17:00</span>
        </div>
        <div class="d-flex justify-content-between border-bottom border-white border-opacity-50 py-1">
          <span>SATURDAY -</span><span>9:00 - 15:00</span>
        </div>
        <div class="d-flex justify-content-between py-1">
          <span>SUNDAY -</span><span>10:00 - 14:00</span>
        </div>
      </div>
    </div>

  </div>
</section>
<div class="container my-5 py-5">
  <div class="text-center mb-5">
    <h2><span class="fw-bold">Best Features</span> of Our Hospital</h2>
    <p class="text-muted">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam magni in at debitis<br>
      nam error officia vero tempora alias? Sunt?
    </p>
  </div>

  <div class="row g-5"> <div class="col-md-6 d-flex align-items-start">
        <div class="flex-shrink-0 me-3">
             <img src="../Assets/image/resource/1.png" width="60" alt="Orthopedics Icon">
        </div>
        <div class="flex-grow-1">
          <h5 class="text-uppercase">Orthopedics</h5>
          <p class="text-muted">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo
            quibusdam pariatur ex sunt, est aspernatur at debitis eius vitae vel nostrum dolorem labore
            autem corrupti odit mollitia?
          </p>
        </div>
    </div>

    <div class="col-md-6 d-flex align-items-start">
        <div class="flex-shrink-0 me-3">
             <img src="../Assets/image/resource/2.png" width="60" alt="Diagnosis Icon">
        </div>
        <div class="flex-grow-1">
          <h5 class="text-uppercase">Diagnosis</h5>
          <p class="text-muted">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo
            quibusdam pariatur ex sunt, est aspernatur at debitis eius vitae vel nostrum dolorem labore
            autem corrupti odit mollitia?
          </p>
        </div>
    </div>

    <div class="col-md-6 d-flex align-items-start">
        <div class="flex-shrink-0 me-3">
             <img src="../Assets/image/resource/3.png" width="60" alt="Psycology Icon">
        </div>
        <div class="flex-grow-1">
          <h5 class="text-uppercase">Psycology</h5>
          <p class="text-muted">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo
            quibusdam pariatur ex sunt, est aspernatur at debitis eius vitae vel nostrum dolorem labore
            autem corrupti odit mollitia?
          </p>
        </div>
    </div>

    <div class="col-md-6 d-flex align-items-start">
        <div class="flex-shrink-0 me-3">
             <img src="../Assets/image/resource/4.png" width="60" alt="General Treatment Icon">
        </div>
        <div class="flex-grow-1">
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
  <ul class="nav nav-pills justify-content-center mb-4 border-0" id="serviceTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="dormitory-tab" data-bs-toggle="tab" data-bs-target="#dormitory" type="button" role="tab" aria-controls="dormitory" aria-selected="true">Dormitory</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="orthopedic-tab" data-bs-toggle="tab" data-bs-target="#orthopedic" type="button" role="tab" aria-controls="orthopedic" aria-selected="false">Orthopedic</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="sonogram-tab" data-bs-toggle="tab" data-bs-target="#sonogram" type="button" role="tab" aria-controls="sonogram" aria-selected="false">Sonogram</button>
    </li>
     <li class="nav-item" role="presentation">
      <button class="nav-link" id="xray-tab" data-bs-toggle="tab" data-bs-target="#xray" type="button" role="tab" aria-controls="xray" aria-selected="false">X-Ray</button>
    </li>
     <li class="nav-item" role="presentation">
      <button class="nav-link" id="diagnostic-tab" data-bs-toggle="tab" data-bs-target="#diagnostic" type="button" role="tab" aria-controls="diagnostic" aria-selected="false">Diagnostic</button>
    </li>
    </ul>

  <div class="tab-content" id="serviceTabContent">
      <div class="tab-pane fade show active" id="dormitory" role="tabpanel" aria-labelledby="dormitory-tab" tabindex="0">
        <div class="row align-items-center g-4">
          <div class="col-md-6">
            <img src="../Assets/image/services/service-one.jpg" class="img-fluid rounded shadow" alt="Dormitory">
          </div>
          <div class="col-md-6">
            <h3 class="fw-bold">DORMITORY</h3>
            <hr class="w-25 border-primary border-2 opacity-100"> <p class="text-muted">The implant fixture is first placed, so that it likely to osseointegrate, then a dental prosthetic is added. then a dental prosthetic is added. then a dental prosthetic is added.</p>
            <p class="text-muted">The implant fixture is first placed, so that it likely to osseointegrate, then a dental prosthetic is added. then a dental prosthetic is added.</p>
            <button class="btn btn-primary mt-3">READ MORE</button> </div>
        </div>
      </div>
      <div class="tab-pane fade" id="orthopedic" role="tabpanel" aria-labelledby="orthopedic-tab" tabindex="0">
          <div class="row align-items-center g-4">
              <div class="col-md-6">
                  <img src="../Assets/image/services/service-two.jpg" class="img-fluid rounded shadow" alt="orthopedic">
              </div>
              <div class="col-md-6">
                  <h3 class="fw-bold">ORTHOPEDIC</h3>
                  <hr class="w-25 border-primary border-2 opacity-100">
                  <p class="text-muted">Orthopedic text here... Lorem ipsum dolor sit amet.</p>
                  <p class="text-muted">More details about orthopedic services.</p>
                  <button class="btn btn-primary mt-3">READ MORE</button>
              </div>
          </div>
      </div>
      <div class="tab-pane fade" id="sonogram" role="tabpanel" aria-labelledby="sonogram-tab" tabindex="0">
           <div class="row align-items-center g-4">
              <div class="col-md-6">
                  <img src="../Assets/image/services/service-three.jpg" class="img-fluid rounded shadow" alt="sonogram">
              </div>
              <div class="col-md-6">
                  <h3 class="fw-bold">SONOGRAM</h3>
                  <hr class="w-25 border-primary border-2 opacity-100">
                  <p class="text-muted">Sonogram text here... Lorem ipsum dolor sit amet.</p>
                  <p class="text-muted">More details about sonogram services.</p>
                  <button class="btn btn-primary mt-3">READ MORE</button>
              </div>
          </div>
      </div>
      </div>
</div>
<section class="py-5 bg-light">
  <div class="container text-center">
    <h2><span class="fw-bold">Provided</span> Services</h2>
    <p class="text-muted mb-5">
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet, qui suscipit atque fugiat officia corporis...
    </p>
    <div class="row justify-content-center g-4">
      <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm h-100">
          <img src="../Assets/image/gallery/1.jpg" class="card-img-top" alt="Psychology">
          <div class="card-body">
            <p class="text-muted mb-1">Better Service At Low Cost</p>
            <h5 class="card-title fw-bold">PSYCOLOGY</h5>
            <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm h-100">
          <img src="../Assets/image/gallery/2.jpg" class="card-img-top" alt="Dormitory">
          <div class="card-body">
            <p class="text-muted mb-1">Better Service At Low Cost</p>
            <h5 class="card-title fw-bold">DORMITORY</h5>
            <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm h-100">
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
</section>
<section class="container-fluid py-5 text-center bg-dark text-white">
  <div class="container">
      <h2 class="fw-bold mb-5">
          What Our <span class="text-info">Patients</span> Says
      </h2>

      <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Testimonial 1"></button>
          <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" aria-label="Testimonial 2"></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row justify-content-center g-4">
              <div class="col-md-6 col-lg-5">
                <div class="card bg-dark text-white border border-secondary h-100">
                  <div class="card-body text-center p-4">
                    <img src="../Assets/image/testimonials/1.png" class="rounded-circle mb-3 border border-3 border-info" width="100" height="100" alt="Ahmad">
                    <h5 class="card-title">Ahmad</h5>
                    <p class="card-text text-white-50">
                      Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 d-none d-md-block"> <div class="card bg-dark text-white border border-secondary h-100">
                  <div class="card-body text-center p-4">
                    <img src="../Assets/image/testimonials/2.png" class="rounded-circle mb-3 border border-3 border-info" width="100" height="100" alt="Amy">
                    <h5 class="card-title">Amy</h5>
                    <p class="card-text text-white-50">
                      Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row justify-content-center g-4">
              <div class="col-md-6 col-lg-5">
                <div class="card bg-dark text-white border border-secondary h-100">
                  <div class="card-body text-center p-4">
                    <img src="../Assets/image/testimonials/3.png" class="rounded-circle mb-3 border border-3 border-info" width="100" height="100" alt="Adam Rose">
                    <h5 class="card-title">Adam</h5>
                    <p class="card-text text-white-50">
                      Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?
                    </p>
                  </div>
                </div>
              </div>
              </div>
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </div>
</section>
<section class="py-5 bg-light">
  <div class="container">
    <div class="row g-5"> <div class="col-lg-6"> <h3 class="fw-bold mb-4">FAQ</h3>
        <div class="accordion" id="faqAccordionMain">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOneFaq">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneFaq" aria-expanded="true" aria-controls="collapseOneFaq">Why should I choose Medical Health?</button>
            </h2>
            <div id="collapseOneFaq" class="accordion-collapse collapse show" aria-labelledby="headingOneFaq" data-bs-parent="#faqAccordionMain">
              <div class="accordion-body text-muted">We provide best services with expert doctors and modern facilities. Our commitment is your health and satisfaction.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwoFaq">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoFaq" aria-expanded="false" aria-controls="collapseTwoFaq">What are the Centre's visiting hours?</button>
            </h2>
            <div id="collapseTwoFaq" class="accordion-collapse collapse" aria-labelledby="headingTwoFaq" data-bs-parent="#faqAccordionMain">
              <div class="accordion-body text-muted">Our visiting hours are from 8 AM to 6 PM from Monday to Friday, and 9 AM to 3 PM on Saturday.</div>
            </div>
          </div>
           <div class="accordion-item">
            <h2 class="accordion-header" id="headingThreeFaq">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeFaq" aria-expanded="false" aria-controls="collapseThreeFaq">How can I book an appointment?</button>
            </h2>
            <div id="collapseThreeFaq" class="accordion-collapse collapse" aria-labelledby="headingThreeFaq" data-bs-parent="#faqAccordionMain">
              <div class="accordion-body text-muted">You can book an appointment using the form right here, or by calling our emergency number.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6"> <h3 class="fw-bold mb-4">Request Appointment</h3>
        <form>
          <div class="mb-3"> <input type="text" class="form-control" placeholder="Name" required>
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Email" required>
          </div>
          <div class="mb-3">
            <input type="tel" class="form-control" placeholder="Phone" required>
          </div>
          <div class="mb-3">
            <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-lg">Submit Request</button>
        </form>
      </div>
    </div>
  </div>
</section>
<?php 
  // Pastikan footer.php juga sudah disesuaikan agar hanya menggunakan Bootstrap
  include "../component/Footer.php"
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>