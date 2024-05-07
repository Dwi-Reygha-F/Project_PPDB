<?php

include ('../../koneksi.php');

// Mendapatkan data dari formulir atau dari sumber lainnya
$id = $_POST['id'];
$gel = $_POST['gelombang'];
$nomi = $_POST['nominal'];



// Perintah SQL untuk menyimpan data ke dalam tabel
$query = "UPDATE tbl_gel SET gelombang='$gel', nominal='$nomi' WHERE id='$id'";

if (mysqli_query($koneksi, $query)) {
    header("location:../../input_gelombang.php");
 
 
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);

?>
