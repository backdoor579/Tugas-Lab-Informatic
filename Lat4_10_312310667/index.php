<?php
// Path file guestbook
$file_path = "guestbook.txt";

// Proses penyimpanan data jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $name = trim($_POST['name']);
    $comment = trim($_POST['comment']);

    // Validasi sederhana (tidak boleh kosong)
    if (!empty($name) && !empty($comment)) {
        // Format data yang akan disimpan
        $data = $name . ";" . $comment . PHP_EOL;

        // Simpan data ke file guestbook.txt
        file_put_contents($file_path, $data, FILE_APPEND);

        echo "<p>Data berhasil disimpan!</p>";
    } else {
        echo "<p>Nama dan komentar tidak boleh kosong!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
</head>
<body>
    <h1>Guestbook</h1>

    <!-- Form Input -->
    <form method="POST" action="">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="comment">Komentar:</label><br>
        <textarea id="comment" name="comment" required></textarea><br><br>
        <button type="submit">Simpan</button>
    </form>

    <hr>

    <!-- Tampilkan Data Guestbook -->
    <h2>Data Guestbook</h2>
    <?php
    // Cek apakah file guestbook ada dan tidak kosong
    if (file_exists($file_path) && filesize($file_path) > 0) {
        // Baca semua baris dari file guestbook.txt
        $lines = file($file_path, FILE_IGNORE_NEW_LINES);

        // Tampilkan data
        echo "<ul>";
        foreach ($lines as $line) {
            // Pisahkan nama dan komentar menggunakan explode()
            $parts = explode(";", $line);

            // Tampilkan data dengan format: Nama: Komentar
            echo "<li><strong>" . htmlspecialchars($parts[0]) . "</strong>: " . htmlspecialchars($parts[1]) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Belum ada data dalam guestbook.</p>";
    }
    ?>
</body>
</html>
