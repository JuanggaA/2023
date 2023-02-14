<?php 
include 'koneksi.php';

// ambil data dari url
$idMenu = $_GET['idMenu'];

// sql to delete a record
$sql = "DELETE FROM tb_menu WHERE idMenu=$idMenu";

if ($conn->query($sql) === TRUE) {
  header('location:index.php');
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

?>