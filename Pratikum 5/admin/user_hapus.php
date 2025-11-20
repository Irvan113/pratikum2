<?php
include "../config.php";

$user = $_GET['user_name'];

$sql = "DELETE FROM users WHERE user_name='$user'";
$hasil = mysqli_query($config, $sql);

echo "<script>
        alert('Data berhasil dihapus');
        window.location.href='halamanuser.php';
      </script>";
?>
