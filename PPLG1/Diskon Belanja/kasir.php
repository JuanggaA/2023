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
  <div class="container">
    <div class="text-center">
      <h1>Selamat Datang di Kasir Hammer Mart</h1>
      <p>masukan total belanja anda</p>
    </div>
    <form class="row" action="bayar.php" method="post">
      <div class="offset-2 col-md-8">
        <label for="total" class="form-label">Belanja 1 :</label>
        <input class="form-control mb-3" type="number" name="total" id="total" />
      </div>
      <div class="offset-2 col-md-8">
        <label for="total1" class="form-label">Belanja 2 :</label>
        <input class="form-control mb-3" type="number" name="total1" id="total1" />
      </div>
      <div class="text-center">
        <button class="btn btn-dark" type="submit">Hitung Jumlah</button>
      </div>
    </form>
  </div>

  <script src="../dist/js/bootstrap.min.js"></script>
</body>

</html>