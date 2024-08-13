<?php 


class Game extends Produk implements InfoProduk {
    public $waktuMain;

    /**
     * Initializes a new instance of the Game class.
     *
     * @param string $judul The title of the game.
     * @param string $penulis The author of the game.
     * @param string $penerbit The publisher of the game.
     * @param int $harga The price of the game.
     * @param int $waktuMain The duration of the game in minutes.
     * @return void
     */
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    /**
     * Mengembalikan informasi produk game dalam bentuk string.
     *
     * @return string
     */
    public function getInfoProduk() {
        $str = "Game : " . $this->getInfo() . " - {$this->waktuMain} Jam.";
        return $str;
    }
    /**
     * Mengembalikan harga produk.
     *
     * @return int
     */
    public function getInfo() {  
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

}