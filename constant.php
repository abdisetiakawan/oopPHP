<?php 
// constanta menggunakan define
define("PHI", 3.14);
define("NAMA", "Rizki");
define("NILAI", 90);
echo "PHI : " . PHI . "<br>";
echo "NAMA : " . NAMA . "<br>";
echo "NILAI : " . NILAI . "<hr>";
// constant menggunakan const
const UMUR = 20;
echo "UMUR : " . UMUR . "<hr>";

class Coba {
    const NAMA = "Rizki";
}
echo "NAMA : " . Coba::NAMA . "<hr>";

// constanta __LINE__, __FILE__, __DIR__
echo __LINE__ . "<br>";
echo __FILE__ . "<br>";
echo __DIR__ . "<hr>";

// constanta __FUNCTION__, __CLASS__, __TRAIT__
echo __FUNCTION__ . "<br>";
echo __CLASS__ . "<br>";
echo __TRAIT__ . "<hr>";

// constanta __METHOD__
echo __METHOD__ . "<br>";


?>