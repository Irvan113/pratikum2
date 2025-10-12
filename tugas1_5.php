<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri </title>
</head>
<body>
    <form action="action1.php" method="POST">
        <table>
            <tr>
                <td>NAMA</td>
                <td>:</td>
                <td><input type="text" name="namauser"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="emailuser"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>  
                    <input type ="radio" name="jeniskelamin" value="laki-laki">
                    <label for="laki-laki">Laki-laki</label>
                    
                    <input type ="radio" name="jeniskelamin" value="Perempuan">
                    <label for="Perempuan">Perempuan</label> 
            </td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>:</td>
                <td>
                <select id="Prodi" name="Prodi">
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Informatika">Informatika</option>
                <option value="Teknologi Informasi">Teknologi Informasi</option>
                <option value="Ilmu Komputer" selected>Manajemen Informasi</option>
                </select>
                </td>
            </tr>
            <tr>
                
                <td>
                    <br>
                    <input type="submit" value="Hitung Usia">
                    
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>