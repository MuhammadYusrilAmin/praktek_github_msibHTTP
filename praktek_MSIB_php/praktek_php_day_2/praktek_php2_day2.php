<?php
$nama = "Muhammad Yusril Amin";
$nilai = 90;

if ($nilai >= 85 && $nilai <= 100) $grade = "A";
elseif ($nilai >= 75 && $nilai < 85) $grade = "B";
elseif ($nilai >= 60 && $nilai < 75) $grade = "C";
elseif ($nilai >= 30 && $nilai < 60) $grade = "D";
elseif ($nilai >= 0 && $nilai < 30) $grade = "E";
else $grade = "grade tidak ditemukan";

switch ($grade) {
    case "A":
        $predikat = "Memuaskan";
        break;
    case "B":
        $predikat = "Bagus";
        break;
    case "C":
        $predikat = "Cukup";
        break;
    case "D":
        $predikat = "Kurang";
        break;
    case "E":
        $predikat = "Buruk";
        break;
    default:
        $predikat = "";
}
?>
Nama Mahasiswa : <?= $nama ?><br>
Nilai : <?= $nilai ?> <br>
Grade : <?= $grade ?> <br>
Predikat : <?= $predikat ?>