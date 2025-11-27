<?php
include "config.php";

if(isset($_POST['login'])){
    $u = $_POST['username'];
    $p = $_POST['password'];

    $q = mysqli_query($conn, "SELECT * FROM users WHERE username='$u' AND password='$p'");
    if(mysqli_num_rows($q) > 0){
        $_SESSION['user'] = $u;
        header("Location: index.php");
    } else {
        $error = "Username atau password salah";
    }
}
?>

<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body class="p-5">

<h3>Login</h3>
<?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

<form method="post">
    <input type="text" name="username" placeholder="Username" class="form-control mb-2">
    <input type="password" name="password" placeholder="Password" class="form-control mb-2">
    <button name="login" class="btn btn-primary">Login</button>
</form>

</body>
</html>
