<?php 

class Game extends Produk implements InfoProduk
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $string = " Game : " . $this->getInfo() . " {$this->waktuMain} Jam";
        return $string;
    }

    public function getInfo()
    {
        $string = "{$this->penulis}, {$this->penerbit}, {$this->harga}";
        return $string;
    }
}