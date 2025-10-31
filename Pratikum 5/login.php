<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Database</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            height: 100vh;
            background: linear-gradient(135deg, #6C63FF, #48C6EF);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-page {
            width: 100%;
            max-width: 400px;
        }

        .form {
            background: #ffffff;
            padding: 40px 35px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .form h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .form input {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            font-size: 14px;
            transition: 0.3s;
        }

        .form input:focus {
            border-color: #6C63FF;
            box-shadow: 0 0 8px rgba(108, 99, 255, 0.3);
        }

        .form button {
            width: 100%;
            padding: 12px;
            background-color: #6C63FF;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 15px;
            transition: 0.3s;
        }

        .form button:hover {
            background-color: #5848d2;
        }

        .form::before {
            content: "";
            position: absolute;
            width: 150%;
            height: 150%;
            top: -25%;
            left: -25%;
            background: radial-gradient(circle at top left, #ffffff20, transparent 70%);
            z-index: -1;
            border-radius: 50%;
        }
    </style>
</head>
<body>

    <div class="login-page">
        <div class="form">
            <h2>Login Database</h2>
            <form class="login-form" action="login_action.php" method="post">
                <input type="text" placeholder="Username" name="txtUsername" required>
                <input type="password" placeholder="Password" name="txtPassword" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

</body>
</html>
