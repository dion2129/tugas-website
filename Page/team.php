<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Team</title>
  <link rel="icon" href="../Assets/images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../plugins/node_modules/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body class="h-100">
<?php
include '../Component/header.php';
?>
<div class="container text-center py-5">
  <h2><strong>Tim</strong> Great</h2>
  <p class="text-muted">An agile framework is leveraged to provide a concise high-level summary, while an iterative approach guides corporate strategy.</p>

  <!-- Buttons -->
  <div class="d-flex justify-content-center gap-2 my-4 flex-wrap">
    <button class="btn btn-info text-white fw-bold">Dokter</button>
    <button class="btn btn-outline-info">Perencanaan Acara</button>
    <button class="btn btn-outline-info">Laboratorium</button>
    <button class="btn btn-outline-info">Pemasaran</button>
  </div>

  <!-- Cards -->
  <div class="row justify-content-center">
    <div class="col-md-4 mb-4">
      <div class="card border-0">
        <img src= "../Assets/image/team/doctor-1.jpg" class="card-img-top" alt="Dr. RAFDAH LONIA">
        <div class="card-body">
          <h5 class="card-title fw-bold">DR. RAFDAH LONIA</h5>
          <p class="text-muted text-uppercase small">Bone Specialist</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card border-0">
        <img src="../Assets/image/team/doctor-2.jpg" class="card-img-top" alt="Dr. Rag Jhon">
        <div class="card-body">
          <h5 class="card-title fw-bold">DR. ALFRED SETYONO</h5>
          <p class="text-muted text-uppercase small">Eye Specialist</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card border-0">
        <img src="../Assets/image/team/doctor-3.jpg" class="card-img-top" alt="Dr. Tent Richardson">
        <div class="card-body">
          <h5 class="card-title fw-bold">DR. TENT RICHARDSON</h5>
          <p class="text-muted text-uppercase small">Skin Specialist</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include '../Component/footer.php'; 
?>
</body>
</html>
