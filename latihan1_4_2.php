<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan variable dinamas dalam satu halaman</title>
</head>
<body>
    <form action="latihan1_4_2.php" method="GET">
        Nama Anda : <input type="text" name="namanya"><br>
        Alamat Anda : <textarea name="alamatnya"></textarea><br>
        <input type="submit" name="kirim" valuer="sent">
    </form>
    <?php
    if (isset($_GET['kirim'])){
        echo "Nama Anda adalah :$_GET[namanya]<br>";
        echo "Alamat Anda adalah :$_GET[alamatnya]<br>";
    }
    ?>
</body>
</html>