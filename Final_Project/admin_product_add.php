<?php
include 'config.php';
if(isset($_POST['add'])){
$n=$_POST['name'];
$p=$_POST['price'];
$img=$_FILES['img']['name'];
move_uploaded_file($_FILES['img']['tmp_name'],"assets/uploads/$img");
mysqli_query($conn,"INSERT INTO products(name,price,image) VALUES('$n',$p,'$img')");
header('Location: admin_products.php');
}
?>
<html><body>
<form method="post" enctype="multipart/form-data">
Nama:<input name="name"><br>
Harga:<input name="price"><br>
Gambar:<input type="file" name="img"><br>
<button name="add">Simpan</button>
</form>
</body></html>