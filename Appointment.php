<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Appointment</title>
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
      <a href="dashboard2.html" class="logo d-flex align-items-center">
        <img src="assets/img/UI-logo.jpg" alt="Profile" class="rounded-circle">
        <span class="d-none d-lg-block">Registrar Appointment</span>
      </a>
      <i class="bi bi-caret-left toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
        <!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

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
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq2.html">
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

      <!-- End Dashboard Nav -->

      <!-- End Components Nav -->
      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="student-information.php">
              <i class="bi bi-circle"></i><span>Student Fillup</span>
            </a>
          </li>
          <li>
            <a href="Appointment.php" class="active">
              <i class="bi bi-circle"></i><span>Appointment</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq2.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact2.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="notice.php">
          <i class="bi bi-question-diamond"></i>
          <span>Notice</span>
        </a>
      </li>

      
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Appointment</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard2.html">Home</a></li>
          <li class="breadcrumb-item"><a href="student-information.php">Forms</a></li>
          <li class="breadcrumb-item active">Appointment</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Appointment</h5>

              <!-- Horizontal Form -->
              <form action="process.php" method="POST">
              <form class="row g-3">
                <div class="input-group mb-4">
                  <label for="inputtext" class="col-sm-3 col-form-label">Student number</label>
                  <input type="text" class="form-control" name="SN" placeholder="Student number" aria-label="Student number" required>                  
                </div>
                <div class="input-group mb-4">
                  <label for="inputtext" class="col-sm-3 col-form-label">Student name</label>
                  <input type="text" class="form-control" name="Lastname" placeholder="Last Name" aria-label="Last Name" required>
                  <input type="text" class="form-control" name="Firstname" placeholder="First Name" aria-label="First Name" required>
                  <input type="text" class="form-control" name="mn" placeholder="Middle Name" aria-label="Middle Name" required>
                </div>
                <div class="input-group mb-4">
                  <label for="inputtext" class="col-sm-3 col-form-label">Contact details</label>
                  <input type="text" class="form-control" name="Phone" placeholder="Phone" aria-label="Phone" required>
                  <span class="input-group-text">@</span>
                  <input type="email" class="form-control" name="Email" placeholder="email" aria-label="email" required>                  
                </div>
                <div class="input-group mb-4">                  
                  <input type="text" class="form-control" name="Address" placeholder="Address" aria-label="Address" required>         
                  <input type="text" class="form-control" name="course" placeholder="Course" aria-label="Course" required>                   
                </div>
                <div class="input-group mb-4">                  
                  <input type="text" class="form-control" name="YG" placeholder="Year Graduated/Last Attend" aria-label="Year Graduated/Last Attend" required>
                  <input type="text" class="form-control" name="Semester" placeholder="Semester" aria-label="Semester" required>                  
                </div>
                <div class="input-group mb-4">                  
                  <label for="inputdate" class="col-sm-3 col-form-label">Date</label>
                  <input type="date" class="form-control" name="Date" placeholder="Date" aria-label="Date" required>               
                </div>
                               
                <div class="row mb-4">
                  <label class="col-sm-4 col-form-label">Document to be requested</label>
                  <div class="col-sm-20">
                      <div class="form-check">
                        <input class="form-check-input" name="tor" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                          Transcript of Records
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" name="diploma" type="checkbox" id="gridCheck2">
                        <label class="form-check-label" for="gridCheck2">
                          Diploma
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" name="hd" type="checkbox" id="gridCheck3">
                        <label class="form-check-label" for="gridCheck3">
                          Honorabale Dismissal
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" name="AT" type="checkbox" id="gridCheck4">
                        <label class="form-check-label" for="gridCheck4">
                          Authentication
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" name="cg" type="checkbox" id="gridCheck5">
                        <label class="form-check-label" for="gridCheck5">
                          Certification of Graduation
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" name="ce" type="checkbox" id="gridCheck6">
                        <label class="form-check-label" for="gridCheck6">
                          certification Enrolled
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" name="cog" type="checkbox" id="gridCheck7">
                        <label class="form-check-label" for="gridCheck7">
                          Copy of Grades
                        </label>
                      </div>
                  </div>
              </div>
              
                <div class="row mb-4">
                  <label class="col-sm-4 col-form-label">Number of Copies/set</label>
                  <div class="col-sm-20">
                    <input type="text" class="form-control" name="nc" placeholder="#units" aria-label="#units">                    
                  </div>
                </div>
                <div class="row mb-4">
                  <label class="col-sm-5 col-form-label">Name of document/Porpuse/Reason</label>
                  <div class="col-sm-20">
                    <input type="text" class="form-control" name="reason" placeholder="Type" aria-label="Type">                    
                  </div> 
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                      <a href="notice.php"><button type="button" class="btn btn-success">Requirements</button></a>
                    </div>
                </div>
                <div class="text-center">
                  <button type="submit" name="appoint" class="btn btn-primary">Submit</button>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>          
        </div>

        
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Bootstrap</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://ibb.co/rpNQgNy">DarkWeb</a>
    </div>
  </footer><!-- End Footer -->

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