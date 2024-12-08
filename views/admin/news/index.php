<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }

        .success-message {
            color: greenyellow;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
<a href="/index.php?controller=admin&action=logout" class="btn btn-primary">Đăng xuất</a>
<div class="container mt-4">
    <h1>Quản lý bài viết</h1>
    <?php if (isset($_SESSION['alert_error'])) { ?>
        <div class="error-message">
            <?php echo $_SESSION['alert_error']; unset($_SESSION['alert_error']); ?>

        </div>
    <?php } elseif (isset($_SESSION['alert_success'])) { ?>
        <div class="success-message">
            <?php echo $_SESSION['alert_success']; unset($_SESSION['alert_success']); ?>
        </div>
    <?php } ?>

    <a href="/index.php?controller=news&action=createNews" class="btn btn-success mb-3">Thêm bài viết</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Tiêu đề</th>
            <th scope="col">Nội dung</th>
            <th scope="col">Ngày đăng</th>
            <th scope="col">Hành động</th>
        </tr>
        </thead>
        <tbody>
        <!-- Dữ liệu bài viết sẽ được hiển thị ở đây -->
        <?php foreach ($data as $news): ?>
            <tr>
                <th scope="row"><?= $news['id'] ?></th>
                <td><?= $news['title'] ?></td>
                <td>
                    <img src="<?= $news['image'] ?>" alt="" style="max-width: 200px;">
                </td>
                <td><?= $news['content'] ?></td>
                <td><?= $news['created_at'] ?></td>
                <td class="text-nowrap">
                    <a href="/index.php?controller=news&action=editNews&id=<?= $news['id'] ?>" class="btn btn-warning btn-sm">Sửa</a>

                    <form action="<?php echo DOMAIN; ?>/index.php?controller=news&action=deleteNews" method="POST" class="d-inline-block">
                        <input type="hidden" name="id" value="<?php echo $news['id']; ?>">
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này?')">Xóa</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>