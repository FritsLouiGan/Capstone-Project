<?php
include "conn.php";
session_start();

if (empty($_SESSION)) {
    ?>
    <script>
        alert("Session Expired!\nPlease Login");
        window.location.href = "index.php";
    </script>
    <?php
} else {
    $email = $_SESSION['email'];
    $get_name = mysqli_query($conn, "SELECT * FROM sheesh  WHERE email='$email'");
    while ($row = mysqli_fetch_object($get_name)) {
        $name = $row->name;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Data</title>
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
      <a href="dashboard3.html" class="logo d-flex align-items-center">
        <img src="assets/img/UI-logo.jpg" alt="Profile" class="rounded-circle">
        <span class="d-none d-lg-block">Registrar Appointment</span>
      </a>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

            <a class="nav-link nav-icon" href="#">
              <i class="bi bi-printer" onclick="window.print()"></i>
              <span class="badge bg-success badge-number"></span>
            </a><!-- End Messages Icon -->
         
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
              <a class="dropdown-item d-flex align-items-center" href="registrar-profile.html">
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
        </li>
        <!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="dashboard3.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Students Records</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="student-book.php">
              <i class="bi bi-circle"></i><span>Student Book Date/Time</span>
            </a>
          </li>
          <li>
            <a href="data2.php">
              <i class="bi bi-circle"></i><span>Data Information</span>
            </a>
          </li>
          <li>
            <a href="student-appointment2.php">
              <i class="bi bi-circle"></i><span>Student Appointment</span>
            </a>
          </li>
          <li>
            <a href="print.php" class="active">
              <i class="bi bi-circle"></i><span>Student Data Print</span>
            </a>
          </li>
          <li>
            <a href="img-requirements.php">
              <i class="bi bi-circle"></i><span>Student Requirements</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="registrar-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Student form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard3.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Info</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Student info</h5>
              <a class="nav-link nav-icon" href="#">
                <i class="bi bi-printer" onclick="window.print()"></i>
                <span class="badge bg-success badge-number"></span>
              </a>

              <!-- General Form Elements -->
              <?php
              $getdata = mysqli_query($conn, "SELECT * FROM info1");
              while ($row = mysqli_fetch_array($getdata)) {
                  ?>
                  <form class="row g-3">
                    <div class="input-group mb-3">                                       
                        <span class="input-group-text">LRN:</span>
                        <span class="form-control"><td><?php echo $row['lrn']; ?></td></span>
                        <span class="input-group-text">PAEC ESC:</span>
                        <span class="form-control"><td><?php echo $row['peacesc']; ?></td></span>                
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Applicant no.:</span>
                        <span class="form-control"><td><?php echo $row['applicant_no.']; ?></td></span>                    
                        <span class="input-group-text">Date:</span>
                        <span class="form-control"><td><?php echo $row['date']; ?></td></span>  
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">COURSE:</span>
                        <span class="form-control"><td><?php echo $row['course']; ?></td></span>  
                        <span class="input-group-text">Major:</span>
                        <span class="form-control"><td><?php echo $row['major']; ?></td></span>                      
                    </div>
                    <div class="input-group mb-3">     
                        <span class="input-group-text">Last Name:</span>
                        <span class="form-control"><td><?php echo $row['lastname']; ?></td></span>
                        <span class="input-group-text">First Name:</span>
                        <span class="form-control"><td><?php echo $row['firstname']; ?></td></span> 
                        <span class="input-group-text">Middle Name:</span>
                        <span class="form-control"><td><?php echo $row['middlename']; ?></td></span>                            
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Date of Birth:</span>
                        <span class="form-control"><td><?php echo $row['date_of_birth']; ?></td></span>                    
                        <span class="input-group-text">Sex:</span>
                        <span class="form-control"><td><?php echo $row['sex']; ?></td></span>              
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Place of Birth:</span>
                        <span class="form-control"><td><?php echo $row['place_of_birth']; ?></td></span>   
                        <span class="input-group-text">Civil Status:</span>
                        <span class="form-control"><td><?php echo $row['civilstatus']; ?></td></span>                                     
                    </div>
                    <div class="input-group mb-3">  
                        <span class="input-group-text">Citizenship:</span>
                        <span class="form-control"><td><?php echo $row['citizenship']; ?></td></span>
                        <span class="input-group-text">Email Address:</span>
                        <span class="form-control"><td><?php echo $row['email_address']; ?></td></span>                    
                    </div>
                    <div class="input-group mb-3"> 
                        <span class="input-group-text">Religion:</span>
                        <span class="form-control"><td><?php echo $row['religion']; ?></td></span>   
                        <span class="input-group-text">Permanent Address:</span>
                        <span class="form-control"><td><?php echo $row['permanent_adress']; ?></td></span>                   
                    </div>      
                    <div class="input-group mb-3">          
                        <span class="input-group-text">Mother's name:</span>
                        <span class="form-control"><td><?php echo $row['mothers_name']; ?></td></span>
                        <span class="input-group-text">Father's name:</span>
                        <span class="form-control"><td><?php echo $row['fathers_name']; ?></td></span>
                        <span class="input-group-text">Contact no.:</span>
                        <span class="form-control"><td><?php echo $row['contact_number']; ?></td></span>
                    </div>   
                    <div class="input-group mb-3"> 
                        <span class="input-group-text">Elementary:</span>
                        <span class="form-control"><td><?php echo $row['elementary']; ?></td></span>                 
                        <span class="input-group-text">Elementary year:</span>
                        <span class="form-control"><td><?php echo $row['elementary_year']; ?></td></span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">High School:</span>
                        <span class="form-control"><td><?php echo $row['high_school']; ?></td></span> 
                        <span class="input-group-text">High School year:</span>
                        <span class="form-control"><td><?php echo $row['high_school_year']; ?></td></span>  
                    </div>       
                    <div class="input-group mb-3">           
                        <span class="input-group-text">College:</span>
                        <span class="form-control"><td><?php echo $row['college']; ?></td></span>
                        <span class="input-group-text">College year:</span>
                        <span class="form-control"><td><?php echo $row['college_year']; ?></td></span>  
                    </div>  
                              
                    <div class="row mb-3">                  
                      <div class="col-sm-13">
                        <input type="text" class="form-control" value="Person to contact incase of emergency" disabled>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Name:</span>
                        <span class="form-control"><td><?php echo $row['name']; ?></td></span>                    
                        <span class="input-group-text">Relationship:</span>
                        <span class="form-control"><td><?php echo $row['relationship']; ?></td></span>                
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Address:</span>
                        <span class="form-control"><td><?php echo $row['address']; ?></td></span>                    
                        <span class="input-group-text">Contact no.:</span>
                        <span class="form-control"><td><?php echo $row['contact_no.']; ?></td></span>                
                    </div>
                    

                  </form><!-- End General Form Elements -->
                <?php } ?>
                </div>
             
          </div>

        </div>

        
      </div>
      
    </section>

  </main>

 

 <!-- End #main -->

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