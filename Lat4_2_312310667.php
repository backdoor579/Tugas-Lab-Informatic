<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lat4_2_NIM</title>
</head>
<body>
    <h1>Form Pengolahan Teks</h1>
    <form method="post" action="Lat4_2_312310667.php">
        <label for="inputText">Masukkan Teks:</label><br>
        <input type="text" id="inputText" name="inputText" required>
        <br><br>
        <button type="submit">Proses</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Ambil data dari input form
        $inputText = $_POST['inputText'];

        // Proses data menjadi tiga bentuk
        $lowercase = strtolower($inputText); // Kecil semua
        $uppercase = strtoupper($inputText); // Besar semua
        $capitalize = ucwords(strtolower($inputText)); // Hanya huruf depan yang besar

        // Tampilkan hasil
        echo "<h2>Hasil:</h2>";
        echo "<p><strong>Kecil semua:</strong> $lowercase</p>";
        echo "<p><strong>Besar semua:</strong> $uppercase</p>";
        echo "<p><strong>Huruf depan besar:</strong> $capitalize</p>";
    }
    ?>
</body>
</html>
