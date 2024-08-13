<?php 

abstract class Coba {
    public $angka = 1;
    abstract public function halo();
}

class Coba2 extends Coba {
    public function halo() {
        echo $this->angka++ . " - Halo <br>";
    }
}
 
$obj = new Coba2();
$obj->halo();
$obj->halo();
$obj->halo();





?>