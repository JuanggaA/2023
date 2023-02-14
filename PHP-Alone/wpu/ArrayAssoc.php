<?php

$data_siswa = [
  [
    'kota' => "jakarta",
    'tahun_2004' => 189380,
    'tahun_2005' => 175680,
  ],
  [
    'kota' => "Bali",
    'tahun_2004' => 186714,
    'tahun_2005' => 315716,
  ],
  [
    'kota' => "yogyakarta",
    'tahun_2004' => 175652,
    'tahun_2005' => 230415,
  ],
];

// $no = 1;
// foreach ($data_siswa as $data) {
//   # code...
//   echo $no . " . " . $data['kota'] . " : " . $data['tahun_2004'] . " : " . $data['tahun_2005'] . " = "  . $data['tahun_2004'] + $data['tahun_2005'];
//   echo "<br>";
//   $no++;
// }


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table tr td {
      border: 1px solid black;
    }
  </style>
</head>

<body>
  <table>
    <?php foreach ($data_siswa as $data) : ?>
      <tr>
        <td><?= $data['kota'] ?></td>
        <td><?= $data['tahun_2004'] ?></td>
        <td><?= $data['tahun_2005'] ?></td>
        <td><?= $data['tahun_2004'] + $data['tahun_2005'] ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html> 