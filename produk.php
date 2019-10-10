<?php 

class Produk {
	public $judul = "judul",
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = 0;

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Boruto";
// var_dump($produk1);

$produk3 = new Produk();
$produk3->judul = "ON";
$produk3->penulis = "Jamil Azzaini";
$produk3->penerbit = "Gramed";
$produk3->harga = 987654321;

$produk4 = new Produk();
$produk4->judul = "GameLoop";
$produk4->penulis = "Tencent";
$produk4->penerbit = "OS";
$produk4->harga = 54321;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();