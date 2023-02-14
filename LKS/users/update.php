<?php
require '../functions.php';

// ambil data dari url
$id = $_GET["id"];

// query data kopimenu berdasarkan id
$rename = query("SELECT * FROM lkscrud WHERE id = $id")[0];
// var_dump($rename);

if (isset($_POST["submit"])) {
  // cek data berhasil atau tidak
  if (ubah($_POST) > 0) {
    echo "
      <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'users.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('data gagal ditambahkan');
        document.location.href = 'users.php';
      </script>
    ";
  };
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DGALERY'S SOFTWARE</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #514390;">
    <div class="container-fluid">
      <span class="navbar-brand ms-4" href="#">DGALERY'S SOFTWARE</span>
    </div>
  </nav>

  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2 text-light" style="height: 100vh; background-color: #6E5CC2;">
          <a class="nav-link mt-4 mb-3 ps-4" href="../index.php"><i class="fa-solid fa-user me-3"></i>Profil</a>
          <a class="nav-link my-3 ps-4 border-start border-3" href="users.php" style="background-color: #7D6CC8;"><i class="fa-solid fa-users me-3"></i>Users</a>
          <a class="nav-link my-3 ps-4" href="#"><i class="fa-sharp fa-solid fa-bars-progress me-3"></i>Control Panel</a>
          <a class="nav-link my-3 ps-4" href="#"><i class="fa-solid fa-folder me-3"></i>Projects</a>
          <a class="nav-link my-3 ps-4" href="#"><i class="fa-solid fa-list me-3"></i>Tasks</a>
          <a class="nav-link my-3 ps-4" href="#"><i class="fa-solid fa-clock me-3"></i>Logs</a>
          <a class="nav-link my-3 ps-4" href="#"><i class="fa-solid fa-comments me-3"></i>Group Chats</a>
          <a class="nav-link my-3 ps-4" href="#"><i class="fa-solid fa-bug me-3"></i>Reports</a>
        </div>
        <div class="col-sm-10" style="background-color: #F7F7F7;">
          <section class="mx-3 my-4">
            <div class="bagian-2 d-flex">
              <h4>Ubah Data</h4>
            </div>
          </section>
          <section class="mt-3 mx-3">
            <div class="container border rounded">
              <form class="m-3" action="" method="post" autocomplete="off">
                <input type="hidden" name="id" value="<?= $rename["id"]; ?>">
                <div class="mb-3 row">
                  <label class="form-label col-2" for="kodePegawai">Kode Pegawai</label>
                  <div class="col-10">
                    <input class="form-control" type="text" name="kodePegawai" id="kodePegawai" placeholder="Input Kode Pegawai" value="<?= $rename["kodePegawai"]; ?>">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="form-label col-2" for="nama">Nama</label>
                  <div class="col-10">
                    <input class="form-control" type="text" name="nama" id="nama" placeholder="Input Nama" value="<?= $rename["nama"]; ?>">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="form-label col-2" for="jk">Jenis Kelamin</label>
                  <div class="col-10">
                    <select class="form-control" name="jk" id="jk" value="<?= $rename["jk"]; ?>">
                      <option value="disabled">Pilih Jenis Kelamin</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="form-label col-2" for="devisi">Devisi</label>
                  <div class="col-10">
                    <input class="form-control" type="text" name="devisi" id="devisi" placeholder="Input Devisi" value="<?= $rename["devisi"]; ?>">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="form-label col-2" for="tingkatan">Tingkatan</label>
                  <div class="col-10">
                    <input class="form-control" type="text" name="tingkatan" id="tingkatan" placeholder="Input tingkatan" value="<?= $rename["tingkatan"]; ?>">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="form-label col-2" for="jabatan">Jabatan</label>
                  <div class="col-10">
                    <input class="form-control" type="text" name="jabatan" id="jabatan" placeholder="Input Jabatan" value="<?= $rename["jabatan"]; ?>">
                  </div>
                </div>
                <button class="btn offset-2 text-light" type="submit" name="submit" style="background-color: #614FB4;">Ubah</button>
                <button class="btn text-light" type="submit" name="submit" style="background-color: #614FB4;"><a class="nav-link" href="users.php">Kembali</a></button>
              </form>
            </div>
          </section>
        </div>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/4e6a1b3093.js" crossorigin="anonymous"></script>
</body>

</html>