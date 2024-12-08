<?php
class NewsModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Lấy tất cả bài viết
    public function getAllNews() {
        $sql = "SELECT n.id, n.title, n.content, n.image, n.created_at, c.name as category_name
                FROM news n
                LEFT JOIN categories c ON n.category_id = c.id";
        $result = $this->conn->query($sql);
        return $result;
    }

    // Lấy bài viết theo ID
    public function getNewsById($id) {
        $sql = "SELECT * FROM news WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    // Thêm bài viết mới
    public function addNews($title, $content, $image, $category_id) {
        $sql = "INSERT INTO news (title, content, image, created_at, category_id) 
                VALUES (?, ?, ?, NOW(), ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssi", $title, $content, $image, $category_id);
        return $stmt->execute();
    }

    // Cập nhật bài viết
    public function updateNews($id, $title, $content, $image, $category_id) {
        $sql = "UPDATE news SET title = ?, content = ?, image = ?, category_id = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssii", $title, $content, $image, $category_id, $id);
        return $stmt->execute();
    }

    // Xóa bài viết
    public function deleteNews($id) {
        $sql = "DELETE FROM news WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
