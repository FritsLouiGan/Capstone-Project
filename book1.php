<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Phinma UI Registrar Appointment</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/UI-logo.jpg" rel="icon">
  <link href="assets/img/UI-logo.jpg" rel="Ui-logo">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        .red-number {
            color: red; 
        }
    </style>

<body>
        <div class="container">
            <h2>Booking Calendar</h2>
            <form action="process.php" method="post">
                <div class="form-group">
                    <label for="date">Select a date:</label>
                    <input type="date" class="form-control" id="date" name="Date" required onchange="highlightDate()">
                </div>
                <div class="form-group">
                    <label for="time">Select a time slot:</label>
                    <select class="form-control" id="time" name="Time" required>
                        <option value="8:00 AM - 9:00 AM">7:30 AM - 11:30 AM</option>
                        <option value="9:00 AM - 10:00 AM">1:00 PM - 5:00 PM</option>
                    </select>
                </div>
                <div class="input-group mb-4">                  
                    <input type="text" class="form-control" name="lastname" placeholder="Last name" aria-label="Last name">         
                    <input type="text" class="form-control" name="firstname" placeholder="First name" aria-label="First name">                   
                </div>
                <button type="submit" class="btn btn-primary" name="bookz">Book</button>
            </form>

            <h3>Calendar</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Sun</th>
                        <th>Mon</th>
                        <th>Tue</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>
                        <th>Sat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Get current month and year
                    $month = date('m');
                    $year = date('Y');

                    // Get the first day of the month
                    $firstDay = mktime(0, 0, 0, $month, 1, $year);

                    // Get the number of days in the month
                    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);

                    // Get the day of the week of the first day of the month
                    $dayOfWeek = date('w', $firstDay);

                    // Create the calendar
                    echo "<tr>";
                    for ($i = 0; $i < $dayOfWeek; $i++) {
                        echo "<td></td>";
                    }
                    for ($day = 1; $day <= $daysInMonth; $day++) {
                        if ($day == 16) {
                            echo "<td class='red-number'>$day</td>";
                        } else {
                            echo "<td>$day</td>";
                        }
                        if (++$dayOfWeek == 7) {
                            echo "</tr>";
                            if ($day < $daysInMonth) {
                                echo "<tr>";
                            }
                            $dayOfWeek = 0;
                        }
                    }
                    echo "</tr>";
                    ?>
                </tbody>
            </table>
        </div>

        <script>
            function highlightDate() {
                var selectedDate = document.getElementById("date").value;
                var dateParts = selectedDate.split("-");
                var day = parseInt(dateParts[2], 10);
                if (day === 16) {
                    document.getElementById("date").style.color = "red";
                } else {
                    document.getElementById("date").style.color = "black";
                }
            }
        </script>


    </body>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Darkweb</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://ibb.co/rpNQgNy">DarkWeb</a>
    </div>
  </footer>
  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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