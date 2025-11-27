<?php
include "config.php";
if(!isset($_SESSION['user'])) header("Location: login.php");

$produk = mysqli_query($conn, 
    "SELECT produk.*, kategori.nama AS kategori 
     FROM produk 
     LEFT JOIN kategori ON kategori.id = produk.kategori_id");
?>
<html>
<head>
  <title>Produk</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

  <style>
body {
    background: #eef1f7;
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
}

.navbar-custom {
    background: linear-gradient(135deg, #4f8cff, #6b62ff);
    padding: 15px 25px;
    border-radius: 12px;
    color: white;
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 25px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.container-box {
    background: #ffffff;
    padding: 30px;
    border-radius: 18px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.12);
    max-width: 1300px;
    margin: auto;
}

h3 {
    color: #292929;
    font-weight: 700;
    margin-bottom: 25px;
}

.btn-custom {
    padding: 10px 18px;
    border-radius: 10px;
    font-weight: 600;
    box-shadow: 0 4px 10px rgba(0,0,0,0.12);
    transition: 0.2s;
}

.btn-custom:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.2);
}

.btn-green {
    background: #2ecc71;
    color: white;
}
.btn-green:hover {
    background: #28c266;
}

.btn-grey {
    background: #636e72;
    color: white;
}
.btn-grey:hover {
    background: #555e63;
}

.btn-logout {
    background: #ff4d4d;
    color: white;
}
.btn-logout:hover {
    background: #e63939;
}

table {
    border-radius: 12px;
    overflow: hidden;
    background: white;
}

table thead {
    background: #4f8cff;
    color: white;
}

table th {
    padding: 14px;
    font-size: 15px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

table td {
    padding: 12px;
    vertical-align: middle;
    font-size: 15px;
    color: #333;
}

table tbody tr:nth-child(even) {
    background: #f6f8fc;
}

table tbody tr:hover {
    background: #eaf1ff;
    transition: 0.2s;
}

.product-img {
    width: 90px;
    height: 90px;
    object-fit: cover;
    border-radius: 10px;
    border: 3px solid #eaeaea;
    transition: 0.3s;
}

.product-img:hover {
    transform: scale(1.07);
    border-color: #4f8cff;
}

input, select, textarea {
    border-radius: 10px !important;
    border: 2px solid #dce1eb !important;
    padding: 10px !important;
    font-size: 15px !important;
}

input:focus, select:focus, textarea:focus {
    border-color: #4f8cff !important;
    box-shadow: 0 0 6px rgba(79,140,255,0.5) !important;
}

.form-box {
    background: white;
    padding: 25px;
    border-radius: 16px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

  </style>
</head>

<body class="p-4">

<a href="logout.php" class="btn btn-custom btn-logout float-end">Logout</a>

<div class="container-box">
    <h3>Manajemen Produk Toko</h3>

    <div class="mb-3">
       <a href="tambah.php" class="btn btn-custom btn-green"> Tambah Produk</a>
<a href="kategori.php" class="btn btn-custom btn-grey"> Kategori</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga (Rp)</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php while($d = mysqli_fetch_assoc($produk)){ ?>
            <tr>
                <td>
                    <?php if($d['gambar'] != "") { ?>
                        <img src="assets/uploads/<?= $d['gambar'] ?>" 
                             style="width:80px; height:80px; object-fit:cover;">
                    <?php } else { ?>
                        <span class="text-muted">Tidak ada</span>
                    <?php } ?>
                </td>

                <td><b><?= $d['nama'] ?></b></td>
                <td><?= $d['kategori'] ?></td>
                <td><?= number_format($d['harga'],0,',','.') ?></td>
                <td><?= $d['stok'] ?></td>

                <td>
                    <a href="edit.php?id=<?= $d['id'] ?>" 
                       class="btn btn-warning btn-sm">Edit</a>

                    <a href="hapus.php?id=<?= $d['id'] ?>" 
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>
