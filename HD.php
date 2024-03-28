<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Honorable Dismissal Submission</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2 class="mt-5 mb-3">Honorable Dismissal Submission</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="studentName">Student Name:</label>
        <input type="text" class="form-control" id="studentName" name="studentName" required>
      </div>
      <div class="form-group">
        <label for="studentID">Student ID:</label>
        <input type="text" class="form-control" id="studentID" name="studentID" required>
      </div>
      <div class="form-group">
        <label for="school">School:</label>
        <input type="text" class="form-control" id="school" name="school" required>
      </div>
      <div class="form-group">
        <label for="dismissalDocument">Upload Honorable Dismissal Document (PDF):</label>
        <input type="file" class="form-control-file" id="dismissalDocument" name="dismissalDocument" accept=".pdf" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
