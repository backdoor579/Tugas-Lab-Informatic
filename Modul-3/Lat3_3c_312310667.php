<?php
session_start();

// Cek apakah session berisi data
if (isset($_SESSION['data'])) {
    $data = $_SESSION['data'];
    echo "Angka: " . $data['angka'] . "<br>";
    echo "Faktorial: " . $data['faktorial'] . "<br>";
    echo "NIM: " . $data['NIM'] . "<br>";
    echo "Nama: " . $data['nama'] . "<br>";

    // Hapus session
    session_unset();
    session_destroy();
} else {
    echo "Session kosong. Silakan mulai dari awal.";
}
?>
