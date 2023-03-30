<?php
require 'tugas_php_day6_Pegawai.php';

$pegawai1 = new Pegawai('01111', 'Muhammad Yusril Amin', 'Manager', 'Islam', 'Belum Menikah');
$pegawai2 = new Pegawai('01112', 'Rangga Ramadhan', 'Staff', 'Kristen', 'Menikah');
$pegawai3 = new Pegawai('01113', 'Riski Santoso', 'Asisten Manager', 'Islam', 'Menikah');
$pegawai4 = new Pegawai('01114', 'Rizal Kurnia', 'Kepala Bagian', 'Hindu', 'Belum Menikah');
$pegawai5 = new Pegawai('01115', 'Andi Hemarwan', 'Staff', 'Budha', 'Menikah');


$ar_pegawai = [$pegawai1, $pegawai2, $pegawai3, $pegawai4, $pegawai5];

foreach ($ar_pegawai as $pegawai) {
    $pegawai->cetak();
}
