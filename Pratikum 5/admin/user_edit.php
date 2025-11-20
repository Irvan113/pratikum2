<!DOCTYPE html>
<html>
<head>
    <title>Change Data Page</title>
</head>
<body>

<?php
include "../config.php";

$data = [
    'user_nama' => '',
    'user_password' => '',
    'user_namalengkap' => '',
    'user_email' => ''
];
$error_message = '';

if (isset($_GET['user_nama']) && !empty($_GET['user_nama'])) {
    $user = $_GET['user_nama'];
    
    $user_safe = mysqli_real_escape_string($config, $user); 

    $sql = "SELECT * FROM user WHERE user_nama='$user_safe'";
    $result = mysqli_query($config, $sql);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
    } else {
        $error_message = "<p style='color: red;'>Error: Data pengguna dengan username **$user** tidak ditemukan di database.</p>";
    }
} else {
    $error_message = "<p style='color: red;'>Error: Parameter pengguna (**user_nama**) tidak ditemukan di URL. Harap akses dari halaman daftar.</p>";
}

if (!empty($error_message)) {
    echo $error_message;
}

?>

<h3>Change User Data</h3>

<form method="POST" action="user_edit_action.php">
    <table>

        <tr>
            <td>Username</td>
            <td>:</td>
            <td>
                <input type="text" value="<?php echo htmlspecialchars($data['user_nama']); ?>" disabled>
                <input type="hidden" name="user_nama" value="<?php echo htmlspecialchars($data['user_nama']); ?>">
            </td>
        </tr>

        <tr>
            <td>Password</td>
            <td>:</td>
            <td>
                <input type="text" name="user_password" value="<?php echo htmlspecialchars($data['user_password']); ?>">
            </td>
        </tr>

        <tr>
            <td>Full Name</td>
            <td>:</td>
            <td>
                <input type="text" name="user_namalengkap" value="<?php echo htmlspecialchars($data['user_namalengkap']); ?>">
            </td>
        </tr>

        <tr>
            <td>Email</td>
            <td>:</td>
            <td>
                <input type="email" name="user_email" value="<?php echo htmlspecialchars($data['user_email']); ?>">
            </td>
        </tr>

        <tr>
            <td colspan="3">
                <input type="submit" name="change" value="Save">
                <input type="reset" value="Cancel">
            </td>
        </tr>

    </table>
</form>

</body>
</html>