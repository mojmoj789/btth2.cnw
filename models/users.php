<?php
require_once APP_ROOT . '/models/news.php';
class newsService
{
    private $db;
    public function __construct()
    {
        $this->db = new DBConnection(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
    }

    // public function getAllNews(){
    //     try {
    //         $conn = new PDO('mysql:host=localhost;dbname=news', 'root', '');
    //         $sql = "SELECT * FROM news";
    //         $stmt = $conn->query($sql);

    //         $news = [];
    //         while($row = $stmt->fetch()){
    //             $news[] = new news($row['id'], $row['title'], $row['content'], $row['image'], $row['created_at'], $row['category_id']);
    //             $newss = $news;
    //         }
    //         return $newss;
    //     }catch (PDOException $e){
    //         return $newss = [];
    //     }
    // }


    public function getAllNews()
    {
        $conn = $this->db->getConnection();
        if ($conn) {
            // Sử dụng prepared statement để tránh SQL injection
            $stmt = $conn->prepare("SELECT * FROM news");
            $stmt->execute();

            // Fetch tất cả dữ liệu
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Đóng kết nối
            $this->db->close();

            return $data;
        } else {
            return [];
        }
    }

    public function deleteNews($id)
    {
        $conn = $this->db->getConnection();
        if ($conn) {
            // Sử dụng prepared statement để tránh SQL injection
            $stmt = $conn->prepare("DELETE FROM news WHERE id = $id");
            $stmt->execute();

            // Đóng kết nối
            $this->db->close();

            return true;
        } else {
            return false;
        }
    }

    public function createNews($data)
    {
        $conn = $this->db->getConnection();
        if ($conn) {
            // Sử dụng prepared statement để tránh SQL injection
            $stmt = $conn->prepare("INSERT INTO news (title, image, content) VALUES (:title, :image, :content)");
            $stmt->bindParam(':title', $data['title']);
            $stmt->bindParam(':image', $data['image']);
            $stmt->bindParam(':content', $data['content']);

            if ($stmt->execute()) {
                // Đóng kết nối
                $this->db->close();
                return true; // Thành công
            } else {
                // Nếu không thành công
                $this->db->close();
                return false; // Thất bại
            }
        } else {
            return false;
        }
    }

    public function updateNews($data)
    {
        $conn = $this->db->getConnection();
        if ($conn) {
            $sql = "UPDATE news SET title = :title, content = :content";
            if ($data['image'] != null) {
                $sql .= ", image = :image";
            }
            $sql .= " WHERE id = :id";
            $stmt = $conn->prepare($sql);

            // Liên kết các tham số
            $stmt->bindValue(':title', $data['title']);
            $stmt->bindValue(':content', $data['content']);
            if ($data['image'] != null) {
                $stmt->bindValue(':image', $data['image']);
            }
            $stmt->bindValue(':id', (int) $data['id']);

            // Thực thi câu lệnh
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }

            // Đóng kết nối sau khi thực hiện xong
            $this->db->close();
        } else {
            // Nếu không thể kết nối tới cơ sở dữ liệu, trả về false
            return false;
        }
    }


    public function getNewsById($id)
    {
        $conn = $this->db->getConnection();
        if ($conn) {
            $stmt = $conn->prepare("SELECT * FROM news WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            $stmt->execute();

            // Fetch kết quả
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Đóng kết nối
            $this->db->close();

            return $user ? $user : null;  // Trả về null nếu không tìm thấy người dùng
        } else {
            return null;
        }
    }
}
