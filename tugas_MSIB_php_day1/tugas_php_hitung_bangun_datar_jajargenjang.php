<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP Hitung angun datar jajar genjang </title>
</head>

<body>
    <h2>Bangun Datar Jajar Genjang</h2>
    <form method="POST">
        <table>
            <tr>
                <td>Sisi Sejarar 1</td>
                <td>:</td>
                <td><input type="text" name="sisi_sejajar_1" required placeholder="Masukkan Sisi Sejajar 1"></td>
            </tr>
            <tr>
                <td>Sisi Sejarar 2</td>
                <td>:</td>
                <td><input type="text" name="sisi_sejajar_2" required placeholder="Masukkan Sisi Sejajar 2"></td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td>:</td>
                <td><input type="text" name="tinggi" required placeholder="Masukkan Tinggi"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Hitung" name="btn-hitung"></td>
            </tr>
        </table>
    </form>
    <br>
    <?php
    if (isset($_POST['btn-hitung'])) {
        $sisi_sejajar_1 = $_POST['sisi_sejajar_1'];
        $sisi_sejajar_2 = $_POST['sisi_sejajar_2'];
        $tinggi = $_POST['tinggi'];
        $luas_Jajar_genjang = $sisi_sejajar_1 * $sisi_sejajar_2;
        $luas = $sisi_sejajar_1 * $tinggi;
        $keliling = (2 * $sisi_sejajar_1) + (2 * $sisi_sejajar_2);
        echo 'Hasil Perhitungan Luas Jajar Genjang';
        echo '<br>Diketahui : ';
        echo '<br> Nilai Sisi Sejajar 1 : ' . $sisi_sejajar_1;
        echo '<br> Nilai Sisi Sejajar 2: ' . $sisi_sejajar_2;
        echo '<br> Nilai Tinggi: ' . $tinggi;
        echo '<br> Hasil Luas : ' . $luas;
        echo '<br> Hasil Keliling : ' . $keliling;
    }
    ?>
</body>

</html>