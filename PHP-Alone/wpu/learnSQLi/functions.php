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
$conn = mysqli_connect("localhost:3306", "root", "", "db_kopikita");

// ambil data dari database / query  dari database
function query($query)
{
  global $conn;
  // result ibarat sebuah lemari
  $result = mysqli_query($conn, $query);
  // ibarat sebuah kotak 
  $rows = [];
  while ($row =  mysqli_fetch_assoc($result)) {
    // menambahkan elemen baru setiap akhir array
    $rows[] = $row;
  };
  return $rows;
}

function tambah($data)
{

  global $conn;

  // ambil data dari tiap elemen
  $namamenu = htmlspecialchars($data["namamenu"]);
  $harga = htmlspecialchars($data["harga"]);
  $jenismenu = htmlspecialchars($data["jenismenu"]);

  // query insert data
  $query = "INSERT INTO tb_kopikita
              VALUES 
            ('', '$namamenu', '$harga', '$jenismenu')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
};

function hapus($id)
{

  global $conn;
  mysqli_query($conn, "DELETE FROM tb_kopikita WHERE id = $id");
  return mysqli_affected_rows($conn);
};

function ubah($data)
{

  global $conn;
  $id = $data["id"];
  $namamenu = htmlspecialchars($data["namamenu"]);
  $harga = htmlspecialchars($data["harga"]);
  $jenismenu = htmlspecialchars($data["jenismenu"]);


  // query insert data
  $query = " UPDATE tb_kopikita SET
                namamenu = '$namamenu',
                harga = '$harga',
                jenismenu = '$jenismenu'
                WHERE id = $id
                ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
};
?>