<?php 

class Produk {
	public $judul,
			$penulis,
			$penerbit,
			$harga;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;

	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
}

$produk1 = new Produk("ON","Jamil Azzaini","Gramed",987654321);

$produk2 = new Produk("GameLoop","Tencent","China",54321);

$produk3 = new Produk("Stronghold Crussader")

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
echo var_dump($produk3);