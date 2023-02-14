<?php
// FUNCTION

// date() show tanggal hari ini
// echo date("l, d-M-Y");

// time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo date("l", time()-60*60*24*100)

// mktime
// meembuat sendiri detik
// mktime(0,0,0,0,0,0)
// Jam, Menit, Detik, Bulam, Taggal, Tahun
// echo date("l", mktime(0,0,0,7,15,2006))

// strtotime
// echo date("l", strtotime(15 jul 2006))
function greetings($name){
    date_default_timezone_set("Asia/Jakarta");

      $b = time();
      $time = date("G", $b);

      if ($time >= 0 && $time <= 11) {
        echo "Selamat Pagi $name";
      } elseif ($time >= 12 && $time <= 14) {
        echo "Selamat Siang $name ";
      } elseif ($time >= 15 && $time <= 17) {
        echo "Selamat Sore $name ";
      } elseif ($time >= 17 && $time <= 18) {
        echo "Selamat Petang $name ";
      } elseif ($time >= 19 && $time <= 23) {
        echo "Selamat Malam $name ";
      }
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1><?= greetings("Juangga Deka")?> </h1>
</body>

</html>