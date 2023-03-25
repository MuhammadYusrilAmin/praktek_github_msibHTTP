<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Rincian Gaji Pegawai</title>
</head>

<body>
    <h2 align="center">Form Rincian Gaji Pegawai</h2>
    <form method="POST">
        <table>
            <tr>
                <td><label for="inputNama">Nama</label></td>
                <td>:</td>
                <td><input id="inputNama" type="text" name="nama" placeholder="Masukkan Nama Anda" required></td>
            </tr>
            <tr>
                <td><label for="inputJabatan">Jabatan</label></td>
                <td>:</td>
                <td>
                    <select name="jabatan" id="inputJabatan" required>
                        <option value="">----- Pilih Jabatan ------</option>
                        <option value="Manager">Manager</option>
                        <option value="Asisten">Asisten</option>
                        <option value="Kabag">Kabag</option>
                        <option value="Staff">Staff</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="inputAgama">Agama</label></td>
                <td>:</td>
                <td>
                    <select name="agama" id="inputAgama" required>
                        <option value="">----- Pilih Agama ------</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="inputStatus">Status Menikah</label></td>
                <td>:</td>
                <td>
                    <select name="status" id="inputStatus" required>
                        <option value="">----- Pilih Status ------</option>
                        <option value="Sudah">Sudah</option>
                        <option value="Belum">Belum</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="inputJumlah">Jumlah Anak</label></td>
                <td>:</td>
                <td>
                    <select name="jumlah_anak" id="inputJumlah">
                        <option value="">----- Pilih Jumlah Anak ------</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Proses" name="btn-proses"></td>
            </tr>
        </table>
    </form><br>
    <?php
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $agama = $_POST['agama'];
    $status = $_POST['status'];
    $jumlah_anak = $_POST['jumlah_anak'];
    $proses = $_POST['btn-proses'];

    switch ($jabatan) {
        case "Manager":
            $gaji_pokok = 20000000;
            break;
        case "Asisten":
            $gaji_pokok = 15000000;
            break;
        case "Kabag":
            $gaji_pokok = 10000000;
            break;
        case "Staff":
            $gaji_pokok = 4000000;
            break;
        default:
            $gaji_pokok = 0;
    }

    $tunjangan_jabatan = $gaji_pokok * 0.2;

    if ($status == "Sudah" && $jumlah_anak >= 1  && $jumlah_anak <= 2) $tunjangan_keluarga = $gaji_pokok * 0.05;
    elseif ($status == "Sudah" && $jumlah_anak >= 3  && $jumlah_anak <= 5) $tunjangan_keluarga = $gaji_pokok * 0.1;
    else $tunjangan_keluarga = 0;

    $gaji_kotor = $gaji_pokok + $tunjangan_jabatan + $tunjangan_keluarga;

    $zakat = ($gaji_kotor >= 6000000 && $agama == "Islam") ? $gaji_kotor * 0.025  : 0;

    $home_pay = $gaji_kotor - $zakat;

    if (isset($proses)) {
    ?>
        Nama : <?= $nama ?><br>
        Jabatan: <?= $jabatan ?><br>
        Agama: <?= $agama ?><br>
        Status Pernikahan : <?= $status ?><br>
        Jumlah Anak : <?= ($jumlah_anak == "") ? "-" : $jumlah_anak; ?><br>
        Jumlah Gaji Pokok : <?= $gaji_pokok ?> <br>
        Jumlah Tunjangan Jabatan : <?= $tunjangan_jabatan ?> <br>
        Jumlah Tunjangan Keluarga : <?= $tunjangan_keluarga ?> <br>
        Jumlah Gaji Kotor : <?= $gaji_kotor ?> <br>
        Jumlah Zakat : <?= $zakat ?> <br>
        Jumlah Home Pay : <?= $home_pay ?>
    <?php
    }
    ?>
</body>

</html>