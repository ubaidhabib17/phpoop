<?php
require_once 'App/init.php';

 $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
 $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);
 
 $cetak = new CetakInfoProduk();
 $cetak->tambahProduk($produk1);
 $cetak->tambahProduk($produk2);
 echo $cetak->cetak();

 echo "<hr>";

 new Coba();