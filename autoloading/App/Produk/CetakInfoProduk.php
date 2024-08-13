<?php 
class CetakInfoProduk {
    public $daftarProduk = array();

    /**
     * Menambahkan produk ke daftar produk.
     *
     * @param Produk $produk Produk yang akan ditambahkan.
     * @return void
     */
    public function tambahProduk(Produk $produk) {
        $this->daftarProduk[] = $produk;
    }
    /**
     * Menampilkan daftar produk dalam bentuk string.
     *
     * @return string
     */
    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";
        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
    
}
