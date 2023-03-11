<?php
session_start();

// Cek apakah user sudah login atau belum
if ( !isset($_SESSION['username'])) {
  // Jika belum, redirect ke halaman login
  header("Location: home.php");
  exit();
}

include('function/koneksi.php');
$sql = "SELECT * FROM	tb_menu";
$result = $conn->query($sql);

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

  <div class="container">
    <h1>Selamat Datang di Kedai Nasi Timbel</h1>
  </div>

  <div class="container-fluids">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#">NASTIM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Data Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Laporan Menu</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        <h4>
          Tambah Menu
        </h4>
      </div>
      <div class="card-body">
        <form action="function/tambah.php" method="post" autocomplete="off">
          <div class="row mb-3">
            <label for="namaMenu" class="col-sm-2 col-form-label">Nama Menu</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="namaMenu" name="namaMenu" placeholder="Masukan Nama Menu" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="harga" class="col-sm-2 col-form-label">Harga Menu</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukan Harga Menu" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="jenisMenu" class="col-sm-2 col-form-label">Jenis Menu</label>
            <div class="col-sm-10">
              <select class="form-select" name="jenisMenu" id="jenisMenu">
                <option value="Pilih Jenis Menu">Pilih Jenis Menu</option>
                <option value="Ayam & Ikan">Ayam & Ikan</option>
                <option value="Pepes">Pepes</option>
                <option value="Minuman">Minuman</option>
                <option value="Juice">Juice</option>
              </select>
            </div>
          </div>
          <div class="mt-5 mb-3">
            <button type="submit" class="btn btn-outline-success float-end">Tambah</button>
            <a href="index.php" class="btn btn-outline-success float-end me-3">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>


  <script src="dist/js/bootstrap.min.js"></script>
</body>

</html>