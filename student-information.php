<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Student Information</title>
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

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard2.html" class="logo d-flex align-items-center">
        <img src="assets/img/UI-logo.jpg" alt="">
        <span class="d-none d-lg-block">Register Appointment</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-dots"></i>
            <span class="badge bg-primary badge-number">1</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 1 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h5>Dark Web</h5>
                <p>Hello dear Welcome to our Website, Phinma UI Registrar Booking pro i hope this website can help you to easy appoint your needed in school.</p>
                <h4>Thank You!</h4>
              </div>
            </li>

            

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-people"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              Hello we Are the creator of this website
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/jules.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Jules Surriga</h4>
                  <p>Hello world</p>
                  <p>Web Designer</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/uli.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Ulysses Nava</h4>
                  <p>Hello World</p>
                  <p>Web Designer</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/frits.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Frits Loui Gan</h4>
                  <p>Hello World</p>
                  <p>Web Designer</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/Unknown.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Unknown</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>DarkWeb</h6>
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
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
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
            <a href="student-information.html" class="active">
              <i class="bi bi-circle"></i><span>Student Fillup</span>
            </a>
          </li>
          <li>
            <a href="Appointment.html">
              <i class="bi bi-circle"></i><span>Appointment</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <!-- End Tables Nav -->

      <!-- End Icons Nav -->

      

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
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
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <!-- End Login Page Nav -->

      <!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Student Information Sheet</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard2.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Info</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Student info</h5>

              <!-- General Form Elements -->
              <form>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="LRN" aria-label="LRN">                  
                  <input type="text" class="form-control" placeholder="PAEC ESC" aria-label="PAEC ESC">
                </div>
                <div class="input-group mb-3">
                  <input type="number" class="form-control" placeholder="Applicant no." aria-label="Applicant no.">
                  <span class="input-group-text">Date</span>
                  <input type="date" class="form-control" placeholder="Date of Birth" aria-label="Date of Birth">
                </div>
                <div class="input-group mb-3">                   
                  <input type="text" class="form-control" placeholder="Course" aria-label="Course">  
                  <input type="text" class="form-control" placeholder="Major" aria-label="Major">                
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Last Name" aria-label="Last Name">
                  <input type="text" class="form-control" placeholder="First Name" aria-label="First Name">
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Middle Name" aria-label="Middle Name">
                  <span class="input-group-text">Date of Birth</span>
                  <input type="date" class="form-control" placeholder="Date of Birth" aria-label="Date of Birth"> 
                </div>
                <legend class="col-form-label col-sm-2 pt-0">Sex</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                      <label class="form-check-label" for="gridRadios1">
                        Female
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                        male
                      </label>
                    </div>                    
                  </div>
                <div class="input-group mb-3">                     
                  <input type="text" class="form-control" placeholder="Place of Birth" aria-label="Place of Birth"> 
                  <input type="text" class="form-control" placeholder="Civil Status" aria-label="Civil Status">                 
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Citizenship" aria-label="Citizenship">
                  <span class="input-group-text">@</span> 
                  <input type="email" class="form-control" placeholder="Email Address" aria-label="Email Address"> 
                </div>
                <div class="input-group mb-3">                    
                  <input type="text" class="form-control" placeholder="Religion" aria-label="Religion">
                  <input type="text" class="form-control" placeholder="Permanent Address" aria-label="Permanent Address">
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Mother's name" aria-label="Mother's name">
                  <input type="text" class="form-control" placeholder="Father's name" aria-label="Father's name">
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Contact no." aria-label="Contact no.">
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Elementary" aria-label="Elementary">
                  <input type="text" class="form-control" placeholder="Elementary year" aria-label="Elementary year">
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="High School" aria-label="High School">
                  <input type="text" class="form-control" placeholder="High School year" aria-label="High School year">
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="College" aria-label="College">
                  <input type="text" class="form-control" placeholder="College year" aria-label="College year">
                </div>
                              
                <div class="row mb-3">                  
                  <div class="col-sm-13">
                    <input type="text" class="form-control" value="Person to contact incase of emergency:" disabled>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Name" aria-label="Name">
                  <input type="text" class="form-control" placeholder="Relationship" aria-label="Relationship">
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Address" aria-label="Address">
                  <input type="text" class="form-control" placeholder="Contact no." aria-label="Contact no.">
                </div>
             
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

        <div class="col-lg-4">

          <div class="card">
            <div class="card-body">                            
              <h5 class="card-title">Basic Questions</h5>

              <div>
                <h6>1. What is Phinma Registrar Appointment?</h6>
                <p>Welcome to Phinma University's Registrar Appointment system! This service is designed to streamline and simplify the process of scheduling appointments with the university registrar. Whether you're a student seeking academic guidance, need assistance with enrollment matters, or have questions about your records, our Registrar Appointment system ensures that you can conveniently book a time slot to meet with the registrar and address your concerns.</p>
              </div>

              <div class="pt-2">
                <h6>2. How can I use the Phinma Registrar Appointment system?</h6>
                <p>Using the Phinma Registrar Appointment system is straightforward. Simply log in to your student account, navigate to the appointment section, and choose a suitable date and time for your meeting with the registrar. This platform provides an efficient way for you to schedule appointments, reducing wait times and ensuring that you receive personalized attention from the registrar. Make the most of your university experience by utilizing this convenient and user-friendly appointment system.</p>
              </div>

              <div class="pt-2">
                <h6>3. What types of appointments can I schedule with the registrar?</h6>
                <p>The Phinma Registrar Appointment system accommodates a variety of appointments to cater to your academic needs. Whether you require assistance with course registration, have questions about your academic records, or need guidance on university policies, you can schedule appointments related to these matters. The system is designed to enhance communication between students and the registrar, fostering a more accessible and responsive academic support system at Phinma University.</p>
              </div><!-- End General Form Elements -->

            </div>
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
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
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