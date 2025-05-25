<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../Plugins/bootstrap/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="../Plugins/node_modules/bootstrap-icons/font/bootstrap-icons.min.css"
    />
    <script src="../Plugins/bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php
  include '../component/header.php';
    ?>
    <main class="container">
      <section class="story py-5">
        <div class="container">
          <div class="row align-items-center g-4">
            <div class="col-lg-6">
              <img
                loading="lazy"
                src="../assets/image/services/service-one.jpg"
                class="img-fluid rounded shadow-sm"
                alt="story"
              />
            </div>

            <div class="col-lg-6">
              <div class="ps-lg-4">
                <h2 class="mb-3">Our Story</h2>
                <figure class="mb-4">
                  <blockquote class="blockquote fst-italic text-muted">
                    <p>
                      "Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                      Ipsum, minima. Nemo impedit fuga nostrum expedita sint
                      dicta ullam quam et harum velit saepe"
                    </p>
                  </blockquote>
                </figure>

                <p class="lead">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Possimus totam ducimus est vero, officiis, placeat optio.
                </p>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias
                  aliquam nesciunt fugit optio illum aut. consectetur
                  adipisicing elit. Neque assumenda, est quam perferendis
                  expedita autem?
                </p>

                <h6 class="mt-4 fw-bold">Mission</h6>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam
                  nihil dolorum beatae consequatur mollitia iure?
                </p>

                <h6 class="mt-4 fw-bold">Vision</h6>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Assumenda consectetur adipisci, voluptatum dolores nostrum
                  omnis.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section
        class="promo-video py-5 bg-dark text-white text-center"
        style="
          background-image: url('path/to/your/video-background.jpg');
          background-size: cover;
          background-position: center;
          background-blend-mode: multiply;
          background-color: rgba(0, 0, 0, 0.6);
        "
      >
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <h6 class="text-uppercase text-white-50">About Our Hospital</h6>
              <h1 class="display-3 fw-bold my-4">
                The World <br />
                Class Hospitality
              </h1>

              <a
                data-fancybox
                href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&autoplay=1&rel=0&controls=0&showinfo=0"
                class="btn btn-light btn-lg rounded-circle p-4"
                aria-label="Play Video"
              >
                <i class="fas fa-play fs-3"></i>
              </a>
            </div>
          </div>
        </div>
      </section>

      <section class="gallery py-5 bg-light">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
              <h3 class="fw-bold">
                Collected Shots <span>of Our Hospital</span>
              </h3>
              <p class="lead text-muted">
                Leverage agile frameworks to provide a robust synopsis for high
                level overviews. Iterative approaches to corporate strategy...
              </p>
            </div>
          </div>

          <div class="row g-4">
            <div class="col-lg-4 col-md-6">
              <div class="card h-100 shadow-sm border-0">
                <a
                  data-fancybox="images"
                  href="images/gallery/gallery-01.jpg"
                  class="gallery-link"
                >
                  <img
                    loading="lazy"
                    src="../assets/image/gallery/gallery-01.jpg"
                    class="card-img-top"
                    alt="gallery-image 1"
                  />
                </a>
                <div class="card-body text-center">
                  <h5 class="card-title">Facility 01</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Atque, in.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="card h-100 shadow-sm border-0">
                <a
                  data-fancybox="images"
                  href="../assets/image/gallery/gallery-02.jpg"
                >
                  <img
                    loading="lazy"
                    src="../assets/image/gallery/gallery-02.jpg"
                    class="card-img-top"
                    alt="gallery-image 2"
                  />
                </a>
                <div class="card-body text-center">
                  <h5 class="card-title">Facility 02</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Atque, in.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="card h-100 shadow-sm border-0">
                <a
                  data-fancybox="images"
                  href="../assets/image/gallery/gallery-03.jpg"
                >
                  <img
                    loading="lazy"
                    src="../assets/image/gallery/gallery-03.jpg"
                    class="card-img-top"
                    alt="gallery-image 3"
                  />
                </a>
                <div class="card-body text-center">
                  <h5 class="card-title">Facility 03</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Atque, in.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="card h-100 shadow-sm border-0">
                <a
                  data-fancybox="images"
                  href="../assets/image/gallery/gallery-04.jpg"
                >
                  <img
                    loading="lazy"
                    src="../assets/image/gallery/gallery-04.jpg"
                    class="card-img-top"
                    alt="gallery-image 4"
                  />
                </a>
                <div class="card-body text-center">
                  <h5 class="card-title">Facility 04</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Atque, in.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="card h-100 shadow-sm border-0">
                <a
                  data-fancybox="images"
                  href="../assets/image/gallery/gallery-05.jpg"
                >
                  <img
                    loading="lazy"
                    src="../assets/image/gallery/gallery-05.jpg"
                    class="card-img-top"
                    alt="gallery-image 5"
                  />
                </a>
                <div class="card-body text-center">
                  <h5 class="card-title">Facility 05</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Atque, in.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="card h-100 shadow-sm border-0">
                <a
                  data-fancybox="images"
                  href="../assets/image/gallery/gallery-06.jpg"
                >
                  <img
                    loading="lazy"
                    src="../assets/image/gallery/gallery-06.jpg"
                    class="card-img-top"
                    alt="gallery-image 6"
                  />
                </a>
                <div class="card-body text-center">
                  <h5 class="card-title">Facility 06</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Atque, in.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="appointment-section py-5">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-6">
              <h3 class="mb-4 fw-bold">Frequently Asked Questions (FAQ)</h3>

              <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOneB">
                    <button
                      class="accordion-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseOneB"
                      aria-expanded="true"
                      aria-controls="collapseOneB"
                    >
                      Why Should I choose Medical Health?
                    </button>
                  </h2>
                  <div
                    id="collapseOneB"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingOneB"
                    data-bs-parent="#faqAccordion"
                  >
                    <div class="accordion-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life
                      accusamus terry richardson ad squid. 3 wolf moon officia
                      aute, non cupidatat skateboard dolor brunch. Food truck
                      quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                      tempor, sunt aliqua put a bird on it squid single-origin
                      coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                      helvetica, craft beer labore wes anderson cred nesciunt
                      sapiente ea proident. Ad vegan excepteur butcher vice
                      lomo. Leggings occaecat craft beer farm-to-table.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwoB">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseTwoB"
                      aria-expanded="false"
                      aria-controls="collapseTwoB"
                    >
                      What are the Centre’s visiting hours?
                    </button>
                  </h2>
                  <div
                    id="collapseTwoB"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingTwoB"
                    data-bs-parent="#faqAccordion"
                  >
                    <div class="accordion-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life
                      accusamus terry richardson ad squid. 3 wolf moon officia
                      aute, non cupidatat skateboard dolor brunch. Food truck
                      quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                      tempor, sunt aliqua put a bird on it squid single-origin
                      coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                      helvetica, craft beer labore wes anderson cred nesciunt
                      sapiente ea proident. Ad vegan excepteur butcher vice
                      lomo. Leggings occaecat craft beer farm-to-table.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThreeB">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseThreeB"
                      aria-expanded="false"
                      aria-controls="collapseThreeB"
                    >
                      How many visitors are allowed?
                    </button>
                  </h2>
                  <div
                    id="collapseThreeB"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingThreeB"
                    data-bs-parent="#faqAccordion"
                  >
                    <div class="accordion-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life
                      accusamus terry richardson ad squid. 3 wolf moon officia
                      aute, non cupidatat skateboard dolor brunch. Food truck
                      quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                      tempor, sunt aliqua put a bird on it squid single-origin
                      coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                      helvetica, craft beer labore wes anderson cred nesciunt
                      sapiente ea proident. Ad vegan excepteur butcher vice
                      lomo. Leggings occaecat craft beer farm-to-table.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="contact-area ps-lg-4">
                <h3 class="mb-4 fw-bold">
                  Request <span class="text-primary">Appointment</span>
                </h3>
                <form name="contact_form" action="#!" method="post">
                  <div class="row g-3">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <input
                          class="form-control"
                          type="text"
                          name="Name"
                          placeholder="Name"
                          required
                        />
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="mb-3">
                        <input
                          class="form-control"
                          type="text"
                          name="Phone"
                          placeholder="Phone"
                          required
                        />
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="mb-3">
                        <input
                          class="form-control"
                          type="email"
                          name="Email"
                          placeholder="Email"
                          required
                        />
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="mb-3">
                        <input
                          class="form-control"
                          type="date"
                          name="Date"
                          placeholder="Date"
                          required
                        />
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="mb-3">
                        <select class="form-select" name="department" required>
                          <option selected disabled value="">
                            Select Department
                          </option>
                          <option>Diagnostic</option>
                          <option>Psychological</option>
                          <option>Cardiology</option>
                          <option>Neurology</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="mb-3">
                        <select class="form-select" name="doctor" required>
                          <option selected disabled value="">
                            Select Doctor
                          </option>
                          <option>Dr. Smith</option>
                          <option>Dr. Jones</option>
                          <option>Dr. Taylor</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="mb-3">
                        <textarea
                          class="form-control"
                          name="form_message"
                          placeholder="Your Message (Optional)"
                          rows="5"
                        ></textarea>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">
                          Submit Now
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
