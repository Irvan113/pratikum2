<?php
include "config.php";
if(!isset($_SESSION['user'])) header("Location: login.php");

if(isset($_POST['add'])){
    $nama = $_POST['nama'];
    mysqli_query($conn, "INSERT INTO kategori (nama) VALUES('$nama')");
}


$kat = mysqli_query($conn, "SELECT * FROM kategori");
?>

<html>
<head>
  <title>Kategori</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body class="p-4">

<h3>Kategori Produk</h3>

<form method="post" class="mb-3">
    <input type="text" name="nama" placeholder="Nama kategori" class="form-control mb-2">
    <button name="add" class="btn btn-primary">Tambah</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
</form>

<table class="table table-bordered">
    <tr><th>Nama</th></tr>
    <?php while($d=mysqli_fetch_assoc($kat)){ ?>
        <tr><td><?= $d['nama'] ?></td></tr>
    <?php } ?>
</table>

</body>
</html>
