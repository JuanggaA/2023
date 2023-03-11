<?php 
include ('koneksi.php');

$idMenu = $_POST['idMenu'];
$namaMenu = $_POST['namaMenu'];
$jenisMenu = $_POST['jenisMenu'];
$harga = $_POST['harga'];

$sql = "UPDATE tb_menu SET namaMenu = '$namaMenu', 
jenisMenu = '$jenisMenu', 
harga = '$harga' 
WHERE idMenu = '$idMenu'";

if ($conn->query($sql) === TRUE) {
  header('location:../index.php');
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
};

?>