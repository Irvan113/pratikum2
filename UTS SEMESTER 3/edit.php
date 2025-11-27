<?php
include "config.php";
if(!isset($_SESSION['user'])) header("Location: login.php");

$id = $_GET['id'];
$produk = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM produk WHERE id=$id"));
$kategori = mysqli_query($conn, "SELECT * FROM kategori");

if(isset($_POST['update'])){
    $nama = $_POST['nama'];
    $desk = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kat = $_POST['kategori'];
    $status = $_POST['status'];
    $tanggal = $_POST['tanggal'];

    // cek apakah gambar baru
    if($_FILES['gambar']['name'] != ""){
        $gambar = $_FILES['gambar']['name'];
        move_uploaded_file($_FILES['gambar']['tmp_name'], "assets/uploads/".$gambar);
    } else {
        $gambar = $produk['gambar'];
    }

    mysqli_query($conn, "UPDATE produk SET 
        nama='$nama', deskripsi='$desk', harga='$harga', stok='$stok',
        kategori_id='$kat', status='$status', tanggal='$tanggal',
        gambar='$gambar'
        WHERE id=$id");

    header("Location: index.php");
}
?>

<html>
<head>
<title>Edit Produk</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body class="p-4">

<h3>Edit Produk</h3>

<form method="post" enctype="multipart/form-data">
Nama:
<input type="text" class="form-control mb-2" name="nama" value="<?= $produk['nama'] ?>">

Deskripsi:
<textarea class="form-control mb-2" name="deskripsi"><?= $produk['deskripsi'] ?></textarea>

Harga:
<input type="number" class="form-control mb-2" name="harga" value="<?= $produk['harga'] ?>">

Stok:
<input type="number" class="form-control mb-2" name="stok" value="<?= $produk['stok'] ?>">

Kategori:
<select class="form-control mb-2" name="kategori">
    <?php while($k=mysqli_fetch_assoc($kategori)){ ?>
        <option value="<?= $k['id'] ?>" <?= ($produk['kategori_id']==$k['id'])?'selected':'' ?>>
            <?= $k['nama'] ?>
        </option>
    <?php } ?>
</select>

Status:
<br>
<input type="radio" name="status" value="aktif" <?= ($produk['status']=="aktif")?'checked':'' ?>> Aktif
<input type="radio" name="status" value="tidak aktif" <?= ($produk['status']=="tidak aktif")?'checked':'' ?>> Tidak Aktif
<br><br>

Tanggal:
<input type="date" class="form-control mb-2" name="tanggal" value="<?= $produk['tanggal'] ?>">

Gambar:
<input type="file" name="gambar" class="form-control mb-3">

<button name="update" class="btn btn-primary">Update</button>
<a href="index.php" class="btn btn-secondary">Kembali</a>

</form>

</body>
</html>
