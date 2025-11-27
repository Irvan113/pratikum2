<?php
include "config.php";

$action = $_GET['action'] ?? '';

switch ($action) {

    // === REGISTER ===
    case 'register':
        $data = json_decode(file_get_contents('php://input'), true);
        $username = $data['username'];
        $password = $data['password']; // simple password

        $conn->query("INSERT INTO users(username, password) VALUES('$username', '$password')");
        echo json_encode(['status' => 'success']);
        break;


    // === LOGIN ===
    case 'login':
        $data = json_decode(file_get_contents('php://input'), true);
        $username = $data['username'] ?? '';
        $password = $data['password'] ?? '';

        $q = $conn->query("SELECT * FROM users WHERE username='$username'");
        if ($q->num_rows == 0) {
            echo json_encode(['status' => 'error', 'msg' => 'User tidak ditemukan']);
            break;
        }

        $user = $q->fetch_assoc();

        // simple login (tanpa hashing)
        if ($password !== $user['password']) {
            echo json_encode(['status' => 'error', 'msg' => 'Password salah']);
            break;
        }

        echo json_encode(['status' => 'success', 'user' => $user]);
        break;


    // === GET PRODUCT LIST ===
    case 'products':
        $result = $conn->query("SELECT * FROM products");
        $data = [];
        while ($row = $result->fetch_assoc()) $data[] = $row;
        echo json_encode($data);
        break;


    // === CREATE ORDER ===
    case 'create_order':
        $data = json_decode(file_get_contents('php://input'), true);

        $userId = $data['userId'];
        $productId = $data['productId'];
        $qty = $data['qty'];
        $payment = $data['payment'];

        $conn->query("INSERT INTO orders(user_id, product_id, qty, payment_method) 
                      VALUES($userId, $productId, $qty, '$payment')");

        echo json_encode(['status' => 'success']);
        break;


    default:
        echo json_encode(['status' => 'error', 'msg' => 'Invalid API action']);
        break;
}

?>
