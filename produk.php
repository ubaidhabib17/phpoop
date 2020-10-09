<?php  

// jualan produk
// komik
// game

class Produk {
    public $judul, $penulis, $penerbit, $harga;

    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getDetail()
    {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }

}

$produk1 = new Produk("Naruto","Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted","Neil Druckmann", "Sony Computer", 250000);

echo "Komik :" . $produk1->getDetail();
echo "<br>";
echo "Game :" . $produk2->getDetail();


?>