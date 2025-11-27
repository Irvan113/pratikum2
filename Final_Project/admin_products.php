<?php
include 'config.php';
$p=mysqli_query($conn,"SELECT * FROM products");
?>
<html><body>
<a href="admin_product_add.php">Tambah Produk</a>
<h2>Produk</h2>
<?php while($d=mysqli_fetch_assoc($p)){ ?>
<?= $d['name'] ?> - Rp<?= $d['price'] ?>
<a href="admin_product_edit.php?id=<?= $d['id'] ?>">Edit</a>
<a href="admin_product_delete.php?id=<?= $d['id'] ?>">Hapus</a><br>
<?php } ?>
</body></html>