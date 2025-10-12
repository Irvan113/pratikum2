<?php
$namanya = $_POST['namauser'];
$emailnya =$_POST['emailuser'];
$jeniskelamin=$_POST['jeniskelamin'];
$nim=$_POST['nim'];
$tanggal=$_POST['tanggal'];
$Prodi=$_POST['Prodi'];

$usia = 0;

$tanggal_lahir = new DateTime($tanggal);
        $hari_ini = new DateTime('today');
        $selisih = $hari_ini->diff($tanggal_lahir);
        $usia = $selisih->y;


echo"Hallo : $namanya <br>";
echo"E-mail Anda adalah : $emailnya <br>";
echo"Anda : $jeniskelamin <br>";
echo"Nim anda yaitu $nim <br>";
echo"Tanggal lahir anda adalah = $tanggal <br>";
echo"Prodi anda $Prodi <br>";
echo "Usia anda saat ini adalah {$usia} tahun <br>";
?>