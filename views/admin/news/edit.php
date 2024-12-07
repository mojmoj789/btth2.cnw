<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa tin tức</title>
</head>
<body>
<h1>Sửa tin tức</h1>
<form action="?controller=admin&action=updateNews&id=<?= $news['id'] ?>" method="POST">
    <label for="title">Tiêu đề:</label>
    <input type="text" id="title" name="title" value="<?= htmlspecialchars($news['title']) ?>" required>
    <br>
    <label for="content">Nội dung:</label>
    <textarea id="content" name="content" required><?= htmlspecialchars($news['content']) ?></textarea>
    <br>
    <button type="submit">Lưu thay đổi</button>
</form>
</body>
</html>
