<?php
require_once 'Abstrack.php';

class Segitiga extends Bentuk2D
{
    public $sisi_AB;
    public $sisi_BC;
    public $sisi_AC;
    public $tinggi;
    public function __construct($sisi_AB, $sisi_BC, $sisi_AC, $tinggi)
    {
        $this->sisi_AB = $sisi_AB;
        $this->sisi_BC = $sisi_BC;
        $this->sisi_AC = $sisi_AC;
        $this->tinggi = $tinggi;
    }

    public function namaBidang()
    {
        return "Segitiga";
    }

    public function luasBidang()
    {
        $luas = ($this->sisi_AC * $this->tinggi) / 2;
        return $luas;
    }

    public function kelilingBidang()
    {
        $keliling = $this->sisi_AB + $this->sisi_BC + $this->sisi_AC;
        return $keliling;
    }
}
