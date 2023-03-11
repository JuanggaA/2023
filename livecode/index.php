<?php
session_start();

// Cek apakah user sudah login atau belum
if (!isset($_SESSION['username'])) {
  // Jika belum, redirect ke halaman login
  header("Location: home.php");
  exit();
}

include('function/koneksi.php');
/* 

Fungsi isset() pada PHP digunakan untuk memeriksa apakah sebuah variabel telah diatur nilainya atau belum. Fungsi ini mengembalikan nilai true jika variabel telah diatur nilainya dan mengembalikan nilai false jika variabel belum diatur nilainya atau tidak didefinisikan.

Berikut adalah contoh penggunaan isset() untuk memeriksa apakah variabel $nama telah diatur nilainya:

if(isset($nama)){
  echo "Variabel nama telah diatur nilainya";
} else {
  echo "Variabel nama belum diatur nilainya";
}

Dalam contoh di atas, jika variabel $nama telah diatur nilainya, maka akan muncul pesan "Variabel nama telah diatur nilainya". Namun, jika variabel $nama belum diatur nilainya, maka akan muncul pesan "Variabel nama belum diatur nilainya".
*/

if (isset($_POST['submit'])) {
  $keyword = $_POST['keyword'];
  /* 
    Fungsi LIKE biasanya digunakan dengan operator wildcard, yaitu karakter khusus yang mewakili satu atau lebih karakter. Karakter wildcard yang umum digunakan adalah '%' (untuk mewakili satu atau lebih karakter) dan '_' (untuk mewakili satu karakter).
  */
  $cari = "SELECT * FROM tb_menu WHERE namaMenu LIKE '%$keyword%' OR jenisMenu LIKE '%$keyword%'";
  $result = $conn->query($cari);
} else {
  $sql = "SELECT * FROM tb_menu ORDER BY jenisMenu";
  $result = $conn->query($sql);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Timbel Pride</title>
  <link rel="stylesheet" href="dist/css/bootstrap.css">
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
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
    <a href="tambah.php" class="btn btn-success float-end">Tambah</a>
  </div>

  <div class="container mt-5">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Data Menu</h4>
        <form action="" method="post" class="d-flex">
          <input class="form-control me-2" size="30" type="text" name="keyword" autocomplete="off" placeholder="Cari Menu">
          <button type="submit" name="submit" class="btn btn-success">Cari</button>
        </form>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Menu</th>
              <th scope="col">Jenis Menu</th>
              <th scope="col">Harga Menu</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            while ($row = $result->fetch_assoc()) : ?>
              <tr>
                <th><?= $no;
                    $no++; ?></th>
                <th><?= $row['namaMenu']; ?></th>
                <td><?= $row['jenisMenu']; ?></td>
                <td>Rp. <?= $row['harga']; ?></td>
                <td>
                  <button type="submit" class="btn btn-danger btn-sm">
                    <a class="nav-link" href="hapus.php?idMenu=<?= $row['idMenu']; ?>">hapus</a>
                  </button>
                  <button type="submit" class="btn btn-warning btn-sm">
                    <a class="nav-link" href="ubah.php?idMenu=<?= $row['idMenu']; ?>">Ubah</a>
                  </button>
                </td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <script src="dist/js/bootstrap.min.js"></script>
</body>

</html>