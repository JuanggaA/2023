<?php
require 'functions.php';

// ambil data dari url
$id = $_GET["id"];

// query data kopimenu berdasarkan id
$rename = query("SELECT * FROM tb_kopikita WHERE id = $id")[0];
// var_dump($rename);

if (isset($_POST["submit"])) {
  // cek data berhasil atau tidak
  if (ubah($_POST) > 0) {
    echo "
      <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'menu.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'menu.php';
      </script>
    ";
  };
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CoffeeDex</title>
  <!-- css -->
  <link rel="stylesheet" href="style.css">
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&display=swap" rel="stylesheet">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="bg-dark text-light">
  <header>
    <h1>Learn PHP</h1>
    <p>Pemograman Web Dan Pemograman Berorientasi Objek</p>
  </header>

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">CoffeeDex</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pesanan</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Laporan
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main style="margin-top: 15em;">
    <div class="container my-5 text-dark" style="margin-top: 150px;">
      <div class="card">
        <div class="card-title">
          <h4 class="border-1 p-3 text-dark" style="background-color: #eaeaea">Ubah Menu</h4>
        </div>
        <div class="card-body">
          <form action="" method="post" autocomplete="off">
            <input type="hidden" name="id" value="<?= $rename["id"]; ?>">
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label">Nama Menu</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Product" name="namamenu" value="<?= $rename["namamenu"]; ?>">
              <p class="" style="font-size: smaller;">Masukan Nama Menu Lengkap Yang Sesuai</p>
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Harga</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Harga Product" name="harga" value="<?= $rename["harga"]; ?>">
              <p class="" style="font-size: smaller;">Masukan Harga Barang Yang Sesuai, Contoh:5000 / 10000</p>
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput3" class="form-label">Jenis Menu</label>
              <select class="form-select" aria-label="Default select example" id="formGroupExampleInput3" name="jenismenu" value="<?= $rename["jenismenu"]; ?>">
                <option selected>Pilih Jenis Menu</option>
                <option value="Hot Coffe">Hot Coffe</option>
                <option value="Non Coffe">Non Coffe</option>
                <option value="Snack">Snack</option>
              </select>
              <p class="" style="font-size: smaller;">Masukan Jenis Menu Yang Sesuai</p>
            </div>
            <button class="btn btn-primary px-3 mt-5" type="submit" name="submit">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </main>

  <footer class="text-dark" style="margin-top: 16rem;">
    <div class="d-flex align-items-center justify-content-center" style="height: 2em; width:100%; background-color: white;">
      <h6>CoffeeDex&copy;2032 Build By : Juangga</h6>
    </div>
  </footer>






  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>