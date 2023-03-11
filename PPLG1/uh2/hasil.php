<?php

// Input panjang sisi-sisi segitiga
$sisi1 = $_POST['sisi1'];
$sisi2 = $_POST['sisi2'];

// Menghitung sisi miring
$sisi_miring = sqrt(pow($sisi1, 2) + pow($sisi2, 2));

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hitung Sisi Miring Segitiga Siku-Siku</title>
  <link rel="stylesheet" href="../dist/css/bootstrap.css">
  <style>
    .center {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container-center {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
  </style>
</head>

<body>
  <div class="container-center center">
    <h3>Hasil Sisi Miring Segitiga Siku-Siku : <?= $sisi_miring; ?></h3>
  </div>

  <script src="../dist/js/bootstrap.min.js"></script>
</body>

</html>
