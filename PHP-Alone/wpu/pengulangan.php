<?php
//pengulangan
//for
//while
//do while
//foreach : kusus array

// for ($i=0; $i < 10; $i++) {
//   echo 'halo <br>';
// }

// $a = 0;
// while ($a <= 10) {
//   echo "halo";
//   $a++;
// }

// do {
//   echo "halo";
// $a++;
// } while ($a <= 10);
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
      width: 50px;
      height: 50px;
    }
  </style>
</head>

<body>
  <table>
    <?php for ($i=0; $i <= 2; $i++) : ?>
      <tr>
        <?php for ($j=0; $j <= 3; $j++) : ?>
          <td><?php echo "$i, $j" ?></td>
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
  </table>
</body>

</html>