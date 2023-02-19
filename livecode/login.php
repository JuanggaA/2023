<?php
session_start();

if (isset($_SESSION['username'])) {
  # code...
  header('location: index.php');
  exit;
}

include('function/koneksi.php');

// Check if the form is submitted
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Prepare the SQL statement
  $stmt = $conn->prepare("SELECT * FROM tb_users WHERE username=?");

  // Bind the parameters
  $stmt->bind_param("s", $username);

  // Execute the statement
  $stmt->execute();

  // Get the result set
  $result = $stmt->get_result();

  // Check if the user exists and verify the password
  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
      // Jika login sukses, set session 'username'
      $_SESSION['username'] = $username;

      // Redirect ke halaman dashboard atau halaman lainnya
      header("Location: index.php");
      exit();
    } else {
      $alert = "Password salah. Silahkan coba lagi.";
    }
  } else {
    $alert = "Username tidak ditemukan. Silahkan coba lagi.";
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
  <link rel="stylesheet" href="css/login.css">
</head>

<body>
  <div class="container">
    <div class="login-container">
      <div class="card border border-1" style="width: 50em;">
        <div class="row">
          <div class="left-side col-md-6">
            <div class="logo">
              <a href="#">
                <img src="img/mobile-login-concept-illustration_114360-83.png" alt="Google Logo" width="250">
              </a>
            </div>
          </div>
          <div class="right-side col-md-6">
            <form action="" method="post" autocomplete="off">
              <h2 class="text-light">Login</h2>
              <div class="float-start mb-3">
                <?php if (isset($alert)) : ?>
                    <?= $alert; ?>
                  <?php endif; ?>
              </div>
              <input class="form-control mb-3" type="text" id="username" name="username" placeholder="Enter username" required>
              <input class="form-control mb-2" type="password" id="password" name="password" placeholder="Password" required>
              <div class="checkbox text-start">
                <input class="form-check-input" type="checkbox" id="gridCheck" name="checkbox">
                <label class="form-check-label" for="gridCheck">
                  Remember Me
                </label>
              </div>
              <div class="login text-center">
                <button type="submit" name="login">Login</button>
              </div>
              <div class="separator text-light">or login with</div>
              <div class="button d-flex justify-content-evenly mb-4">
                <a class="btn-google"><img class="icon-google" src="img/google (1).png" alt="Google Logo"></a>
                <a class="btn-facebook"><img class="icon-facebook" src="img/facebook (1).png" alt="Facebook Logo"></a>
              </div>
              <div class="separator-akhir text-light"></div>
              <div class="forgot-password"><a class="text-light text-decoration-none small" href="#">Forgot Password?</a></div>
              <div class="forgot-password"><a class="text-light text-decoration-none small" href="register.php">Create Account!</a></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="dist/js/bootstrap.min.js"></script>
</body>

</html>