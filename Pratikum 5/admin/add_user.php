<!DOCTYPE html>
<html>
<head>
    <title>Add Data Page</title>
</head>
<body>
    <h3>Adding User Data</h3>

    <form method="POST" action="user_add_action.php">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="user_nama"></td>
            </tr>

            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="user_password"></td>
            </tr>

            <tr>
                <td>Full Name</td>
                <td>:</td>
                <td><input type="text" name="user_namalengkap"></td>
            </tr>

            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="user_email"></td>
            </tr>

            <tr>
                <td colspan="3">
                    <input type="submit" name="save" value="Save">
                    <input type="reset" value="Cancel">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
