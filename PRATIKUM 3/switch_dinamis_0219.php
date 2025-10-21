<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai Huruf</title>
</head>
<body>
    
        <form action="switch_dinamis_0219.php" method = "POST">
            <Label for="nilai">Masukkan Nilai Huruf (A-E)</Label>
            <input type="text" name="nilai" id="nilai">
            <button type="submit" name="kode">Kirim</button>
        </form>
    
    <?php
        if (isset($_POST["kode"])) 
            {

                $nilai = strtoupper($_POST  ["nilai"]);

                switch ($nilai){
                    case "A":
                        echo"$nilai = Sangat Baik";
                        break;
                    case "B":
                        echo "$nilai = Baik";
                        break;
                    case "C":
                        echo "$nilai = Cukup";
                        break;
                    case "D":
                        echo "$nilai = Kurang";
                        break;
                    case "E":
                        echo "$nilai = Sangat Kurang";
                        break;
                    default:
                    echo "Nilai Huruf tidak terdaftar";
                }
               
            }
    
   ?>
    
</body>
</html>