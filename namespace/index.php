<?php 

require_once 'App/init.php';

// $produk1 = new Novel("ON","Jamil Azzaini","Gramed",1500000, 99);

// $produk2 = new Game("GameLoop","Tencent","China",6340000,90);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();