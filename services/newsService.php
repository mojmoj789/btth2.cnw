<?php
require_once APP_ROOT . '/models/news.php';
class newsService{
    public function getAllNews(){
        try {
            $conn = new PDO('mysql:host=localhost;dbname=news', 'root', '');
            $sql = "SELECT * FROM news";
            $stmt = $conn->query($sql);

            $news = [];
            while($row = $stmt->fetch()){
                $news[] = new news($row['id'], $row['title'], $row['content'], $row['image'], $row['created_at'], $row['category_id']);
                $newss = $news;
            }
            return $newss;
        }catch (PDOException $e){
            return $newss = [];
        }
    }
}
