<?php
class Pegawai
{
    protected $nip;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;
    static $jml = 0;
    const PT = 'PT. HTP Indonesia';

    public function __construct($nip, $nama, $jabatan, $agama, $status)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        self::$jml++;
    }

    public function setGajiPokok($jabatan)
    {
        $this->jabatan = $jabatan;
        switch ($jabatan) {
            case 'Manager':
                $gaji_pokok = 15000000;
                break;
            case 'Asisten Manager':
                $gaji_pokok = 10000000;
                break;
            case 'Kepala Bagian':
                $gaji_pokok = 7000000;
                break;
            case 'Staff':
                $gaji_pokok = 5000000;
                break;
            default:
                $gaji_pokok = 0;
        }
        return $gaji_pokok;
    }

    public function setTunjab()
    {
        $tunjangan_jabatan = $this->setGajiPokok($this->jabatan)  * 0.2;
        return $tunjangan_jabatan;
    }

    public function setTunkel($status)
    {
        $this->status = $status;
        $tunjangan_keluarga = ($status == "Menikah") ? $this->setGajiPokok($this->jabatan) * 0.1  : 0;
        return $tunjangan_keluarga;
    }

    public function setGajiKotor()
    {
        $gaji_kotor =  $this->setGajiPokok($this->jabatan) + $this->setTunjab() + $this->setTunkel($this->status);
        return $gaji_kotor;
    }

    public function setZakatProfesi($agama)
    {
        $this->agama = $agama;
        $zakat_profesi = ($this->setGajiKotor() >= 6000000 && $agama == "Islam") ?  $this->setGajiPokok($this->jabatan) * 0.025  : 0;
        return $zakat_profesi;
    }


    public function cetak()
    {
        echo "<table>
                <tr>
                    <td>NIP Pegawai</td>
                    <td>:</td>
                    <td>" . $this->nip . "</td>
                </tr>
                <tr>
                    <td>Nama Pegawai</td>
                    <td>:</td>
                    <td>" . $this->nama . "</td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>" . $this->jabatan . "</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>" .  $this->agama . "</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>" . $this->status . "</td>
                </tr>
                <tr>
                    <td>Gaji Pokok</td>
                    <td>:</td>
                    <td>Rp " .  number_format($this->setGajiPokok($this->jabatan), 0, ',', '.')  . "</td>
                </tr>
                <tr>
                    <td>Tunjangan Jabatan</td>
                    <td>:</td>
                    <td>Rp " .  number_format($this->setTunjab(), 0, ',', '.')  . "</td>
                </tr>
                <tr>
                    <td>Tunjangan Keluarga</td>
                    <td>:</td>
                    <td>Rp " .  number_format($this->setTunkel($this->status), 0, ',', '.')  . "</td>
                </tr>
                <tr>
                    <td>Zakat</td>
                    <td>:</td>
                    <td>Rp " .  number_format($this->setZakatProfesi($this->agama), 0, ',', '.')  . "</td>
                </tr>
                <tr>
                    <td>Gaji Bersih</td>
                    <td>:</td>
                    <td>Rp " .  number_format($this->setGajiKotor() - $this->setZakatProfesi($this->agama), 0, ',', '.') . "</td>
                </tr>
            </table><hr>";
    }
}
