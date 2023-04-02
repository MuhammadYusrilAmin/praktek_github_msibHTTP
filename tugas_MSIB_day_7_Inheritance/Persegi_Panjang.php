<?php
require_once 'Abstrack.php';

class Persegi_Panjang extends Bentuk2D
{
    public $panjang;
    public $lebar;
    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function namaBidang()
    {
        return "Persegi Panjang";
    }

    public function luasBidang()
    {
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }

    public function kelilingBidang()
    {
        $keliling = 2 * $this->luasBidang();
        return $keliling;
    }
}
