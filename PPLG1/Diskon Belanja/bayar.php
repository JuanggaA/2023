<?php

$total = $_POST['total'];
$total1 = $_POST['total1'];

$jumlah = $total + $total1;

if ($jumlah >= 20000 && $jumlah < 30000) {
  $diskon = 10;
  $diskonH = $jumlah * ($diskon / 100);
  $jumlah_bayar =  $jumlah - $diskonH;
} elseif ($jumlah >= 30000 && $jumlah < 50000) {
  $diskon = 20;
  $diskonH = $jumlah * ($diskon / 100);
  $jumlah_bayar =  $jumlah - $diskonH;
} elseif ($jumlah >= 50000 && $jumlah < 60000) {
  $diskon = 30;
  $diskonH = $jumlah * ($diskon / 100);
  $jumlah_bayar =  $jumlah - $diskonH;
} elseif ($jumlah >= 60000 && $jumlah < 70000) {
  $diskon = 40;
  $diskonH = $jumlah * ($diskon / 100);
  $jumlah_bayar =  $jumlah - $diskonH;
} elseif ($jumlah >= 70000) {
  $diskon = 50;
  $diskonH = $jumlah * ($diskon / 100);
  $jumlah_bayar =  $jumlah - $diskonH;
} else {
  $diskon = 0;
  $jumlah_bayar =  $jumlah;
}

if ($diskon == 0) {
  $diskonMessage = 'Anda Tidak Mendapatkan Diskon';
} else {
  $diskonMessage = 'Selamat Anda Mendapatkan Diskon ' . $diskon . '%';
}

if ($diskon == 0) {
  $diskonMessage1 = 'Karna jumlah total belanja anda dibawah 20000 maka anda tidak Mendapatkan diskon';
} else {
  $diskonMessage1 = 'dari total belanja anda Rp.'. number_format($jumlah, 0, ',', '.') .' menjadi pembayaran sejumlah';
}

$jumlah_bayar_formatted = number_format($jumlah_bayar, 0, ',', '.');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kasir Hammer Mart</title>
  <link rel="stylesheet" href="../dist/css/bootstrap.css" />
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 80vh;
    }
  </style>
</head>

<body>
  <section>
    <div class="container">
      <div class="text-center mb-5">
        <h1>Total Belanja</h1>
      </div>
      <div class="row">
        <h3>Belanja 1 : <span class="float-end">Rp.<?= number_format($total, 0, ',', '.'); ?></span> </h3>
      </div>
      <div class="row">
        <h3>Belanja 2 : <span class="float-end">Rp.<?= number_format($total1, 0, ',', '.'); ?></span> </h3>
      </div>
      <hr class="border-bottom border-2 border-dark">
      <h3 class="text-end mb-4">Rp.<?= number_format($jumlah, 0, ',', '.'); ?></h3>
      <div class="text-center">
        <h1 class="display-4 fw-bold"><?= $diskonMessage; ?></h1>
        <h3><?= $diskonMessage1; ?></h3>
        <p class="fw-bold display-6">Rp.<?= $jumlah_bayar_formatted; ?></p>
      </div>
  </section>

  <script src="../dist/js/bootstrap.min.js"></script>
</body>

</html>