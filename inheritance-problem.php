<?php 

class Produk {
	public $judul,
			$penulis,
			$penerbit,
			$harga;
			$jmlHalaman;
			$waktuMain;
			$tipe;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;

	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap(){
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
		if ($this->tipe == "Novel") {
			$str .= " - {$this->jmlHalaman} Halaman.";
		} elseif ($this->tipe == "Game") {
			$str .= " - {$this->waktuMain} Jam.";
		}
		return $str;
	}
}

class CetakInfoProduk {
	public function cetak(Produk $produk) {
		$str = "$produk->judul | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Produk("ON","Jamil Azzaini","Gramed",987654321, 99, 0, "Novel");

$produk2 = new Produk("GameLoop","Tencent","China",54321, 0, 90, "Game");

echo $produk1->getInfoLengkap;
