<?php 

session_start();

if (isset($_SESSION['username'])) {
  # code...
  header('location: index.php');
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="dist/css/bootstrap.css">
  <link rel="stylesheet" href="css/home.css">
  <style>
    body {
      font-family: 'Poppins', system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }
  </style>
</head>

<body>
  <div class="container fixed-top">
    <nav class="navbar">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold text-light" href="#">
          <img src="img/organic-flat-nasi-lemak-illustrated_23-2148945741.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
          Nasi Timbel
        </a>
      </div>
    </nav>
  </div>
  <div class="full-screen">
    <div class="container-fluid h-100">
      <div class="row h-100">
        <div class="col-md-6 col-left">
          <div>
            <h1>Welcome To NasTim</h1>
            <a class="btn btn-light rounded-5 px-4" href="login.php">Login</a>
          </div>
        </div>
        <div class="col-md-6 col-right">
          <img src="img/organic-flat-nasi-lemak-illustrated_23-2148945741.png" width="450">
        </div>
      </div>
    </div>
  </div>

  <script src="dist/js/bootstrap.min.js"></script>
</body>

</html>