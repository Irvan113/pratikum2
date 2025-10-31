<?php
include "config.php"; //memanggil file koneksi database ke PHP

$sql = "Select * from user";
$query = mysqli_query($config,$sql);

echo "<pre>";
while($row = mysqli_fetch_assoc($query)){ //fungsi perulangan untuk menampilkan data jamak//
    print_r($row);
}
echo "<pre>";
?>
