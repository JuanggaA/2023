<!-- tutorial get -->
<?php
// isset berguna untuk mengecek data udah pernah dibuat atau belum tanda ! digunakan jika data belum pernah dibuat
if (
  !isset($_GET["kota"]) ||
  !isset($_GET["tahun_2004"]) ||
  !isset($_GET["tahun_2005"])
) {
  // redirect 
  header("location: output_5.php");
  exit;
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
  <ul>
    <li><?= $_GET["kota"]; ?></li>
    <li><?= $_GET["tahun_2004"]; ?></li>
    <li><?= $_GET["tahun_2005"]; ?></li>
  </ul>
</body>

</html>