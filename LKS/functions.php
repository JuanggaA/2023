<?php
// ambil data (fetch) kopipmenu dari object result
// mysqli_fetch_row() //mengembalikan array numerik 
// mysqli_fetch_associative() //mengembalikan array associative 
// mysqli_fetch_array() //mengembalikan array keduanya
// mysqli_fetch_object() // penggunaan "->"

// while ( $data = mysqli_fetch_assoc($result) ){
//   var_dump($result);
// };



// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "persiapanlks");

// ambil data dari database / query  dari database

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row =  mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  };
  return $rows;
}

function tambah($data)
{

  global $conn;
  $kodepegawai = htmlspecialchars($data["kodePegawai"]);
  $nama = htmlspecialchars($data["nama"]);
  $jk = htmlspecialchars($data["jk"]);
  $devisi = htmlspecialchars($data["devisi"]);
  $tingkatan = htmlspecialchars($data["tingkatan"]);
  $jabatan = htmlspecialchars($data["jabatan"]);


  // query insert data
  $query = "INSERT INTO lkscrud
              VALUES 
            ('', '$kodepegawai', '$nama', '$jk', '$devisi', '$tingkatan', '$jabatan')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
};

function hapus($id)
{

  global $conn;
  mysqli_query($conn, "DELETE FROM lkscrud WHERE id = $id");
  return mysqli_affected_rows($conn);
};

function ubah($data)
{

  global $conn;
  $id = $data["id"];
  $kodepegawai = htmlspecialchars($data["kodePegawai"]);
  $nama = htmlspecialchars($data["nama"]);
  $jk = htmlspecialchars($data["jk"]);
  $devisi = htmlspecialchars($data["devisi"]);
  $tingkatan = htmlspecialchars($data["tingkatan"]);
  $jabatan = htmlspecialchars($data["jabatan"]);


  // query insert data
  $query = " UPDATE lkscrud SET
                kodePegawai = '$kodepegawai',
                nama = '$nama',
                jk = '$jk',
                devisi = '$devisi',
                tingkatan = '$tingkatan',
                jabatan = '$jabatan'
                WHERE id = $id
                ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
};


function cari($keyword){
  $query = "SELECT * FROM lkscrud
              WHERE
            kodePegawai LIKE '%$keyword%' OR
            nama LIKE '%$keyword%' 
            ";
  return query($query);
}

?>