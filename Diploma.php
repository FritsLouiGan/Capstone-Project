<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Diploma</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <div class="container mt-5">
    <h2 class="mb-4">Upload Diploma</h2>
    <form action="#" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="diplomaFile">Select Diploma File:</label>
        <input type="file" class="form-control-file" id="diplomaFile" name="diplomaFile" accept=".pdf">
        <small class="form-text text-muted">Please upload your diploma in PDF format.</small>
      </div>
      <button type="submit" class="btn btn-primary">Upload</button>
    </form>
  </div>

</body>

</html>
