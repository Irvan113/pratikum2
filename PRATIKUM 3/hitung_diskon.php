<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Diskon</title>
    
</head>
<body>

    <h2>Hitung Diskon</h2>
    <form action="hitung_diskon.php" method="POST">
        <div>
            <label for="harga">Harga Satuan :</label>
            <input type="number" id="harga" name="harga" required>
        </div>
        <div>
            <label for="jumlah">Jumlah Barang :</label>
            <input type="number" id="jumlah" name="jumlah" required>
        </div>
        <div>
            <label>Member :</label>
            <input type="checkbox" id="member" name="member" value="yes">
            <label for="member">Yes</label>
        </div>
        <div>
            <button type="submit" name="submit">submit</button>
            <button type="reset">batal</button>
        </div>
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {
        
        $harga_satuan = isset($_POST['harga']) ? (int)$_POST['harga'] : 0;
        $jumlah_barang = isset($_POST['jumlah']) ? (int)$_POST['jumlah'] : 0;
        
        $is_member = isset($_POST['member']) ? $_POST['member'] : 'no';

        $diskon_persen = 0;
        
        $total_belanja = $harga_satuan * $jumlah_barang;

        
        if ($is_member == 'yes') {
            
            if ($total_belanja > 100000) {
                $diskon_persen = 20;
            } else {
                $diskon_persen = 10;
            }
        } else {
          
            if ($total_belanja > 100000) {
                $diskon_persen = 10; 
            } else {
                $diskon_persen = 0;
            }
        }

        $diskon_nominal = $total_belanja * ($diskon_persen / 100);
        $total_bayar = $total_belanja - $diskon_nominal;
        
        $status_member = ($is_member == "yes") ? "yes" : "no";

        
        echo "<div class='hasil'>";
        echo "<h3>Total Pembayaran adalah</h3>";
        echo "Harga Satuan :   $harga_satuan  <br>";
        echo "Jumlah Barang : $jumlah_barang<br>";
        echo "Member :  $status_member<br>";
        echo "Total Pembelian : $total_belanja  <br>";
        echo "Diskon : $diskon_nominal<br>";
        echo "Total Bayar :$total_bayar<br>";
        echo "</div>";

    } 
    ?>

</body>
</html>