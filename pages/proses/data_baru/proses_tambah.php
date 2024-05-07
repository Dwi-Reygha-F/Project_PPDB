<?php

include ('../../../koneksi.php');
// Mendapatkan data dari formulir atau dari sumber lainnya
$noPendaftar = $_POST['no_pendaftar'];
$namaSiswa = $_POST['nama_siswa'];
$ttl = $_POST['ttl'];
$jenis = $_POST['jenis'];
$agama = $_POST['agama'];
$notelpSiswa = $_POST['no_telpSiswa'];
$asal = $_POST['asal'];
$alamatSekolah = $_POST['alamat_sekolah'];
$jurusan = $_POST['jurusan'];
$tanggal = $_POST['tanggal'];
$ukuran = $_POST['ukuran'];


$namaOrtu = $_POST['nama_ortu'];
$alamatOrtu = $_POST['alamat_ortu'];
$notelpOrtu = $_POST['no_telpOrtu'];
$pekerjaanOrtu = $_POST['pekerjaan_ortu'];

$namaWali = $_POST['nama_wali'];
$alamatWali = $_POST['alamat_wali'];
$notelpWali = $_POST['no_telpWali'];
$pekerjaanWali = $_POST['pekerjaan_wali'];


// Perintah SQL untuk menyimpan data ke dalam tabel


// Simpan data siswa terlebih dahulu
$siswa_query = "INSERT INTO data_siswa (no_pendaftaran,nama_siswa,ttl,jenis_kel,agama,no_telSiswa,asal_sekolah,alamat_sekolah,jurusan,tanggal,ukuran) VALUES ('$noPendaftar', '$namaSiswa', '$ttl', '$jenis','$agama','$notelpSiswa','$asal','$alamatSekolah','$jurusan','$tanggal','$ukuran')";

if (mysqli_query($koneksi, $siswa_query)) {
    $last_siswa_id = mysqli_insert_id($koneksi); // Dapatkan ID terakhir siswa yang dimasukkan
    // Memasukkan data ortu
    $ortu_query = "INSERT INTO data_ortu (id, nama_siswa,nama_ortu, pekerjaan_ortu, alamat_ortu, no_telOrtu) VALUES ('$last_siswa_id', '$namaSiswa','$namaOrtu', '$pekerjaanOrtu', '$alamatOrtu', '$noTelOrtu')";
    if (!mysqli_query($koneksi, $ortu_query)) {
        echo "Error: " . $ortu_query . "<br>" . mysqli_error($koneksi);
    }

    // Memasukkan data wali
    $wali_query = "INSERT INTO data_wali (id, nama_siswa,nama_wali, pekerjaan_wali, alamat_wali, no_telWali) VALUES ('$last_siswa_id','$namaSiswa', '$namaWali', '$pekerjaanWali', '$alamatWali', '$noTelWali')";
    if (!mysqli_query($koneksi, $wali_query)) {
        echo "Error: " . $wali_query . "<br>" . mysqli_error($koneksi);
    }

    // Jika semuanya berhasil, alihkan ke halaman data siswa
    header("location:../../data_siswa.php");
} else {
    echo "Error: " . $siswa_query . "<br>" . mysqli_error($koneksi);
}


// Menutup koneksi
mysqli_close($koneksi);



?>