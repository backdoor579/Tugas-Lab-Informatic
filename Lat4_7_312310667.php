<?php
// Membuka file untuk membaca
$filename = "testFile.txt";
$file = fopen($filename, "r");

// Mengecek apakah file berhasil dibuka
if ($file) {
    // Membaca isi file dengan fread
    $filesize = filesize($filename); // Mendapatkan ukuran file
    $content = fread($file, $filesize); // Membaca isi file berdasarkan ukuran

    // Menampilkan isi file
    echo "Isi file dengan fread():<br>";
    echo nl2br($content);

    // Menutup file
    fclose($file);
} else {
    echo "File tidak dapat dibuka.";
}
?>
