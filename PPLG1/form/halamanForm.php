<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <main class="mt-5">
    <div class="container">
      <div class="card">
        <div class="card-header">
          <h4>
            Latihan 1 - Form
          </h4>
        </div>
        <div class="card-body">
          <form action="halamanTampilkan.php" method="post" autocomplete="off">
            <div class="row my-3">
              <label class="form-label col-sm-2" for="username">Username</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="username" id="username">
              </div>
            </div>
            <div class="row my-3">
              <label class="form-label col-sm-2" for="kata">Kata Kata Hari Ini </label>
              <div class="col-sm-10">
                <textarea class="form-control" name="kata" id="kata" rows="10"></textarea>
              </div>
            </div>
            <button type="submit" class="btn btn-success offset-2">Simpan</button>
          </form>
        </div>
        <div class="card-footer text-muted">
          Juangga - PPLG 1 - level - 3
        </div>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>