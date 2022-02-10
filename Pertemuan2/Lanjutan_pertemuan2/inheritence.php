<?php
//jualan produk
//Komik
//Game

class produk {
    public $judul,
           $penulis, 
           $penerbit, 
           $harga;
           $jmlHalaman;
           $waktuMain;
           $tipe;

    public function __contruct( $judul = "judul" , $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0 ){
            return  $this->judul = $judul;
                    $this->penulis = $penulis; 
                    $this->penerbit = $penerbit;
                    $this->haraga = $harga;
                    $this->jmlHalaman = $jmlHalaman;
                    $this->waktuMain = $waktuMain;
                    $this->tipe = $tipe;

    }

    public function getlabel() {
        return "$this->penulis, $this->penerbit"

    }

    public function getInfoLengkap() {
        $str "{$this->tipe} : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
        if( $this->tipe == "Komik" ) {
            $str .= " - {$this->jmlHalaman} Halaman. ";
        } else if( $this->tipe == "Game") {
            $str .= " - {$this->waktuMain} Jam. ";
        }

    }

}

class CetakInfoProduk{
	public function cetak( produk $produk ){
        $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
        return $str;
    }

}


$produk1 = new produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0 "Komik");
$produk2 = new produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50 "Game");


echo $produk1->getInfoLengkap();

echo "<br>";

echo $produk2->getInfoLengkap();

 
?>