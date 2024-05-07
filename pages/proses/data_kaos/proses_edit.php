<?php

include ('../../../koneksi.php');

// Mendapatkan data dari formulir atau dari sumber lainnya
$noPendaftar = $_POST['no_pendaftar'];
$namaSiswa = $_POST['nama_siswa'];

$tanggal = $_POST['tanggal'];
$ukuran = $_POST['ukuran'];

// Perintah SQL untuk menyimpan data ke dalam tabel
// Update nama siswa di tabel data_siswa
$update_siswa_query = "UPDATE data_siswa SET nama_siswa='$namaSiswa', tanggal='$tanggal', ukuran='$ukuran' WHERE no_pendaftaran='$noPendaftar'";
if (mysqli_query($koneksi, $update_siswa_query)) {
    // Update nama siswa di tabel data_ortu
    $update_ortu_query = "UPDATE data_ortu SET nama_siswa='$namaSiswa' WHERE id=(SELECT id FROM data_siswa WHERE no_pendaftaran='$noPendaftar')";
    if (!mysqli_query($koneksi, $update_ortu_query)) {
        echo "Error: " . $update_ortu_query . "<br>" . mysqli_error($koneksi);
    }

    // Update nama siswa di tabel data_wali
    $update_wali_query = "UPDATE data_wali SET nama_siswa='$namaSiswa' WHERE id=(SELECT id FROM data_siswa WHERE no_pendaftaran='$noPendaftar')";
    if (!mysqli_query($koneksi, $update_wali_query)) {
        echo "Error: " . $update_wali_query . "<br>" . mysqli_error($koneksi);
    }

    // Jika semuanya berhasil, alihkan ke halaman data siswa
    header("location:../../data_kaos.php");
} else {
    echo "Error: " . $update_siswa_query . "<br>" . mysqli_error($koneksi);
}


// Menutup koneksi
mysqli_close($koneksi);

?>
