<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-container input {
            width: 100px;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-container button:hover {
            background: #0056b3;
        }
        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="login-container">
    <h2>Admin Login</h2>

    <?php if (isset($error)) { ?>
        <div class="error-message">
            <?php echo $error; ?>
        </div>
    <?php } ?>

    <form action="<?php echo DOMAIN; ?>/index.php?controller=admin&action=login" method="POST">
        <!-- <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>"> -->

        <input type="text" name="username" placeholder="Tên đăng nhập" required aria-label="Tên đăng nhập">
        <input type="password" name="password" placeholder="Mật khẩu" required aria-label="Mật khẩu">
        <button type="submit">Đăng nhập</button>
    </form>
</div>
</body>
</html>
