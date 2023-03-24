<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Pemreosesan Form</title>
</head>

<body>
    <h2 align="center">Form Input Nilai</h2>
    <form method="POST">
        <table>
            <tr>
                <td><label for="inputNama">Nama</label></td>
                <td>:</td>
                <td><input id="inputNama" type="text" name="nama" placeholder="Masukkan Nama Anda" required></td>
            </tr>
            <tr>
                <td><label for="inputMataKuliah">MataKuliah</label></td>
                <td>:</td>
                <td>
                    <select name="matkul" id="inputMataKuliah" required>
                        <option value="">----- PIlih Mata Kuliah ------</option>
                        <option value="HTML dan CSS">HTML dan CSS</option>
                        <option value="Javascript">Javascript</option>
                        <option value="UI/UX">UI/UX</option>
                        <option value="PHP">PHP</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="inputNilai">Nilai</label></td>
                <td>:</td>
                <td><input id="inputNilai" type="text" name="nilai" placeholder="Masukkan Nilai Anda" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Proses" name="btn-proses"></td>
            </tr>
        </table>
    </form>
    <?php
    error_reporting(0);
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $nilai = $_POST['nilai'];
    $proses = $_POST['btn-proses'];

    $ket = ($nilai >= 60) ? "Lulus" : "Gagal";

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

    if (isset($proses)) {
    ?>
        Nama Mahasiswa : <?= $nama ?><br>
        MataKuliah: <?= $matkul ?><br>
        Nilai : <?= $nilai ?> <br>
        Keteranagan : <?= $ket ?> <br>
        Grade : <?= $grade ?> <br>
        Predikat : <?= $predikat ?>
    <?php
    }
    ?>
</body>

</html>