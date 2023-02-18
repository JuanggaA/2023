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
  <style>
    /* Style untuk membuat section full 1 layar desktop */
    body,
    html {
      height: 100%;
      overflow: hidden;
    }

    .full-screen {
      height: 100%;
    }

    .row {
      height: 100%;
    }

    .col-left {
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #17a2b8;
      color: #fff;
      padding: 2rem;
    }

    .col-right {
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2rem;
    }

    h1 {
      font-size: 3rem;
      margin-bottom: 2rem;
    }

    .btn {
      margin-right: 1rem;
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
            <h1>Welcome To<br>Nastim Admin</h1>
            <a class="btn btn-light" href="login.php">Login</a>
            <a class="btn btn-light" href="register.php">Register</a>
          </div>
        </div>
        <div class="col-md-6 col-right">
          <img src="img/online-assistant-user-help-frequently-asked-questions-call-center-worker-cartoon-character-woman-working-hotline_335657-2336.png" alt="Picture Admin Vector" width="250">
        </div>
      </div>
    </div>
  </div>

  <script src="dist/js/bootstrap.min.js"></script>
</body>

</html>