<?php 

class Coba {
    public static $angka = 1;
    /**
     * Menampilkan salam "Halo" dengan angka yang increment secara statis.
     *
     * @return void
     */
    public static function halo() {
        echo self::$angka++ . " - Halo <br>";
    }
}

Coba::halo();
Coba::halo();
Coba::halo();
Coba::halo();
Coba::halo();


?>