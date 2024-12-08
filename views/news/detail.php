<?php if (isset($news)): ?>
    <h1><?= htmlspecialchars($news['title']) ?></h1>
    <p><strong>Danh mục:</strong> <?= htmlspecialchars($news['category_name']) ?></p>
    <p><strong>Ngày đăng:</strong> <?= htmlspecialchars($news['created_at']) ?></p>
    <p><?= nl2br(htmlspecialchars($news['content'])) ?></p>
<?php else: ?>
    <p>Không tìm thấy dữ liệu.</p>
<?php endif; ?>