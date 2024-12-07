<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
</head>
<body>
<h1>Đăng nhập</h1>
<?php if (isset($error)): ?>
    <p style="color:red;"><?php echo $error; ?></p>
<?php endif; ?>
<form action="/admin/login" method="POST">
    <label for="username">Tên đăng nhập:</label>
    <input type="text" name="username" id="username" required><br>

    <label for="password">Mật khẩu:</label>
    <input type="password" name="password" id="password" required><br>

    <button type="submit">Đăng nhập</button>
</form>
</body>
</html>
