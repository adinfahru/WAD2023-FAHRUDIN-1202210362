<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->

<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbuser = "modul3_wad";
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbuser);
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// 
?>