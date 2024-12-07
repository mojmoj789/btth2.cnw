<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($news['title']) ?></title>
</head>
<body>
    <?php if (isset($news) && !empty($news)): ?>
        <h1><?= htmlspecialchars($news['title']) ?></h1>
        <p><strong>Danh mục:</strong> <?= htmlspecialchars($news['category_name']) ?></p>
        <p><strong>Ngày đăng:</strong> <?= htmlspecialchars($news['created_at']) ?></p>
        <p><?= nl2br(htmlspecialchars($news['content'])) ?></p>
        <?php if (!empty($news['image'])): ?>
            <img src="uploads/<?= htmlspecialchars($news['image']) ?>" alt="<?= htmlspecialchars($news['title']) ?>" style="max-width: 500px;">
        <?php endif; ?>
    <?php else: ?>
        <p>Không tìm thấy tin tức!</p>
    <?php endif; ?>

<!--    <a href="?controller=home&action=index">Quay lại trang chủ</a>-->
</body>
</html>
