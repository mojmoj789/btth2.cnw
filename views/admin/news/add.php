<form action="?controller=admin&action=addNews" method="post" enctype="multipart/form-data">
    <label for="title">Tiêu đề:</label>
    <input type="text" name="title" id="title" required><br>

    <label for="content">Nội dung:</label>
    <textarea name="content" id="content" required></textarea><br>

    <label for="image">Ảnh:</label>
    <input type="file" name="image" id="image" accept="image/*"><br>

    <label for="category_id">Danh mục:</label>
    <select name="category_id" id="category_id" required>
        <!-- Bạn có thể lấy danh sách danh mục từ CSDL để tạo các option -->
        <option value="1">Thể thao</option>
        <option value="2">Giáo dục</option>
        <option value="3">Kinh tế</option>
    </select><br>

    <button type="submit">Thêm tin tức</button>
</form>
