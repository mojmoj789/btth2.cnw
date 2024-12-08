<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Bài Viết</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 10px 0 5px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"], textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 20px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        a {
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
            display: block;
            text-align: center;
            margin-top: 20px;
        }

        a:hover {
            color: #388e3c;
        }
    </style>
</head>
<body>
<h1>Thêm Bài Viết</h1>
<div class="container">
    <form action="" method="POST">
        <label for="title">Tiêu đề:</label>
        <input type="text" name="title" id="title" required><br>

        <label for="content">Nội dung:</label>
        <textarea name="content" id="content" rows="10" cols="30" required></textarea><br>

        <input type="submit" value="Thêm Bài Viết">
    </form>
    <a href="index.php">Trở về</a>
</div>
</body>
</html>
