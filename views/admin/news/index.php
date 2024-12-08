<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách bài viết</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        img {
            display: block;
            margin: auto;
            border-radius: 5px;
        }

        .action-links a {
            margin-right: 10px;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .action-links a:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>
<h1>Danh sách bài viết</h1>
<a href="add.php" style="display: inline-block; margin-bottom: 20px; background-color: #28a745; color: white; padding: 10px 15px; border-radius: 5px;">Thêm bài viết mới</a>
<table>
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
            <td class="action-links">
                <a href="edit.php?id=<?php echo $row['id']; ?>" style="background-color: #ffc107; color: #333;">Sửa</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>" style="background-color: #dc3545; color: white;" onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này?')">Xóa</a>
            </td>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>
</body>
</html>
