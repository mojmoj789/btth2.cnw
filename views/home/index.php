<?php
session_start();

$isLoggedIn = isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true;

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_unset();
    session_destroy();
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <?php if ($isLoggedIn): ?>
        <h1>Chào mừng, <?php echo $_SESSION['username']; ?>!</h1>
        <a href="?action=logout" class="logout-btn">Đăng xuất</a>
    <?php else: ?>
        <h1>Chào mừng đến với trang web của chúng tôi</h1>
        <button class="login-btn" onclick="window.location.href='../../views/admin/login.php'">Đăng Nhập</button>
    <?php endif; ?>
</div>
</body>
</html>
