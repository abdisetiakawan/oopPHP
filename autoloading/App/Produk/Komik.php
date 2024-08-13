<?php 
class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;

    /**
     * Initializes a new instance of the Komik class.
     *
     * @param string $judul The title of the komik.
     * @param string $penulis The author of the komik.
     * @param string $penerbit The publisher of the komik.
     * @param int $harga The price of the komik.
     * @param int $jmlHalaman The number of pages in the komik.
     * @return void
     */
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    } 

    /**
     * Mengembalikan informasi produk komik dalam bentuk string.
     *
     * @return string
     */
    public function getInfoProduk() {
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
    public function getInfo() {  
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

