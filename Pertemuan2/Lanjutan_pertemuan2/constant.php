<?php

//define('NAMA', 'Muhammad Julianto');
//echo NAMA;

//echo "<br>";

//const UMUR = 26;
//echo UMUR;

//class Coba {
//    const NAMA = 'Muhammad'
//}

//echo Coba::NAMA;



//echo __FILE__;


//function coba() {
//    return __FUNCTION__;
//}

//echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas



?>