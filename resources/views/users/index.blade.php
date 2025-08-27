<?php
// register.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Nhận dữ liệu từ form đăng ký
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Kiểm tra nếu các trường không để trống (Ví dụ cơ bản, bạn có thể cải tiến thêm như kiểm tra email hợp lệ)
    if (!empty($username) && !empty($password) && !empty($email)) {
        echo "<h3 style='color: green;'>Đăng ký thành công!</h3>";
    } else {
        echo "<h3 style='color: red;'>Vui lòng điền đầy đủ thông tin.</h3>";
    }
}
?>
    <!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tài khoản</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .register-container {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .register-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .register-container input[type="text"],
        .register-container input[type="email"],
        .register-container input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .register-container button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }

        .register-container button:hover {
            background-color: #45a049;
        }

        .register-container .login-link {
            margin-top: 10px;
            font-size: 14px;
        }

        .register-container .login-link a {
            color: #4CAF50;
            text-decoration: none;
        }

        .register-container .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="register-container">
    <h2>Đăng ký tài khoản</h2>
    <form method="POST" action="register.php">
        <input type="text" name="name" placeholder="Tên đăng nhập" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Mật khẩu" required>
        <button type="submit">Đăng ký</button>
    </form>
    <div class="login-link">
        <p>Đã có tài khoản? <a href="login.php">Đăng nhập ngay</a></p>
    </div>
</div>

</body>
</html>
