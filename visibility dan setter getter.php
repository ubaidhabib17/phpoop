<?php

// jualan produk
// komik
// game

class Produk
{
    private $judul, $penulis, $penerbit, $harga, $diskon = 0;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Setter
    public function setJudul($judul)
    {
        if (!is_string($judul)) {
            throw new Exception("Judul Harus String");
            
        }
        $this->judul = $judul;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    // Getter
    public function getJudul()
    {
        return $this->judul;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getDiskon()
    {
        return $this->diskon;
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
        $string = " Komik : " . parent::getInfoProduk() . "{$this->jmlHalaman} Halaman";
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
        $string = " Game : " . parent::getInfoProduk() . " {$this->waktuMain} Jam";
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
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk1->setJudul("One Piece");
echo $produk1->getJudul();
