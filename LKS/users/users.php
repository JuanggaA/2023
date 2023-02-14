<?php
// array manaul
// $pegawai = [
//   [
//     "Kode_pegawai" => "MS-001",
//     "Nama" => "Andi Prasetyo",
//     "JK" => "Laki-Laki",
//     "Devisi" => "Marketing",
//     "tingkatan" => "Manager",
//     "Jabatan" => "Digital Marketing"
//   ],
//   [
//     "Kode_pegawai" => "MS-002",
//     "Nama" => "Rini Nata",
//     "JK" => "Perempuan",
//     "Devisi" => "HRD",
//     "tingkatan" => "Manger",
//     "Jabatan" => "HR Manager"
//   ],
// ]

require '../functions.php';
$Company = query("SELECT * FROM lkscrud");

// tombol pencarian diklik
if(isset($_POST["cari"])){
  $Company = cari($_POST["keyword"]);
}

// cara mengurutkan dari yang terbaru atau yang paling awal
// $Company = query('SELECT * FROM lkscrud ORDER BY id ASC / DESC')\
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
        <div class="col-sm-2 text-light sticky-top" style="background-color: #6E5CC2; height: 100vh;">
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
          <section class="mx-3 mt-4">
            <div class="bagian-1 d-flex p-3 fw-bold rounded shadow-lg" style="background-color: #fff; width: 20%;">
              <a class="nav-link me-5" href="">Members</a>
              <a class="nav-link" href="">Admin</a>
            </div>
          </section>
          <section class="mx-3 my-4">
            <div class="bagian-2 d-flex">
              <div class="col-1">
                <h4>Members</h4>
              </div>
              <div class="col-7 ms-4">
                <a class=" ms-4 btn text-light shadow-lg" href="create.php" style="background-color: #614FB4;">Add new</a>
                <a class=" ms-4 btn shadow-lg" href="#" style="background-color: #FEFEFE;">Import Members</a>
                <a class=" ms-4 btn shadow-lg" href="#" style="background-color: #FEFEFE;">Import Members (Excel)</a>
              </div>
              <div class="col text-end">
                <form class="d-flex" role="search" action="" method="post">
                  <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="keyword" autocomplete="off">
                  <button class="btn text-light" type="submit" style="background-color:  #614FB4;" name="cari">Search</button>
                </form>
              </div>
            </div>
          </section>
          <section class="mt-3 mx-3">
            <div class="container-lg border rounded shadow-sm" style="background-color: #fff;">
              <table class="table my-3">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Pegawai</th>
                    <th scope="col">Nama</th>
                    <th scope="col">JK</th>
                    <th scope="col">Devisi</th>
                    <th scope="col">Tingkatan</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($Company as $row) : ?>
                    <tr>
                      <th scope="row"><?= $no; ?></th>
                      <td><?= $row["kodePegawai"]; ?></td>
                      <td class="fw-bold"><?= $row["nama"]; ?></td>
                      <td><?= $row["jk"]; ?></td>
                      <td><?= $row["devisi"]; ?></td>
                      <td><?= $row["tingkatan"]; ?></td>
                      <td><?= $row["jabatan"]; ?></td>
                      <td>
                        <button class="btn" type="submit"><a class="text-dark" style="text-decoration: none;" href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('anda yakin?');"><i class="fa-solid fa-trash"></i></a></button>
                        <button class="btn" type="submit"><a class="text-dark" style="text-decoration: none;" href="update.php?id=<?= $row["id"]; ?>"><i class="fa-solid fa-pen-fancy"></i></a></button>
                      </td>
                    </tr>
                  <?php $no++;
                  endforeach; ?>
                </tbody>
              </table>
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