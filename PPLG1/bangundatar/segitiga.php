<?php

if (
  isset($_POST['alas']) .
  isset($_POST['tinggi']) .
  isset($_POST['sisiA']) .
  isset($_POST['sisiB']) .
  isset($_POST['sisiC'])
) {
  $alas = $_POST['alas'];
  $tinggi = $_POST['tinggi'];
  $sisiA = $_POST['sisiA'];
  $sisiB = $_POST['sisiB'];
  $sisiC = $_POST['sisiC'];
  $hasilLuas = (1 / 2) * $alas * $tinggi;
  $hasilKll = $sisiA + $sisiB + $sisiC;  
} else {
  $alas = 0;
  $tinggi = 0;
  $sisiA = 0;
  $sisiB = 0;
  $sisiC = 0;
  $hasilLuas = 0;
  $hasilKll = 0;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bangun Datar</title>
  <link rel="stylesheet" href="../dist/css/bootstrap.css">
</head>

<body>
  <div class="containers">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
      <div class="container-fluid mx-5">
        <a class="navbar-brand" href="index.php">Bangun Datar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Persegi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="panjang.php">Persegi Panjang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="segitiga.php">Segitiga</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="lingkaran.php">Lingkaran</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div class="container mt-5">
    <form action="" method="post">
      <div class="row">
        <div class="mb-3 col-6">
          <div class="card">
            <h5 class="card-header">Input</h5>
            <div class="card-body">
              <div class="row my-3">
                <label class="form-label col-sm-3" for="alas">alas</label>
                <div class="col-sm-9">
                  <input class="form-control" size="5" type="number" name="alas" id="alas">
                </div>
              </div>
              <div class="row my-3">
                <label class="form-label col-sm-3" for="tinggi">tinggi</label>
                <div class="col-sm-9">
                  <input class="form-control" size="5" type="number" name="tinggi" id="tinggi">
                </div>
              </div>
              <div class="row my-3">
                <label class="form-label col-sm-3" for="sisiA">sisiA</label>
                <div class="col-sm-9">
                  <input class="form-control" size="5" type="number" name="sisiA" id="sisiA">
                </div>
              </div>
              <div class="row my-3">
                <label class="form-label col-sm-3" for="sisiB">sisiB</label>
                <div class="col-sm-9">
                  <input class="form-control" size="5" type="number" name="sisiB" id="sisiB">
                </div>
              </div>
              <div class="row my-3">
                <label class="form-label col-sm-3" for="sisiC">sisiC</label>
                <div class="col-sm-9">
                  <input class="form-control" size="5" type="number" name="sisiC" id="sisiC">
                </div>
              </div>
              <div class="text-center">
                <button type="submit" href="#" class="btn btn-outline-success mt-5 text-center">Hitung</button>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-3 col-6">
          <div class="card">
            <h5 class="card-header">Output</h5>
            <div class="card-body">
              <div class="row my-3">
                <label class="form-label col-sm-3" for="HasilLuas">HasilLuas</label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="HasilLuas" id="HasilLuas" value="<?= $hasilLuas; ?> cm2">
                </div>
              </div>
              <div class="row my-3">
                <label class="form-label col-sm-3" for="HasilKll">HasilKll</label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="HasilKll" id="HasilKll" value="<?= $hasilKll; ?> cm2">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

  <script src="../dist/js/bootstrap.min.js"></script>
</body>

</html>