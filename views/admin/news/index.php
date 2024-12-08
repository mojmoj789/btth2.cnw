<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách bài viết</title>
</head>
<body>
<h1>Danh sách bài viết</h1>
<a href="add.php">Thêm bài viết mới</a>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Tiêu đề</th>
        <th>Nội dung</th>
        <th>Hình ảnh</th>
        <th>Ngày tạo</th>
        <th>Danh mục</th>
        <th>Hành động</th>
    </tr>
    </thead>
    <tbody>
    <?php while ($row = $news->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['content']; ?></td>
            <td><img src="<?php echo $row['image']; ?>" alt="Image" width="100"></td>
            <td><?php echo $row['created_at']; ?></td>
            <td><?php echo $row['category_name']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Sửa</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này?')">Xóa</a>
            </td>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>
</body>
</html>
