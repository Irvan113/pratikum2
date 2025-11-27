<?php
include 'config.php';
$id=$_GET['id'];
$d=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM products WHERE id=$id"));
?>
<html><body>
<h2><?= $d['name'] ?></h2>
<img src="assets/uploads/<?= $d['image'] ?>" width="150"><br>
Harga: Rp<?= $d['price'] ?><br>
<form action="add_to_cart.php" method="post">
<input type="hidden" name="id" value="<?= $d['id'] ?>">
Qty:<input type="number" name="qty" value="1"><br>
<button>Tambah ke Cart</button>
</form>
<button id="orderNow" class="btn btn-custom-purple">Order Sekarang</button>

</body></html>