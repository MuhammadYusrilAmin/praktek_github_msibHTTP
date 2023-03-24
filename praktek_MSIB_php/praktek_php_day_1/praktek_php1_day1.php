<?php
// mencetak data dengan php
echo "Document PHP saya ada di " . $_SERVER['DOCUMENT_ROOT'];
echo "Nama File " . $_SERVER['SCRIPT_FILENAME'];
echo "Hello World";

// penulisan varible dengan php 
$namaMahasiswa = "Muhammad Yusril Amin";
$umur = 20;
$berat_badan = 60;
$_pekerjaan = "Mahasiswa";
$tes = "coba";

// cetak data
echo "<br><br>Nama Mahasiswa : " . $namaMahasiswa;
echo "<br> Umur : " . $umur;
echo "<br> Berat Badan : " . $berat_badan;
echo "<br> Pekerjaan : " . $_pekerjaan;
echo "<br> Status Praktek : " . $tes;

?>

<!-- cetak php di halaman html -->
<br> <br> Nama Mahasiswa : <?= $namaMahasiswa ?>
<br> Umur : <?= $umur ?>
<br> Berat Badan : <?= $berat_badan ?>
<br> Pekerjaan : <?= $_pekerjaan ?>