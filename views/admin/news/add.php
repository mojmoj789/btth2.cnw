<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm bài viết mới</title>
</head>
<body>
<h1>Thêm bài viết mới</h1>
<form action="add.php" method="POST">
    <label for="title">Tiêu đề:</label><br>
    <input type="text" name="title" required><br>
    <label for="content">Nội dung:</label><br>
    <textarea name="content" required></textarea><br>
    <label for="image">Hình ảnh:</label><br>
    <input type="text" name="image"><br>
    <label for="category_id">Danh mục:</label><br>
    <select name="category_id" required>
        <?php while ($row = $categories->fetch_assoc()): ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
        <?php endwhile; ?>
    </select><br><br>
    <button type="submit">Thêm bài viết</button>
</form>
</body>
</html>
