<?php 

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