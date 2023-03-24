<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form</title>
</head>

<body>
    <form method="get">
        <table>
            <tr>
                <td><label for="inputNama">Nama</label></td>
                <td>:</td>
                <td><input id="inputNama" type="text" name="nama"></td>
            </tr>
            <tr>
                <td><label for="inputAlamat">Alamat</label></td>
                <td>:</td>
                <td><textarea id="inputAlamat" name="alamat"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="proses" name="btn-proses"></td>
            </tr>
        </table>
    </form>
    <?php
    error_reporting(0);
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
    $proses = $_GET['btn-proses'];
    if (isset($proses)) {
        echo "Nama : " . $nama . "<br> Alamat : " . $alamat;
    }
    ?>
</body>

</html>