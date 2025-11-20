<!DOCTYPE html>
<html>
<head>
    <title>User Data</title>
</head>
<body>

<h3>Data User</h3>

<p><a href="user_tambah.php">+ Tambah User</a></p>

<table width="700" border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Username</th>
        <th>Password</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Kelola</th>
    </tr>

    <?php
    include "../config.php";

    $sql = "SELECT * FROM user ORDER BY user_namalengkap";
    $result = mysqli_query($config, $sql);

    $no = 1;
    while ($data = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['user_nama']; ?></td>
            <td><?php echo $data['user_password']; ?></td>
            <td><?php echo $data['user_namalengkap']; ?></td>
            <td><?php echo $data['user_email']; ?></td>

            <td align="center">
                <a href="user_edit.php?user_nama=<?php echo $data['user_nama']; ?>">Edit</a> |
                <a href="user_hapus.php?user_nama=<?php echo $data['user_nama']; ?>"
                   onclick="return confirm('Yakin ingin menghapus user ini?')">
                    Hapus
                </a>
            </td>
        </tr>
    <?php
        $no++;
    }

    echo "</table>";
    ?>

</body>
</html>
