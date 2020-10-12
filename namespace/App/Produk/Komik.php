<?php 

class Komik extends Produk implements InfoProduk
{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $string = " Komik : " . $this->getInfo() . "{$this->jmlHalaman} Halaman";
        return $string;
    }

    public function getInfo()
    {
        $string = "{$this->penulis}, {$this->penerbit}, {$this->harga}";
        return $string;
    }
}