<?php
// String yang akan dimodifikasi
$rawstring = "Welcome Birmingham parents. Your replaceme is a pleasure to have!";

// Mengganti dengan 'son' (anak laki-laki)
$malestr = str_replace("replaceme", "son", $rawstring);

// Mengganti dengan 'daughter' (anak perempuan)
$femalestr = str_replace("replaceme", "daughter", $rawstring);

// Menampilkan hasil
echo "Son: " . $malestr . "<br />";
echo "Daughter: " . $femalestr;
?>
