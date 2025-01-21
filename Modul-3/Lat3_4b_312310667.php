<?php
session_start();
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = ["cd_order" => 0, "dvd_order" => 0];
}
$_SESSION["cart"]["cd_order"] += $_POST["cd_order"];
$_SESSION["cart"]["dvd_order"] += $_POST["dvd_order"];
header("Location: Lat3_4c_312310667.php");
?>
