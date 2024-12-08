<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa bài viết</title>
</head>
<body>
<h1>Sửa bài viết</h1>
<form action="edit.php?id=<?php echo $news['id']; ?>" method="POST" enctype="multipart/form-data">
    <!-- Tiêu đề bài viết -->
    <label for="title">Tiêu đề:</label><br>
    <input type="text" name="title" value="<?php echo $news['title']; ?>" required><br><br>

    <!-- Nội dung bài viết -->
    <label for="content">Nội dung:</label><br>
    <textarea name="content" required><?php echo $news['content']; ?></textarea><br><br>

    <!-- Hình ảnh bài viết -->
    <label for="image">Hình ảnh:</label><br>
    <input type="file" name="image"><br>
    <?php if ($news['image']): ?>
        <p><strong>Hình ảnh hiện tại:</strong> <img src="<?php echo $news['image']; ?>" alt="Hình ảnh bài viết" width="100"></p>
    <?php endif; ?><br><br>

    <!-- Danh mục -->
    <label for="category_id">Danh mục:</label><br>
    <select name="category_id" required>
        <?php while ($row = $categories->fetch_assoc()): ?>
            <option value="<?php echo $row['id']; ?>" <?php if ($row['id'] == $news['category_id']) echo 'selected'; ?>>
                <?php echo $row['name']; ?>
            </option>
        <?php endwhile; ?>
    </select><br><br>

    <button type="submit">Lưu thay đổi</button>
</form>


<br>
<a href="index.php">Quay lại</a>
</body>
</html>
