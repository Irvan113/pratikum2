<html>
<head>
<title>Mendeklarasikan dan Memanggil Fungsi</title>
</head>

<body>

    <?php

    function bilanganPrima($mulai , $selesai ){
        for ($p = $mulai; $p <= $selesai;  $p++ ){
            if($p%2 <>0 || $p % $p <>0){
                echo"$p<br>";
            }
        }
    }

    // Pemanggilan Fungsi
    $x=10;
    $y= 30;
    echo "<b>Bilangan Prima dari $x sampai $y adalah </b><br>";
    bilanganPrima($x , $y);
    ?>
</body>
</html>