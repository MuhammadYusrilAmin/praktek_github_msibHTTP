<?php
require_once 'Lingkaran.php';
require_once 'Persegi_Panjang.php';
require_once 'Segitiga.php';

$lingkaran1 = new Lingkaran(15);
$lingkaran2 = new Lingkaran(25);

$persegi_panjang1 = new Persegi_Panjang(35, 10);
$persegi_panjang2 = new Persegi_Panjang(50, 15);

$segitiga1 = new Segitiga(45, 45, 70, 35);
$segitiga2 = new Segitiga(35, 35, 40, 20);

$ar_bentuk2d = [$lingkaran1, $lingkaran2, $persegi_panjang1, $persegi_panjang2, $segitiga1, $segitiga2];

echo  "<h2 align='center'>Bangun Datar </h2>";

foreach ($ar_bentuk2d as $data) {
    echo "<table>
            <tr>
                <td>Nama Bangun Ruang</td>
                <td>:</td>
                <td><b>" . $data->namaBidang() . "</b></td>
            </tr>
            <tr>
                <td>Luas " . $data->namaBidang() . "</td>
                <td>:</td>
                <td>" . $data->luasBidang() . " cm</td>
            </tr>
            <tr>
                <td>Keliling " . $data->namaBidang() . "</td>
                <td>:</td>
                <td>" . $data->kelilingBidang() . " cm</td>
            </tr>
        </table><br><hr>";
}
