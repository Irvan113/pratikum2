<?php

include "config1.php"; //memanggil file koneksi database ke PHP

$sql = "Select * from user";
$query = mysqli_query($config, $sql);
$row = mysqli_fetch_assoc($query);

//data ditampilkan dalam bentuk array dalam bentuk pertama
echo "<pre>";
print_r($row);
echo "<pre>";

//atau dalam bentuk kedua
echo "Username : ".$row['user_nama']."<br />";
echo "Nama Lengkap : ".$row['user_namalengkap']."<br />";
echo "Email : ".$row['user_email']."<br />";

?>