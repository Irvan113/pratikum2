<?php
include 'config.php';
?>
<html><body>
<h2>Keranjang</h2>
<?php
$total=0;
if(!empty($_SESSION['cart'])){
foreach($_SESSION['cart'] as $id=>$qty){
$d=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM products WHERE id=$id"));
$sub=$d['price']*$qty;
$total+=$sub;
echo "{$d['name']} x $qty = Rp$sub <br>";
}
}
?>
<hr>Total: Rp<?= $total ?><br>
<a href="checkout.php">Checkout</a>
</body></html>