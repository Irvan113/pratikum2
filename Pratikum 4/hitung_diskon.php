<html>  
    <head>  
        <title>Hitung Diskon Part 2 (Function)</title>
    </head>

    <body>  

    <h2>Hitung Diskon Part 2 (Function)</h2>
    <form action="" method="POST"> <div>
            <label for ="harga">Harga Satuan : </label>
            <input type="number" id="harga" name="harga" required>
        </div>
        <div>
            <label for ="jumlah">Jumlah Barang: </label>
            <input type="number" id="jumlah" name="jumlah" required>
        </div>
        <div>
            <label>Member :</label>
            <input type="checkbox" id="member" name="member" value="yes">
            <label for ="member">Yes</label>
        </div>
        <div>
            <button type = "submit" name="submit" >Submit</button>
            <button type = "reset">Batal</button>
        </div>
    </form>
    <hr>
    
    <?php
        function hitungTotalBelanja($harga, $jumlah) {
            return $harga * $jumlah;
        }

        function hitungDiskonPersen($total_belanja, $is_member) {
            $diskon_persen = 0;

            if ($is_member == 'yes') {
                if ($total_belanja > 100000) {
                    $diskon_persen = 20;
                } else {
                    $diskon_persen = 10;
                }
            } else { // Jika bukan member
                if ($total_belanja > 100000) {
                    $diskon_persen = 10;
                } else {
                    $diskon_persen = 0;
                }
            }
            return $diskon_persen;
        }

        function hitungDiskonNominal($total_belanja, $diskon_persen) {
            return $total_belanja * ($diskon_persen / 100);
        }

        function hitungTotalBayar($total_belanja, $diskon_nominal) {
            return $total_belanja - $diskon_nominal;
        }

       
        function tampilkanHasil($status_member, $total_belanja, $diskon_persen, $diskon_nominal, $total_bayar) {
            echo "<h3>Hasil Perhitungan</h3>";
            echo "<p>Status Member: <strong>" . htmlspecialchars($status_member) . "</strong></p>";
            echo "<p>Total Belanja: Rp " . number_format($total_belanja, 0, ',', '.') . "</p>";
            echo "<p>Diskon: " . $diskon_persen . "%</p>";
            echo "<p>Potongan Harga: Rp " . number_format($diskon_nominal, 0, ',', '.') . "</p>";
            echo "<h4>Total yang Harus Dibayar: Rp " . number_format($total_bayar, 0, ',', '.') . "</h4>";
        }


        

        if (isset($_POST['submit'])) {

            
            $harga_satuan = isset($_POST['harga']) ? (int)$_POST['harga'] : 0;
            $jumlah_barang = isset($_POST['jumlah']) ? (int)$_POST['jumlah'] : 0;
            $is_member = isset($_POST['member']) ? $_POST['member'] : 'no'; // Value 'yes' jika dicentang, 'no' jika tidak
            
           
            $total_belanja = hitungTotalBelanja($harga_satuan, $jumlah_barang);
            $diskon_persen = hitungDiskonPersen($total_belanja, $is_member);
            $diskon_nominal = hitungDiskonNominal($total_belanja, $diskon_persen);
            $total_bayar = hitungTotalBayar($total_belanja, $diskon_nominal);

            
            $status_member = ($is_member == "yes") ? "Member" : "Bukan Member";

            tampilkanHasil($status_member, $total_belanja, $diskon_persen, $diskon_nominal, $total_bayar);
        }
        
    ?>
    </body>
</html>