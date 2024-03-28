<?php
    include "conn.php";
    $ref_id = $_GET['id'];

    $getdata = mysqli_query($conn, "SELECT * FROM sheesh WHERE id='$ref_id'");

    while($d=mysqli_fetch_object($getdata)){
        $name = $d -> name;
        $email = $d -> email;
        $pass = $d -> password;

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/UI-logo.jpg" rel="icon">
  <link href="assets/img/UI-logo.jpg" rel="Ui-logo">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    #sidebar,
    #header {
      background-color: #81b06f; /* Green color */
      color: white; /* Text color */
    }
    /* Adjusted text color and styles for nav links */
    .sidebar-nav .nav-link {
      color: #fff; /* Text color: white */
      font-size: 16px; /* Font size */
      font-weight: 500; /* Font weight: semi-bold */
      text-transform: uppercase; /* Uppercase text */
      letter-spacing: 1px; /* Letter spacing */
      padding: 10px; /* Padding around text */
      transition: all 0.3s ease; /* Smooth transition */
    }

    /* Hover effect for nav links */
    .sidebar-nav .nav-link:hover {
      background-color: rgba(255, 255, 255, 0.1); /* Transparent white background on hover */
    }

    /* Style for active nav link */
    .sidebar-nav .nav-link.active {
      background-color: rgba(255, 255, 255, 0.2); /* Slightly more opaque white background for active link */
      color: #fff; /* Text color: white */
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard.php" class="logo d-flex align-items-center">
        <img src="assets/img/UI-logo.jpg" alt="Profile" class="rounded-circle">
        <span class="d-none d-lg-block">Registrar Appointment</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/PL.png" alt="Profile" class="rounded-circle"><span class="d-none d-md-block dropdown-toggle ps-2"></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Dark Web</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="registrar-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="registrar-profile.html ">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li> 

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq3.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="index.html">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Students Records</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show " data-bs-parent="#sidebar-nav">
          <li>
            <a href="data.php">
              <i class="bi bi-circle"></i><span>Data Information</span>
            </a>
          </li>
          <li>
            <a href="student-appointment.html">
              <i class="bi bi-circle"></i><span>Student Appointment</span>
            </a>
          </li>
          <li>
            <a href="print2.html">
              <i class="bi bi-circle"></i><span>Student Data Print</span>
            </a>
          </li>
          <li>
            <a href="adminpov1.php" class="active">
              <i class="bi bi-circle"></i><span>Update Student account</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    <section class="section dashboard">
      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Update Students Account</h5>
                <form action="process.php?id=<?php echo $ref_id?>" method="POST">
                  <div class="mb-3">
                    <label for="up_name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="up_name" name="up_name" value="<?php echo $name; ?>" required>
                  </div>
                  <div class="mb-3">
                    <label for="up_mail" class="form-label">Email</label>
                    <input type="text" class="form-control" id="up_mail" name="up_mail" value="<?php echo $email; ?>" required>
                  </div>
                  <div class="mb-3">
                    <label for="up_pass" class="form-label">Password</label>
                    <input type="text" class="form-control" id="up_pass" name="up_pass" value="<?php echo $pass; ?>" required>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-success" name="update">UPDATE</button>
                    <a href="adminpov1.php"><button type="button" class="btn btn-danger">Back</button></a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>