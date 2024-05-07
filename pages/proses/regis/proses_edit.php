<?php

include ('../../../koneksi.php');

// Mendapatkan data dari formulir atau dari sumber lainnya
$id = $_POST['id'];
$nama = $_POST['nama'];
$user = $_POST['username'];
$pass = $_POST['password'];
$sebagai = $_POST['sebagai'];


// Perintah SQL untuk menyimpan data ke dalam tabel
$query = "UPDATE user SET nama='$nama', username='$user', password='$pass',level='$sebagai' WHERE id='$id'";

if (mysqli_query($koneksi, $query)) {
    header("location:../../registrasi.php");
 
 
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);

?>
