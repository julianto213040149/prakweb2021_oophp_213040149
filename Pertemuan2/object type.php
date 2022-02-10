<?php
//jualan produk
//Komik
//Game

class produk {
    public $judul,
           $penulis, 
           $penerbit, 
           $harga;

    public function __contruct( $judul = "judul" , $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
            return  $this->judul = $judul;
                    $this->penulis = $penulis; 
                    $this->penerbit = $penerbit;
                    $this->haraga = $harga;

    }

    public function getlabel(){
        return "$this->penulis, $this->penerbit"

    }

}

class CetakInfoProduk{
	public function cetak( produk $produk ){
        $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
        return $str;
    }

}


$produk1 = new produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);



echo "Komik :" . $produk1->getlabel();
echo "<br>";
echo "Game :" . $produk2->getlabel();


$infoProduk1 = new CetakInfoProduk();
echo $infoProduk->cetak("asd");


 
?>