<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaaan Parameter POST</title>
</head>
<body>
    <h1>INFORMASI USER</h1>
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
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>