<?php
//jualan produk
//Komik
//Game

class produk {
    private $judul,
           $penulis, 
           $penerbit,
           $harga,
           $diskon = 0;
                  
    public function __contruct( $judul = "judul" , $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
            return  $this->judul = $judul;
                    $this->penulis = $penulis; 
                    $this->penerbit = $penerbit;
                    $this->haraga = $harga;
                    
                    

    }
    

    public function setJudul( $judul ) {

        if( !is_string($judul)) {
            throw new Exception("Judul Harus String");
            

        }

        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis( $penulis ) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit( $penerbit ) {
        $this->penerbit = $penerbit;
    }

    public function getPenertbit() {
        return $this->penerbit;
    }

    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getDiskon() {
        return $this->diskon;
    }

    public function setHarga( $harga ) {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga ( $this->harga * $this->diskon / 100 );
    }

    public function getlabel() {
        return "$this->penulis, $this->penerbit"

    }

    public function getInfoProduk() {
        $str "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
        if( $this->tipe == "Komik" ) {
            $str .= " - {$this->jmlHalaman} Halaman. ";
        } else if( $this->tipe == "Game") {
            $str .= " - {$this->waktuMain} Jam. ";
        }


        return $srt;

    }

}

class Komik extends produk {
    public $jmlHalaman;

    public function __contruct( $judul = "judul" , $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {

        parent::__contruct( $judul, $penulis, $penerbit, $harga );

        $this->jmlHalaman = $jmlHalaman;

    }

    public function getInfoProduk() {
        $str "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }

}

class Game extends produk {
    public $waktuMain;

    public function __contruct( $judul = "judul" , $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {
        parent::__contruct( $judul, $penulis, $penerbit, $harga );

        $this->waktuMain = $waktuMain;
    }

   

    

    public function getInfoProduk() {
        $str "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
        return $str;
    }
    

}

class CetakInfoProduk{
	public function cetak( produk $produk ){
        $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
        return $str;
    }

}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);


echo $produk1->getInfoProduk();

echo "<br>";

echo $produk2->getInfoProduk();

echo "<hr>";

$produk2->setDiskon(50)
echo $produk2->getHarga();
echo "<hr>";

$produk1->setPenulis("Muhammad Julianto");
echo $produk1->getPenulis();


 
?>