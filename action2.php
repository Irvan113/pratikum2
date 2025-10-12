<?php
$namanya = $_POST['namauser'];
$angka1 =$_POST['angka1'];
$angka2 =$_POST['angka2'];
$c = $angka1 + $angka2;
$c1 = $angka1 - $angka2;
$c2 = $angka2 * $angka1;
$c3 = $angka2 / $angka2;
$c4 = $angka1 % $angka2;


echo "<h1>PERHITUNGAN ARITMATIKA</h1> <br>";
echo"Nama User adalah : $namanya <br>";
echo "$angka1 + $angka2 = $c <br>";
echo "$angka1 + $angka2 = $c1 <br>";
echo "$angka1 + $angka2 = $c2 <br>";
echo "$angka1 + $angka2 = $c3 <br>";
echo "$angka1 + $angka2 = $c4 <br>";
?>