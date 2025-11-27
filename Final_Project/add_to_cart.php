<?php
include 'config.php';
$id=$_POST['id'];
$qty=$_POST['qty'];
$_SESSION['cart'][$id] = ($_SESSION['cart'][$id] ?? 0) + $qty;
header('Location: cart.php');
?>