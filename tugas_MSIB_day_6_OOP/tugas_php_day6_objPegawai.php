<?php
require 'tugas_php_day6_Pegawai.php';

$pegawai1 = new Pegawai('01111', 'Muhammad Yusril Amin', 'Manager', 'Islam', 'Belum Menikah');


$ar_pegawai = [$pegawai1];

foreach ($ar_pegawai as $pegawai) {
    $pegawai->cetak();
}
