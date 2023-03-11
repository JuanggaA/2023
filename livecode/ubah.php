<?php
session_start();

// Cek apakah user sudah login atau belum
if (!isset($_SESSION['username'])) {
  // Jika belum, redirect ke halaman login
  header("Location: home.php");
  exit();
}

include('function/koneksi.php');

// $idMenu = $_GET['idMenu']; // inisialisasi variabel $idMenu

// if (isset($_POST['ubah'])) {
  // ambil data dari form
  // $idMenu = $_POST['idMenu'];
// } else {
  // ambil data dari database
  $idMenu = $_GET['idMenu']; // mengambil data dari url
  $sql = "SELECT * FROM tb_menu WHERE idMenu='$idMenu'";
  $result = $conn->query($sql);
  // $rename = $result->fetch_assoc();
  // var_dump($result);
// }
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

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand fw-bold  " href="#">
        <img src="img/organic-flat-nasi-lemak-illustrated_23-2148945741.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        Nasi Timbel
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarNav">
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
          <li class="nav-item">
            <a href="logout.php" class="btn">Log Out<i class="fi fi-ss-exit ms-3"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container my-5">
    <h1 class="text-center">Selamat Datang di Kedai Nasi Timbel</h1>
  </div>

  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        <h4>
          Ubah Menu
        </h4>
      </div>
      <div class="card-body">
        <form action="function/ubah.php?idMenu=<?= $idMenu; ?>" method="post" autocomplete="off">
        <?php while ($row = $result->fetch_assoc()) : ?>
          <input type="hidden" name="idMenu" value="<?= $row['idMenu']; ?>">
          <div class="row mb-3">
            <label for="namaMenu" class="col-sm-2 col-form-label">Nama Menu</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="namaMenu" name="namaMenu" placeholder="Masukan Nama Menu" required value="<?= $row['namaMenu']; ?>">
            </div>
          </div>
          <div class="row mb-3">
            <label for="harga" class="col-sm-2 col-form-label">Harga Menu</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukan Harga Menu" required value="<?= $row['harga']; ?>">
            </div>
          </div>
          <div class="row mb-3">
            <label for="jenisMenu" class="col-sm-2 col-form-label">Jenis Menu</label>
            <div class="col-sm-10">
              <select class="form-select" name="jenisMenu" id="jenisMenu" required value="<?= $row['jenisMenu']; ?>">
                <option value="Pilih Jenis Menu">Pilih Jenis Menu</option>
                <option value="Ayam & Ikan" <?php if ($row['jenisMenu'] == 'Ayam & Ikan') {echo 'selected';} ?>>Ayam & Ikan</option>
                <option value="Pepes" <?php if ($row['jenisMenu'] == 'Pepes') {echo 'selected';} ?>>Pepes</option>
                <option value="Minuman" <?php if ($row['jenisMenu'] == 'Minuman') {echo 'selected';} ?>>Minuman</option>
                <option value="Juice" <?php if ($row['jenisMenu'] == 'Juice') {echo 'selected';} ?>>Juice</option>
              </select>
            </div>
          </div>
          <div class="mt-5 mb-3">
            <button type="submit" name="ubah" class="btn btn-outline-success float-end">Ubah</button>
            <a href="index.php" class="btn btn-outline-success float-end me-3">Kembali</a>
          </div>
          <?php endwhile; ?>
        </form>
      </div>
    </div>
  </div>


  <script src="dist/js/bootstrap.min.js"></script>
</body>

</html>