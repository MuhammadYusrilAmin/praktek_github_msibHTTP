<?php
$ar_prodi = ["SI" => "Sistem Informasi", "TI" => "Teknik Informatika", "ILKOM" => "Ilmu Komputer", "TE" => "Teknik Elektro"];

$ar_skill = ["HTML" => 10, "CSS" => 10, "Javascript" => 20, "RWD Bootstrap" => 20, "PHP" => 25, "MySQL" => 15, "Laravel" => 25, "Python" => 25];
$domisili = ["Jakarta", "Bandung", "Bekasi", "Malang", "Surabaya", "lainnya"];
?>
<fieldset>
    <legend>Form Registrasi Kelompok Belajar</legend>
    <table>
        <thead>
            <tr>
                <th>Form Registrasi</th>
            </tr>
        </thead>
        <tbody>
            <form method="POST">
                <tr>
                    <td>NIM : </td>
                    <td>
                        <input type="text" name="nim">
                    </td>
                </tr>
                <tr>
                    <td>Nama : </td>
                    <td>
                        <input type="text" name="nama">
                    </td>
                </tr>
                <tr>
                    <td>Email : </td>
                    <td>
                        <input type="email" name="email">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin : </td>
                    <td>
                        <input type="radio" name="jk" value="Laki-laki">Laki-Laki &nbsp;
                        <input type="radio" name="jk" value="Laki-laki">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Program Studi: </td>
                    <td>
                        <select name="prodi">
                            <?php

                            foreach ($ar_prodi as $prodi => $v) {
                            ?>
                                <option value="<?= $prodi ?>"><?= $v ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Skill Programming : </td>
                    <td>
                        <?php
                        foreach ($ar_skill as $skill => $s) {
                        ?>
                            <input type="checkbox" name="skill[]" value="<?= $skill ?>"><?= $skill ?>

                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>Domisili: </td>
                    <td>
                        <select name="domisili">
                            <?php

                            foreach ($domisili as $d) {
                            ?>
                                <option value="<?= $d ?>"><?= $d ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
        <tfoot>
            <tr>
                <th colspan="2">
                    <button name="proses">Submit</button>
                </th>
            </tr>
        </tfoot>
    </table>
</fieldset>
<br>
<br>
<br>
<?php

function skillku($myskill)
{
    $skillku = "";
    foreach ($myskill as $s) {
        $skillku .= $s . ", ";
    }

    return $skillku;
}

function skor($skor_skill)
{
    $total_skor = 0;
    foreach ($skor_skill as $s) {
        if ($s == "HTML" || $s == "CSS") {
            $total_skor += 10;
        } elseif ($s == "Javascript" || $s == "RWD Bootstrap") {
            $total_skor += 20;
        } elseif ($s == "PHP" || $s == "Laravel" || $s == "Python") {
            $total_skor += 25;
        } elseif ($s == "MySQL") {
            $total_skor += 15;
        } else {
            $total_skor += 0;
        }
    }
    return $total_skor;
}

function kategori_skill($kategori)
{
    $hasil = "";
    if ($kategori >= 101 && $kategori <= 150) {
        $hasil = "Sangat Baik";
    } elseif ($kategori >= 61 && $kategori <= 100) {
        $hasil = "Baik";
    } elseif ($kategori >= 41 && $kategori <= 60) {
        $hasil = "Cukup";
    } elseif ($kategori >= 1 && $kategori <= 40) {
        $hasil = "Kurang";
    } else {
        $hasil = "Tidak Memadai";
    }
    return $hasil;
}

if (isset($_POST['proses'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $email = $_POST['email'];
    $domisili = $_POST['domisili'];
    $myskill = skillku($_POST['skill']);
    $skorskill = skor($_POST['skill']);
    $kategori_skill = kategori_skill($skorskill);
?>

    <fieldset>
        <legend>Hasil Output</legend>
        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><?= $nim ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?= $jk ?></td>
            </tr>
            <tr>
                <td>Domisili</td>
                <td>:</td>
                <td><?= $domisili ?></td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td><?= $prodi ?></td>
            </tr>
            <tr>
                <td>Skill</td>
                <td>:</td>
                <td><?= $myskill ?></td>
            </tr>
            <tr>
                <td>Skor Skill</td>
                <td>:</td>
                <td><?= $skorskill ?></td>
            </tr>
            <tr>
                <td>Kategori Skill</td>
                <td>:</td>
                <td><?= $kategori_skill ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?= $email ?></td>
            </tr>
        </table>
    </fieldset>
<?php } ?>