<?php
$m1 = ['NIM' => '01111021', 'nama' => 'Muhammad', 'nilai' => 85];
$m2 = ['NIM' => '01111022', 'nama' => 'Yusril', 'nilai' => 75];
$m3 = ['NIM' => '01111023', 'nama' => 'Amin', 'nilai' => 95];
$m4 = ['NIM' => '01111024', 'nama' => 'Riski', 'nilai' => 40];
$m5 = ['NIM' => '01111025', 'nama' => 'Gumilang', 'nilai' => 30];
$m6 = ['NIM' => '01111026', 'nama' => 'Rangga', 'nilai' => 75];
$m7 = ['NIM' => '01111027', 'nama' => 'Riski', 'nilai' => 40];
$m8 = ['NIM' => '01111028', 'nama' => 'Rangga', 'nilai' => 65];
$mahasiswa = [$m1, $m1, $m3, $m4, $m5, $m6, $m7, $m8];
$ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

$jumlah_mahsiswa = count($mahasiswa);
$nilai = array_column($mahasiswa, 'nilai');
$total_nilai = array_sum($nilai);
$max_nilai = max($nilai);
$min_nilai = min($nilai);
$keterangan = [
    'Jumlah Mahasiswa' => $jumlah_mahsiswa,
    'Nilai Tertinggi' => $max_nilai,
    'Nilai Terendah' => $min_nilai,
    'Rata-rata' => $total_nilai / $jumlah_mahsiswa,
];
?>

<table border="1px" width="100%">
    <thead>

        <tr>
            <?php
            foreach ($ar_judul as $judul) {
            ?>
                <th><?= $judul ?></th>
            <?php } ?>
        </tr>

    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($mahasiswa as $mhs) {
            $ket = ($mhs['nilai'] >= 60) ? 'Lulus' : 'Tidak lulus';
            //grade 
            if ($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) $grade = 'A';
            else if ($mhs['nilai'] >= 75 && $mhs['nilai'] < 80) $grade = 'B';
            else if ($mhs['nilai'] >= 60 && $mhs['nilai'] < 74) $grade = 'C';
            else if ($mhs['nilai'] >= 30 && $mhs['nilai'] < 59) $grade = 'D';
            else if ($mhs['nilai'] >= 0 && $mhs['nilai'] < 29) $grade = 'E';
            else $grade = '';

            //predikat
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
            <tr>
                <td><?= $no ?> </td>
                <td><?= $mhs['NIM'] ?></td>
                <td><?= $mhs['nama'] ?></td>
                <td><?= $mhs['nilai'] ?></td>
                <td><?= $ket ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>
            </tr>
        <?php $no++;
        } ?>
    </tbody>
    <tfoot>
        <?php
        foreach ($keterangan as $ket => $hasil) {
        ?>
            <tr>
                <th colspan="6"><?= $ket ?></th>
                <th><?= round($hasil, 1); ?></th>

            </tr>
        <?php } ?>
    </tfoot>
</table>