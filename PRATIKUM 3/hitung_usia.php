<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hitung Usia</title>
</head>
<body>
    <h3>Tugas Struktur Kendali Perulangan</h3>
    <form action="" method="post">
        Tanggal Lahir : <input type="date" name="tanggal_lahir" required>
        <br><br>
        Bilangan : <input type="number" name="bilangan" min="1" required>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <hr>
    <?php

    if (isset($_POST['submit'])) {
        
        $tanggal_lahir_str = $_POST['tanggal_lahir'];
        $bilangan = isset($_POST['bilangan']) ? (int)$_POST['bilangan'] : 0;

        if (!empty($tanggal_lahir_str) && $bilangan > 0) {
            
            $tanggal_lahir_obj = new DateTime($tanggal_lahir_str);
            $hari_ini = new DateTime('now');

            $perbedaan = $hari_ini->diff($tanggal_lahir_obj);
            $usia_sekarang = $perbedaan->y;

            echo "<h3>Hasil Perhitungan</h3>";
            echo "Usia saat ini adalah: " . $usia_sekarang . " Tahun<br>";
            echo "Bilangan yang diinputkan adalah " . $bilangan . "<br><br>";
            
            echo "Usia saya selanjutnya adalah<br>";

            for ($i = 1; $i <= $bilangan; $i++) {
                $usia_selanjutnya = $usia_sekarang + $i;
                echo $usia_selanjutnya . " Tahun<br>";
            }

        } else {
            echo "<p style='color:red;'>Silakan masukkan tanggal lahir dan bilangan yang valid.</p>";
        }
    }
    ?>

</body>
</html>
