<?php
// Bạn có thể thêm mã PHP ở đây nếu cần xử lý logic động
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <!-- Header -->
    <header class="d-flex justify-content-between align-items-center py-3">
        <h1>Tin bao</h1>
        <a href="/views/admin/login.php" class="btn btn-primary">Đăng nhập</a>
    </header>

    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Dịch vụ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Liên hệ</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Tin tức -->
    <section>
        <h2>Tin tức</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Tin tức 1">
                    <div class="card-body">
                        <h5 class="card-title">Tin tức 1</h5>
                        <p class="card-text">Mô tả ngắn về tin tức 1. Cập nhật tin tức mới nhất về lĩnh vực của bạn...</p>
                        <a href="#" class="btn btn-primary">Đọc thêm</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Tin tức 2">
                    <div class="card-body">
                        <h5 class="card-title">Tin tức 2</h5>
                        <p class="card-text">Mô tả ngắn về tin tức 2. Những thay đổi quan trọng trong ngành nghề...</p>
                        <a href="#" class="btn btn-primary">Đọc thêm</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Tin tức 3">
                    <div class="card-body">
                        <h5 class="card-title">Tin tức 3</h5>
                        <p class="card-text">Mô tả ngắn về tin tức 3. Những sự kiện nổi bật gần đây trong ngành...</p>
                        <a href="#" class="btn btn-primary">Đọc thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
