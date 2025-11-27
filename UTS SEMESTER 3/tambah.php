<?php
include "config.php";
if(!isset($_SESSION['user'])) header("Location: login.php");

$kategori = mysqli_query($conn, "SELECT * FROM kategori");

if(isset($_POST['save'])){
    $nama = $_POST['nama'];
    $desk = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kat = $_POST['kategori'];
    $status = $_POST['status'];
    $tanggal = $_POST['tanggal'];

    if($nama == "" || $desk == "" || $harga == "" || $stok == "" || $kat == "" || $status == "" || $tanggal == ""){
        echo "<script>alert('Semua field harus diisi!'); window.history.back();</script>";
        exit;
    }

    $gambar = "";
    if($_FILES['gambar']['name'] != ""){
        $gambar = $_FILES['gambar']['name'];
        move_uploaded_file($_FILES['gambar']['tmp_name'], "assets/uploads/".$gambar);
    }

    mysqli_query($conn, "INSERT INTO produk
        (nama, deskripsi, harga, stok, kategori_id, status, tanggal, gambar)
        VALUES
        ('$nama','$desk','$harga','$stok','$kat','$status','$tanggal','$gambar')");

    echo "<script>alert('Data berhasil disimpan!'); window.location='index.php';</script>";
}
?>

<html>
<head>
<title>Tambah Produk</title>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css'>
</head>
<body class='p-4'>

<h3>Tambah Produk</h3>

<form method="post" enctype="multipart/form-data">

Nama:
<input type="text" name="nama" class="form-control mb-2">

Deskripsi:
<textarea name="deskripsi" class="form-control mb-2"></textarea>

Harga:
<input type="number" name="harga" class="form-control mb-2">

Stok:
<input type="number" name="stok" class="form-control mb-2">

Kategori:
<select name="kategori" class="form-control mb-2">
    <option value="">--- Pilih Kategori ---</option>
    <?php while($k=mysqli_fetch_assoc($kategori)){ ?>
        <option value="<?= $k['id'] ?>"><?= $k['nama'] ?></option>
    <?php } ?>
</select>

Status:
<br>
<input type="radio" name="status" value="aktif"> Aktif
<input type="radio" name="status" value="tidak aktif"> Tidak Aktif
<br><br>

Tanggal:
<input type="date" name="tanggal" class="form-control mb-2">

Gambar:
<input type="file" name="gambar" class="form-control mb-3">

<button name="save" class="btn btn-primary">Simpan</button>
<a href="index.php" class="btn btn-secondary">Kembali</a>

</form>

</body>
</html>
