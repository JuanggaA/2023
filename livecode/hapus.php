<?php 
session_start();

// Cek apakah user sudah login atau belum
if ( !isset($_SESSION['username'])) {
  // Jika belum, redirect ke halaman login
  header("Location: home.php");
  exit();
}

include('function/koneksi.php');
include 'function/hapus.php';

// ambil data dari url
$idMenu = $_GET['idMenu'];

?>