<?php
$nama = "Muhammad Yusril amin";
$total_belanja = 300000;
$keterangan = "";

if ($total_belanja > 100000) {
    $keterangan = "Selamat $nama Anda Dapat Hadiah";
} else {
    $keterangan = "Terimakasih $nama Sudah Berbelanja";
}
?>
Nama Pelanggan : <?= $nama ?><br>
Total Belanja : <?= $total_belanja ?> <br>
Keteranagan : <?= $keterangan ?>