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
    }
  }

  // Login failed, show an error message
  echo "<p class='alert alert-danger'>Invalid username or password.</p>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <!-- Memanggil file CSS Bootstrap -->
  <link rel="stylesheet" href="dist/css/bootstrap.css">
</head>

<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-body p-5">
            <h2 class="mb-3">Login</h2>
            <form action="" method="post" autocomplete="off">
              <div class="form-group mb-3">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
              </div>
              <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>
              <button class="btn btn-success" type="submit" name="login">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Memanggil file JS Bootstrap -->
  <script src="dist/js/bootstrap.min.js"></script>
</body>

</html>