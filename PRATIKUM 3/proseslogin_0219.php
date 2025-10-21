
  <?php
    
      $user=$_POST['user'];
      $pass=$_POST['pass'];
  
      
     if ($user=="" or $pass==""){
          $pesan="User dan Password KOSONG";
    
    } elseif ($user !="zizi") {
        $pesan="User Tidak Terdaftar";
    
    } elseif ($user=="zizi" and $pass !="1234") {
         $pesan="Password anda SALAH";
     } else {
         $pesan="LOGIN SUKSES! Selamat Datang $user";
     }
 
     echo "<center><b>$pesan</b></center>";
     echo "<a href='login.php'>Back</a>";
 
 ?>