<?php

include('function/koneksi.php');

if (isset($_POST['register'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];

  // Check if passwords match
  if ($password != $password2) {
    echo '
      <div class="alert alert-warning" role="alert">
        Passwords do not match
      </div>';
  } else {
    // Check if username already exists
    $stmt = $conn->prepare("SELECT * FROM tb_users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
      echo '
      <div class="alert alert-danger" role="alert">
        Username already exists
      </div>';
    } else {
      // Hash password and register user
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);
      $stmt = $conn->prepare("INSERT INTO tb_users (username, password) VALUES (?, ?)");
      $stmt->bind_param("ss", $username, $hashed_password);
      if ($stmt->execute()) {
        header("location:login.php");
      } else {
        echo "Failed to register user";
      }
    }
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="dist/css/bootstrap.css">
  <style>
    body {
      font-family: 'Poppins', system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-body p-5">
            <h2 class="mb-3">Register</h2>
            <form method="post" action="" autocomplete="off">
              <div class="form-group mb-3">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
              </div>
              <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
              </div>
              <div class="form-group mb-3">
                <label for="password2">Confirm Password !</label>
                <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm Password" required>
              </div>
              <button class="btn btn-success" type="submit" name="register">Register</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="dist/js/bootstrap.min.js"></script>
</body>

</html>