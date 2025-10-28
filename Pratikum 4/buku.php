<?php 
$kategoribuku = ["Pemrograman", "Novel Fiksi", "Bisnis", "Sains"];

echo"<strong>Daftar Kategori Buku : </strong><br>";
for ($i = 0; $i < sizeof($kategoribuku); $i++) { 
    echo " nama buku $i : " . $kategoribuku[$i] . "<br>";}
?><?php 
