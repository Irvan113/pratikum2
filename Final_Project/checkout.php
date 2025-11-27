<?php
include 'config.php';
if(!isset($_SESSION['user'])){ header('Location: login.php'); exit; }
$user=$_SESSION['user'];
$uid=mysqli_fetch_assoc(mysqli_query($conn,"SELECT id FROM users WHERE username='$user'"))['id'];


foreach($_SESSION['cart'] as $id=>$qty){
mysqli_query($conn,"INSERT INTO orders(user_id,product_id,qty) VALUES($uid,$id,$qty)");
}
unset($_SESSION['cart']);
echo "<script>alert('Pesanan dibuat!');location='orders.php'</script>";
?>