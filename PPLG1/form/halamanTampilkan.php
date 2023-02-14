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
          <div class="row align-items-center">
            <div class="col">
              <h4>
                Latihan 1 - Form
              </h4>
            </div>
            <div class="col text-end">
              <button class="btn btn-dark justify-content-end" type="button"><a class="nav-link" href="halamanForm.php">Kembali</a></button>
            </div>
          </div>
        </div>
        <div class="card-body text-center">
          <h4 class="fw-bold">from me, <?= $_POST["username"]; ?>!</h4>
          <p>Kata-kata Untukmu hari ini :</p>
          <h5><?= $_POST["kata"]; ?></h5>
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