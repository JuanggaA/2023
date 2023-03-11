<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hitung Sisi Miring Segitiga Siku-Siku</title>
  <link rel="stylesheet" href="../dist/css/bootstrap.css">
</head>

<body>
  <div class="container text-center mt-5">
    <h1>Hitung Sisi Miring Segitiga Siku-Siku</h1>
    <p class="mb-3">Masukan Sisi</p>
    <form action="hasil.php" method="post">
      <div class="row my-3 text-start">
        <div class="offset-2 col-8">
          <label class="form-label" for="sisi1">Masukan Sisi Pertama:</label>
          <input class="form-control" type="number" id="sisi1" name="sisi1">
        </div>
      </div>
      <div class="row my-3 text-start">
        <div class="offset-2 col-8">
          <label class="form-label" for="sisi2">Masukan Sisi Kedua:</label>
          <input class="form-control" type="number" id="sisi2" name="sisi2">
        </div>
      </div>
      <div class="row offset-5 col-2">
        <button type="submit" class="btn btn-primary" name="submit">
          Hitung Sisi
        </button>
      </div>
    </form>
  </div>
  <footer class="container text-center mt-5">
    <p>&copy; <?php echo date("Y"); ?> All rights reserved | Build by Juangga</p>
  </footer>

  <script src="../dist/js/bootstrap.min.js"></script>
</body>

</html>