<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Bài Viết</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <div class="row">
        <h1>Thêm Bài Viết</h1>
        <form action="<?php echo DOMAIN; ?>/index.php?controller=news&action=createNews" method="POST" enctype="multipart/form-data">
            <div class="form-group mb-2">
                <label for="title">Tiêu đề:</label>
                <input type="text" name="title" id="title" required class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="image">Hình ảnh:</label>
                <input type="file" name="image" id="image" required class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="content">Nội dung:</label>
                <textarea name="content" id="content" rows="10" cols="30" required class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Thêm Bài Viết</button>
            <a href="/index.php?controller=news&action=index" class="btn btn-secondary">Trở về</a>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>