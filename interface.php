<?php

// jualan produk
// komik
// game

interface InfoProduk{
    public function getInfoProduk();
}


abstract class Produk
{
    protected $judul, $penulis, $penerbit, $harga, $diskon = 0;

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

    abstract public function getInfo();
}

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

class CetakInfoProduk
{
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    public function cetak()
    {
        $string = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $p) {
            $string .= "{$p->getInfoProduk()} <br>";
        }
        return $string;
    }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

$cetak = new CetakInfoProduk();
$cetak->tambahProduk($produk1);
$cetak->tambahProduk($produk2);
echo $cetak->cetak();
