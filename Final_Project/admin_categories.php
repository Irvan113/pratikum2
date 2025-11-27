<?php
include "config.php";
session_start();
if(!isset($_SESSION['user'])) header("Location: login.php");

$kategori = mysqli_query($conn, "SELECT * FROM categories ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<h2>Manajemen Kategori</h2>

<a href="admin_category_add.php" class="btn btn-primary mb-3">+ Tambah Kategori</a>
<a href="admin_products.php" class="btn btn-secondary mb-3">Produk</a>

<table class="table table-bordered">
    <tr>
        <th width="50">ID</th>
        <th>Nama Kategori</th>
        <th width="120">Aksi</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($kategori)): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td>
                <a href="admin_category_delete.php?id=<?= $row['id'] ?>" 
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Hapus kategori ini?')">Hapus</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>

</body>
</html>
