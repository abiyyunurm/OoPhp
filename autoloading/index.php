<?php 

require_once 'App/init.php';

$produk1 = new Novel("Dilan","Pidi Baiq","Gramed",9888888, 99);

$produk2 = new Game("Spintires","RG","Russian",99999999,99);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();