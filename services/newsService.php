<?php
require_once APP_ROOT . '/models/news.php';
class newsService
{
    private $db;
    public function __construct()
    {
        $this->db = new DBConnection(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
    }




    public function getAllNews()
    {
        $conn = $this->db->getConnection();
        if ($conn) {
            $stmt = $conn->prepare("SELECT * FROM news");
            $stmt->execute();

            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
            $stmt = $conn->prepare("DELETE FROM news WHERE id = $id");
            $stmt->execute();

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
            $stmt = $conn->prepare("INSERT INTO news (title, image, content) VALUES (:title, :image, :content)");
            $stmt->bindParam(':title', $data['title']);
            $stmt->bindParam(':image', $data['image']);
            $stmt->bindParam(':content', $data['content']);

            if ($stmt->execute()) {
                $this->db->close();
                return true;
            } else {
                $this->db->close();
                return false;
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

            $stmt->bindValue(':title', $data['title']);
            $stmt->bindValue(':content', $data['content']);
            if ($data['image'] != null) {
                $stmt->bindValue(':image', $data['image']);
            }
            $stmt->bindValue(':id', (int) $data['id']);

            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }

            $this->db->close();
        } else {
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

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            $this->db->close();

            return $user ? $user : null;
        } else {
            return null;
        }
    }
}
