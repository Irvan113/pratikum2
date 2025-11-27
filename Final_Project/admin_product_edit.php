<?php
include 'config.php';
$id=$_GET['id'];
mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM products WHERE id=$id"));
if(isset($_POST['save'])){
$n=$_POST['name'];
$p=$_POST['price'];
mysqli_query($conn,"UPDATE products SET name='$n',price=$p WHERE id=$id");
header('Location: admin_products.php');
}
?>
<html><body>
<form method="post">
Nama:<input name="name" value="<?= $d['name'] ?>"><br>
Harga:<input name="price" value="<?= $d['price'] ?>"><br>
<button name="save">Update</button>
</form>
</body></html>