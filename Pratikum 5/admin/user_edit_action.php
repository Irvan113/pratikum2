<?php
include "../config.php";

$user  = $_POST['user_nama'];
$pass  = $_POST['user_password'];
$nama  = $_POST['user_namalengkap'];     
$email = $_POST['user_email'];

$sql = "UPDATE user
        SET user_password='$pass',
            user_namalengkap='$nama',
            user_email='$email'
        WHERE user_nama='$user'";

$hasil = mysqli_query($config, $sql);

if ($hasil) {
    echo "Data berhasil diubah";
} else {
    echo "Data gagal diubah: " . mysqli_error($config);
}
?>

<br>Kembali ke <a href="halamanuser2.php">halaman user</a>
