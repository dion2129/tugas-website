<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Appointment</title>
    <link rel="icon" href="../Assets/images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="../plugins/node_modules/bootstrap-icons/font/bootstrap-icons.css"
    />
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <?php
    include '../Component/header.php';
    // 
    ?>
    <div class="container">
      <section class="py-5">
        <div class="container">
          <div class="row align-items-center g-5">
            <div class="col-lg-6 order-1 order-lg-0">
              <div class="pe-lg-4">
                <h3 class="fw-bold mb-4">
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
                      <div class="mb-3">
                        <input
                          class="form-control"
                          type="email"
                          name="Email"
                          placeholder="Email"
                          required
                        />
                      </div>
                      <div class="mb-3">
                        <select class="form-select" name="department" required>
                          <option selected disabled value="">
                            Select Department
                          </option>
                          <option>Diagnostic</option>
                          <option>Psychological</option>
                          <option>Cardiology</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="mb-3">
                        <input
                          class="form-control"
                          type="tel"
                          name="Phone"
                          placeholder="Phone"
                          required
                        />
                      </div>
                      <div class="mb-3">
                        <input
                          class="form-control"
                          type="date"
                          name="Date"
                          placeholder="Date"
                          required
                        />
                      </div>
                      <div class="mb-3">
                        <select class="form-select" name="doctor" required>
                          <option selected disabled value="">
                            Select Doctor
                          </option>
                          <option>Dr. Smith</option>
                          <option>Dr. Jones</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="mb-3">
                        <textarea
                          class="form-control"
                          name="form_message"
                          placeholder="Your Message"
                          required
                          rows="4"
                        ></textarea>
                      </div>
                      <div class="text-center">
                        <button
                          type="submit"
                          class="btn btn-primary btn-lg px-5"
                        >
                          Submit Now
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0 order-0 order-lg-1">
              <div class="ms-lg-4">
                <img
                  loading="lazy"
                  class="img-fluid rounded shadow"
                  src="../assets/image/background/appoinment.jpg"
                  alt="Appointment Image"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="team-section py-5 bg-light">
        <div class="container">
          <div class="text-center mb-5">
            <h3 class="fw-bold">Our Expert <span>Doctors</span></h3>
            <p class="text-muted mb-0">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Voluptatem illo, rerum<br />
              natus nobis deleniti doloremque minima odit voluptatibus ipsam
              animi?
            </p>
          </div>

          <div class="row justify-content-center g-4">
            <div class="col-lg-4 col-md-6">
              <div class="card text-center border-0 shadow-sm h-100">
                <img
                  loading="lazy"
                  src="../assets/image/team/doctor-2.jpg"
                  alt="Dr. Robert Barrethion"
                  class="card-img-top"
                />
                <div class="card-body">
                  <h4 class="card-title">Dr. Robert Barrethion</h4>
                  <p class="card-text text-muted">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Dignissimos, aspernatur.
                  </p>
                  <a href="appointment.html" class="btn btn-primary"
                    >Book Appointment</a
                  >
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="card text-center border-0 shadow-sm h-100">
                <img
                  loading="lazy"
                  src="../assets/image/team/doctor-lab-3.jpg"
                  alt="Dr. Marry Lou"
                  class="card-img-top"
                />
                <div class="card-body">
                  <h4 class="card-title">Dr. Marry Lou</h4>
                  <p class="card-text text-muted">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Dignissimos, aspernatur.
                  </p>
                  <a href="appointment.html" class="btn btn-primary"
                    >Book Appointment</a
                  >
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="card text-center border-0 shadow-sm h-100">
                <img
                  loading="lazy"
                  src="../Assets/image/team/event-2.jpg"
                  alt="Dr. Sansa Stark"
                  class="card-img-top"
                />
                <div class="card-body">
                  <h4 class="card-title">Dr. Sansa Stark</h4>
                  <p class="card-text text-muted">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Dignissimos, aspernatur.
                  </p>
                  <a href="appointment.html" class="btn btn-primary"
                    >Book Appointment</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <?php
    include '../Component/footer.php';
    ?>
  </body>
</html>
