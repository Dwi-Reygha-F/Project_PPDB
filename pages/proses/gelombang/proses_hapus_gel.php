<?php
include ('../../koneksi.php');
$id = $_GET['id'];

// Properly escape the value to prevent SQL injection
$id = mysqli_real_escape_string($koneksi, $id);

$result = mysqli_query($koneksi, "DELETE FROM tbl_gel WHERE id = '$id'");
$cek = mysqli_affected_rows($koneksi);

if ($cek > 0) {
  echo "<script> 
          alert('BERHASIL DI MENGHAPUS');
        </script>";
  header("Location: ../../input_gelombang.php");
} else {
  echo "<script> 
          alert('GAGAL DI MENGHAPUS');
        </script>";
  header("Location: ../index.php");
}

?>
