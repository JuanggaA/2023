<?php 
include('koneksi.php');
// data yang diterima dari view tambah
$namaMenu = $_POST['namaMenu'];
$jenisMenu = $_POST['jenisMenu'];
$harga = $_POST['harga'];

$sql = "INSERT INTO tb_menu (namaMenu, jenisMenu, harga)
VALUES ('$namaMenu', '$jenisMenu', '$harga')";


if ($conn->query($sql) === TRUE) {
  echo "data berhasil ditambahkan";
  header('location:../index.php');
  exit;
} else {
  echo "Maaf, data tidak bisa masuk: " . $sql . "<br>" . $conn->error;
}
?>