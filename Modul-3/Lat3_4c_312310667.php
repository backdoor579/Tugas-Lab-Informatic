<?php
session_start();
$cart = $_SESSION["cart"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
</head>
<body>
    CD: <?php echo $cart["cd_order"]; ?> <br>
    DVD: <?php echo $cart["dvd_order"]; ?> <br>
    <a href="Lat3_4a_312310667.html">Kembali ke form</a>
</body>
</html>
