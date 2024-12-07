<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <style>
        .login-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .login-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<?php if (!isset($_SESSION['user_id'])): ?>
    <a href="/views/admin/login.php" class="login-btn">Đăng nhập</a>
<?php endif; ?>
<h1>Danh sách tin tức</h1>
<?php if (!empty($newsList)): ?>
    <ul>
        <?php foreach ($newsList as $news): ?>
            <li>
                <h3>
                    <a href="?controller=news&action=detail&id=<?= $news['id'] ?>">
                        <?= htmlspecialchars($news['title']) ?>
                    </a>
                </h3>
                <p><strong>Danh mục:</strong> <?= htmlspecialchars($news['category_name']) ?></p>
                <p><?= htmlspecialchars(substr($news['content'], 0, 100)) ?>...</p>
                <p><strong>Ngày đăng:</strong> <?= htmlspecialchars($news['created_at']) ?></p>
                <?php if (!empty($news['image'])): ?>
                    <img src="uploads/<?= htmlspecialchars($news['image']) ?>" alt="<?= htmlspecialchars($news['title']) ?>" style="max-width: 500px;">
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Không có tin tức nào để hiển thị.</p>
<?php endif; ?>
</body>
</html>
