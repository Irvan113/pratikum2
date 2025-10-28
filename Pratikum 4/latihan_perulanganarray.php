<!DOCTYPE>
<html
<body> 

<h2>Latihan Membuat array</h2>

<?php
$kategoribuku[0] = "Pemograman Web";
$kategoribuku[1] = "Database";
$kategoribuku[2] = "Desain Grafis";
$kategoribuku[3] = "Internet";
$kategoribuku[4] = "Office Application";
$kategoribuku[5] = "Office Application";

// membuat array Assosiatif

$buku = array("isbn" => " 979-96446-9-2 ",
"judul"=> "Modul Pemograman Web Lanjut",
"pengarang"  => "Kartika Dewi Arum",
"penerbit" => "Andi Offset");

//mengakses Array Berindeks Menggunakan For

echo"<strong> Daftar Kategori Buku :</strong><br>";
    for ($i = 0; $i < sizeof($kategoribuku); $i++)
        {
        echo "Nama Buku $i : ".$kategoribuku[$i]. "<br>";
        }

// Mengakses Array Assosiatif Menggunakan Foreach

echo "<strong> Contoh Buku : </strong><br";
        foreach ($buku as $kunci => $nilai){
            echo "$kunci : $nilai " . "<br>";
        }
?>
</body>
</html>