<?php
session_start();
if (empty($_SESSION["nama"])) {
    echo "Maaf, anda belum memasukkan nama.";
} else {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hello, <?php echo $_SESSION["nama"]; ?></title>
</head>
<body>
    Selamat datang <?php echo $_SESSION["nama"]; ?>, <br />
    Anda bisa masuk halaman ini karena anda telah menulis nama.
    <form method="post" action="Lat3_2d_312310667.php">
        <input type="submit" value="Keluar" />
    </form>
</body>
</html>
<?php
}
?>
