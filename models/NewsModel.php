<?php
class NewsModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllNews() {
        $sql = "SELECT n.id, n.title, n.content, n.image, n.created_at, c.name as category_name
                FROM news n
                LEFT JOIN categories c ON n.category_id = c.id";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getNewsById($id) {
        $sql = "SELECT * FROM news WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
    public function addNews($title, $content, $image, $category_id) {
        $conn = $this->db->getConnection();
        $sql = "INSERT INTO news (title, content, image, created_at, category_id) VALUES (?, ?, ?, NOW(), ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $title, $content, $image, $category_id);
        return $stmt->execute();
    }

    public function updateNews($id, $title, $content, $image, $category_id) {
        $conn = $this->db->getConnection();
        $sql = "UPDATE news SET title = ?, content = ?, image = ?, category_id = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssii", $title, $content, $image, $category_id, $id);
        return $stmt->execute();
    }

    public function deleteNews($id) {
        $conn = $this->db->getConnection();
        $sql = "DELETE FROM news WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
