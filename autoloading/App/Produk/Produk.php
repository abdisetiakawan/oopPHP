<?php 
abstract class Produk {
    protected $judul,
            $penulis,
            $penerbit,
            $diskon,
            $harga;


    /**
     * Initializes a new instance of the Produk class.
     *
     * @param string $judul The title of the product.
     * @param string $penulis The author of the product.
     * @param string $penerbit The publisher of the product.
     * @param int $harga The price of the product.
     * @return void
     */
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    /**
     * Mengembalikan label produk dalam bentuk string.
     *
     * @return string
     */
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    /**
     * Mengembalikan informasi produk dalam bentuk string.
     *
     * @return string
     */
    
    abstract public function getInfo();
    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getJudul() {
        return $this->judul;
    }
    public function setJudul($judul) {
        $this->judul = $judul;
    }
    public function getPenulis() {
        return $this->penulis;
    }
    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }
    public function getPenerbit() {
        return $this->penerbit;
    }
    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }
    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }
    public function getDiskon() {
        return $this->diskon;
    }
}
