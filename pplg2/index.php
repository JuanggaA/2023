<?php

$paraPetani = [
  [
    'nama' => 'yoswa',
    'januari' => 16,
    'febuari' => 985,
    'maret' => 220,
    'april' => 797,
  ],
  [
    'nama' => 'surya',
    'januari' => 447,
    'febuari' => 54,
    'maret' => 103,
    'april' => 884,
  ],
  [
    'nama' => 'hendra',
    'januari' => 923,
    'febuari' => 877,
    'maret' => 416,
    'april' => 510,
  ],
  [
    'nama' => 'aldi',
    'januari' => 251,
    'febuari' => 291,
    'maret' => 52,
    'april' => 328,
  ],
  [
    'nama' => 'rovi',
    'januari' => 307,
    'febuari' => 692,
    'maret' => 342,
    'april' => 397,
  ],
]

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

  <main>
    <table class="table table-bordered text-center">
      <thead class="text-center">
        <tr class="align-items-center justify-content-center">
          <th scope="col" rowspan="2">No</th>
          <th scope="col" rowspan="2">Nama Petani</th>
          <th colspan="4">Bulan</th>
          <th scope="col" rowspan="2">Total</th>
          <th scope="col" rowspan="2">Pendapatan</th>
          <th scope="col" rowspan="2">Keterangan Untung / Rugi</th>
        </tr>
        <tr>
          <th scope="col">Januari</th>
          <th scope="col">Febuari</th>
          <th scope="col">Maret</th>
          <th scope="col">April</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($paraPetani as $petani) : ?>
          <tr>
            <th scope="row"><?= $no; ?></th>
            <th><?= $petani['nama']; ?></th>
            <td><?= $petani['januari']; ?></td>
            <td><?= $petani['febuari']; ?></td>
            <td><?= $petani['maret']; ?></td>
            <td><?= $petani['april']; ?></td>
            <td><?= $total = $petani['januari'] + $petani['febuari'] + $petani['maret'] + $petani['april']; ?></td>
            <td>Rp.<?= number_format(($pendapatan = $total * 7000),0,",","."); ?></td>
            <td>
              <?php
              if ($pendapatan > 13000000) {
                echo "Untung";
              } else {
                echo "Tidak Untung";
              }
              ?>
            </td>
          </tr>
        <?php $no++; endforeach; ?>
      </tbody>
    </table>
    <hr>
    <ol>
      <li>Harga 1 kg adalah Rp.7000</li>
      <li>Modal Awal : Rp.13.000.000</li>
      <li>Kolom Keterangan didapatkan ketika pendapatan lebih dari modal awal</li>
    </ol>
  </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>