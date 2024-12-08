<?php
class News {
    private $db;

    public function __construct() {
        $this->db = new PDO("mysql:host=localhost;dbname=news", "root", "");
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // Thêm tin tức vào CSDL
    public function getNewsById($id) {
        $sql = "SELECT n.*, c.name AS category_name 
                FROM news n
                JOIN categories c ON n.category_id = c.id
                WHERE n.id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC); // Trả về dữ liệu hoặc false nếu không tìm thấy
    }

    // Lấy tất cả tin tức
    public function getAllNews() {
        $stmt = $this->db->query(
            "SELECT news.*, categories.name AS category_name 
             FROM news 
             JOIN categories ON news.category_id = categories.id
             ORDER BY news.created_at DESC"
        );
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>