<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị</title>
</head>
<body>
<h1>Xin chào, <?= htmlspecialchars($username) ?>!</h1>
<ul>
    <li><a href="?controller=admin&action=manageNews">Quản lý tin tức</a></li>
    <li><a href="?controller=admin&action=logout">Đăng xuất</a></li>
</ul>
</body>
</html>
