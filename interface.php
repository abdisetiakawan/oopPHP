<?php 
interface InfoProduk {
    public function getInfoProduk();
}


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



$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

/**
 * Access Modifier (Pengatur Akses) dalam OOP (Object-Oriented Programming)
 *
 * - Public: Atribut atau method yang dapat diakses dari mana saja, baik dari dalam kelas itu sendiri maupun dari luar kelas.
 * - Protected: Atribut atau method yang dapat diakses dari dalam kelas itu sendiri dan dari kelas turunannya (subclass).
 * - Private: Atribut atau method yang hanya dapat diakses dari dalam kelas itu sendiri dan tidak dapat diakses dari luar kelas atau kelas turunannya.
 */


?>