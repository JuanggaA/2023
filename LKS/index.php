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

require 'functions.php';
$Company = query("SELECT * FROM lkscrud");


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
      <a class="navbar-brand" href="#">Navbar</a>
    </div>
  </nav>

  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2 text-light sticky-top" style="background-color: #6E5CC2; height: 100vh;">
          <a class="nav-link mt-4 mb-3 ps-4 border-start border-3" href="profil.php" style="background-color: #7D6CC8;"><i class="fa-solid fa-user me-3"></i>Profil</a>
          <a class="nav-link my-3 ps-4" href="users/users.php"><i class="fa-solid fa-users me-3"></i>Users</a>
          <a class="nav-link my-3 ps-4" href="#"><i class="fa-sharp fa-solid fa-bars-progress me-3"></i>Control Panel</a>
          <a class="nav-link my-3 ps-4" href="#"><i class="fa-solid fa-folder me-3"></i>Projects</a>
          <a class="nav-link my-3 ps-4" href="#"><i class="fa-solid fa-list me-3"></i>Tasks</a>
          <a class="nav-link my-3 ps-4" href="#"><i class="fa-solid fa-clock me-3"></i>Logs</a>
          <a class="nav-link my-3 ps-4" href="#"><i class="fa-solid fa-comments me-3"></i>Group Chats</a>
          <a class="nav-link my-3 ps-4" href="#"><i class="fa-solid fa-bug me-3"></i>Reports</a>
        </div>
        <div class="col-sm-10" style="background-color: #F7F7F7;">
        </div>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/4e6a1b3093.js" crossorigin="anonymous"></script>
</body>

</html>