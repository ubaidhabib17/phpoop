<?php

// jualan produk
// komik
// game

class Produk
{
    public $judul, $penulis, $penerbit,$harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getInfoProduk()
    {
        $string = "{$this->penulis}, {$this->penerbit}, {$this->harga}";
        return $string;
    }
}

class Komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $string = " Komik : ". parent::getInfoProduk() ."{$this->jmlHalaman} Halaman";
        return $string;
    }
}

class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $string = " Game : ". parent::getInfoProduk() ." {$this->waktuMain} Jam";
        return $string;
    }
}

// class CetakInfoProduk
// {
//     public function cetak(Produk $produk)
//     {
//         $string = "{$produk->judul} || {$produk->getLabel()} || (Rp .{$produk->harga})";
//         return $string;
//     }
// }


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000,50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
