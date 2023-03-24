<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Rumus Bangun Datar Persegi</title>
</head>

<body>
    <h2>Bangun Datar Persegi</h2>
    <form method="POST">
        <table>
            <tr>
                <td>Sisi 1</td>
                <td>:</td>
                <td><input type="text" name="sisi1" required></td>
            </tr>
            <tr>
                <td>Sisi2</td>
                <td>:</td>
                <td><input type="text" name="sisi2" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Hitung" name="btn-hitung"></td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['btn-hitung'])) {
        $sisi1 = $_POST['sisi1'];
        $sisi2 = $_POST['sisi2'];
        $luas_persegi = $sisi1 * $sisi2;
        echo 'Hasil Perhitungan Luas Persegi';
        echo '<br>Diketahui : ';
        echo '<br> Sisi Pertama : ' . $sisi1;
        echo '<br> Sisi Kedua : ' . $sisi2;
        echo '<br> Hasil Luas : ' . $luas_persegi;
    }
    ?>
</body>

</html>