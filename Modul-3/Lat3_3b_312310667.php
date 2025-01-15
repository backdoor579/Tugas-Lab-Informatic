<?php
session_start();

// Cek apakah data "angka" telah dikirim melalui POST
if (isset($_POST["angka"])) {
    $angka = $_POST["angka"];
    
    // Fungsi untuk menghitung faktorial
    function hitungFaktorial($n) {
        if ($n == 0 || $n == 1) {
            return 1;
        } else {
            return $n * hitungFaktorial($n - 1);
        }
    }

    // Hitung faktorial
    $faktorial = hitungFaktorial($angka);

    // Simpan data ke dalam session
    $_SESSION['data'] = [
        'angka' => $angka,
        'faktorial' => $faktorial,
        'NIM' => '312310667',
        'nama' => 'Riki Wahyudin'
    ];

    // Tampilkan hasil
    echo "Angka: $angka<br>";
    echo "Faktorial: $faktorial<br>";
    echo '<a href="Lat3_3c_312310667.php">Lihat Detail</a>';
} else {
    echo "Data tidak ditemukan. Silakan masukkan angka melalui formulir.";
}
?>
