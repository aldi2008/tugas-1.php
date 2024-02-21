<?php
// definisi variable 
$nama ='Muhamad Aldi Perdiyatna' ;
$umur =20 ;
$berat = 53 ;
$tinggi = 173;

// menampilkan nilai variable
echo "Nama saya <b>$nama<b>, <br /> Saya berumur " . $umur . " Dan memiliki berat " . $berat . " kg " . " Serta memiliki tinggi " . $tinggi . "Cm";

echo"<br />";
echo"<br />";

// Variable system 
echo ' Dokumen Root ' . $_SERVER["DOKUMEN ROOT"];
echo '<br/> Nama File' . $_SERVER["PHP SELF"];

echo"<br />";
echo"<br />";

// Definisi Variable constant
define('PHI', 3.14);
define('DBNAME', 'Inventori');
define('DBSERVER', 'localhost');
 
$jari = 8;
$luas = PHI * $Jari *
$jari;
$kll = 2 * PHI *$jari;

echo 'Luas lingkaran dengan jari' . $jari . ' : ' . $luas;
echo '<br /> Kelilingnya :' . $kll;

echo "<hr>";

echo "Nama databasenya :" . DBNAME;
echo "<br>Lokasi databasenya ada di :" . DBSERVER;

echo "PHI = " . PHI;